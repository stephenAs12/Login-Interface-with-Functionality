<?php

session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'Admin' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == "1") {
?>
    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js" lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard </title>
        <meta name="description" content="TDS | Admin Panel">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="./apple-icon.png">
        <link rel="shortcut icon" href="./favicon.ico">

        <link rel="stylesheet" href="../../../vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="../../../assets/css/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <!-- <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css"> -->
        <!-- <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css"> -->
        <!-- <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css"> -->
    </head>

    <body>
        <!-- Left Panel -->
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="navbar-brand" href="./admin index.php"><img width="45" height="45" src="../../../images/amhara.png" alt="Amhara Education Bureau">
                    </a>
                    <a class="navbar-brand hidden" href="./"><img class="amhara-logo" width="30" height="30" src="../../../images/amhara.png" alt="Amhara Education Bureau"></a>

                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="./admin index.php"> <i class="menu-icon fa fa-dashboard"></i><span style="color: white;">Dashboard</span> </a>
                        </li>
                        <h3 class="menu-title">Account Related</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>User Management</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-plus-square"></i><a href="./admin pages/account related/user management/create user account/create account.php">Create User Account</a></li>
                                <li><i class="fa fa-eye"></i><a href="./admin pages/account related/user management/view users/view_user.php">View Users</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>My Account</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="./admin pages/account related/my account/view my account/view my account.php">View
                                        account</a></li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="./admin pages/account related/my account/update my account/update my account.php">Update
                                        account</a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">Data Related</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>School&Association</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-plus-square"></i><a href="./admin pages/data related/School and association/add/add.php">Add</a></li>
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/School and association/view school/view school.php">View School</a></li>
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/School and association/view association/view association.php">View Association</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>Education Level</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-plus-square"></i><a href="./admin pages/data related/education_level/add.php">Add</a></li>
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/education_level/view.php">View</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>Department</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-plus-square"></i><a href="./admin pages/data related/department/add.php">Add</a></li>
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/department/view.php">View</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>Teacher Level</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-plus-square"></i><a href="./admin pages/data related/teacher_level/add.php">Add</a></li>
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/teacher_level/view.php">View</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>Add Folder</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-plus-square"></i><a href="./admin pages/data related/folder/add folder.php">Add</a></li>
                                <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="./admin pages/data related/School and association/update zone/update zone.php">Update</a></li>
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/folder/view folder.php">View</a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">HUMAN RESOURCE</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Teacher</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../teacher/ViewTeacher.php">View</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Director</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="./admin pages/account related/user management/view users/view_user.php">View</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Supervisor</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="./admin pages/account related/user management/view users/view_user.php">View</a>
                                </li>
                            </ul>
                        </li>



                        <h6 class="menu-title">Developers</h6><!-- /.menu-title -->



                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-compress"></i></a>
                        <div class="header-left">
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>

                            <div class="dropdown for-notification">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="count bg-danger">5</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="notification">
                                    <p class="red">You have 3 Notification</p>
                                    <a class="dropdown-item media bg-flat-color-4" href="./admin pages/data related/transfer/before computed/before_computed.php">
                                        <i class="fa fa-check"></i>
                                        <p style="color: black;">Transfer data inserted</p>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-4" href="./admin pages/data related/transfer/after computed/after_computed.php">
                                        <i class="fa fa-info"></i>
                                        <p style="color: black;">View transfer result</p>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="../../../images/admin image/admin.jpg" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">

                                <p><?php echo $_SESSION['user_fname'] . ' ' . $_SESSION['user_mname']; ?></p>
                                <a class="nav-link" href="./admin pages/account related/my account/view my account/view my account.php"><i class="fa fa-user"></i>
                                    My Profile</a>

                                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-power-off"></i>Logout</a>
                            </div>
                        </div>

                        <div class="language-select dropdown" id="language-select">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                                <i class="flag-icon flag-icon-et"></i>
                            </a>
                        </div>

                        <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
                        <script>
                            function loadGoogleTranslate() {
                                new google.translate.TranslateElement({
                                    defaultLanguage: 'en',
                                    pageLanguage: 'en',
                                    includedLanguages: 'en,am',
                                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                                    autoDisplay: false,
                                    multilanguage: true

                                }, 'language-select')
                            };
                        </script>

                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->

            <!-- logout modal View -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Are you sure ?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Hello <?php echo  $_SESSION['user_fname']; ?>,

                                When logging out you are redirected to a Login page ¿Are you sure…?

                                If you want to stay, click a Cancel button.

                                Thanks.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary"><a href="../../../authentication/logout.php" style="text-decoration: none; color: white;">Confirm</a></button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- logout modal view -->

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><?php echo $_SESSION['user_role']; ?> Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">

                <div class="col-sm-12">
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        Hello <?php echo  $_SESSION['user_fname']; ?>, Your Dashboard <span class="badge badge-pill badge-success">Successfully</span>
                        rendered !
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>



                <?php

                $connectQuery = mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');
                $assoc = "SELECT asso_id FROM association";
                $run_assoc = mysqli_query($connectQuery, $assoc);
                $assoc_row = mysqli_num_rows($run_assoc);

                $primary = "SELECT id FROM school WHERE level=1";
                $run_school = mysqli_query($connectQuery, $primary);
                $school_row = mysqli_num_rows($run_school);

                $prep = "SELECT id FROM school WHERE level=2";
                $run_prep = mysqli_query($connectQuery, $prep);
                $prep_row = mysqli_num_rows($run_prep);

                $kdme = "SELECT tds_id FROM tds WHERE department=27";
                $run_kdme = mysqli_query($connectQuery, $kdme);
                $kdme_row = mysqli_num_rows($run_kdme);

                $liyu = "SELECT tds_id FROM tds WHERE department=13";
                $run_liyu = mysqli_query($connectQuery, $liyu);
                $liyu_row = mysqli_num_rows($run_liyu);


                // $woredaQuery = "SELECT id FROM school";
                // $run_woredaQuery = mysqli_query($connectQuery, $woredaQuery);
                // $woredaRow = mysqli_num_rows($run_woredaQuery);

                // $regionTdsQuery = "SELECT user_id FROM users WHERE urole='Region TDS Expert' ORDER BY user_id";
                // $run_regionTdsQuery = mysqli_query($connectQuery, $regionTdsQuery);
                // $regionTdsRow = mysqli_num_rows($run_regionTdsQuery);

                // $zoneTdsQuery = "SELECT user_id FROM users WHERE urole='zone Director' ORDER BY user_id";
                // $run_zoneTdsQuery = mysqli_query($connectQuery, $zoneTdsQuery);
                // $zoneTdsRow = mysqli_num_rows($run_zoneTdsQuery);

                ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/zone and woreda/view zone/view zone.php">View</a>
                                        <a class="dropdown-item" href="./admin pages/data related/zone and woreda/zone and woreda/add zone.php">Add
                                            Zone</a>

                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo  $assoc_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">ጉድኝት</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>

                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-2">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/zone and woreda/view zone/view zone.php">View</a>
                                        <!-- <a class="dropdown-item" href="./admin pages/data related/zone and woreda/add zone and woreda/add zone and woreda.php">Add
                                            Woreda</a> -->
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $school_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">1ኛ ደረጃ ት/ቤት</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-3">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdoaaaa      1wn-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/zone and woreda/view zone/view zone.php">View</a>
                                        <!-- <a class="dropdown-item" href="./admin pages/data related/zone and woreda/add zone and woreda/add zone and woreda.php">Add
                                            Woreda</a> -->
                                    </div>
                                </div>
                            </div>    
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo    $prep_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">2ኛ ደረጃ ትምህርት ቤት</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-4">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/zone and woreda/view zone/view zone.php">View</a>
                                        <!-- <a class="dropdown-item" href="./admin pages/data related/zone and woreda/add zone and woreda/add zone and woreda.php">Add
                                            Woreda</a> -->
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $woredaRow;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">መምህራን ርዕሰ መምህራን ሱፐርቫይዘር</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-5">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/zone and woreda/view zone/view zone.php">View</a>
                                        <!-- <a class="dropdown-item" href="./admin pages/data related/zone and woreda/add zone and woreda/add zone and woreda.php">Add
                                            Woreda</a> -->
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $woredaRow;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">መምህራን</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-6">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/zone and woreda/view zone/view zone.php">View</a>
                                        <!-- <a class="dropdown-item" href="./admin pages/data related/zone and woreda/add zone and woreda/add zone and woreda.php">Add
                                            Woreda</a> -->
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $woredaRow;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">ርዕሰ መምህር</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-7">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/zone and woreda/view zone/view zone.php">View</a>
                                        <!-- <a class="dropdown-item" href="./admin pages/data related/zone and woreda/add zone and woreda/add zone and woreda.php">Add
                                            Woreda</a> -->
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $woredaRow;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">ሱፐርቫይዘር</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-7">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./expert pages/human resource/tds/teacher/view teacher/view teacher.php">ይመልከቱ</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $kdme_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">ቅድመ መደበኛ</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-7">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./expert pages/human resource/tds/teacher/view teacher/view teacher.php">ይመልከቱ</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $liyu_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">ልዩ ፍላጎት</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>






            </div> <!-- .content -->
        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <script src="../../../vendors/jquery/dist/jquery.min.js"></script>
        <script src="../../../vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../../assets/js/main.js"></script>
        <script src="../../../assets/js/widgets.js"></script>
    </body>

    </html>
<?php

} else {
    header("location: ./../../../authentication/login.php");
}

?>