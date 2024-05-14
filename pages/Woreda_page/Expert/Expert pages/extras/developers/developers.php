<?php

session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && $_SESSION['user_role'] == 'ወረዳ መርሱ ባለሙያ' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == '1') {
    $defaultPath = "../../../../../../images/tds pp/";
    $ppName = $_SESSION['user_image'];
    $realPath = $defaultPath . $ppName;
?>
    <!doctype html>
 
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>የተጠቃሜው ገጽ | አበልጻጊወቹ </title>
        <meta name="description" content="TDS | Admin Panel">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="./apple-icon.png">
        <link rel="shortcut icon" href="./favicon.ico">

        <link rel="stylesheet" href="../../../../../../vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../../../../vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../../../../vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="../../../../../../assets/css/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        
    </head>

    <body>
        

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="navbar-brand" href="../../../../expert/expert index.php"><img width="45" height="45" src="../../../../../../images/amhara.png" alt="Amhara Education Bureau">
                    </a>
                    <a class="navbar-brand hidden" href="../../../../expert/expert index.php"><img class="amhara-logo" width="30" height="30" src="../../../../../../images/amhara.png" alt="Amhara Education Bureau"></a>

                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../../../../expert/expert index.php"> <i class="menu-icon fa fa-dashboard"></i><span>ዳሽቦርድ</span> </a>
                        </li>
                        <h3 class="menu-title">የአካውንት አይነት</h3>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>My Account</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../account related/my account/view my account/view my account.php">የኔን አካውንት ማየት
                                        </a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">ዳታ ተዛማጅ</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-superpowers"></i>ጉድኝት</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../data related/school and association/view association/view association.php">ጉድኝት ይመልከቱ</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-american-sign-language-interpreting"></i>የትምህርት ቤት ደረጃ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../data related/school and association/view school level/view level.php">የትምህርት ቤት ደረጃን ይመልከቱ</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-university"></i>ትምህርት ቤት</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../data related/school and association/view school/view school.php">ትምህርት ቤትን ይመልከቱ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bolt"></i>የትምህርት ደረጃ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../data related/education_level/view education level/view education level.php">የትምህርት ደረጃን ይመልከቱ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>የትምህርት አይነት</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../data related/department/view department/view department.php">የትምህርት አይነትን ይመልከቱ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i>የመምህርነት ደረጃ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../data related/teacher_level/view teacher level/view teacher level.php">የመምህርነት ደረጃን ይመልከቱ</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>አቃፊ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../data related/folder/view folder/view folder.php">አቃፊን ይመልከቱ</a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">የሰው ሀይልን ይመልከቱ</h3>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../human resource/tds/teacher/view teacher/view teacher.php">መምህራንን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../../human resource/tds/teacher/view teacher/update with id.php">የመምህርን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../human resource/tds/view director/view director.php">ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../../human resource/tds/teacher/view teacher/update with id.php">የርዕሰ መምህራንን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>ሱፐርቫይዘር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../human resource/tds/view supervisor/view supervisor.php">ሱፐርቫይዘርን ይመልከቱ</a>
                                </li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../../human resource/tds/teacher/view teacher/update with id.php">የሱፐርቫይዘርን መረጃ ይቀይሩ</a>
                                </li>
                            </ul>
                        </li>



                        <h6 class="menu-title">አበልጻጊ</h6><!-- /.menu-title -->
                        <li>
                            <a href="./developers.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-code" aria-hidden="true" style="color: white;"></i><span style="color: white;">አበልጻጊ</span></a>
                        </li>



                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>

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


                                <a class="nav-link" href="../../account related/my account/view my account/view my account.php"><i class="fa fa-user"></i>
                                    My Profile</a>

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
                                Hello Estifanos,

                                When logging out you are redirected to a Login page ¿Are you sure…?

                                If you want to stay, click a Cancel button.

                                Thanks.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ያቋርጡ</button>
                            <button type="button" class="btn btn-primary"><a href="../../../../../../authentication/logout.php" style="text-decoration: none; color: white;">ያረጋግጡ</a></button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- logout modal view -->

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                        <h1><?php echo $_SESSION['user_woreda']." ".$_SESSION['user_role']; ?> ዳሽቦርድ</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="../../../../expert/expert index.php">ዳሽቦርድ</a></li>

                                <li class="active">አበልጻጊ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-user"></i><strong class="card-title pl-2">Profile Card</strong>
                                </div>
                                <div class="card-body">
                                    <div class="mx-auto d-block">
                                        <img class="rounded-circle mx-auto d-block" src="../../../../../../images/pp/estif.jpg" alt="Card image cap">
                                        <h5 class="text-sm-center mt-2 mb-1">እስጢፋኖስ አስቻለ</h5>
                                        <div class="location text-sm-center"><i class="fa fa-map-marker"></i><a href="https://www.google.com/maps/place/Bahir+Dar/@11.5816866,37.310382,12z/data=!3m1!4b1!4m5!3m4!1s0x1644d23307d78069:0xab0b134f632dff8!8m2!3d11.5742086!4d37.3613533" target="_blank"> Bahir Dar, Ethiopia</a></div>
                                        <div class="location text-sm-center"><i class="fa fa-telegram" aria-hidden="true"></i> <a href="https://t.me/step_hen_As" target="_blank">on telegram</a></div>
                                        <div class="location text-sm-center"><i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:+251918819955">(251) 918 81 9955</a></div>
                                        <div class="location text-sm-center"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:estifanosaschale12@gmail.com">estifanosaschale12@gmail.com</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-user"></i><strong class="card-title pl-2">Profile Card</strong>
                                </div>
                                <div class="card-body">
                                    <div class="mx-auto d-block">
                                        <img class="rounded-circle mx-auto d-block" src="../../../../../../images/pp/nigus.jpg" alt="Card image cap">
                                        <h5 class="text-sm-center mt-2 mb-1">ንጉሴ ሰፊነው </h5>
                                        <div class="location text-sm-center"><i class="fa fa-map-marker"></i><a href="https://www.google.com/maps/place/Bahir+Dar/@11.5816866,37.310382,12z/data=!3m1!4b1!4m5!3m4!1s0x1644d23307d78069:0xab0b134f632dff8!8m2!3d11.5742086!4d37.3613533" target="_blank"> Bahir Dar, Ethiopia</a></div>
                                        <div class="location text-sm-center"><i class="fa fa-telegram" aria-hidden="true"></i> <a href="https://t.me/ababimami" target="_blank">ቴሌግራም ይጠቀሙ</a></div>
                                        <div class="location text-sm-center"><i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:+251923227081">(251) 923 22 7081</a></div>
                                        <div class="location text-sm-center"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:nigussiesefinew.40@gmail.com">nigussiesefinew.40@gmail.com</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div><!-- .row -->
                </div><!-- .animated -->
            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->


        <script src="../../../../../../vendors/jquery/dist/jquery.min.js"></script>
        <script src="../../../../../../vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../../../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../../../../../assets/js/main.js"></script>
        <script src="../../../../../../assets/js/widgets.js"></script>


    </body>

    </html>
<?php

} else {
    header("location: ../../../authentication/login.php");
}

?>