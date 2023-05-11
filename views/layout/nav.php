<nav class="navbar navbar-light navbar-expand-md py-3">
    <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="home.php"><img src="../../libs/images/lqtechlogo.png" width="120px"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link text-center <?php if($page == "home"){echo("active");} ?>" href="home.php" style="width: 90px;border-radius: 20px;">Home</a></li>
                <li class="nav-item"><a class="nav-link text-center <?php if($page == "manage"){echo("active");} ?>" href="manage.php" style="width: 90px;">Manage</a></li>
                <li class="nav-item"><a class="nav-link text-center <?php if($page == "attendance"){echo("active");} ?>" href="attendance.php" style="width: 90px;">Attendance</a></li>
            </ul>
            <a class="btn btn-primary" role="button" style="background: rgb(45,49,146);border-radius: 5px;width: 140.3px;height: 40px;" href="print-id.php"><i class="fas fa-download" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">Print ID</span></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="dropdown"><a class="dropdown-toggle nav-link text-center" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="width: 90px;">Profile</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="" onclick="logout()">Logout</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav
