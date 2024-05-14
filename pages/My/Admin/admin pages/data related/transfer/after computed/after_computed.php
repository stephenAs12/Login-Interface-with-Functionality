

<?php


session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && isset($_SESSION['user_role']) == 'Regional Admin' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == "1") {
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TDS | Admin Panel</title>
    <meta name="description" content="TDS | Admin Panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="./apple-icon.png">
    <link rel="shortcut icon" href="./favicon.ico">


    <link rel="stylesheet" href="../../../../../../../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../../../vendors/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css"> -->
    <link rel="stylesheet" href="../../../../../../../vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- <link rel="stylesheet" href="../../vendors/selectFX/css/cs-skin-elastic.css"> -->

    <link rel="stylesheet" href="../../../../../../../assets/css/style.css">

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

                <a class="navbar-brand" href="../../../../admin index.php"><img width="45" height="45" src="../../../../../../../images/amhara.png" alt="Amhara Education Bureau">
                </a>
                <a class="navbar-brand hidden" href="../../../../admin index.php"><img class="amhara-logo" width="30" height="30" src="../../../../../../images/amhara.png" alt="Amhara Education Bureau"></a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../../../../admin index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <h3 class="menu-title">Account Related</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>User Management</a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-plus-square"></i><a href="../../../account related/user management/create user account/create account.php">Create User Account</a></li>
                            <li><i class="fa fa-eye"></i><a href="../../../account related/user management/view users/view_user.php">View Users</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>My Account</a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-eye" style="color: white;"></i><a href="../../../account related/my account/view my account/view my account.php">View
                                    my account</a></li>
                            <li><i class="fa fa-pencil-square-o"></i><a href="../../../account related/my account/update my account/update my account.php">Update my
                                    account</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Data Related</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>Zone and Woreda</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="../../../data related/zone and woreda/add zone/add zone.php">Add</a></li>
                            <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../data related/zone and woreda/update zone/update zone.php">Update</a></li>
                            <li><i class="menu-icon fa fa-eye" style="color: white;"></i><a href="../../../data related/zone and woreda/view zone/view zone.php">View zone</a></li>
                            <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/zone and woreda/view woreda/view woreda.php">View Woreda</a></li>
                        </ul>

                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-exchange" style="color: white;"></i><span style="color: white;"> Transfer</span>
                            </span></a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-step-backward" aria-hidden="true"></i><a href="../../../data related/transfer/before computed/before_computed.php"> Before Computed</a></li>
                            <li><i class="fa fa-step-forward" style="color: white;"></i><a href="../../../data related/transfer/after computed/after_computed.php"><span style="color: white;"> After Computed</span>
                                    </span></a></li>
                        </ul>

                    </li>

                    <h3 class="menu-title">Resource Related</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-rebel"></i>Resource</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="../../../resource related/resources/add resources/add resources.php">Add Resource</a></li>
                            <li><i class="menu-icon fa fa-eye"></i><a href="../../../resource related/resources/view resources/view resources.php">View Resource</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li>
                        <a href="../../../extras/developers/developers.php"> <i class="menu-icon fa fa-file-code-o"></i>Developers </a>
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
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-4" href="../../../data related/transfer/before computed/before_computed.php">
                                    <i class="fa fa-check"></i>
                                    <p style="color: black;">Transfer data inserted</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="../../../data related/transfer/after computed/after_computed.php">
                                    <i class="fa fa-info"></i>
                                    <p style="color: black;">View transfer result</p>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../../../../../../../images/admin image/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">


                            <a class="nav-link" href="../../../account related/my account/view my account/view my account.php"><i class="fa fa-user"></i>
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
                        <button type="button" class="btn btn-primary"><a href="../../../../../../../authentication/logout.php" style="text-decoration: none; color: white;">Confirm</a></button>
                    </div>
                </div>
            </div>
        </div>


        <!-- logout modal view -->


        <!-- approve modal View -->


        <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
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

                            Are you decide to approve …?

                            <!-- If you want to stay, click a Cancel button. -->

                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success"><a href="./page-login.php" style="text-decoration: none; color: white;">Confirm</a></button>
                    </div>
                </div>
            </div>
        </div>


        <!-- approve modal view -->

        <!-- disapprove modal View -->


        <div class="modal fade" id="disapproveModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
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

                            Are you decide to disapprove …?

                            <!-- If you want to stay, click a Cancel button. -->

                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger"><a href="./page-login.php" style="text-decoration: none; color: white;">Confirm</a></button>
                    </div>
                </div>
            </div>
        </div>


        <!-- disapprove modal view -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Admin's Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="../../../../admin index.php">Dashboard</a></li>
                            <li><a href="#">Transfer</a></li>
                            <li class="active">Transfer List After Computed</li>
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
                                <strong class="card-title">Transfer List After Computed</strong>
                                <button class="btn btn-success" data-toggle="modal" data-target="#approveModal">Approve</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#disapproveModal">Disapprove</button>
                            </div>
                            <div class="card-body" style="overflow-x: scroll; max-width: 28cm; ">

                                <div>
                                    <table id="example" class="table table-striped" style="overflow-x:auto;">
                                        <thead>
                                            <tr>
                                                <th scope="col">Previous Woreda</th>
                                                <th scope="col">Current Woreda</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Sex</th>
                                                <th scope="col">Education Level</th>
                                                <th scope="col">Major Course</th>
                                                <th scope="col">Teaches Course</th>
                                                <th scope="col">Employment period</th>
                                                <th scope="col">Title of Teacher</th>
                                                <th scope="col">Salary</th>
                                                <th scope="col">Teaching Experience</th>
                                                <th scope="col">Woreda Multiplayer </th>
                                                <th scope="col">Calculated Experience</th>
                                                <th scope="col">Other Experience</th>
                                                <th scope="col">Total Experience</th>
                                                <th scope="col">Spouse's Woreda</th>
                                                <th scope="col">Spouse's Institution</th>
                                                <th scope="col">Spouse's Experience</th>
                                                <th scope="col">Woreda Multiplayer </th>
                                                <th scope="col">Calculated Experience</th>
                                                <th scope="col">Other Experience</th>
                                                <th scope="col">Total Experience</th>
                                                <th scope="col">Average Experience</th>
                                                <th scope="col">1st Choice Code</th>
                                                <th scope="col">2nd Choice Code</th>
                                                <th scope="col">3rd Choice Code</th>
                                                <th scope="col">4th Choice Code</th>
                                                <th scope="col">5th Choice Code</th>
                                                <th scope="col">6th Choice Code</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Estifanos Aschale Kassa</td>
                                                <td>Male</td>
                                                <td>Degree</td>
                                                <td>Chemistry</td>
                                                <td>Biology</td>
                                                <td>02/12/2000</td>
                                                <td>Beginner</td>
                                                <td>4000</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>Bahir Dar</td>
                                                <td>Education</td>
                                                <td>08.04.11</td>
                                                <td>1.1</td>
                                                <td>08.08.11</td>
                                                <td>02.04.25</td>
                                                <td>12.09.18</td>
                                                <td>11.02.30</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>13</td>
                                                <td>Niggusie Sefinew Kassa</td>
                                                <td>Male</td>
                                                <td>Diploma</td>
                                                <td>Maths</td>
                                                <td>Physics</td>
                                                <td>02/12/2020</td>
                                                <td>Teacher</td>
                                                <td>6500</td>
                                                <td>09.14.11</td>
                                                <td>1.5</td>
                                                <td>08.18.11</td>
                                                <td>02.14.25</td>
                                                <td>12.19.18</td>
                                                <td>Finote Selam</td>
                                                <td>Agriculture</td>
                                                <td>--</td>
                                                <td>--</td>
                                                <td>--</td>
                                                <td>--</td>
                                                <td>--</td>
                                                <td>--</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>173</td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th scope="col">Previous Woreda</th>
                                                <th scope="col">Current Woreda</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Sex</th>
                                                <th scope="col">Education Level</th>
                                                <th scope="col">Major Course</th>
                                                <th scope="col">Teaches Course</th>
                                                <th scope="col">Employment period</th>
                                                <th scope="col">Title of Teacher</th>
                                                <th scope="col">Salary</th>
                                                <th scope="col">Teaching Experience</th>
                                                <th scope="col">Woreda Multiplayer </th>
                                                <th scope="col">Calculated Experience</th>
                                                <th scope="col">Other Experience</th>
                                                <th scope="col">Total Experience</th>
                                                <th scope="col">Spouse's Woreda</th>
                                                <th scope="col">Spouse's Institution</th>
                                                <th scope="col">Spouse's Experience</th>
                                                <th scope="col">Woreda Multiplayer </th>
                                                <th scope="col">Calculated Experience</th>
                                                <th scope="col">Other Experience</th>
                                                <th scope="col">Total Experience</th>
                                                <th scope="col">Average Experience</th>
                                                <th scope="col">1st Choice Code</th>
                                                <th scope="col">2nd Choice Code</th>
                                                <th scope="col">3rd Choice Code</th>
                                                <th scope="col">4th Choice Code</th>
                                                <th scope="col">5th Choice Code</th>
                                                <th scope="col">6th Choice Code</th>
                                            </tr>
                                        </tfoot>
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

    <script src="../../../../../../../vendors/Table/js/jquery.js"></script>
    <script src="../../../../../../../vendors/Table/js/datatable.js"></script>
    <script src="../../../../../../../vendors/Table/js/datatable_bt.js"></script>

    <script src="../../../../../../../vendors/Table/js/app.js"></script>


</body>

</html>

<?php

} 


else {
    header("location: ../../../authentication/login.php");
}

?>