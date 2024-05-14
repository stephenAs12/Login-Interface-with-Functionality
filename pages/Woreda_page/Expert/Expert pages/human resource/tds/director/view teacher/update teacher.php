<?php

session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && $_SESSION['user_role'] == 'ወረዳ መርሱ ባለሙያ' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == '1') {
    $defaultPath = "../../../../../../../../images/tds pp/";
    $ppName = $_SESSION['user_image'];
    $realPath = $defaultPath . $ppName;
?>
    <!doctype html>
    
    <html class="no-js" lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View Users</title>
        <meta name="description" content="TDS | Admin Panel">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="./apple-icon.png">
        <link rel="shortcut icon" href="./favicon.ico">
        <link rel="stylesheet" href="../../../../../../../../vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../../../../../../vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../../../../../../vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="../../../../../../../../assets/table/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../../../../../../assets/table/css/fixedHeader.dataTables.min.css">
        <link rel="stylesheet" href="../../../../../../../../assets/table/css/fixedHeader.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../../../../../../assets/table/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="../../../../../../../../assets/table/css/main-style.css">
        <link rel="stylesheet" href="../../../../../../../../assets/css/style.css">
        <link rel="stylesheet" href="cust_css.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="navbar-brand" href="../../../../../expert index.php"><img width="45" height="45" src="../../../../../../../../images/amhara.png" alt="Amhara Education Bureau">
                    </a>
                    <a class="navbar-brand hidden" href="../../../../../expert index.php"><img class="amhara-logo" width="30" height="30" src="../../../../../../../../images/amhara.png" alt="Amhara Education Bureau"></a>

                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../../../../../expert index.php"> <i class="menu-icon fa fa-dashboard"></i><span>ዳሽቦርድ</span> </a>
                        </li>
                        <h3 class="menu-title">Account Related</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>የኔ አካውንት</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../../account related/my account/view my account/view my account.php">አካእንቴን
                                        ማየት</a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">ዳታ ተዛማጅ</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-superpowers"></i><span>ጉድኝት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/school and association/view association/view association.php"><span>ጉድኝት ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-american-sign-language-interpreting"></i><span>የትምህርት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/school and association/view school level/view level.php"><span>የትምህርት ቤት ደረጃ ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-university"></i><span>ትምህርት ቤት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/school and association/view school/view school.php"><span>ትምህርት ቤት ይመልከቱ</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bolt"></i><span>የትምህርት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/education_level/view education level/view education level.php"><span>የትምህርት ደረጃን ይመልከቱ</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i><span>የትምህርት አይነት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/department/view department/view department.php"><span>የትምህርት አይነትን ይመልከቱ</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i><span>የመምህርነት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/teacher_level/view teacher level/view teacher level.php"><span>የመምህራንን ደረጃ ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i><span>አቃፊ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/folder/view folder/view folder.php"><span>አቃፊ ይመልከቱ</span></a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">የሰው ሀይል</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male" style="color: white;"></i><span style="color: white;">መምህር</span></a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="./view teacher.php">መምህራንን ይመልከቱ </a>
                                </li>
                                <li><i class="fa fa-pencil-square-o" style="color: white;"></i><a href="./update with id.php"><span style="color: white;">የመምህራንን መረጃ ይቀይሩ</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../view director/view director.php">ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="./update with id.php">የርዕሰ መምህራንን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>ሱፐርቫይዘር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../view supervisor/view supervisor.php">ሱፐርቫይዘሮችን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="./update with id.php">የሱፐርቫይዘሮችን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>



                        <h6 class="menu-title">Developers</h6><!-- /.menu-title -->
                        <li>
                            <a href="../../../../extras/developers/developers.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-code" aria-hidden="true" style="color: white;"></i>Developers</a>
                        </li>



                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

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
                                    <span class="count bg-danger">0</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="notification">
                                    <p class="red">You have 0 Notification</p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class='user-avatar rounded-circle' src="<?php echo $realPath ?>" alt='User Avatar'>
                            </a>

                            <div class="user-menu dropdown-menu">


                            <a class="nav-link" href="../../../../account related/my account/view my account/view my account.php"><i class="fa fa-user"></i>
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
                                Hello Estifanos,

                                When logging out you are redirected to a Login page ¿Are you sure…?

                                If you want to stay, click a Cancel button.

                                Thanks.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary"><a href="../../../../../../../../authentication/logout.php" style="text-decoration: none; color: white;">Confirm</a></button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- logout modal view -->

            <span id="error_message" class="text-danger"></span>
            <span id="success_message" class="text-success"></span>

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><?php echo $_SESSION['user_woreda'] . " " . $_SESSION['user_role']; ?> ዳሽቦርድ</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="../../../../../expert index.php">ዳሽቦርድ</a></li>
                                <li><a href="./view teacher.php">የመመህራንን ይመልከቱ</a></li>
                                <li class="#">የመምህራንን መረጃ ይቀይሩ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <?php

            $tds_id = $_GET['tds_id'];
            $_SESSION['tds_id'] = $tds_id;
            $fname = $_GET['fname'];
            $mname = $_GET['mname'];
            $lname = $_GET['lname'];
            $sex = $_GET['sex'];
            $type = $_GET['type'];
            $birth_date = $_GET['birth_date'];
            $employment_period = $_GET['employment_period'];
            $other_service = $_GET['other_service'];
            $edu_level_name = $_GET['edu_level_name'];
            $education_level = $_GET['education_level'];
            $dept_name = $_GET['dept_name'];
            $department = $_GET['department'];
            $level_name = $_GET['level_name'];
            $teacher_level = $_GET['teacher_level'];
            $retirement_number = $_GET['retirement_number'];
            $name = $_GET['name'];
            $school = $_GET['school'];
            $asso_name = $_GET['asso_name'];
            $association = $_GET['association'];
            $warranty = $_GET['warranty'];
            $salary = $_GET['salary'];
            $shelf = $_GET['shelf'];
            $kent = $_GET['kent'];
            $phone = $_GET['phone'];
            $image = $_GET['image'];
            $warranter_name = $_GET['warranter_name'];
            $warranter_salary = $_GET['warranter_salary'];
            $warranter_photo = $_GET['warranter_photo'];

            ?>

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <strong>የመምህራንን መረጃ ይቀይሩ</strong>
                        <small>Use this form
                            <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                        </small>
                    </div>
                    <div class="card-body">

                        <div class="card-body card-block">
                            <form id="teacher_update_form" enctype="multipart/form-data" class="">

                                <div class="nameholder">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="">First Name</i></div>
                                            <input type="text" id="first_name_id" name="first_name_name" placeholder="First Name *" class="form-control" value="<?php echo $fname ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="">Middle Name</i></div>
                                            <input type="text" id="middle_name_id" name="middle_name_name" placeholder="Middle Name *" class="form-control" value="<?php echo $mname ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="">Last Name</i></div>
                                            <input type="text" id="last_name_id" name="last_name_name" placeholder="Last Name *" class="form-control" value="<?php echo $lname ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="nameholder">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">

                                            <div class='input-group-addon'><i class='' aria-hidden='true'>Gender</i></div>
                                            <select name='sex_name' id='sex_id' class='form-control'>
                                                <option value="<?php echo $sex ?>" selected hidden> <?php echo $sex ?></option>
                                                <option value='Male'>Male</option>
                                                <option value='Female'>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i>Birth Date</i></div>
                                            <input type="date" id="birth_date_id" name="birth_date_name" placeholder="Birth Date *" class="form-control" value="<?php echo $birth_date ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i>Image</i></div>
                                            <input type="file" id="image_id" name="img_name" accept=".png,.jpg,.jpeg" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="nameholder">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="">Phone</i></div>
                                            <input type="number" id="phone_id" name="phone_name" placeholder="Phone *" class="form-control" value="<?php echo $phone ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="input-group">

                                            <div class='input-group-addon'><i class='' aria-hidden='true'>Type</i></div>
                                            <select name='type_name' id='type_id' class='form-control'>
                                                <option value="<?php echo $type ?>" selected hidden><?php echo $type ?></option>
                                                <option value='Teacher'>Teacher</option>
                                                <option value='Director'>Director</option>
                                                <option value='Supervisor'>Supervisor</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i>Employment Period</i></div>
                                            <input type="date" id="employment_period_id" name="employment_period_name" placeholder="Birth Date *" class="form-control" value="<?php echo $employment_period ?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="nameholder">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="">Other Service</i></div>
                                            <input type="number" id="other_id" name="other_name" placeholder="Other Service *" class="form-control" value="<?php echo $other_service ?>">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">

                                            <?php
                                            include '../getter/get association.php';

                                            echo "<div class='input-group-addon'><i class='' aria-hidden='true'>Association</i></div>";
                                            echo "<select name='association_name' id='association_id' class='form-control'>";
                                            echo "<option value='$association' selected hidden>$asso_name</option>";
                                            while ($association_row = mysqli_fetch_array($association_result)) {
                                                echo "<option value='$association_row[asso_id]'>$association_row[asso_name]</option>";
                                            }

                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="input-group">

                                            <?php
                                            // include 'getter/get school.php';

                                            echo "<div class='input-group-addon'><i class='' aria-hidden='true'>School</i></div>";
                                            echo "<select name='school_name' id='school_id' class='form-control'>";
                                            echo "<option value='$school' selected hidden>$name</option>";
                                            // while ($school_row = mysqli_fetch_array($school_result)) {
                                            //     echo "<option value='$school_row[id]'>$school_row[name]</option>";
                                            // }

                                            echo "</select>";
                                            ?>

                                        </div>
                                    </div>
                                </div>

                                <div class="nameholder">

                                    <div class="form-group col-md-6">
                                        <div class="input-group">

                                            <?php
                                            include '../getter/get education level.php';

                                            echo "<div class='input-group-addon'><i class='' aria-hidden='true'>Education Level</i></div>";
                                            echo "<select name='education_level_name' id='education_level_id' class='form-control'>";
                                            echo "<option value='$education_level' selected hidden>$edu_level_name</option>";
                                            while ($education_level_row = mysqli_fetch_array($education_level_result)) {
                                                echo "<option value='$education_level_row[lev_id]'>$education_level_row[edu_level_name]</option>";
                                            }

                                            echo "</select>";
                                            ?>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <?php
                                            include '../getter/get department.php';

                                            echo "<div class='input-group-addon'><i class='' aria-hidden='true'>Department</i></div>";
                                            echo "<select name='department_name' id='department_id' class='form-control'>";
                                            echo "<option value='$department' selected hidden>$dept_name</option>";
                                            while ($department_row = mysqli_fetch_array($department_result)) {
                                                echo "<option value='$department_row[dept_id]'>$department_row[dept_name]</option>";
                                            }

                                            echo "</select>";
                                            ?>

                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="input-group">

                                            <?php
                                            include '../getter/get teacher level.php';

                                            echo "<div class='input-group-addon'><i class='' aria-hidden='true'>Teacher Level</i></div>";
                                            echo "<select name='teacher_level_name' id='teacher_level_id' class='form-control'>";
                                            echo "<option value='$teacher_level' selected hidden>$level_name</option>";
                                            while ($teacher_level_row = mysqli_fetch_array($teacher_level_result)) {
                                                echo "<option value='$teacher_level_row[level_id]'>$teacher_level_row[level_name]</option>";
                                            }

                                            echo "</select>";
                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="nameholder">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">

                                            <div class='input-group-addon'><i class='' aria-hidden='true'>Warranty</i></div>
                                            <select name='warranty_name' id='warranty_id' class='form-control'>
                                                <option value="<?php echo $warranty ?>" selected hidden><?php echo $warranty ?></option>
                                                <option value='Yes'>Yes</option>
                                                <option value='No'>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="number" id="salary_id" name="salary_name" placeholder="Salary *" class="form-control" value="<?php echo $salary ?>">
                                        </div>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="retirement_id" name="retirement_name" placeholder="Retirement Number *" class="form-control" value="<?php echo $retirement_number ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="shelf_id" name="shelf_name" placeholder="Shelf Number *" class="form-control" value="<?php echo $shelf ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="kent_id" name="kent_name" placeholder="Kent Code *" class="form-control" value="<?php echo $kent ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" id="warranter_div_id" style="background-color: #004d4d; border: 2px double #000d0d; border-radius: 5px; margin-bottom: 20px;">
                                    <p><b><i>Warranter's Information</i></b></p>

                                    <div class="nameholder">
                                        <div class="form-group col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <input type="text" id="full_name_id" name="full_name_name" placeholder="Warranter's Full Name *" class="form-control" value="<?php echo $warranter_name ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <input type="number" id="warranter_salary_id" name="warranter_salary_name" placeholder="Warranter's Salary *" class="form-control" value="<?php echo $warranter_salary ?>">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i>Image</i></div>
                                                <input type="file" id="warranter_image_id" name="warranter_img_name" accept=".png,.jpg,.jpeg" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions form-group">
                                    <button type="reset" id="reset" class="btn btn-danger btn-md">Clear</button>
                                    <button type="submit" id="submit" name="submit" class="btn btn-success btn-md">Submit</button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <script src="../../../../../../../../vendors/jquery/dist/jquery.min.js"></script>
            <script src="../../../../../../../../vendors/popper.js/dist/umd/popper.min.js"></script>
            <script src="../../../../../../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="../../../../../../../../assets/js/main.js"></script>
            <script src="../../../../../../../../assets/table/js/jquery-3.5.1.js"></script>
            <script src="../../../../../../../../vendors/sweetalert/sweetalert2@11.js"></script>
            <script src="../../../../../../../../vendors/jquery/dist/jquery.validate.js"></script>
            <script src="../../../../../../../../assets/table/js/jquery.dataTables.min.js"></script>
            <script src="../../../../../../../../assets/table/js/dataTables.bootstrap4.min.js"></script>
            <script src="../../../../../../../../asfsets/table/js/dataTables.fixedHeader.min.js"></script>
            <script src="../../../../../../../../assets/table/js/dataTables.buttons.min.js"></script>
            <script src="../../../../../../../../assets/table/js/jszip.min.js"></script>
            <script src="../../../../../../../../assets/table/js/pdfmake.min.js"></script>
            <script src="../../../../../../../../assets/table/js/vfs_fonts.js"></script>
            <script src="../../../../../../../../assets/table/js/buttons.html5.min.js"></script>
            <script src="../../../../../../../../assets/table/js/buttons.print.min.js"></script>
            <script src="../../../../../../../../assets/table/js/main.js"></script>
            <script src="./update/update teacher.js"></script>

            <script>
                jQuery(document).ready(function() {
                    jQuery("#association_id").change(function() {
                        var assoValue = jQuery(this).val();
                        // if (jobValue == "Region TDS expert") {
                        //     jQuery("#address_name_id").removeAttr("required");
                        // }
                        jQuery.ajax({
                            url: "../getter/get school.php",
                            method: "POST",
                            data: {
                                asso_val: assoValue
                            },
                            success: function(data) {
                                jQuery("#school_id").html(data);
                            }
                        });

                    });
                });
            </script>
            <script>
                jQuery(document).ready(function() {

                    jQuery("#warranter_div_id").hide();
                    // jQuery("#region_label_id").hide();

                    jQuery("#warranty_id").change(function() {
                        var warranty = jQuery(this).val();

                        if (warranty == "Yes") {
                            jQuery("#warranter_div_id").show();
                        }
                        if (warranty == "No") {
                            jQuery("#warranter_div_id").hide();
                            jQuery('#full_name_id').val("");
                            jQuery('#warranter_salary_id').val("");
                            jQuery('#warranter_image_id').val("");
                        }
                    });
                    jQuery("#reset").click(function(e) {
                        jQuery("#warranter_div_id").hide();
                        jQuery('#full_name_id').val("");
                        jQuery('#warranter_salary_id').val("");
                        jQuery('#warranter_image_id').val("");
                    })
                });
            </script>

    </body>

    </html>
<?php

} else {
    header("location: ../../../../../../../../authentication/login.php");
}

?>