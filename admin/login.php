<?php
include "../b.php";
if (isset($_POST["login"])) {
    $name = $_POST["username"];
    $pass_word = $_POST["password"];
    echo $name;
    $select_user = "SELECT us.user_name,us.email,us.password,ro.role from users as us INNER JOIN roles as ro ON us.role_id = ro.role_id WHERE us.user_name = '$name' AND us.password = '$pass_word'";
    $user_result = mysqli_query($con,$select_user);
    $count = mysqli_fetch_array($user_result);
    $role = $count["role"];
    if ($count == 0) {
         echo "<script> alert('Invalide username orr passowrd')</script>";
    }else{
        if ($role == 'ADMIN'){
           echo "<script> alert('admin')</script>";
        }elseif ($role == 'STUDENT') {
            echo "<script> alert('student')</script>";
        }
    }
    // while ($users_row = mysqli_fetch_array($user_result)) {
    //     $user_name = $users_row["user_name"];
    //     $password = $users_row["password"];
    //     $email = $users_row["email"];
    //     $role = $users_row["role"];
        // if($usrename == $user_name && $pass_word == $password){
        //     if ($role == 'ADMIN') {
        //         echo "<script>window.open('all-student.php','_self')</script>";
        //     }elseif ($role == 'STUDENT') {
        //         echo "<script>window.open('all-parents.php','_self')</script>";
        //     }elseif ($role == 'Staff') {
        //         echo "<script>window.open('admin-form.php','_self')</script>";
        //     }elseif ($role == 'TEACHER') {
        //         echo "<script>window.open('add-parents.php','_self')</script>";
        //     }
        // }else {
        //      echo "<script> alert('Invalide username orr passowrd')</script>";
        // }
    // }
}
?>

<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:43:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="img/logo2.png" alt="logo">
                </div>
                <form action="#" class="login-form" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" placeholder="Enter usrename" name="username" class="form-control">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" placeholder="Enter password" class="form-control" name="password">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember-me">
                            <label for="remember-me" class="form-check-label">Remember Me</label>
                        </div>
                        <a href="#" class="forgot-btn">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn" name="login">Login</button>
                    </div>
                </form>
                <div class="login-social">
                    <p>or sign in with</p>
                    <ul>
                        <li><a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="bg-gplus"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="bg-git"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="sign-up">Don't have an account ? <a href="#">Signup now!</a></div>
        </div>
    </div>
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:43:49 GMT -->
</html>