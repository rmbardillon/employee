<?php
    include_once('../../config/database.php');
    include_once('../model/Employee.php');

    $action = $_GET['action'];
    $Employee = new Employee($conn);
    
    if($action == "saveEmployee")
    {
        $employee = $_POST['employee'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $contactNumber = $_POST['contactNumber'];
        $emailAddress = $_POST['emailAddress'];
        $birthday = $_POST['birthday'];
        $employmentDate = $_POST['employmentDate'];
        $address = $_POST['address'];
        $province = $_POST['province'];

        $request = [
            'employee' => $employee,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'contactNumber' => $contactNumber,
            'emailAddress' => $emailAddress,
            'birthday' => $birthday,
            'employmentDate' => $employmentDate,
            'address' => $address,
            'province' => $province
        ];
        $result = $Employee->saveEmployee($request);

        echo json_encode($result);
    }
    else if ($action == 'getAllEmployee')
    {
        $employeeType = $_POST['employee'];
        $result = $Employee->getEmployee($employeeType);

        $table_data = '';
        foreach ($result as $employee) {
            $table_data .= '<tr>';
            $table_data .= '<td>' . $employee['FULL_NAME'] . '</td>';
            $table_data .= '<td>' . $employee['EMPLOYEE_ID'] . '</td>';
            $table_data .= '<td>' . $employee['EMPLOYEE_TYPE']. '</td>';
            $table_data .= '<td><button class="btn btn-primary me-3" type="button" onclick="Manage.view(`'.$employee['EMPLOYEE_ID'].'`);"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">View</span></button>';
            $table_data .= '<button class="btn btn-success me-3" type="button" onclick="Manage.edit(`'.$employee['EMPLOYEE_ID'].'`);"><i class="far fa-edit" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">Edit</span></button>';
            $table_data .= '<button class="btn btn-danger me-3" type="button" onclick="Manage.delete(`'.$employee['EMPLOYEE_ID'].'`);"><i class="far fa-trash-alt" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">Delete</span></button></td>';
            $table_data .= '</tr>';
        }

        echo json_encode($table_data);
    }
?>