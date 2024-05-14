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
        <title>View Users</title>
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
                        <h3 class="menu-title">አካውንት ተዛማጅ</h3>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>የኔ አካውንት</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../my account/view my account/view my account.php">አካውንቴን ማየት</a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">ዳታ ተዛማጅ</h3>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-superpowers"></i>ጉድኝት</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view association/view association.php">ጉድኝት ይመልከቱ</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-american-sign-language-interpreting"></i>የትምህርት ቤት ደረጃ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view school level/view level.php"> የትምህርት ቤት ደረጃ ይመልከቱ</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-university"></i>ትምህርት ቤት</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view school/view school.php">ትምህርት ቤት ይመልከቱ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bolt"></i>የትምህርት ደረጃ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/education_level/view education level/view education level.php">የትምህርት ቤት ዳረጃን የመልከቱ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>የትምህርት አይነት</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/department/view department/view department.php">የትምህርት አይነትን የመልከቱ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i>የመምህርነት ደረጃ </a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/teacher_level/view teacher level/view teacher level.php">የመምህረነት ደረጃ ይመልከቱ </a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>አቃፊ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/folder/view folder/view folder.php">አቃፊ ይመልከቱ</a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">የሰው ሀይል </h3>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view teacher/view teacher.php"> መምህራንን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>ርዕሰ መምህራን</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view director/view director.php">ርዕሰ መምህራንን የመልከቱ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>ምክትል ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view vice/view vice.php">ምክትል ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>ሱፐርቫይዘር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view supervisor/view supervisor.php">ሱፐርቫይዘርን የመልከቱ</a>
                                </li>
                            </ul>
                        </li>



                        <h6 class="menu-title">አበልጻጊወች</h6>
                        <li>
                            <a href="../../../extras/developers/developers.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-code" aria-hidden="true"></i>አበልጻጊወች</a>
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
                                    <input class="form-control mr-sm-2" type="text" placeholder="ፈልግ ..." aria-label="ፈልግ">
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
                                <a class="nav-link" href="../../my account/view my account/view my account.php"><i class="fa fa-user"></i>
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
                            <h5 class="modal-title" id="staticModalLabel">እርግጠኛ ነወት?</h5>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ያቋርጡ</button>
                            <button type="button" class="btn btn-primary"><a href="./../../../../../../../authentication/logout.php" style="text-decoration: none; color: white;">ያረጋግጡ</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- logout modal view -->
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
                                <li><a href="../../../../admin index.php">ዳሽቦርድ</a></li>
                                <li class="active">ተጠቃሚ ይመልከቱ</li>
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
                $selectQuery = "SELECT * FROM user WHERE role='ወረዳ አድሚን' OR role='ዞን ባለሙያ'";
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
                                    <strong class="card-title">Registered Users List</strong>
                                </div>
                                <div class="card-body">

                                    <div class="scroll">
                                        <table id="example" class="display table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="font-size: 13px;  padding: 2px;">የአባት ስም</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ስም</th>
                                                    <th style="font-size: 13px;  padding: 2px;">የአያት ስም</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ሚና</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ስልክ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ኢሜል</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ሁኔታ</th>
                                                    <th style="font-size: 13px;  padding: 2px;">ድርጊት</th>
                                                    <th style="font-size: 13px;  padding: 2px;">አሻሽል</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            while ($row = mysqli_fetch_array($result)) {



                                                $status = '';
                                                if ($row['status'] == 0) {
                                                    // echo '<a href="status.php?user_id='.$row['user_id'].'&status=1" class="btn btn-primary btn-lg disabled" role="button">enable</a>';
                                                    $status = '<span class="badge badge-pill badge-danger">Banned</span>';
                                                } else {
                                                    $status = '<span class="badge badge-pill badge-success">Active</span>';
                                                }

                                                $action = '';
                                                if ($row['status'] == 0) {
                                                    // echo '<a href="status.php?user_id='.$row['user_id'].'&status=1" class="btn btn-primary btn-lg disabled" role="button">enable</a>';
                                                    $action = '<a href="status.php?id=' . $row['id'] . '&status=1"><button class="btn btn-success btn-sm">Enable</button></a>';
                                                } else {
                                                    $action = '<a href="status.php?id=' . $row['id'] . '&status=0"><button class="btn btn-danger btn-sm">Disable</button></a>';
                                                }
                                                $edit = '<a href="update registered user.php?u_id=' . $row['id'] .'&fname='.$row["fname"].'&mname='.$row["mname"].'&lname='.$row["lname"].'&phone='.$row["phone"].'&role_name='.$row["role"].'"><button class="btn btn-primary btn-sm">Edit</button></a>';

                                                echo '
                                                <tr>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $row["fname"] . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $row["mname"] . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $row["lname"] . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $row["role"] . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $row["phone"] . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $row["email"] . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $status . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $action . '</td>
                                                    <td style="font-size: 13px;  padding: 2px;">' . $edit . '</td>
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
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
        <script src="../../../../../../../vendors/jquery/dist/jquery.min.js"></script>
        <script src="../../../../../../../vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../../../../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../../../../../../assets/js/main.js"></script>
        <script src="../../../../../../../assets/table/js/jquery-3.5.1.js"></script>
        <script src="../../../../../../../assets/table/js/jquery.dataTables.min.js"></script>
        <script src="../../../../../../../assets/table/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../../../../../../assets/table/js/dataTables.fixedHeader.min.js"></script>
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
    header("location: ./../../../../../../../authentication/login.php");
}

?>