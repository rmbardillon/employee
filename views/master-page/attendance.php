<?php $page = "attendance"; include_once("../layout/header.php") ?>

<?php include_once("../layout/nav.php") ?>
<body>
    
    <div class="container p-5">
        <h1>Employees Attendance</h1>
        <div class="card mb-3">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4>Admin</h4>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th class="col-4">Employee Name</th>
                                <th class="col-3">Employee ID</th>
                                <th class="col-2">Position</th>
                                <th class="col-1">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Joy Tan</td>
                                <td>a68slk9287fdc</td>
                                <td>Admin</td>
                                <td><button class="btn btn-primary" type="button"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">View</span></button></td>
                            </tr>
                            <tr>
                                <td>Romeo Jr Bardillon</td>
                                <td>a68slk9287fdc</td>
                                <td>Admin</td>
                                <td><button class="btn btn-primary" type="button"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">View</span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4>Salesman</h4>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th class="col-4">Employee Name</th>
                                <th class="col-3">Employee ID</th>
                                <th class="col-2">Position</th>
                                <th class="col-1">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Joy Tan</td>
                                <td>a68slk9287fdc</td>
                                <td>Salesman</td>
                                <td><button class="btn btn-primary" type="button"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">View</span></button></td>
                            </tr>
                            <tr>
                                <td>Romeo Jr Bardillon</td>
                                <td>a68slk9287fdc</td>
                                <td>Salesman</td>
                                <td><button class="btn btn-primary" type="button"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">View</span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4>Installer</h4>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th class="col-4">Employee Name</th>
                                <th class="col-3">Employee ID</th>
                                <th class="col-2">Position</th>
                                <th class="col-1">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Joy Tan</td>
                                <td>a68slk9287fdc</td>
                                <td>Installer</td>
                                <td><button class="btn btn-primary" type="button"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">View</span></button></td>
                            </tr>
                            <tr>
                                <td>Romeo Jr Bardillon</td>
                                <td>a68slk9287fdc</td>
                                <td>Installer</td>
                                <td><button class="btn btn-primary" type="button"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">View</span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4>Intern</h4>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th class="col-4">Employee Name</th>
                                <th class="col-3">Employee ID</th>
                                <th class="col-2">Position</th>
                                <th class="col-1">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Joy Tan</td>
                                <td>a68slk9287fdc</td>
                                <td>Intern</td>
                                <td><button class="btn btn-primary" type="button"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">View</span></button></td>
                            </tr>
                            <tr>
                                <td>Romeo Jr Bardillon</td>
                                <td>a68slk9287fdc</td>
                                <td>Intern</td>
                                <td><button class="btn btn-primary" type="button"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 12px;"></i><span class="ps-3" style="font-size: 12px;">View</span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("../layout/scripts.php") ?>
    <script src="../../libs/scripts/master-page/home.js"></script>
</body>

</html>