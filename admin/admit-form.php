<?php
include "../db.php";
// include "header.php";

if (isset($_POST["save"])) {
$first_name = $_POST["fname"];
$middle_name = $_POST["mname"];
$last_name = $_POST["lname"];
$gender = $_POST["gender"];
$Date_0f_Birth = $_POST["date_of_birth"];
$gradian_id = $_POST["gradian_id"];
$register_date = $_POST["registration_date"];
$eamil = $_POST["eamil"];
$course_name = $_POST["course"];
$class = $_POST["class"];
$batch = $_POST["batch"];
$phone = $_POST["phone"];
$status = $_POST["status"];
$image = $_FILES['image']['name'];
$temp_name1 = $_FILES['image']['tmp_name'];
move_uploaded_file($temp_name1,"student_images/$image");

$insert_student = "INSERT into student(guardian_id,first_name,middle_name,last_name,gender,date_of_birth,phone,registration_date,eamil,st_course_id,st_class_id,st_batch_id,student_image,status)values('$gradian_id','$first_name','$middle_name','$last_name','$gender','$Date_0f_Birth','$phone','$register_date','$eamil','$course_name','$class','$batch','$image','$status')";

$run_query = mysqli_query($con,$insert_student);
    if($run_query){
    echo "<h1>done</h1>";
    echo "<script> alert('New gradian Has Been Inserted')</script>";
echo "<script>window.open('all-student.php','_self')</script>";
   }
}
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:43:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Admission Form</title>
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
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <?php
        include "header.php";
        ?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
           <?php
            include "sidebar.php";
            ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        <li>Student Admit Form</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Students</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="POST">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" placeholder="first_name" name="fname" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Middle Name *</label>
                                    <input type="text" placeholder="" name="mname" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input type="text" placeholder="last_name" name="lname" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2" name="gender">
                                        <option value="">Please Select Gender *</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input type="text" placeholder="dd/mm/yyyy" name="date_of_birth" class="form-control air-datepicker"
                                        data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <!-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Roll</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div> -->
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian Name</label>
                                    <select class="select2" name="gradian_id" style="background-color: #1c1c3a;">
                                        <option value="">Please Select Guardian *</option>
                                         <?php
                                      $get_p_cats = "SELECT * FROM gradian";
                                    $run_p_cats = mysqli_query($con,$get_p_cats);
                                    while ($rows=mysqli_fetch_array($run_p_cats)) {
                                        $guardian_id = $rows['guardian_id'];
                                        $last_name = $rows['last_name'];
                                        $city = $rows['city'];
                                        $fname = $rows['first_name'];
                                        $email = $rows['email'];
                                        $mobile = $rows['phone_mobile'];
                                        echo "<option value='$guardian_id'>$fname||$last_name||$email||$mobile||$city</option>";
                                    }
                                      ?>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Registration Date *</label>
                                    <input type="text" placeholder="dd/mm/yyyy" name="registration_date" class="form-control air-datepicker"
                                        data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" placeholder="" name="eamil" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Course *</label>
                                    <select class="select2" name="course" id="student_course">
                                        <option value="">Please Select course*</option>
                                      
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="select2" name="class" id="student_class">
                                        <option value=""> Select course first*</option>
                                        
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Batch *</label>
                                    <select class="select2" name="batch" id="student_batch">
                                        <option value=""> Select class first *</option>
                                        
                                    </select>
                                </div>
                                <!-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Admission ID</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div> -->
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" name="phone" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                        rows="9"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Status *</label>
                                    <select class="select2" name="status">
                                        <option value="">Please Select status *</option>
                                        <option value="Y">Active</option>
                                        <option value="N">Inactive</option>
                                     
                                    </select>
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="save">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
                 <?php
                include "footer.php"
                ?>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
              st_course();
            // assign_teacher();
        function st_course(){
            $.ajax({
            url : "action.php",
            method : "POST",
            data : {assign_course:1},
            success : function(data){
                $("#student_course").html(data)
            }
        })
    }
    $("#student_course").change(function () {
        var val = $(this).val();
        var selected_course =  $("#student_course option:selected").val();
        console.log("sdsdsd"+selected_course)
            $.ajax({
            url : "action.php",
            method : "POST",
            data : {selected_accad_year:1,selectedcourse:selected_course},
            success : function(data){
                $("#student_class").html(data)
            }
        })
        });
    $("#student_class").change(function(){
        var val = $(this).val();
        var selected_class = $("#student_class option:selected").val();
        console.log("hello"+selected_class)
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {assign_class:1,selectedclass:selected_class},
            success :function(data){
                $("#student_batch").html(data)
            }
        })
     });
        });
    </script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:01 GMT -->
</html>