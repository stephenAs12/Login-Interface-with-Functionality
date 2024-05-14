<?php

session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && $_SESSION['user_role'] == 'ወረዳ መርሱ ባለሙያ' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == '1') {
    $defaultPath = "../../../../../../../images/tds pp/";
    $ppName = $_SESSION['user_image'];
    $realPath = $defaultPath . $ppName;
?>
    <!doctype html>

    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ምክትል ርዕሰ መምህራንን ይመዝግቡ</title>
        <meta name="description" content="TDS | Admin Panel">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="./apple-icon.png">
        <link rel="shortcut icon" href="./favicon.ico">
        <link rel="stylesheet" href="../../../../../../../vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../../../../../vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../../../../../vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="../../../../../../../assets/table/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../../../../../assets/table/css/fixedHeader.dataTables.min.css">
        <link rel="stylesheet" href="../../../../../../../assets/table/css/fixedHeader.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../../../../../assets/table/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="../../../../../../../assets/table/css/main-style.css">
        <link rel="stylesheet" href="../../../../../../../assets/css/style.css">
        <link rel="stylesheet" href="../../../../../../../assets/day/css/jquery.calendars.picker.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <style>
            form .error {
                color: #ff0000;
                display: block;
            }

            input.error {
                border: 1px dashed red;
                font-weight: 300;
                color: red;
            }
        </style>
    </head>

    <body>
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="../../../../expert index.php"><img width="45" height="45" src="../../../../../../../images/amhara.png" alt="Amhara Education Bureau">
                    </a>
                    <a class="navbar-brand hidden" href="../../../../expert index.php"><img class="amhara-logo" width="30" height="30" src="../../../../../../../images/amhara.png" alt="Amhara Education Bureau"></a>

                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../../../../expert index.php"> <i class="menu-icon fa fa-dashboard"></i><span>ዳሽቦርድ</span> </a>
                        </li>
                        <h3 class="menu-title">አካውንት ተዛማጅ </h3>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>የኔ አካውንት</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../account related/my account/view my account/view my account.php">አካውንቴን ማየት
                                    </a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">ዳታ ተዛማጅ</h3>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-superpowers"></i><span>ጉድኝት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view association/view association.php"><span>ጉድኝቶችን ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-american-sign-language-interpreting"></i><span>የትምህርት ቤት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view school level/view level.php"><span>የትምህርት ቤት ደረጃን ይመልከቱ </span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-university"></i><span>ትምህርት ቤት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view school/view school.php"><span>ትምህርት ቤቶችን ማየት</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bolt"></i><span>የትምህርት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/education_level/view education level/view education level.php"><span>የትምህርት ደረጃን ማየት</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i><span>የትምህርት አይነት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/department/view department/view department.php"><span>የትምህርት አይነቶችን</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i><span>የመምህርነት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/teacher_level/view teacher level/view teacher level.php"><span>የመምህርነት ደረጃን ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i><span>አቃፊ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/folder/view folder/view folder.php"><span>አቃፊን ይመልከቱ</span></a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">የሰው ሀይል</h3>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../teacher/view teacher/view teacher.php">መምህራንን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../teacher/view teacher/update with id.php">የመምህራንን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../director/view teacher/view teacher.php">ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../director/view teacher/update with id.php">የርዕሰ መምህራንን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret" style="color: white;"></i><span style="color: white;">ምክትል ርዕሰ መምህር</span></a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye" style="color: white;"></i><a href="./view teacher/view teacher.php"><span style="color: white;">ምክትል ርዕሰ መምህራንን ይመልከቱ</span></a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="./view teacher/update with id.php">የምክትል ርዕሰ መምህራንን መረጃ ይቀይሩ </a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>ሱፐርቫይዘር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../supervisor/view teacher/view teacher.php">ሱፐርቫይዘሮችን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../supervisor/view teacher/update with id.php">የሱፐርቫይዘሮችን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>



                        <h6 class="menu-title">አበልጻጊ</h6>
                        <li>
                            <a href="../../../extras/developers/developers.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-code" aria-hidden="true" style="color: white;"></i>አበልጻጊ</a>
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
                                <a class="nav-link" href="../../../account related/my account/view my account/view my account.php"><i class="fa fa-user"></i>
                                    የኔ ማህደር</a>

                                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-power-off"></i>ይውጡ</a>
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
                            <h5 class="modal-title" id="staticModalLabel"> እርግጠኛ ነወት ?</h5>
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
                            <button type="button" class="btn btn-primary"><a href="./../../../../../../../authentication/logout.php" style="text-decoration: none; color: white;">አረጋግጥ</a></button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><?php echo $_SESSION['user_woreda'] . " " . $_SESSION['user_role']; ?> Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="../../../../expert index.php">ዳሽቦርድ</a></li>
                                <li><a href="./view teacher/view teacher.php">ምክትል ርዕሰ መምህራንን ይመልከቱ</a></li>

                                <li class="active">ምክትል ርዕሰ መምህራንን ይመዝግቡ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <strong>ምክትል ርዕሰ መምህራንን ይመዝግቡ</strong>
                        <small> ይህንን ፎርም ይጠቀሙ
                            <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                        </small>
                    </div>
                    <div class="card-body">

                        <div class="card-body card-block">
                            <form id="teacher_add_form" enctype="multipart/form-data" class="">

                                <div class="nameholder">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="first_name_id" name="first_name_name" placeholder="ስም *" class="form-control" minlength="2" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="middle_name_id" name="middle_name_name" placeholder="የአባት ስም *" class="form-control" minlength="2" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="last_name_id" name="last_name_name" placeholder="የአያት ስም *" class="form-control" minlength="2" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="m_id" name="m_name" placeholder="የእናት ስም *" class="form-control" minlength="6" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="nameholder">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">

                                            <div class='input-group-addon'><i class="fa fa-female" aria-hidden="true"></i><i class="fa fa-male" aria-hidden="true"></i></div>
                                            <select name='sex_name' id='sex_id' class='form-control' required>
                                                <option value='' selected hidden> ጾታ *</option>
                                                <option value="ወንድ">ወንድ</option>
                                                <option value="ሴት">ሴት</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                            <input type="number" id="phone_id" name="phone_name" placeholder="ስልክ *" class="form-control" min="900000001" max="999999999" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"> ጉርድ ፎቶ *</i></div>
                                            <input type="file" id="image_id" name="img_name" accept=".png,.jpg,.jpeg" class="form-control" required>
                                        </div>
                                    </div>



                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"> የትዉልድ ዘመን *</i></div>
                                        <input type="text" id="birth_day_id" name="birth_day_name" placeholder="የትዉልድ ዘመን *" class="form-control" minlength="10" maxlength="10" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"> የቅጥር ዘመን *</i></div>
                                        <input type="text" id="emp_period_id" name="emp_period_name" placeholder="የቅጥር ዘመን *" class="form-control" minlength="10" maxlength="10" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-scissors" aria-hidden="true"> ተቀናሽ አገልግሎት ካለ</i></div>
                                        <input type="text" id="reduced_service_id" name="reduced_service_name" placeholder="yy/mm/dd" class="form-control" minlength="8" maxlength="8">
                                    </div>
                                </div>


                                <div class="nameholder">


                                </div>
                                <div class="nameholder">

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-list-ol" aria-hidden="true"></i></div>
                                            <input type="text" id="te_other_id" name="te_other_name" placeholder="መምህርነት በሌላ" class="form-control" minlength="8" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-list-ol" aria-hidden="true"></i></div>
                                            <input type="text" id="other_id" name="other_name" placeholder="ሌላ አገልግሎት" class="form-control" minlength="8" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">

                                            <?php
                                            include 'getter/get association.php';

                                            echo "<div class='input-group-addon'><i class='fa fa-sort' aria-hidden='true'></i></div>";
                                            echo "<select name='association_name' id='association_id' class='form-control' required>";
                                            echo "<option value='' selected hidden>ጉድኝት *</option>";
                                            while ($association_row = mysqli_fetch_array($association_result)) {
                                                echo "<option value='$association_row[asso_id]'>$association_row[asso_name]</option>";
                                            }

                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">

                                            <?php
                                            // include 'getter/get school.php';

                                            echo "<div class='input-group-addon'><i class='fa fa-sort' aria-hidden='true'></i></div>";
                                            echo "<select name='school_name' id='school_id' class='form-control' required>";
                                            echo "<option value='' selected hidden>ትምህርት ቤት *</option>";
                                            // while ($school_row = mysqli_fetch_array($school_result)) {
                                            //     echo "<option value='$school_row[id]'>$school_row[name]</option>";
                                            // }

                                            echo "</select>";
                                            ?>

                                        </div>
                                    </div>
                                </div>

                                <div class="nameholder">

                                    <div class="form-group col-md-4">
                                        <div class="input-group">

                                            <?php
                                            include 'getter/get education level.php';

                                            echo "<div class='input-group-addon'><i class='fa fa-sort' aria-hidden='true'></i></div>";
                                            echo "<select name='education_level_name' id='education_level_id' class='form-control' required>";
                                            echo "<option value='' selected hidden>የትምህርት ደረጃ *</option>";
                                            while ($education_level_row = mysqli_fetch_array($education_level_result)) {
                                                echo "<option value='$education_level_row[lev_id]'>$education_level_row[edu_level_name]</option>";
                                            }

                                            echo "</select>";
                                            ?>

                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">

                                            <?php
                                            include 'getter/get teacher level.php';

                                            echo "<div class='input-group-addon'><i class='fa fa-sort' aria-hidden='true'></i></div>";
                                            echo "<select name='teacher_level_name' id='teacher_level_id' class='form-control' required>";
                                            echo "<option value='' selected hidden>የመምህርነት ማዕረግ *</option>";
                                            while ($teacher_level_row = mysqli_fetch_array($teacher_level_result)) {
                                                echo "<option value='$teacher_level_row[level_id]'>$teacher_level_row[level_name]</option>";
                                            }

                                            echo "</select>";
                                            ?>

                                        </div>
                                    </div>



                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <?php
                                            include 'getter/get department.php';

                                            echo "<div class='input-group-addon'><i class='fa fa-sort' aria-hidden='true'></i></div>";
                                            echo "<select name='department_name' id='department_id' class='form-control' required>";
                                            echo "<option value='' selected hidden>አብይ *</option>";
                                            while ($department_row = mysqli_fetch_array($department_result)) {
                                                echo "<option value='$department_row[dept_id]'>$department_row[dept_name]</option>";
                                            }

                                            echo "</select>";
                                            ?>

                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <?php
                                            include 'getter/get department.php';

                                            echo "<div class='input-group-addon'><i class='fa fa-sort' aria-hidden='true'></i></div>";
                                            echo "<select name='minor_name' id='minor_id' class='form-control'>";
                                            echo "<option value='' selected hidden>ማይነር</option>";
                                            while ($department_row = mysqli_fetch_array($department_result)) {
                                                echo "<option value='$department_row[dept_id]'>$department_row[dept_name]</option>";
                                            }

                                            echo "</select>";
                                            ?>

                                        </div>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <?php
                                            include 'getter/get department.php';

                                            echo "<div class='input-group-addon'><i class='fa fa-sort' aria-hidden='true'></i></div>";
                                            echo "<select name='3_major_name' id='3_major_id' class='form-control'>";
                                            echo "<option value='' selected hidden>ሶስት አብይ</option>";
                                            while ($department_row = mysqli_fetch_array($department_result)) {
                                                echo "<option value='$department_row[dept_id]'>$department_row[dept_name]</option>";
                                            }

                                            echo "</select>";
                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="nameholder">

                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></div>
                                            <input type="number" id="salary_id" name="salary_name" placeholder="ደሞዝ *" class="form-control" min="3934" required>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></div>
                                            <input type="text" id="retirement_id" name="retirement_name" placeholder="የጡሬታ ቁጥር" class="form-control" minlength="6" maxlength="9">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></div>
                                            <input type="text" id="shelf_id" name="shelf_name" placeholder="የመደርደሪያ አድራሻ *" class="form-control" minlength="1" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-folder-open" aria-hidden="true"></i></div>
                                            <input type="text" id="kent_id" name="kent_name" placeholder="የኬንት ቁጥር *" class="form-control" minlength="1" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="input-group">

                                            <div class='input-group-addon'><i class='fa' aria-hidden='true'>ዋስ አለው?</i></div>
                                            <select name='warranty_name' id='warranty_id' class='form-control' required>
                                                <option value='' selected hidden> ቅጥር ሲፈፅም ዋስ አለው? *</option>
                                                <option value='አዎ አለው'>አዎ አለው</option>
                                                <option value='አይ የለውም'>አይ የለውም</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" id="warranter_div_id" style="background-color: #0093DF; border: 2px double #000d0d; border-radius: 5px; margin-bottom: 20px;">
                                        <p style="color:white;"><b><i>ቅጥር ሲፈፅሙ ዋስ ካልዎት መረጃዉን እዚህ ላይ ያካቱ </i></b></p>

                                        <div class="form-group col-md-3">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <input type="text" id="jop_id" name="jop_name" placeholder="ስራ *" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <input type="text" id="full_name_id" name="full_name_name" placeholder="ሙሉ ስም *" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <input type="number" id="warranter_salary_id" name="warranter_salary_name" placeholder="ደመወዝ *" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i>ፎቶ</i></div>
                                                <input type="file" id="warranter_image_id" name="warranter_img_name" accept=".png,.jpg,.jpeg" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="input-group">

                                            <div class='input-group-addon'><i class='fa' aria-hidden='true'>ዋስ ሁኗል?</i></div>
                                            <select name='yw_name' id='yw_id' class='form-control' required>
                                                <option value='' selected hidden> ለሌሎች ዋስ ሁናል? *</option>
                                                <option value='አዎ ሁኗል'>አዎ ሁኗል</option>
                                                <option value='አይ አልሆነም'>አይ አልሆነም</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" id="yw_div_id" style="background-color: #009ED7; border: 2px double #000d0d; border-radius: 5px; margin-bottom: 20px;">
                                        <p style="color:white;"><b><i>ዋስ ሁነው ከሆነ እዚህ ላይ መረጃዎን ያካቱ</i></b></p>

                                        <div class="nameholder">

                                            <div class="form-group col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                    <input type="text" id="yw_full_name_id" name="yw_full_name_name" placeholder="ሙሉ ስም *" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                    <input type="text" id="yw_inst_name_id" name="yw_inst_name_name" placeholder="የተቋሙ ስም *" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <div class="input-group">

                                                    <div class='input-group-addon'><i class='fa' aria-hidden='true'>ምክንያት</i></div>
                                                    <select class='form-control' id="yw_re_name_id" name="yw_re_name_name">
                                                        <option value='' selected hidden> ምክንያት *</option>
                                                        <option value='ስራ'>ስራ</option>
                                                        <option value='ብድር'>ብድር</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="input-group">

                                            <div class='input-group-addon'><i class='fa' aria-hidden='true'>ብድር አለበት</i></div>
                                            <select name='cr_name' id='cr_id' class='form-control' required>
                                                <option value='' selected hidden> ብድር አለበት? *</option>
                                                <option value='አዎ አለበት'>አዎ አለበት</option>
                                                <option value='አይ የለበትም'>አይ የለበትም</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" id="credit_div_id" style="background-color: #00AACE; border: 2px double #000d0d; border-radius: 5px; margin-bottom: 20px;">
                                        <p style="color:white;"><b><i>ብድር ካለበት መረጃወን እዚህ ላይ ያካቱ </i></b></p>

                                        <div class="nameholder">
                                            <div class="form-group col-md-12">
                                                <div class="input-group">

                                                    <div class='input-group-addon'><i class='fa' aria-hidden='true'>የብድር አይነት?</i></div>
                                                    <select name='cr_dr_name' id='cr_dr_id' class='form-control'>
                                                        <option value='' selected hidden> የብድር አይነት? *</option>
                                                        <option value='የብር'>የብር</option>
                                                        <option value='የአይነት'>የአይነት</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="input-group">

                                            <div class='input-group-addon'><i class='fa' aria-hidden='true'>ቦታ ተደራጅቷል?</i></div>
                                            <select name='pl_name' id='pl_id' class='form-control' required>
                                                <option value='' selected hidden> ቦታ ተደራጅቷል? *</option>
                                                <option value='አዎ ተደራጅቷል'>አዎ ተደራጅቷል</option>
                                                <option value='አይ አልተደራጀም'>አይ አልተደራጀም</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" id="place_div_id" style="background-color: #00B1C9; border: 2px double #000d0d; border-radius: 5px; margin-bottom: 20px;">
                                        <p style="color:white;"><b><i>ቦታ ተደራጅተው ከሆነ መረጃወን እዚህ ላይ ያካቱ </i></b></p>

                                        <div class="nameholder">
                                            <div class="form-group col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-addon" id="place_day_div_id"><i class="fa fa-calendar" aria-hidden="true"> የተደራጁበት ዘመን *</i></div>
                                                    <input type="text" id="place_day_id" name="place_day_name" placeholder="የተደራጁበት ዘመን " class="form-control" minlength="10" maxlength="10">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="input-group">
                                            <input type="text" id="ec_date_id" name="ec_date_name" class="form-control" minlength="8" maxlength="10" value="" required readonly hidden>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-actions form-group">
                                    <button type="reset" id="reset" class="btn btn-danger btn-md">ሰርዝ</button>
                                    <button type="submit" id="submit" name="submit" class="btn btn-success btn-md">መዝግብ</button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <script src="../../../../../../../vendors/jquery/dist/jquery.min.js"></script>
            <script src="../../../../../../../vendors/popper.js/dist/umd/popper.min.js"></script>
            <script src="../../../../../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="../../../../../../../assets/js/main.js"></script>
            <script src="../../../../../../../assets/table/js/jquery-3.5.1.js"></script>
            <script src="../../../../../../../vendors/sweetalert/sweetalert2@11.js"></script>
            <script src="../../../../../../../vendors/jquery/dist/jquery.validate.js"></script>
            <script src="../../../../../../../assets/table/js/jquery.dataTables.min.js"></script>
            <script src="../../../../../../../assets/table/js/dataTables.bootstrap4.min.js"></script>
            <script src="../../../../../../../asfsets/table/js/dataTables.fixedHeader.min.js"></script>
            <script src="../../../../../../../assets/table/js/dataTables.buttons.min.js"></script>
            <script src="../../../../../../../assets/table/js/jszip.min.js"></script>
            <script src="../../../../../../../assets/table/js/pdfmake.min.js"></script>
            <script src="../../../../../../../assets/table/js/vfs_fonts.js"></script>
            <script src="../../../../../../../assets/table/js/buttons.html5.min.js"></script>
            <script src="../../../../../../../assets/table/js/buttons.print.min.js"></script>
            <script src="../../../../../../../assets/table/js/main.js"></script>
            <script src="../../../../../../../assets/day/js/jquery.plugin.min.js"></script>
            <script src="../../../../../../../assets/day/js/jquery.calendars.js"></script>
            <script src="../../../../../../../assets/day/js/jquery.calendars.plus.js"></script>
            <script src="../../../../../../../assets/day/js/jquery.calendars.ethiopian.js"></script>
            <script src="../../../../../../../assets/day/js/jquery.calendars.picker.js"></script>
            <script src="./insert teacher.js"></script>

            <script>
                jQuery(document).ready(function() {
                    jQuery("#association_id").change(function() {
                        var assoValue = jQuery(this).val();
                        // if (jobValue == "Region TDS expert") {
                        //     jQuery("#address_name_id").removeAttr("required");
                        // }
                        jQuery.ajax({
                            url: "./getter/get school.php",
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
                    jQuery("#yw_div_id").hide();
                    jQuery("#credit_div_id").hide();
                    jQuery("#place_div_id").hide();
                    jQuery("#place_day_id").hide();
                    jQuery("#place_day_div_id").hide();


                    jQuery("#warranty_id").change(function() {
                        var warranty = jQuery(this).val();

                        if (warranty == "አዎ አለው") {
                            jQuery("#warranter_div_id").show();
                        }
                        if (warranty == "አይ የለውም") {
                            jQuery("#warranter_div_id").hide();
                            jQuery('#full_name_id').val("");
                            jQuery('#jopid').val("");
                            jQuery('#warranter_salary_id').val("");
                            jQuery('#warranter_image_id').val("");
                        }
                    });

                    jQuery("#yw_id").change(function() {
                        var warranty = jQuery(this).val();

                        if (warranty == "አዎ ሁኗል") {
                            jQuery("#yw_div_id").show();
                        }
                        if (warranty == "አይ አልሆነም") {
                            jQuery("#yw_div_id").hide();
                            jQuery('#yw_full_name_id').val("");
                            jQuery('#yw_inst_name_id').val("");
                            jQuery('#yw_re_name_id').val("");
                        }
                    });

                    jQuery("#cr_id").change(function() {
                        var warranty = jQuery(this).val();

                        if (warranty == "አዎ አለበት") {
                            jQuery("#credit_div_id").show();
                        }
                        if (warranty == "አይ የለበትም") {
                            jQuery("#credit_div_id").hide();
                            jQuery('#cr_dr_id').val("");
                        }
                    });

                    jQuery("#pl_id").change(function() {
                        var warranty = jQuery(this).val();

                        if (warranty == "አዎ ተደራጅቷል") {
                            jQuery("#place_div_id").show();
                            jQuery("#place_day_id").show();
                        }
                        if (warranty == "አይ አልተደራጀም") {
                            jQuery('#place_day_id').val("");
                            jQuery("#place_day_id").hide();
                            jQuery("#place_div_id").hide();
                        }
                    });

                    jQuery("#reset").click(function(e) {
                        jQuery("#warranter_div_id").hide();
                        jQuery('#jop_id').val("");
                        jQuery('#full_name_id').val("");
                        jQuery('#warranter_salary_id').val("");
                        jQuery('#warranter_image_id').val("");

                        jQuery("#yw_div_id").hide();
                        jQuery('#yw_full_name_id').val("");
                        jQuery('#yw_inst_name_id').val("");
                        jQuery('#yw_re_name_id').val("");

                        jQuery("#credit_div_id").hide();
                        jQuery('#cr_dr_id').val("");

                        jQuery("#place_div_id").hide();
                        jQuery('#pl_dr_id').val("");
                        jQuery('#place_day_id').val("");

                        jQuery('#place_day_id').val("");
                        jQuery("#place_day_id").hide();
                        jQuery("#place_day_div_id").hide();


                    })
                });
            </script>

            <script>
                $("#birth_day_id").calendarsPicker({
                    calendar: $.calendars.instance("ethiopian"),
                    showOnFocus: true,
                });
                $('#birth_day_id').val('').calendarsPicker('option', {
                    dateFormat: 'dd-mm-yyyy'
                });
            </script>

            <script>
                $("#emp_period_id").calendarsPicker({
                    calendar: $.calendars.instance("ethiopian"),
                    showOnFocus: true,
                });
                $('#emp_period_id').val('').calendarsPicker('option', {
                    dateFormat: 'dd-mm-yyyy'
                });
            </script>

            <script>
                $("#place_day_id").calendarsPicker({
                    calendar: $.calendars.instance("ethiopian"),
                    showOnFocus: true,
                });
                $('#place_day_id').val('').calendarsPicker('option', {
                    dateFormat: 'dd-mm-yyyy'
                });
            </script>

            <script>
                var todayIn_jd = $.calendars.instance().today().toJD();
                var jd = parseFloat(todayIn_jd, 10);

                var date = $.calendars.instance('ethiopian').fromJD(jd);
                document.getElementById('ec_date_id').value = date;
            </script>


    </body>

    </html>
<?php

} else {
    header("location: ./../../../../../../../authentication/login.php");
}

?>