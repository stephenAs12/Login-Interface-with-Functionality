<?php

session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && $_SESSION['user_role'] == 'ወረዳ መምህራን ማህበር ሀላፊ' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == '1') {
    $defaultPath = "../../../../../../../images/tds pp/";
    $ppName = $_SESSION['user_image'];
    $realPath = $defaultPath . $ppName;
?>
    <!doctype html>

    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ምክትል ርዕሰ መምህራንን ይመልከቱ</title>
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
        <link rel="stylesheet" href="cust_css.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="../../../../admin index.php"><img width="45" height="45" src="../../../../../../../images/amhara.png" alt="Amhara Education Bureau">
                    </a>
                    <a class="navbar-brand hidden" href="../../../../admin index.php"><img class="amhara-logo" width="30" height="30" src="../../../../../../../images/amhara.png" alt="Amhara Education Bureau"></a>

                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../../../../admin index.php"> <i class="menu-icon fa fa-dashboard"></i><span>ዳሽቦርድ</span> </a>
                        </li>
                        <h3 class="menu-title">አካዉንት ተዛማጅ</h3>

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
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view association/view association.php"><span>ጉድኝት ማየት</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-american-sign-language-interpreting"></i><span>የትምህርት ቤት ደርጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view school level/view level.php"><span>የትምህርት ቤት ደረጃወችን ማየት</span></a></li>
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
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/department/view department/view department.php"><span>የትምህርት አይነቶችን ማየት</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i><span>የመምህርነት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/teacher_level/view teacher level/view teacher level.php"><span>የመምህርነት ደረጃውችን ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i><span>አቃፊ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/folder/view folder/view folder.php"><span>አቃፊ ይመልከቱ</span></a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">የሰው ሀይል</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view teacher/view teacher.php">መምህራንን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view director/view director.php">ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret" style="color: white;"></i><span style="color: white;">ምክትል ርዕሰ መምህር</span></a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye" style="color: white;"></i><a href="./view vice.php"><span style="color: white;">ምክትል ርዕሰ መምህራንን ይመልከቱ</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>ሱፐርቫይዘር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view supervisor/view supervisor.php">ሱፐርቫይዘርን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>



                        <h6 class="menu-title">አበልጻጊ</h6>
                        <li>
                            <a href="../../../extras/developers/developers.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-code" aria-hidden="true"></i>አበልጻጊ</a>
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
                                    <input class="form-control mr-sm-2" type="text" placeholder="ፈልግ ..." aria-label="Search">
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
                            <h5 class="modal-title" id="staticModalLabel">እርግጠኛ ነወት?</h5>
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
                            <h1><?php echo $_SESSION['user_woreda'] . " " . $_SESSION['user_role']; ?> ዳሽቦርድ</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="../../../../admin index.php">ዳሽቦርድ</a></li>
                                <li class="active">ምክትል ርዕሰ መምህራንን ይመልከቱ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <?php

            $connectQuery = mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

            if (mysqli_connect_errno()) {
                echo mysqli_connect_error();
                exit();
            } else {
                $selectQuery = "SELECT tds.tds_id, tds.fname, tds.mname, tds.lname, tds.mother_name, tds.sex, tds.type, 
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
                ON tds.association=association.asso_id WHERE type='ምክትል ርዕሰ መምህር' ORDER BY tds.tds_id DESC";
                $result = mysqli_query($connectQuery, $selectQuery);
                if (mysqli_num_rows($result) > 0) {
                } else {
                    $msg = "No Record found";
                }
            }
            ?>

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title"> የተመዘገቡ ምክትል ርዕሰ መምህራን ዝርዝር</strong>
                                </div>
                                <div class="card-body">

                                    <div class="scroll">
                                        <table id="example" class="display table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="font-size: 13px;  padding: 2px;">አይድ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ሙሉ ስም</th>
                                                    <th style="font-size: 13px;  padding: 2px;">የእናት ስም</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ጾታ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">የትውልድ ዘመን</th>
                                                    <th style="font-size: 13px;  padding: 2px;">የቅጥር ዘመን</th>
                                                    <th style="font-size: 13px;  padding: 2px;">አገልግሎት</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ተቀናሽ አገልግሎት</th>
                                                    <th style="font-size: 13px;  padding: 2px;">በመምህርነት በሌላ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ሌላ አገልግሎት</th>
                                                    <th style="font-size: 13px;  padding: 2px;">የትምህርት ደረጃ </th>
                                                    <th style="font-size: 13px;  padding: 2px;">አብይ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ማይነር</th>
                                                    <th style="font-size: 13px;  padding: 2px;">3 አብይ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">የመምህርነት ደረጃ </th>
                                                    <th style="font-size: 13px;  padding: 2px;">የጡሬታ ቁጥር</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ትምህርት ቤት</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ጉድኝት</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ዋስ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ደመወዝ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">መደርደሪያ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ኬንት</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ስልክ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">የዋሱ ስም</th>
                                                    <th style="font-size: 13px;  padding: 2px;">የዋሱ ስራ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">የዋሱ ደመወዝ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">የመዝጋቢው ስም</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            while ($row = mysqli_fetch_array($result)) {



                                                $tds_id = $row["tds_id"];
                                                $fname = $row["fname"];
                                                $mname = $row["mname"];
                                                $lname = $row["lname"];
                                                $mother_name = $row["mother_name"];
                                                $sex = $row["sex"];
                                                $type = $row["type"];
                                                $birth_date = $row["birth_date"];
                                                $employment_period = $row["employment_period"];
                                                $reduced_service = $row["reduced_service"];

                                                $employmentPeriodExplode = explode("-", $employment_period);
                                                $e_date = $employmentPeriodExplode[0];
                                                $e_month = $employmentPeriodExplode[1];
                                                $e_year = $employmentPeriodExplode[2];
                                                if ($e_month == '13') {
                                                    $e_date = "01";
                                                    $e_month = "01";
                                                    $e_year = $e_year + 1;
                                                }
                                                $newEmpPer = $e_year . '-' . $e_month . '-' . $e_date;

                                                $curent_date = $_SESSION['current_ec_date'];

                                                $curent_dateExplode = explode("-", $curent_date);
                                                $c_date = $curent_dateExplode[2];
                                                $c_month = $curent_dateExplode[1];
                                                $c_year = $curent_dateExplode[0];
                                                if ($c_month == '13') {
                                                    $c_date = "01";
                                                    $c_month = "01";
                                                    $c_year = $c_year + 1;
                                                }
                                                $curent_date = $c_year . '-' . $c_month . '-' . $c_date;

                                                if ($e_date > $c_date) {
                                                    $diff = date_diff(date_create($newEmpPer), date_create($curent_date));
                                                    $y = $diff->format("%y");
                                                    $m = $diff->format("%m");
                                                    $d = (($c_date + 30) - $e_date) + 1;
                                                    // $service = $y . ', ' . $m . ', ' . $d;
                                                } elseif ($e_date < $c_date) {
                                                    $diff = date_diff(date_create($newEmpPer), date_create($curent_date));
                                                    $y = $diff->format("%y");
                                                    $m = $diff->format("%m");
                                                    $d = (intval($c_date) - intval($e_date)) + 1;
                                                    // $service = $y . ', ' . $m . ', ' . $d;
                                                } else {
                                                    $diff = date_diff(date_create($newEmpPer), date_create($curent_date));
                                                    $y = $diff->format("%y");
                                                    $m = $diff->format("%m");
                                                    $d = intval($diff->format("%d")) + 1;
                                                }
                                                $reduced_serviceExplode = explode("/", $reduced_service);
                                                $r_date = $reduced_serviceExplode[2];
                                                $r_month = $reduced_serviceExplode[1];
                                                $r_year = $reduced_serviceExplode[0];

                                                $remain_date = (intval($y) * 360 + intval($m) * 30 + intval($d)) - (intval($r_year) * 360 + intval($r_month) * 30 + intval($r_date));

                                                $first_remainder = $remain_date % 360;
                                                $f_year = ($remain_date - $first_remainder) / 360;

                                                $f_day = $first_remainder % 30;
                                                $f_month = ($first_remainder - $f_day) / 30;


                                                $service = $f_year . ', ' . $f_month . ', ' . $f_day;

                                                $te_other_service = $row["te_other_service"];
                                                $other_service = $row["other_service"];
                                                $edu_level_name = $row["edu_level_name"];
                                                $education_level = $row["education_level"];
                                                $dept_name = $row["dept_name"];
                                                $department = $row["department"];
                                                $minor = $row["minor_sub"];
                                                $three_major = $row["three_sub"];
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
                                                // <td style="font-size: 13px;  padding: 2px;">' . strval($years).','.strval($months).','.strval($days) . '</td>

                                                $action = '<a href="view_teacher_folder.php?tds_id=' . $tds_id . '"><button class="btn btn-success btn-sm">View</button></a>';
                                                
                                                echo '
                                                    <tr>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $tds_id . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $fname . " " . $mname . " " . $lname . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $mother_name . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $sex . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $birth_date . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $employment_period . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $service . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $reduced_service . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $te_other_service . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $other_service . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $edu_level_name . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $dept_name . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $minor . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $three_major . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $level_name . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $retirement_number . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $name . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $asso_name . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $warranty . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $salary . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $shelf . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $kent . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $phone . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $warranter_name . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $warranter_jop . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $warranter_salary . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $registered_by . '</td>
                                                        
                                                    </tr>
                                                    ';
                                            }
                                            ?>

                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
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

    </body>



    </html>
<?php

} else {
    header("location: ../../../../../../../../../authentication/login.php");
}

?>