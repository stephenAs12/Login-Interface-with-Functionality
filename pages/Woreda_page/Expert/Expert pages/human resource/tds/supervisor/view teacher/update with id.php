<?php

session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && $_SESSION['user_role'] == 'ወረዳ መርሱ ባለሙያ' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == '1') {
    $defaultPath = "../../../../../../../../images/tds pp/";
    $ppName = $_SESSION['user_image'];
    $realPath = $defaultPath . $ppName;
?>
    <!doctype html>

    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ተቆጣጣሪን አዘምን</title>
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
        <link rel="stylesheet" href="../../../../../../../assets/day/css/jquery.calendars.picker.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>

    <body>

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
                        <h3 class="menu-title">አካውንት ተዛማጅ</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>የኔ አካውንት</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../../account related/my account/view my account/view my account.php">አካውንቴን ይመልከቱ
                                    </a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">ዳታ ተዛማጅ</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-superpowers"></i><span>ጉድኝቶች</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/school and association/view association/view association.php"><span>ጉድኝቶችን ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-american-sign-language-interpreting"></i><span>የትምህርት ቤት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/school and association/view school level/view level.php"><span>የትምህርት ቤት ደረጃን ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-university"></i><span>ትምህርት ቤት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/school and association/view school/view school.php"><span>ትምህርት ቤትን ይመልከቱ</span></a></li>
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
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/teacher_level/view teacher level/view teacher level.php"><span>የመምህርነት ደረጃን ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i><span>አቃፊ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../../data related/folder/view folder/view folder.php"><span>አቃፊን ይመልከቱ</span></a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">የሰው ሀይል</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../teacher/view teacher/view teacher.php">መምህር ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../../teacher/view teacher/update with id.php">የመምህር መረጃን ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../director/view teacher/view teacher.php">ረዕሰ መምህር ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../../director/view teacher/update with id.php">የርዕሰ መምህር መረጃን ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>ምክትል ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../vice/view teacher/view teacher.php">ምክትል ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../../vice/view teacher/update with id.php">የምክትል ርዕሰ መምህራንን መረጃ ይቀይሩ </a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users" style="color: white;"></i><span style="color: white;">ሱፐርቫይዘሮች</span></a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="./view teacher.php">ሱፐርቫይዘሮችን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o" style="color: white;"></i><a href="./update with id.php"><span style="color: white;">የሱፐርቫይዘሮችን መረጃ ይቀይሩ</span></a>
                                </li>
                            </ul>
                        </li>



                        <h6 class="menu-title">አበልጻጊ</h6><!-- /.menu-title -->
                        <li>
                            <a href="../../../../extras/developers/developers.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-code" aria-hidden="true" style="color: white;"></i>አበልጻጊዎች</a>
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
                                    የኔ ማህደር</a>

                                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-power-off"></i> ይውጡ</a>
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
                                ጤና ይስጥልኝ <?php echo  $_SESSION['user_fname']; ?>,

                                ስትወጣ ወደ መግቢያ ገጽ ትመራለህ እርግጠኛ ነህ…?
                                ለመቆየት ከፈለጉ፣ ሰርዝ የሚለውን ቁልፍ ጠቅ ያድርጉ።
                                አመሰግናለን፡፡
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ሰርዝ</button>
                            <button type="button" class="btn btn-primary"><a href="../../../../../../../../authentication/logout.php" style="text-decoration: none; color: white;">አረጋግጥ</a></button>
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
                                <li><a href="./view teacher.php">ሱፐርቫይዘሮችን ይመልከቱ</a></li>
                                <li class="#">የሱፐርቫይዘሮችን መረጃ ይቀይሩ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">
                <div class="animated fadeIn">


                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">የሱፐርቫይዘሮችን መረጃ ይቀይሩ</div>
                                <div class="card-body card-block">
                                    <form action="" method="get">
                                        <div class="form-group col-md-8">
                                            <label for="known_id_id" class="form-label">የሱፐርቫይዘር መለያ ያስገቡ
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" name="known_id" id="known_id_id" value="<?php if (isset($_GET['known_id'])) {
                                                                                                                echo $_GET['known_id'];
                                                                                                            } ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">

                                            <div class="input-group">

                                                <button type="submit" class="btn btn-success" style="margin-top: 32px;border-radius:5px">ፈልግ</button><br>
                                            </div>
                                        </div>



                                    </form>

                                    <div id="teacher_form_id" class="">

                                        <?php
                                        $con = mysqli_connect("localhost", "root", "@Stephen12#xampp", "fms");

                                        if (isset($_GET['known_id'])) {
                                            $known_id = $_GET['known_id'];
                                            $logged_user = $_SESSION['user_full_name'];
                                            $query = "SELECT tds.tds_id,tds.woreda, tds.fname, tds.mname, tds.lname, tds.mother_name, tds.sex, tds.type, 
                                                tds.birth_date, tds.employment_period, education_level.edu_level_name, tds.education_level, 
                                                dept.dept_name, mino.dept_name AS minor_sub, thre.dept_name AS three_sub, tds.teaches, tds.department, tds.minor, tds.3_major, teacher_level.level_name, tds.teacher_level, tds.retirement_number, 
                                                school.name, tds.school, association.asso_name, tds.association, tds.warranty, tds.salary, tds.shelf, tds.kent, tds.phone, 
                                                tds.image, tds.reduced_service, tds.te_other_service, tds.other_service, tds.warranter_jop, tds.warranter_name, tds.warranter_salary, tds.warranter_photo, tds.registered_by
                                                FROM tds
                                                INNER JOIN education_level
                                                ON tds.education_level=education_level.lev_id
                                                INNER JOIN department AS dept
                                                ON tds.department=dept.dept_id
                                                -- INNER JOIN department AS teach
                                                -- ON tds.teaches=teach.dept_id
                                                INNER JOIN department AS mino
                                                ON tds.minor=mino.dept_id
                                                INNER JOIN department AS thre
                                                ON tds.3_major=thre.dept_id
                                                INNER JOIN teacher_level
                                                ON tds.teacher_level=teacher_level.level_id
                                                INNER JOIN school
                                                ON tds.school=school.id
                                                INNER JOIN association
                                                ON tds.association=association.asso_id WHERE tds.type='ሱፐርቫይዘር' AND tds.tds_id='$known_id' AND tds.registered_by='$logged_user'";
                                            $query_run = mysqli_query($con, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                                    if ($row['woreda'] == $_SESSION['user_woreda_id']) {

                                                        $tds_id = $row["tds_id"];
                                                        $fname = $row["fname"];
                                                        $mname = $row["mname"];
                                                        $lname = $row["lname"];
                                                        $mother_name = $row["mother_name"];
                                                        $sex = $row["sex"];
                                                        $type = $row["type"];
                                                        $birth_date = $row["birth_date"];
                                                        $_SESSION['teacher_birth_date'] = $birth_date;
                                                        $employment_period = $row["employment_period"];
                                                        $_SESSION['teacher_employment_period'] = $employment_period;
                                                        $reduced_service = $row["reduced_service"];
                                                        $te_other_service = $row["te_other_service"];
                                                        $other_service = $row["other_service"];
                                                        $edu_level_name = $row["edu_level_name"];
                                                        $education_level = $row["education_level"];
                                                        $dept_name = $row["dept_name"];
                                                        $department = $row["department"];
                                                        $minor = $row["minor_sub"];
                                                        $minor_id = $row["minor"];
                                                        $three_major = $row["three_sub"];
                                                        $three_major_id = $row["3_major"];
                                                        $level_name = $row["level_name"];
                                                        $teacher_level = $row["teacher_level"];
                                                        $retirement_number = $row["retirement_number"];
                                                        $name = $row["name"];
                                                        $school = $row["school"];
                                                        $asso_name = $row["asso_name"];
                                                        $association = $row["association"];
                                                        $warranty = $row["warranty"];
                                                        $salary = $row["salary"];
                                                        $shelf = $row["shelf"];
                                                        $kent = $row["kent"];
                                                        $phone = $row["phone"];
                                                        $image = $row["image"];
                                                        $warranter_name = $row["warranter_name"];
                                                        $warranter_jop = $row["warranter_jop"];
                                                        $warranter_salary = $row["warranter_salary"];
                                                        $warranter_photo = $row["warranter_photo"];
                                                        $registered_by = $row["registered_by"];


                                        ?>
                                                        <form id="teacher_update_form" enctype="multipart/form-data" class="">
                                                            <div class="nameholder">
                                                                <div class="form-group col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="">ስም</i></div>
                                                                        <input type="text" id="first_name_id" name="first_name_name" placeholder="ስም *" class="form-control" value="<?php echo $fname ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="">የአባት ስም</i></div>
                                                                        <input type="text" id="middle_name_id" name="middle_name_name" placeholder="የአባት ስም*" class="form-control" value="<?php echo $mname ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="">የአያት ስም</i></div>
                                                                        <input type="text" id="last_name_id" name="last_name_name" placeholder="የአያት ስም *" class="form-control" value="<?php echo $lname ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nameholder">
                                                                <div class="form-group col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i>የእናት ስም</i></div>
                                                                        <input type="text" id="m_id" name="m_name" placeholder="የእናት ስም *" class="form-control" minlength="6" value="<?php echo $mother_name ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <div class="input-group">

                                                                        <div class='input-group-addon'><i class='' aria-hidden='true'>ጾታ</i></div>
                                                                        <select name='sex_name' id='sex_id' class='form-control'>
                                                                            <option value="<?php echo $sex ?>" selected hidden> <?php echo $sex ?></option>
                                                                            <option value='ወንድ'>ወንድ</option>
                                                                            <option value='ሴት'>ሴት</option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="">ስልክ</i></div>
                                                                        <input type="number" id="phone_id" name="phone_name" placeholder="ስልክ *" class="form-control" value="<?php echo $phone ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i>ጉርድ ፎቶ</i></div>
                                                                        <input type="file" id="image_id" name="img_name" accept=".png,.jpg,.jpeg" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"> የትዉልድ ዘመን *</i></div>
                                                                    <input type="text" id="birth_day_id" name="birth_day_name" placeholder="<?php echo $birth_date ?>" class="form-control" minlength="10" maxlength="10">
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"> የቅጥር ዘመን *</i></div>
                                                                    <input type="text" id="emp_period_id" name="emp_period_name" placeholder="<?php echo $employment_period ?>" class="form-control" minlength="10" maxlength="10">
                                                                </div>

                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="">ተቀናሽ አገልግሎት ካለ</i></div>
                                                                    <input type="text" id="service_id" name="service_name" placeholder="ተቀናሽ አገልግሎት ካለ *" class="form-control" value="<?php echo $reduced_service ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="">መምህርነት በሌላ</i></div>
                                                                    <input type="text" id="te_other_id" name="te_other_name" placeholder="መምህርነት በሌላ *" class="form-control" value="<?php echo $other_service ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i class="">ሌላ አገልግሎት</i></div>
                                                                    <input type="text" id="other_id" name="other_name" placeholder="Other Service *" class="form-control" value="<?php echo $other_service ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-4">
                                                                <div class="input-group">

                                                                    <div class='input-group-addon'><i class='' aria-hidden='true'>የመርሱ አይነት</i></div>
                                                                    <select name='type_name' id='type_id' class='form-control'>
                                                                        <option value="<?php echo $type ?>" selected hidden><?php echo $type ?></option>
                                                                        <option value="መምህር">መምህር</option>
                                                                        <option value="ምክትል ርዕሰ መምህር">ምክትል ርዕሰ መምህር</option>
                                                                        <option value="ርዕሰ መምህር">ርዕሰ መምህር</option>
                                                                        <option value="ሱፐርቫይዘር">ሱፐርቫይዘር</option>
                                                                    </select>
                                                                </div>
                                                            </div>







                                    </div>
                                    <div class="nameholder">
                                        <div class="form-group col-md-4">
                                            <div class="input-group">

                                                <?php
                                                        include '../getter/get association.php';

                                                        echo "<div class='input-group-addon'><i class='' aria-hidden='true'>ጉድኝት</i></div>";
                                                        echo "<select name='association_name' id='association_id' class='form-control'>";
                                                        echo "<option value='$association' selected hidden>$asso_name</option>";
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

                                                        echo "<div class='input-group-addon'><i class='' aria-hidden='true'>ትምህርት ቤት</i></div>";
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

                                        <div class="form-group col-md-4">
                                            <div class="input-group">

                                                <?php
                                                        include '../getter/get education level.php';

                                                        echo "<div class='input-group-addon'><i class='' aria-hidden='true'>የትምህርት ደረጃ</i></div>";
                                                        echo "<select name='education_level_name' id='education_level_id' class='form-control'>";
                                                        echo "<option value='$education_level' selected hidden>$edu_level_name</option>";
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
                                                        include '../getter/get teacher level.php';

                                                        echo "<div class='input-group-addon'><i class='' aria-hidden='true'>የመምህርነት ደረጃ</i></div>";
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
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <?php
                                                        include '../getter/get department.php';

                                                        echo "<div class='input-group-addon'><i class='' aria-hidden='true'>አብይ</i></div>";
                                                        echo "<select name='department_name' id='department_id' class='form-control'>";
                                                        echo "<option value='$department' selected hidden>$dept_name</option>";
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
                                                        include '../getter/get department.php';

                                                        echo "<div class='input-group-addon'><i class='' aria-hidden='true'>ማይነር</i></div>";
                                                        echo "<select name='minor_name' id='minor_id' class='form-control'>";
                                                        echo "<option value='$minor_id' selected hidden>$minor</option>";
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
                                                        include '../getter/get department.php';

                                                        echo "<div class='input-group-addon'><i class='' aria-hidden='true'>ሶስት አብይ Major</i></div>";
                                                        echo "<select name='three_major_name' id='three_major_id' class='form-control'>";
                                                        echo "<option value='$three_major_id' selected hidden>$three_major</option>";
                                                        while ($department_row = mysqli_fetch_array($department_result)) {
                                                            echo "<option value='$department_row[dept_id]'>$department_row[dept_name]</option>";
                                                        }

                                                        echo "</select>";
                                            ?>

                                        </div>
                                    </div>

                                    <div class="nameholder">

                                        <div class="form-group col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i>ደሞዝ</i></div>
                                                <input type="number" id="salary_id" name="salary_name" placeholder="ደሞዝ *" class="form-control" value="<?php echo $salary ?>">
                                            </div>
                                        </div>


                                        <div class="form-group col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i>የጡረታ ቁጥር</i></div>
                                                <input type="text" id="retirement_id" name="retirement_name" placeholder="የጡረታ ቁጥር" class="form-control" value="<?php echo $retirement_number ?>">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i>የመደርደሪያ አድራሻ</i></div>
                                                <input type="text" id="shelf_id" name="shelf_name" placeholder="የመደርደሪያ አድራሻ*" class="form-control" value="<?php echo $shelf ?>">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i>የኬንት ቁጥር</i></div>
                                                <input type="text" id="kent_id" name="kent_name" placeholder="የኬንት ቁጥር*" class="form-control" value="<?php echo $kent ?>">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <div class="input-group">

                                                <div class='input-group-addon'><i class='' aria-hidden='true'>ዋስትና</i></div>
                                                <select name='warranty_name' id='warranty_id' class='form-control'>
                                                    <option value="<?php echo $warranty ?>" selected hidden><?php echo $warranty ?></option>
                                                    <option value='አለው'>አለው</option>
                                                    <option value='የለውም'>የለውም</option>
                                                </select>
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
                                                    <div class="input-group-addon"><i>ጉርድ ፎኦ</i></div>
                                                    <input type="file" id="warranter_image_id" name="warranter_img_name" accept=".png,.jpg,.jpeg" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions form-group">
                                        <button type="reset" id="reset" class="btn btn-danger btn-md">አጥፋ</button>
                                        <button type="submit" id="submit" name="submit" class="btn btn-success btn-md">አስገባ</button>

                                    </div>
                                    </form>





                                </div>

                <?php
                                                    } else {
                                                        echo "No Record Found";
                                                    }
                                                }
                                            } else {
                                                echo "No Record Found";
                                            }
                                        }

                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($_GET['known_id'])) {
                        $known_id = $_GET['known_id'];
                        $_SESSION['tds_id'] = $known_id;
                        $query = "SELECT * FROM tds WHERE tds_id='$known_id' ";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                                if ($row['woreda'] == $_SESSION['user_woreda_id']) {
                    ?>
                    <?php
                                }
                            }
                        }
                    }

                    ?>
                </div>
            </div>



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
            var todayIn_jd = $.calendars.instance().today().toJD();
            var jd = parseFloat(todayIn_jd, 10);

            var date = $.calendars.instance('ethiopian').fromJD(jd);
            document.getElementById('ec_date_id').value = date;
        </script>
    </body>

    </html>
<?php

} else {
    header("location: ../../../../../../../../authentication/login.php");
}

?>