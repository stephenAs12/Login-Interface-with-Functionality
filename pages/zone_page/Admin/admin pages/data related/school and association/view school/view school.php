<?php

session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && $_SESSION['user_role'] == 'ዞን መምሪያ ሀላፊ' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == '1') {
    $defaultPath = "../../../../../../../images/tds pp/";
    $ppName = $_SESSION['user_image'];
    $realPath = $defaultPath . $ppName;
?>
    <!doctype html>

    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ትምህርት ቤት ይመልከቱ</title>
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

                                <li><i class="fa fa-eye"></i><a href="../../../account related/my account/view my account/view my account.php">አካውንቴን ማየት
                                    </a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">ዳታ ተዛማጅ</h3>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-lemon-o"></i> ወረዳ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/woreda/view woreda/view teacher level.php">ወረዳዎችን ይመልከቱ </a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-superpowers"></i><span>ጉድኝት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../view association/view association.php"><span>ጉድኝት ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-american-sign-language-interpreting"></i><span>የትምህርት ቤት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../view school level/view level.php"><span>የትምህርት ቤት ደረጃን ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-university" style="color: white;"></i><span style="color: white;">ትምህርት ቤት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye" style="color: white;"></i><a href="./view school.php"><span style="color: white;">ትምህርት ቤት ይመልከቱ</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bolt"></i>የትምህርት ደረጃ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../education_level/view education level/view education level.php">የትምህርት ደረጃን ይመልከቱ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>የትምህርት አይነት</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../department/view department/view department.php">የትምህርት አይነት ይመልከቱ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i>የመምህርነት ደረጃ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../teacher_level/view teacher level/view teacher level.php">የመምህርነት ደረጃን ይመልከቱ</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>አቃፊ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../folder/view folder/view folder.php">አቃፊ ይመልከቱ</a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">HUMAN RESOURCE</h3><!-- /.menu-title -->
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>ምክትል ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view vice/view vice.php">ምክትል ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>ሱፐርቫይዘር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view supervisor/view supervisor.php">ሱፐር ቫይዘሮችን ይመልከቱ</a>
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
                            <h5 class="modal-title" id="staticModalLabel">እርግጠኛ ነወት ?</h5>
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
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">ትምህርት ቤት ይመዝቡ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <form id="school_form_id" class="">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <?php
                                            include 'get association data.php';

                                            echo "<div class='input-group-addon'><i class='fa fa-level-down' aria-hidden='true'></i></div>";
                                            echo "<select name='association_name' id='association_id' class='form-control' required>";
                                            echo "<option value='' selected hidden>እባክዎ ማህበር ይምረጡ</option>";
                                            while ($association_row = mysqli_fetch_array($association_result)) {
                                                echo "<option value='$association_row[asso_id]'>$association_row[asso_name]</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <?php
                                            include 'get level data.php';

                                            echo "<div class='input-group-addon'><i class='fa fa-level-down' aria-hidden='true'></i></div>";
                                            echo "<select name='school_level_name' id='school_level_id' class='form-control' required>";
                                            echo "<option value='' selected hidden>እባክዎ የትምህርት ቤት ደረጃን ይምረጡ/option>";
                                            while ($school_level_row = mysqli_fetch_array($school_level_result)) {
                                                echo "<option value='$school_level_row[level_id]'>$school_level_row[level_name]</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-text-width" aria-hidden="true"></i></div>
                                            <input type="text" id="school_id" name="school_name" placeholder="የትምህርት ቤት ስም" class="form-control" autocomplete="nope">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">አጥፋ</button>
                            <button class="btn btn-primary" type="submit" id="verify_submit_id" name="submit"><i class="fa fa-plus-square" aria-hidden="true"></i> ይመዝግቡ</button>
                        </div>
                        </form>
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
                                <li><a href="../../../../admin index.php">ዳሽቦርድ</a></li>
                                <li class="active">ትምህርት ቤት ይመልከቱ</li>
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
                                <div class="card-header">
                                    <div class="col-md-6">
                                        <strong class="card-title">የተመዘገቡ ትምህርት ቤቶች ዝርዝር</strong>
                                    </div>
                                    <!-- <div class="col-md-6 text-right">
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; ትምህርት ቤት ይመዝግቡ</button>
                                    </div> -->
                                </div>
                                <div class="card-body">

                                    <div>
                                        <table id="example" class="display table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>የትምህርት ቤቱ ስም</th>
                                                    <th>የትምህርት ቤቱ ደረጃ</th>
                                                    <th>የጉድኝቱ ስም</th>
                                                    <!-- <th>ድርጊት</th> -->
                                                </tr>
                                            </thead>
                                            <?php
                                            $connectQuery = mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

                                            $sql = "SELECT school.id, school.name, region.region_name, zone.zone_name, woreda.woreda_name, association.asso_name, school_level.level_name FROM `school` INNER JOIN region ON school.r_id=region.region_id INNER JOIN zone ON school.z_id=zone.zone_id INNER JOIN woreda ON school.w_id=woreda.woreda_id INNER JOIN association ON school.a_id=association.asso_id INNER JOIN school_level ON school.l_id=school_level.level_id";
                                            $result = mysqli_query($connectQuery, $sql);
                                            if ($result) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $id = $row['id'];
                                                    $name = $row['name'];
                                                    $region_name = $row['region_name'];
                                                    $zone_name = $row['zone_name'];
                                                    $woreda_name = $row['woreda_name'];
                                                    $asso_name = $row['asso_name'];
                                                    $level_name = $row['level_name'];
                                                    $schoolInfo = '<a href="./update school.php?school_id=' . $id . '&school_name=' . $name . '&association_name=' . $asso_name . '&level_name=' . $level_name . '"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>';
                                                    echo '<tr>
                                                        <td>' . $name . '</td>
                                                        <td>' . $level_name . '</td>
                                                        <td>' . $asso_name . '</td>
                                                </tr>';
                                                }
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
        <script src="./add/insert school.js"></script>

    </body>



    </html>
<?php

} else {
    header("location: ../../../../../../../../../authentication/login.php");
}

?>