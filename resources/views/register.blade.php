<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: STL_DashboardApplicant.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $icno = $_POST["icno"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($icno) OR empty($email)  OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
            
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE ic_number = '$icno'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"IC Number has been used, please log in to existing account or check your IC number");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
            
            
            
           }else{
            
            $sql = "INSERT INTO users (full_name, ic_number, email, password) VALUES ( ?, ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"ssss",$fullName, $icno, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
                header("Location: STL_LoginAdmin.html");
                
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */


        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            text-align: center;
        }
        .form-container form .error-msg{
        margin:10px 0;
        display: block;
        background: crimson;
        color:#fff;
        border-radius: 5px;
        font-size: 20px;
        padding:10px;
        }

        
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SATELIT TUITION CENTRE MANAGEMENT SYSTEM</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"
        crossorigin="anonymous"></script>

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
                                        <p class="text-light text-weight-light">SATELIT TUITION CENTRE MANAGEMENT SYSTEM
                                        </p>

                                    </div>

                                </div>

                                <div class="card-body">
                                    <!-- Login form-->

                                    <div class="row">

                                        <div class="col-md-12">


                                           
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="login-wrap p-0">
                                                            <h3 class="mb-4 text-center"> Sign up </h3>
                                                            <form id="form_1" action="STL_register.php" method="post">
                                                            <div class="form-group">
                                                    <label for="fulllname"><b>Full Name</b></label>
                                                    <input type="text" class="form-control" name="fullname" >
                                                </div>
                                                <div class="form-group">
                                                <label for="icno"><b>IC Number</b></label>
                                                    <input id="nric" type="text" class="form-control" name="icno"> 
                                                </div>
                                                <div class="form-group">
                                                <label for="phonenumber"><b>Phone Number</b></label>
                                                    <input id="phonenumber" type="text" class="form-control" name="phonenumber"> 
                                                </div>
                                                <div class="form-group">
                                                <label for="email"><b>Email</b></label>
                                                    <input type="text" class="form-control" name="email" >
                                                </div>
                                                <div class="form-group">
                                                <label for="password"><b>Password</b></label>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                                <div class="form-group">
                                                <label for="repeat_password"><b>Repeat Password</b></label>
                                                    <input type="password" class="form-control" name="repeat_password" >
                                                </div>
                                                <hr>
                                                <p>By creating an account you agree to our Terms & Privacy.</p>

                                                <div class="form-btn">
                                                    <input type="submit" class="registerbtn" value="Register" name="submit">
                                                </div>
                                                                  
                                                                
                                                                
                                    
                                                                

            
                                                
                                                                <p>already have an account? <a href='LoginUser'>login now</a></p>
                                                            </form>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>