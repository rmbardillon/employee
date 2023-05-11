<?php 
    class Employee {
        private $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function saveEmployee($request)
        {
            $employee = $request['employee'];
            $firstName = $request['firstName'];
            $lastName = $request['lastName'];
            $contactNumber = $request['contactNumber'];
            $emailAddress = $request['emailAddress'];
            $birthday = $request['birthday'];
            $employmentDate = $request['employmentDate'];
            $address = $request['address'];
            $province = $request['province'];

            $sql = "INSERT INTO employees(EMPLOYEE_TYPE, FIRST_NAME, LAST_NAME, CONTACT_NUMBER, EMAIL_ADDRESS, BIRTHDAY, EMPLOYMENT_DATE, ADDRESS, PROVINCE)
                    VALUES(?,?,?,?,?,?,?,?,?);";
            $stmt = $this->connection->prepare($sql);
            $stmt->bind_param("sssssssss",$employee, $firstName, $lastName, $contactNumber, $emailAddress, $birthday, $employmentDate, $address, $province);
            
            $result = '';
            
            if ($stmt->execute() === TRUE) {
                $result = "Successfully Save";
            } else {
                $result = "Error: <br>" . $this->connection->error;
            }

            $this->connection->close();

            return $result;
        }

        public function getEmployee($employee)
        {
            $sql = "SELECT *, CONCAT(FIRST_NAME,' ',LAST_NAME) AS FULL_NAME
                    FROM employees
                    WHERE EMPLOYEE_TYPE = '$employee'";
            $result = $this->connection->query($sql);
            $data = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function getEmployeeById($employeeId)
        {
            $sql = "SELECT *, CONCAT(FIRST_NAME,' ',LAST_NAME) AS FULL_NAME
                    FROM employees
                    WHERE EMPLOYEE_ID = '$employeeId'";
            $result = $this->connection->query($sql);
            $data = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function updateEmployee($request)
        {
            $employeeId = $request['employeeId'];
            $firstName = $request['firstName'];
            $lastName = $request['lastName'];
            $contactNumber = $request['contactNumber'];
            $emailAddress = $request['emailAddress'];
            $birthday = $request['birthday'];
            $employmentDate = $request['employmentDate'];
            $address = $request['address'];
            $province = $request['province'];

            $sql = "UPDATE employees
                    SET FIRST_NAME = '$firstName', LAST_NAME = '$lastName', CONTACT_NUMBER = '$contactNumber', EMAIL_ADDRESS = '$emailAddress', BIRTHDAY = '$birthday', EMPLOYMENT_DATE = '$employmentDate', ADDRESS = '$address', PROVINCE = '$province'
                    WHERE EMPLOYEE_ID = '$employeeId'";
            $result = $this->connection->query($sql);
            $data = [];
            if ($result === TRUE) {
                $data = "Successfully Update";
            } else {
                $data = "Error: <br>" . $this->connection->error;
            }
            return $data;
        }

        public function deleteEmployee($employeeId)
        {
            $sql = "DELETE FROM employees
                    WHERE EMPLOYEE_ID = '$employeeId'";
            $result = $this->connection->query($sql);
            $data = [];
            if ($result === TRUE) {
                $data = "Successfully Delete";
            } else {
                $data = "Error: <br>" . $this->connection->error;
            }
            return $data;
        }
    }
?>