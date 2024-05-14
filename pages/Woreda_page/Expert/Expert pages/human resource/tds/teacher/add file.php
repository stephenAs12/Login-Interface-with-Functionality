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

        <!-- Left Panel -->

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
                        <h3 class="menu-title">አካውንት ተዛማጅ</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>የኔ አካውንት</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../account related/my account/view my account/view my account.php">አካውንቴን ይመልከቱ
                                    </a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">ዳታ ተዛማጅ</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-superpowers"></i><span>ጉድኝቶች</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view association/view association.php"><span>ጉድኝቶችን ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-american-sign-language-interpreting"></i><span>የትምህርት ቤት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view school level/view level.php"><span>የትምህርት ቤት ደረጃን ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-university"></i><span>ትምህርት ቤት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view school/view school.php"><span>ትምህርት ቤት ይመልከቱ</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bolt"></i><span>የትምህርት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/education_level/view education level/view education level.php"><span>የትምህርት ደረጃን ይመልከቱ</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i><span>የትምህርት አይነት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/department/view department/view department.php"><span>የትምህርት አይነት ይመልከቱ</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i><span>የመምህራን ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/teacher_level/view teacher level/view teacher level.php"><span>የመምህራን ደረጃ ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i><span>አቃፊ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/folder/view folder/view folder.php"><span>አቃፊ ይመልከቱ</span></a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">HUMAN RESOURCE</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male" style="color: white;"></i><span style="color: white;">መምህር</span></a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../teacher/view teacher/view teacher.php">መምህር ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../teacher/view teacher/update with id.php">የመምህራን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../director/view teacher/view teacher.php">ርዕሰ መምህር ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../director/view teacher/update with id.php">የርዕሰ መምህራን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>ሱፐርቫይዘሮች</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../supervisor/view teacher/view teacher.php">ሱፐርቫይዘሮችን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../supervisor/view teacher/update with id.php">የሱፐርቫይዘሮችን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>



                        <h6 class="menu-title">አበልጻጊ</h6><!-- /.menu-title -->
                        <li>
                            <a href="../../../extras/developers/developers.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-code" aria-hidden="true" style="color: white;"></i>አበልጻጊዎች</a>
                        </li>


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
                            <button type="button" class="btn btn-primary"><a href="./../../../../../../../authentication/logout.php" style="text-decoration: none; color: white;">አረጋግጥ</a></button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- logout modal view -->

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
                                <li><a href="../../../../expert index.php">ዳሽቦርድ</a></li>
                                <li><a href="./view teacher/view teacher.php">መምህራን ይመልከቱ</a></li>

                                <li class="active">መምህር ይጨምሩ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- form -->

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <strong>መምህር ይጨምሩ</strong>
                        <small>ይህንን ፎርም ይጠቀሙ
                            <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                        </small>
                    </div>
                    <div class="card-body">

                        <div class="card-body card-block">
                            <form id="add_file_form" class="">

                                <div class="form-group col-md-12">
                                    <div class="input-group">

                                        <?php
                                        include '../teacher/getter/get folder.php';

                                        echo "<div class='input-group-addon'><i class='fa fa-sort' aria-hidden='true'></i></div>";
                                        echo "<select name='folder_name' id='folder_id' class='form-control' required>";
                                        echo "<option value='' selected hidden>አቃፊ ይምረጡ *</option>";
                                        while ($folder_row = mysqli_fetch_array($folder_result)) {
                                            echo "<option value='$folder_row[folder_id]'>$folder_row[folder_name]</option>";
                                        }

                                        echo "</select>";
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                                            <input type="text" id="file_name_id" name="file_name_name" placeholder="የመረጃ ስም *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-text-width" aria-hidden="true"></i></div>
                                            <input type="text" id="description_id" name="description_name" placeholder="መግለጫ . . ." class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
                                            <input class="form-control" type="file" id="file_id" name="file_name" accept=".png,.jpg,.jpeg,.pdf" required>
                                        </div>
                                    </div>





                                </div>

                                <div class="form-actions form-group">
                                    <button type="reset" class="btn btn-danger btn-md">አጥፋ</button>
                                    <button type="submit" id="submit" class="btn btn-success btn-md">አስገባ</button>

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
            <script src="./add file.js"></script>

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
    header("location: ./../../../../../../../authentication/login.php");
}

?>