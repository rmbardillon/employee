<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Employee</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100 flex-column">
        <div class="row">
            <div class="col">
                <h1 class="h1">Employee Clock</h1>
            </div>
            <div class="col">
                <h1 id="currentDate" class="h6"></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="input-group"><span class="input-group-text">Employee Number</span><input class="form-control" type="text" id="employeeNumber" placeholder="EMP-123456" required="" maxlength="6" pattern="123456" autofocus=""></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/function.js"></script>
</body>

</html>