<?php

session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && $_SESSION['user_role'] == 'ዞን መምህራን ማህበር ሀላፊ' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == '1') {
    $defaultPath = "../../../images/tds pp/";
    $ppName = $_SESSION['user_image'];
    $realPath = $defaultPath . $ppName;
?>
    <!doctype html>

    <html class="no-js" lang="en">

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


    </head>

    <body>
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="navbar-brand" href="./admin index.php"><img width="45" height="45" src="../../../images/amhara.png" alt="Amhara Education Bureau">
                    </a>
                    <a class="navbar-brand hidden" href="./admin index.php"><img class="amhara-logo" width="30" height="30" src="../../../images/amhara.png" alt="Amhara Education Bureau"></a>

                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="./admin index.php"> <i class="menu-icon fa fa-dashboard"></i><span style="color: white;">ዳሽቦርድ</span> </a>
                        </li>
                        <h3 class="menu-title">አካውንት ተዛማጅ</h3>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>የኔ አካውንት</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="./admin pages/account related/my account/view my account/view my account.php">የኔን አካውንት ልይ
                                    </a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">ዳታ ተዛማጅ</h3>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-lemon-o"></i>ወረዳ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/woreda/view woreda/view teacher level.php">ወረዳዎችን ይመልከቱ </a></li>
                            </ul>
                        </li>
                        
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-superpowers"></i>ጉድኝት</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/School and association/view association/view association.php">ጉድኝቶችን ይመልከቱ</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-american-sign-language-interpreting"></i>የትምህርት ቤት ደረጃ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/school and association/view school level/view level.php">የትምህርት ቤት ደረጃወችን ይመልከቱ</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-university"></i>ትምህርት ቤት</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/School and association/view school/view school.php">ትምህርት ቤቶችን ይመልከቱ </a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bolt"></i>የትምህርት ደረጃ </a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/education_level/view education level/view education level.php">የትምህርት ደረጃወችን ይመልከቱ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>የትምህርት አይነት</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/department/view department/view department.php"> የትምህርት አይነቶችን ይመልከቱ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i>የመምህርነት ደረጃ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/teacher_level/view teacher level/view teacher level.php">የመምህርነት ደረጃወችን ይመልከቱ </a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>አቃፊ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="./admin pages/data related/folder/view folder/view folder.php">አቃፊወችን ይመልከቱ</a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">የሰው ሀይል</h3>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="./admin pages/human resource/tds/view teacher/view teacher.php">መምህራንን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="./admin pages/human resource/tds/view director/view director.php">ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>ምክትል ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../Admin/admin pages/human resource/tds/view vice/view vice.php">ምክትል ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>ሱፐርቫይዘር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="./admin pages/human resource/tds/view supervisor/view supervisor.php">ሱፐርቫይዘር ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>



                        <h6 class="menu-title">አበልጻጊወች</h6>
                        <li>
                            <a href="./admin pages/extras/developers/developers.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-code" aria-hidden="true"></i>አበልጻጊወች</a>
                        </li>



                    </ul>
                </div>
            </nav>
        </aside>



        <div id="right-panel" class="right-panel">

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

                                <p><?php echo $_SESSION['user_fname'] . ' ' . $_SESSION['user_mname']; ?></p>
                                <a class="nav-link" href="./admin pages/account related/my account/view my account/view my account.php"><i class="fa fa-user"></i>
                                    የኔ ማህደር</a>

                                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-power-off"></i>ውጣ</a>
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

            </header>
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
                                ጤና ይስጥልኝ <?php echo  $_SESSION['user_fname']; ?>,

                                ስትወጣ ወደ መግቢያ ገጽ ትመራለህ እርግጠኛ ነህ…?
                                ለመቆየት ከፈለጉ፣ ሰርዝ የሚለውን ቁልፍ ጠቅ ያድርጉ።
                                አመሰግናለን፡፡
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ሰርዝ</button>
                            <button type="button" class="btn btn-primary"><a href="../../../authentication/logout.php" style="text-decoration: none; color: white;">አረጋግጥ</a></button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><?php echo $_SESSION['user_zone'] . " " . $_SESSION['user_role']; ?> ዳሽቦርድ</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">ዳሽቦርድ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">

                <div class="col-sm-12">
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        ሄሎ <?php echo  $_SESSION['user_fname']; ?>, የእርስወ ዳሽቦድ <span class="badge badge-pill badge-success">Successfully</span>
                        rendered !
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>



                <?php

                $zone_name=$_SESSION['user_zone_id'];

                $connectQuery = mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');
                $woreda = "SELECT woreda_id FROM woreda WHERE z_id=$zone_name";
                $run_woreda = mysqli_query($connectQuery, $woreda);
                $woreda_row = mysqli_num_rows($run_woreda);
                
                $connectQuery = mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');
                $assoc = "SELECT asso_id FROM association";
                $run_assoc = mysqli_query($connectQuery, $assoc);
                $assoc_row = mysqli_num_rows($run_assoc);

                $primary = "SELECT id FROM school";
                $run_school = mysqli_query($connectQuery, $primary);
                $school_row = mysqli_num_rows($run_school);

                $primary = "SELECT tds_id FROM tds WHERE type='መምህር'";
                $run_teacher = mysqli_query($connectQuery, $primary);
                $teacher_row = mysqli_num_rows($run_teacher);

                $primary = "SELECT tds_id FROM tds WHERE type='ሱፐርቫይዘር'";
                $run_supervisor = mysqli_query($connectQuery, $primary);
                $supervisor_row = mysqli_num_rows($run_supervisor);

                $primary = "SELECT tds_id FROM tds WHERE type='ርዕሰ መምህር'";
                $run_director = mysqli_query($connectQuery, $primary);
                $director_row = mysqli_num_rows($run_director);

                $primary = "SELECT tds_id FROM tds WHERE type='ምክትል ርዕሰ መምህር'";
                $run_vice = mysqli_query($connectQuery, $primary);
                $vice_d_row = mysqli_num_rows($run_vice);

                $primary = "SELECT dept_id FROM department";
                $run_department = mysqli_query($connectQuery, $primary);
                $department_row = mysqli_num_rows($run_department);

                $primary = "SELECT lev_id FROM education_level";
                $run_edu_level = mysqli_query($connectQuery, $primary);
                $edu_level_row = mysqli_num_rows($run_edu_level);

                $kdme = "SELECT tds_id FROM tds WHERE department=27";
                $run_kdme = mysqli_query($connectQuery, $kdme);
                $kdme_row = mysqli_num_rows($run_kdme);

                $liyu = "SELECT tds_id FROM tds WHERE department=13";
                $run_liyu = mysqli_query($connectQuery, $liyu);
                $liyu_row = mysqli_num_rows($run_liyu);


                ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-6">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/woreda/view woreda/view teacher level.php">ይመልከቱ/አክል/አዘምን</a>

                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo  $woreda_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">ወረዳ</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/school and association/view association/view association.php">ይመልከቱ/አክል/አዘምን</a>

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

                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-2">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/school and association/view school/view school.php">ይመልከቱ/አክል/አዘምን</a>
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
                            <p class="text-light">ትምህርት ቤት</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-3">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdoaaaa      1wn-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/education_level/view education level/view education level.php">ይመልከቱ/አክል/አዘምን</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo    $edu_level_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">የትምህርት ደረጃ</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-4">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/data related/department/view department/view department.php">ይመልከቱ/አክል/አዘምን</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $department_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">የትምህርት ዝግጅት</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-5">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/human resource/tds/view supervisor/view supervisor.php">ይመልከቱ</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $supervisor_row;
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
                    <div class="card text-white bg-flat-color-6">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/human resource/tds/view director/view director.php">ይመልከቱ</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $director_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">ርዕሰ መምህር</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="./admin pages/human resource/tds/view vice/view vice.php">ይመልከቱ</a>

                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo  $vice_d_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">ምክትል ርዕሰ መምህር</p>

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
                                        <a class="dropdown-item" href="./admin pages/human resource/tds/view teacher/view teacher.php">ይመልከቱ</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">
                                    <?php
                                    echo $teacher_row;
                                    ?>
                                </span>
                            </h4>
                            <p class="text-light">መምህር</p>

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
            </div>
        </div>
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