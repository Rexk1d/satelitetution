<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: STL_DashboardApplicant.php");
}
?>

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
    <link href="css/all.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>

    <script src="/js/all.js"></script>
    <style type="text/css">
        .timeline.timeline-xs .timeline-item .timeline-item-marker .timeline-item-marker-text {
            width: 100px !important;
        }

.background-image {
    background-image: url('{{ asset('assets/img/bg-sky2.jpg') }}');
    background-size: cover;
}

.header-background-image {
    background-image: url('{{ asset('assets/img/HEADER_COMPRESS.jpg') }}');
    background-size: cover;
}
    </style>
</head>
<body class="bg-primary background-image">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-10 rounded-0 shadow-lg">
                                <div class="card-header rounded-0 d-flex justify-content-left header-background-image">

                                    <div class="logo-image">
                                        <img src="{{ asset('assets/img/satelit.png') }}" height="100" />
                                    </div>

                                    <div class="welcome-header ml-4">
                                        <h1 class="text-light font-weight-bold mt-2">Selamat Datang</h1>
                                        <p class="text-light text-weight-light">SATELIT TUITION CENTRE MANAGEMENT SYSTEM</p>

                                    </div>

                                </div>

                                <div class="card-body">
                                    <!-- Login form-->

                                    <div class="row">

                                        <div class="col-md-12">

                                        <?php
                                        if (isset($_POST["login"])) {
                                        $icno = $_POST["icno"];
                                        $password = $_POST["password"];
                                            require_once "database.php";
                                            $sql = "SELECT * FROM users WHERE ic_number = '$icno'";
                                            $result = mysqli_query($conn, $sql);
                                            $user = mysqli_fetch_array($result);
                                            if ($user) {
                                                if (password_verify($password, $user["password"])) {
                                                    session_start();
                                                    $_SESSION["user"] = "yes";
                                                    
                                                    if ($user['role']=='applicant'){
                                                    header("Location: STL_DashboardApplicant.php");
                                                    }
                                                    else{
                                                        header("Location: STL_DashboardStaff.html");
                                                    }
                                                    die();
                                                }else{
                                                    echo "<div class='alert alert-danger'>Password does not match</div>";
                                                }
                                            }else{
                                                echo "<div class='alert alert-danger'>IC Number does not match</div>";
                                            }
                                        }
                                        ?>
                                    <div class="form-group text-center">
                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="role" onclick = "document.location.href='/'" id="adminCheckbox" value="2" required="required">
                                                        <label class="form-check-label">
                                                            Admin
                                                        </label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="role" onclick = "document.location.href='LoginUser'" id="applicantCheckbox" value="2" required="required" checked="">
                                                        <label class="form-check-label">
                                                            User
                                                        </label>
                                                    </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-lg-4">
                                                 <div class="login-wrap p-0">
                                                     <h3 class="mb-4 text-center"> Welcome </h3>
                                                     <form action="{{ route('DashboardUser') }}" method="get">
                                            @if(Session::has('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                                            @endif
                                            @if(Session::has('fail'))
                                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                            @endif
                                            @csrf
                                                <div class="form-group">
                                                    <input type="text" placeholder="IC Number" name="icNumber" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password" name="password" class="form-control">
                                                     <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                </div>
                                           
                                                <div class="form-btn">
                                                    <!--<input type="submit" value="Login" name="login" class="btn btn-primary">-->
                                                    <button type="submit" href='DashboardUser' class="form-control btn btn-primary submit px-3">Sign In</button>
                                                </div>
                                            </form>
                                                  <!-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p> -->
                                                  <div class="social d-flex text-center">
                                                      <a class="px-2 py-2 ml-md-1 rounded" href='register'>still don't have account? sign up now!</a>
                                                  </div>
                                                  </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; PUSAT TUISYEN SATELIT 2023</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
