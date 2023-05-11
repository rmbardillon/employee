$(document).ready(function () {
    Manage.loadTableData();
});
const Manage = (() => {
    const thisManage = {};
    let employee = "";
    let firstName = ""; 
    let lastName = "";
    let contactNumber = "";
    let emailAddress = "";
    let address = "";
    let province = "";
    let birthday = "";
    let employmentDate = "";

    $("#addEmployeeModalNext").click(function() {
        firstName = $("#firstName").val();
        lastName = $("#lastName").val();
        contactNumber = $("#contactNumber").val();
        emailAddress = $("#emailAddress").val();
        address = $("#address").val();
        province = $("#province").val();
        birthday = $("#birthday").val();
        employmentDate = $("#employmentDate").val();

        // Assign value to confirmation modal
        $("#firstNameText").html(firstName);
        $("#lastNameText").html(lastName);
        $("#contactNumberText").html(contactNumber);
        $("#emailAddressText").html(emailAddress);
        $("#addressText").html(address);
        $("#provinceText").html(province);
        $("#birthdayText").html(birthday);
        $("#employmentDateText").html(employmentDate);
        $("#addEmployeeModal").modal("hide");
        $("#addEmployeeModalConfirm").modal("show");
    });

    $("#addEmployeeModalBack").click(function() {
        $("#addEmployeeModal").modal("show");
        $("#addEmployeeModalConfirm").modal("hide");
    });

    thisManage.loadTableData = () => {
        $.ajax({
            type: "POST",
            url: EMPLOYEE_CONTROLLER + '?action=getAllEmployee',
            data: {
                employee: "Admin",
            },
            dataType: "json",
            success: function (response) {
                $(".table").DataTable().destroy();
                $("#adminTable").html(response);
                $(".table").DataTable();
            },
            error: function () {

            }

        });
        $.ajax({
            type: "POST",
            url: EMPLOYEE_CONTROLLER + '?action=getAllEmployee',
            data: {
                employee: "Salesman",
            },
            dataType: "json",
            success: function (response) {
                $(".table").DataTable().destroy();
                $("#salesmanTable").html(response);
                $(".table").DataTable();
            },
            error: function () {

            }

        });
        $.ajax({
            type: "POST",
            url: EMPLOYEE_CONTROLLER + '?action=getAllEmployee',
            data: {
                employee: "Installer",
            },
            dataType: "json",
            success: function (response) {
                $(".table").DataTable().destroy();
                $("#installerTable").html(response);
                $(".table").DataTable();
            },
            error: function () {

            }

        });
        $.ajax({
            type: "POST",
            url: EMPLOYEE_CONTROLLER + '?action=getAllEmployee',
            data: {
                employee: "Intern",
            },
            dataType: "json",
            success: function (response) {
                $(".table").DataTable().destroy();
                $("#internTable").html(response);
                $(".table").DataTable();
            },
            error: function () {

            }

        });
    };

    thisManage.addEmployeeModal = (employeeType) => {
        employee = employeeType;
        $(".modal-title").html("Add " + employeeType);
        $("#addEmployeeModal").modal("show");
    };

    thisManage.addEmployee = () => {
        $.ajax({
            type: "POST",
            url: EMPLOYEE_CONTROLLER + '?action=saveEmployee',
            data: {
                employee: employee,
                firstName: firstName,
                lastName: lastName,
                contactNumber: contactNumber,
                emailAddress: emailAddress,
                address: address,
                province: province,
                birthday: birthday,
                employmentDate: employmentDate
            },
            dataType: "json",
            success: function (response) {
                if(response == "Successfully Save") {
                    swal.fire({
                        title: "Success!",
                        text: "Employee successfully added!",
                        icon: "success",
                        confirmButtonText: "Ok"
                    }).then((result) => {
                        if(result.isConfirmed) {
                            // Reload the page
                            location.reload();
                        }
                    });
                }
            },
            error: function () {
            
            }
        });
    };

    return thisManage;
})();