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
    let employeeID = "";

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

    $("#editEmployeeModalNext").click(function() {
        firstName = $("#firstNameEdit").val();
        lastName = $("#lastNameEdit").val();
        contactNumber = $("#contactNumberEdit").val();
        emailAddress = $("#emailAddressEdit").val();
        address = $("#addressEdit").val();
        province = $("#provinceEdit").val();
        birthday = $("#birthdayEdit").val();
        employmentDate = $("#employmentDateEdit").val();

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
        $("#editEmployeeModal").modal("hide");
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

    thisManage.view = (employeeId) => {
        $.ajax({
            type: "POST",
            url: EMPLOYEE_CONTROLLER + '?action=getEmployeeById',
            data: {
                employeeId: employeeId,
            },
            dataType: "json",
            success: function (response) {
                $(".modal-title").html(response[0]['EMPLOYEE_TYPE']);
                $("#firstNameView").html(response[0]['FIRST_NAME']);
                $("#lastNameView").html(response[0]['LAST_NAME']);
                $("#contactNumberView").html(response[0]['CONTACT_NUMBER']);
                $("#emailAddressView").html(response[0]['EMAIL_ADDRESS']);
                $("#addressView").html(response[0]['ADDRESS']);
                $("#provinceView").html(response[0]['PROVINCE']);
                $("#birthdayView").html(response[0]['BIRTHDAY']);
                $("#employmentDateView").html(response[0]['EMPLOYMENT_DATE']);
                $("#viewEmployeeModal").modal("show");
            },
            error: function () {

            }

        });
    };

    thisManage.clickEdit = (employeeId) => {
        employeeID = employeeId;
        $.ajax({
            type: "POST",
            url: EMPLOYEE_CONTROLLER + '?action=getEmployeeById',
            data: {
                employeeId: employeeId,
            },
            dataType: "json",
            success: function (response) {
                $(".modal-title").val(response[0]['EMPLOYEE_TYPE']);
                $("#firstNameEdit").val(response[0]['FIRST_NAME']);
                $("#lastNameEdit").val(response[0]['LAST_NAME']);
                $("#contactNumberEdit").val(response[0]['CONTACT_NUMBER']);
                $("#emailAddressEdit").val(response[0]['EMAIL_ADDRESS']);
                $("#addressEdit").val(response[0]['ADDRESS']);
                $("#provinceEdit").val(response[0]['PROVINCE']);
                $("#birthdayEdit").val(response[0]['BIRTHDAY']);
                $("#employmentDateEdit").val(response[0]['EMPLOYMENT_DATE']);
                $("#editEmployeeModal").modal("show");
            },
            error: function () {

            }

        });
    };

    thisManage.update = () => {
        firstName = $("#firstNameEdit").val();
        lastName = $("#lastNameEdit").val();
        contactNumber = $("#contactNumberEdit").val();
        emailAddress = $("#emailAddressEdit").val();
        address = $("#addressEdit").val();
        province = $("#provinceEdit").val();
        birthday = $("#birthdayEdit").val();
        employmentDate = $("#employmentDateEdit").val();
        $.ajax({
            type: "POST",
            url: EMPLOYEE_CONTROLLER + '?action=updateEmployee',
            data: {
                employeeID: employeeID,
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
                if(response == "Successfully Update") {
                    swal.fire({
                        title: "Success!",
                        text: "Employee successfully updated!",
                        icon: "success",
                        confirmButtonText: "Ok"
                    }).then((result) => {
                        if (result.value) {
                            thisManage.loadTableData();
                        }
                    });
                }
            }
        })
    };

    thisManage.delete = (employeeId) => {
        swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton:true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel it!"
        }).then((result) => {
            if(result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: EMPLOYEE_CONTROLLER + '?action=deleteEmployee',
                    data: {
                        employeeId: employeeId,
                    },
                    dataType: "json",
                    success: function (response) {
                        if(response == "Successfully Delete") {
                            swal.fire({
                                title: "Success!",
                                text: "Employee successfully deleted!",
                                icon: "success",
                                confirmButtonText: "Ok"
                            }).then((result) => {
                                if (result.value) {
                                    thisManage.loadTableData();
                                }
                            });
                        }
                    },
                    error: function () {
                    
                    }
                });
            }
        });
    };
    return thisManage;
})();