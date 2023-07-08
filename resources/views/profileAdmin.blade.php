
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SATELIT TUITION CENTRE MANAGEMENT SYSTEM</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"
        crossorigin="anonymous"></script>
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand" href="STL_DashboardAdmin.html">SATELIT</a>
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i
                data-feather="menu"></i></button>

        <ul class="navbar-nav align-items-center ml-auto">

            <li class="nav-item dropdown no-caret mr-3 d-md-none">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
                <!-- Dropdown - Search-->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--fade-in-up"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100">
                        <div class="input-group input-group-joined input-group-solid">
                            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <div class="input-group-text"><i data-feather="search"></i></div>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i data-feather="bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="mr-2" data-feather="bell"></i>
                        Notis
                    </h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 29, 2019</div>
                            <marquee width="100%" direction="left" scrollamount="7">
                                <div>Sila selesaikan penilaian yang telah disediakan di paparan Penilaian.</div>
                            </marquee>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i data-feather="mail"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="mr-2" data-feather="mail"></i>
                        Mesej
                    </h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img"
                            src="https://source.unsplash.com/vTL_qy03D1I/60x60" />
                        <div class="dropdown-notifications-item-content">
                            <marquee width="100%" direction="left" scrollamount="7">
                                <div>Tugasan kursus sudah dimuatnaik.</div>
                            </marquee>
                            <div class="dropdown-notifications-item-content-details">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img"
                            src="https://source.unsplash.com/4ytMf8MgJlY/60x60" />
                        <div class="dropdown-notifications-item-content">
                            <marquee width="100%" direction="left" scrollamount="7">
                                <div>Peperiksaan online sudah dimuatnaik.</div>
                            </marquee>
                            <div class="dropdown-notifications-item-content-details">Diane Chambers · 2d</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><img class="img-fluid"
                        src="https://source.unsplash.com/QAB-WJcbgJk/60x60" /></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">Valerie Luna</div>
                            <div class="dropdown-user-details-email">vluna@aol.com</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="STL_ProfilAdmin.html">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Account
                    </a>
                    <a class="dropdown-item" href="logout.php">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">


                        <div class="sidenav-menu-heading pt-3">MENU</div>
                        <a class="nav-link" href="STL_DashboardAdmin.html">
                            <div class="nav-link-icon"><i data-feather="home"></i></div>
                            Dashboard
                        </a>



                        <a class="nav-link" href="STL_ProfilAdmin.html">
                            <div class="nav-link-icon"><i data-feather="user"></i></div>
                            Profile
                        </a>

                        <a class="nav-link" href="STL_application_manage.html">
                            <div class="nav-link-icon"><i data-feather="folder"></i></div>
                            Application
                        </a>

                        <a class="nav-link" href="STL_DLL_admin.html">
                            <div class="nav-link-icon"><i data-feather="calendar"></i></div>
                            Daily Learning Lesson
                        </a>

                        <a class="nav-link" href="STL_TimeTable_admin.html">
                            <div class="nav-link-icon"><i data-feather="book-open"></i></div>
                            Time Table
                        </a>


                        <a class="nav-link" href="STL_LearningMaterialAdmin.html">
                            <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                            learning material
                        </a>

                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather=""></i></div>
                                        User Profile
                                    </h1>
                                    <div class="small">
                                        <span class="font-weight-500">&nbsp; &nbsp; Teusday</span>
                                        &middot; 7hb Fabuary, 2023 &middot; 12:16 PM
                                    </div>
                                    <div class="page-header-subtitle"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container mt-n10">
                    <!-- Illustration dashboard card example-->


                    <hr class="mt-0 mb-4" />
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card">
                                <div class="card-header">Profile Picture</div>
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                    <img class="img-account-profile rounded-circle mb-2" src="Images/profile.png"
                                        alt="" />
                                    <!-- Profile picture help block-->
                                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                    <!-- Profile picture upload button-->
                                    <button class="btn btn-primary" type="button">Upload Picture</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Profile Information</div>
                                <div class="card-body">
                                    <form>
                                        <!-- Form Group (username)-->
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">IC Number</label>
                                            <input class="form-control" id="inputUsername" type="text"
                                                placeholder="Enter your IC number" value="IC Number" />
                                        </div>
                                        <!-- Form Row-->
                                        <!-- Form Group (full name)-->
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputFirstName">Full Name</label>
                                            <input class="form-control" id="inputFirstName" type="text"
                                                placeholder="Enter your full name" value="Kamal bin Hussin" />
                                        </div>

                                        <!-- Form Row        -->
                                        <!-- Form Group (location)-->
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLocation">Address</label>
                                            <input class="form-control" id="inputLocation" type="text"
                                                placeholder="Enter your Address"
                                                value="Jalan Ilmu 1/1, 40450 Shah Alam, Selangor" />
                                        </div>

                                        <!-- Form Row-->
                                        <div class="form-row">
                                            <!-- Form Group (phone number)-->
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputPhone">Phone Number</label>
                                                <input class="form-control" id="inputPhone" type="tel"
                                                    placeholder="Enter your phone number" value="012-123 4567" />
                                            </div>
                                            <!-- Form Group (birthday)-->
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputBirthday">Birth Date</label>
                                                <input class="form-control" id="inputBirthday" type="text"
                                                    name="birthday" placeholder="Enter your birthday"
                                                    value="06/10/1988" />
                                            </div>
                                        </div>
                                        <!-- Save changes button-->
                                        <!-- Form Row-->
                                        <div class="form-row">
                                            <!-- Form Group (email)-->
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputPhone">E-mail</label>
                                                <input class="form-control" id="inputPhone" type="tel"
                                                    placeholder="Enter your e-mail" value="vluna@gmail.com" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputPhone">Sex</label>
                                                <select class="form-control" id="TimeForTheCourse">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Save changes button-->
                                        <a class="btn btn-primary" href="LMS_Dashboard.html"><span
                                                data-feather="save"></span>&nbsp; Update &nbsp</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="assets/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/date-range-picker-demo.js"></script>
</body>

</html>