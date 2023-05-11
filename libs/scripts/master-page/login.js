$(document).ready(function () {
    $("#login").click(function() {
        var username = $("#username").val();
        var password = $("#password").val();

        if (username == '' || password == '') {
            swal.fire({
                title: "Error!",
                text: "Please enter username and password",
                icon: "error",
                confirmButtonText: "OK"
            });
        } else {
            $.ajax({
                type: "POST",
                url: LOGIN_CONTROLLER + "?action=login",
                data: {
                    username: username,
                    password: password
                },
                success: function (data) {
                    if (data == "OK") {
                        window.location.href = "/home.php";
                    } else {
                        swal.fire({
                            title: "Error!",
                            text: "Username or password is incorrect",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    }
                },
                error: function (data) {
                    alert("Error: " + data);
                }
            });
        }
    });
});