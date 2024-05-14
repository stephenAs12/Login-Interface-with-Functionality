<?php

session_start();
if (isset($_SESSION['teacher_id']) && isset($_SESSION['teacher_phone']) && $_SESSION['teacher_type'] != '' && isset($_SESSION['teacher_first_login']) && $_SESSION['teacher_first_login'] == '1') {
    $defaultPath = "../../images/tds pp/";
    $ppName = $_SESSION['teacher_image'];
    $realPath = $defaultPath . $ppName;
?>
    <!doctype html>
   
    <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>የመምህራንን አቃፊወች ማየት</title>
        <meta name="description" content="TDS | Admin Panel">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="./apple-icon.png">
        <link rel="shortcut icon" href="./favicon.ico">
        <link rel="stylesheet" href="../../vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="../../assets/table/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../assets/table/css/fixedHeader.dataTables.min.css">
        <link rel="stylesheet" href="../../assets/table/css/fixedHeader.bootstrap4.min.css">
        <link rel="stylesheet" href="../../assets/table/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="../../assets/table/css/main-style.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
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

                    <a class="navbar-brand" href="./view_teacher_folder.php"><img width="45" height="45" src="../../images/amhara.png" alt="Amhara Education Bureau">
                    </a>
                    <a class="navbar-brand hidden" href="./view_teacher_folder.php"><img class="amhara-logo" width="30" height="30" src="../../images/amhara.png" alt="Amhara Education Bureau"></a>

                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <h3 class="menu-title">የኔ ማህደር</h3>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret" style="color: white;"></i><span style="color: white;">ተመልከት</span></a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye" style="color: white;"></i><a href="./view_teacher_folder.php"><span style="color: white;">አቃፊዎችን ተመልከት</span></a></li>
                                <li><i class="fa fa-download" aria-hidden="true"></i><a href="./export.php">ማህደሬን አዉርድ
                                        </a></li>
                            </ul>
                        </li>

                        <h6 class="menu-title">አበልጻጊ</h6>
                        <li>
                            <a href="./developers.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-code" aria-hidden="true"></i>አበልጻጊ</a>
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
                            <h5 class="modal-title" id="staticModalLabel">እርግጠኛ ነወት?</h5>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ያቋርጡ</button>
                            <button type="button" class="btn btn-primary"><a href="../../authentication/logout.php" style="text-decoration: none; color: white;">ያረጋግጡ</a></button>
                        </div>
                    </div>
                </div>
            </div>



            <span id="error_message" class="text-danger"></span>
            <span id="success_message" class="text-success"></span>

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><?php echo $_SESSION['teacher_woreda'] ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">አቃፊወችን ይመልከቱ</li>
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
                $selectQuery = "SELECT * FROM `folder`";
                $result = mysqli_query($connectQuery, $selectQuery);
                if (mysqli_num_rows($result) > 0) {
                } else {
                    $msg = "No Record found";
                }
            }

            ?>


            <div class="content mt-3">
                <div class="row position_change">
                    <div class="col-md-8" style="overflow-y: scroll; height:80vh;">
                        <div class="animated fadeIn">
                            <!-- <a href="../../../../../../../file/' . $row["folder_name"] . '"> -->
                            <?php
                            // $id = $_GET['tds_id'];
                            $id = $_SESSION['teacher_id'];
                            $_SESSION['tds_id'] = $id;
                            while ($row = mysqli_fetch_array($result)) {
                                $count = print_r(mysqli_num_rows($result), true);
                                $check = false;
                                if (mysqli_num_rows($result) > 0) {
                                    $check = true;
                                }
                                if ($check) {
                                    $folder_id = $row['folder_id'];



                                    $selectFile = "SELECT * FROM `file` WHERE tds='$id' AND folder='$folder_id'";
                                    $resultFile = mysqli_query($connectQuery, $selectFile);
                                    if (mysqli_num_rows($resultFile) > 0) {
                                        $count_file = mysqli_num_rows($resultFile);
                                        echo '

                                        <a href="view_teacher_file.php?folder_id=' . $row['folder_id'] . '&tds_id=' . $id . '">
                                        
                                        <div class="col-md-4">
                                        <img style="margin-left: auto; margin-right: auto; display: block;" height="230cm" src="../../images/kent.png" alt="Card image cap">
                                                    <div id="box">
                                                        <h5>' . $row["folder_name"] . '</h5>
                                                        <p href="#" class="text-sm-right mt-2 mb-1"><i>Total file</i> <span class="badge badge-success">' . $count_file . '</span></p>
                                                    </div>
                                                    <hr>
                                        </div>
                                        </a>
                                    ';
                                    }
                                }
                                if (!$check) {
                                    echo '

                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong class="card-title pl-2">No file found</strong>
                                            </div>
                                            <div class="card-body">
                                                <div>

                                                </div>
                                                <hr>
                                                <div class="card-text text-sm-center">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                                }
                            }

                            ?>

                        </div>
                    </div>

                    <?php


                    if (mysqli_connect_errno()) {
                        echo mysqli_connect_error();
                        exit();
                    } else {
                        $teacherQuery = "SELECT tds.tds_id, tds.fname, tds.mname, tds.lname, tds.sex, tds.type, 
                                                tds.birth_date, tds.employment_period, education_level.edu_level_name, 
                                                department.dept_name, teacher_level.level_name, tds.retirement_number, 
                                                school.name, association.asso_name, tds.warranty, tds.salary, tds.phone, 
                                                tds.image, tds.warranter_name, tds.warranter_salary, tds.warranter_photo
                        FROM tds
                        INNER JOIN education_level
                        ON tds.education_level=education_level.lev_id
                        INNER JOIN department
                        ON tds.department=department.dept_id
                        INNER JOIN teacher_level
                        ON tds.teacher_level=teacher_level.level_id
                        INNER JOIN school
                        ON tds.school=school.id
                        INNER JOIN association
                        ON tds.association=association.asso_id WHERE tds.tds_id='$id'";
                        $teacherResult = mysqli_query($connectQuery, $teacherQuery);
                        if (mysqli_num_rows($teacherResult) === 1) {
                            $teacherRow = mysqli_fetch_array($teacherResult);
                            $tds_id = $teacherRow["tds_id"];
                            $fname = $teacherRow["fname"];
                            $_SESSION['teacher_fname'] = $fname;
                            $mname = $teacherRow["mname"];
                            $_SESSION['teacher_mname'] = $mname;
                            $lname = $teacherRow["lname"];
                            $_SESSION['teacher_lname'] = $lname;
                            $sex = $teacherRow["sex"];
                            $type = $teacherRow["type"];
                            $birth_date = $teacherRow["birth_date"];

                            $bd = date('d/m/Y', strtotime($birth_date));
                            date_default_timezone_set("Africa/Addis_Ababa");
                            $current_date = date_create();
                            $current_date_format = date_format($current_date, "d/m/Y");
                            // $differenc_bd = date_diff($birth_date,$current_date);

                            $employment_period = $teacherRow["employment_period"];
                            $ep = date('d/m/Y', strtotime($employment_period));

                            $education_level = $teacherRow["edu_level_name"];
                            $department = $teacherRow["dept_name"];
                            $teacher_level = $teacherRow["level_name"];
                            $retirement_number = $teacherRow["retirement_number"];
                            $school = $teacherRow["name"];
                            $association = $teacherRow["asso_name"];
                            $warranty = $teacherRow["warranty"];
                            $salary = $teacherRow["salary"];
                            $phone = $teacherRow["phone"];
                            $image = $teacherRow["image"];
                            $warranterName = $teacherRow["warranter_name"];
                            $warranterSalary = $teacherRow["warranter_salary"];
                            $warranterPhoto = $teacherRow["warranter_photo"];

                            if ($image != null) {
                                $img_add = "../../images/tds pp/" . $image;
                            } else {
                                $img_add = "../../images/user.png";
                            } 
                            
                            if ($warranterPhoto != null) {
                                $warranter_img = "../../images/tds pp/" . $warranterPhoto;
                            } else {
                                $warranter_img = "../../images/user.png";
                            }
                            ?>
                            <div class="col-md-4" style="overflow-y: scroll; height:80vh;">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" style="height: 3.9cm" src="<?php echo $img_add; ?>" alt="Card image cap">
                                    <div class="location text-sm-center"><b><?php echo $type; ?><i><?php echo ", " . $fname . " " . $mname . " " . $lname; ?></i></b></div>
                                    <div class="location text-sm-left mt-3">Gender<i><strong><?php echo " " . $sex; ?></strong></i></div>
                                    <hr>
                                    <div class="location text-sm-left">Birth Date<i><strong><?php echo " " . $bd; ?></strong></i></div>
                                    <hr>
                                    <div class="location text-sm-left">Employment Period<i><strong><?php echo " " . $ep; ?></strong></i></div>
                                    <hr>
                                    <div class="location text-sm-left">Education Level<i><strong><?php echo " " . $education_level; ?></strong></i></div>
                                    <hr>
                                    <div class="location text-sm-left">Department<i><strong><?php echo " " . $department; ?></strong></i></div>
                                    <hr>
                                    <div class="location text-sm-left">Teacher Level<i><strong><?php echo " " . $teacher_level; ?></strong></i></div>
                                    <hr>
                                    <div class="location text-sm-left">Retirement Number<i><strong><?php echo " " . $retirement_number; ?></strong></i></div>
                                    <hr>
                                    <div class="location text-sm-left">School<i><strong><?php echo " " . $school; ?></strong></i></div>
                                    <hr>
                                    <div class="location text-sm-left">Association<i><strong><?php echo " " . $association; ?></strong></i></div>
                                    <hr>
                                    <div class="location text-sm-left">Warranty<i><strong><?php echo " " . $warranty; ?></strong></i></div>
                                    <hr>
                                    <div class="location text-sm-left">Salary<i><strong><?php echo " " . $salary; ?> Br</strong></i></div>
                                    <hr>
                                    <div class="location text-sm-center"><i class="fa fa-mobile" aria-hidden="true"></i> (251) <?php echo  $phone; ?></div>
                                    <hr class="last_hr">

                                    <p>
                                        <a class="btn btn-primary btn-block" data-toggle="collapse" href="#warranterInformation" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Warranter's Information
                                        </a>
                                    </p>
                                    <div class="collapse" id="warranterInformation">
                                        <div class="card card-body">
                                            <img class="rounded-circle mx-auto d-block" style="height: 3.9cm" src="<?php echo $warranter_img; ?>" alt="Card image cap">
                                            <hr>
                                            <div class="location text-sm-left">Name<i><strong><?php echo " " . $warranterName; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">Salary<i><strong><?php echo " " . $warranterSalary; ?> Br</strong></i></div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        } else {
                            $msg = "No Record found";
                        }
                    }

                    ?>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
        <script src="../../vendors/jquery/dist/jquery.min.js"></script>
        <script src="../../vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/main.js"></script>
        <script src="../../assets/table/js/jquery-3.5.1.js"></script>
        <script src="../../vendors/sweetalert/sweetalert2@11.js"></script>
        <script src="../../vendors/jquery/dist/jquery.validate.js"></script>
        <script src="../../assets/table/js/jquery.dataTables.min.js"></script>
        <script src="../../assets/table/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../asfsets/table/js/dataTables.fixedHeader.min.js"></script>
        <script src="../../assets/table/js/dataTables.buttons.min.js"></script>
        <script src="../../assets/table/js/jszip.min.js"></script>
        <script src="../../assets/table/js/pdfmake.min.js"></script>
        <script src="../../assets/table/js/vfs_fonts.js"></script>
        <script src="../../assets/table/js/buttons.html5.min.js"></script>
        <script src="../../assets/table/js/buttons.print.min.js"></script>
        <script src="../../assets/table/js/main.js"></script>
        <script src="add file.js"></script>
    </body>

    </html>
<?php

} else {
    header("location: ../../authentication/teacher login.php");
}

?>