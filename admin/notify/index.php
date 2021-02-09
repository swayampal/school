<?php
include "../db.php";
session_start();
if (isset($_POST["login"])) {
    $name = $_POST["username"];
    $pass_word = $_POST["password"];
    // echo $name;
    $select_user = "SELECT us.user_id,us.user_name,us.email,us.password,ro.role from users as us INNER JOIN roles as ro ON us.role_id = ro.role_id WHERE us.user_name = '$name' AND us.password = '$pass_word'";
    $user_result = mysqli_query($con,$select_user);
    $count = mysqli_fetch_array($user_result);
    $id = $count["user_id"];
    $username = $count["user_name"];
    $role = $count["role"];
    if ($count == 0) {
         echo "<script> alert('Invalide username orr passowrd')</script>";
    }else{
        if ($role == 'ADMIN'){
           
           $_SESSION['user_id']=$id;
           $_SESSION['username']=$username;
           $_SESSION['role']=$role;
           echo "<script> alert('".$_SESSION['role']."".$_SESSION['username']."".$_SESSION['user_id']."')</script>";
           echo "<script>window.open('admin/index.php','_self')</script>";
        }elseif ($role == 'STUDENT') {
            
            $_SESSION['user_id']=$id;
           $_SESSION['username']=$username;
           $_SESSION['role']=$role;
           echo "<script> alert('".$_SESSION['role']."".$_SESSION['username']."".$_SESSION['user_id']."')</script>";
            echo "<script>window.open('student/index.php','_self')</script>";
        }elseif ($role == 'STAFF') {
           
            $_SESSION['user_id']=$id;
           $_SESSION['username']=$username;
           $_SESSION['role']=$role;
            echo "<script> alert('".$_SESSION['role']."".$_SESSION['username']."".$_SESSION['user_id']."')</script>";
            echo "<script>window.open('teacher/index.php','_self')</script>";
        }elseif ($role == 'GUARDIAN') {
            
            $_SESSION['user_id']=$id;
           $_SESSION['username']=$username;
           $_SESSION['role']=$role;
            echo "<script> alert('".$_SESSION['role']."".$_SESSION['username']."".$_SESSION['user_id']."')</script>";
            echo "<script>window.open('guardian/index.php','_self')</script>";
        }
    }
  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
	email<input type="text" name="username">
	password<input type="text" name="password">
	<input type="submit" name="login">
</form>
</body>
</html>

