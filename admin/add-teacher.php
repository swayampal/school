<?php
include "../db.php";
if (isset($_POST["save"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $join_date = $_POST["join_date"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];
    $phone_emergency = $_POST["phone_emergency"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $post_code = $_POST["post_code"];
    $certification = $_POST["certification"];
    $expirence = $_POST["expirence"];
    // $staff_department = $_POST["staff_department"];
    $staff_categries = $_POST["staff_categries"];
    $staff_type = $_POST["staff_type"];
    $email = $_POST["email"];
    $status = $_POST["status"];
    $save_staff = "INSERT into staff(joining_date,first_name,last_name,gender,phone_mobile,phone_emergency,address1,address2,city,post_code,certification,expirence_in_yraar,staff_categrie,staff_type,email,active)values('$join_date','$first_name','$last_name','$gender','$mobile','$phone_emergency','$address1','$address2','$city','$post_code','$certification','$expirence','$staff_categries','$staff_type','$email','$status')";
    $result_save_staff = mysqli_query($con,$save_staff);
    if ($result_save_staff) {
         echo "<script> alert('New gradian Has Been Inserted')</script>";
echo "<script>window.open('all-teacher.php','_self')</script>";    }
}
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-teacher.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Add Teacher</title>
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
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        <li>Add New Teacher</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Teacher</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="POST">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" placeholder="first_name" class="form-control" name="first_name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input type="text" placeholder="last_name" class="form-control" name="last_name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Joining Date *</label>
                                    <input type="text" placeholder="Join On" class="form-control air-datepicker" name="join_date">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2" name="gender">
                                        <option value="">Please Select Gender *</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Mobile No*</label>
                                    <input type="text" placeholder="mobile" class="form-control" name="mobile" maxlength="10">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Mobile Emergency *</label>
                                    <input type="text" placeholder="Mobile emergency" class="form-control" name="phone_emergency" maxlength="10">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address 1 *</label>
                                    <input type="text" placeholder="Address 1" class="form-control" name="address1">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address 2 *</label>
                                    <input type="text" placeholder="Address 2" class="form-control" name="address2">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>City *</label>
                                    <input type="text" placeholder="City" class="form-control" name="city">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Post Code *</label>
                                    <input type="text" placeholder="Post Code" class="form-control" name="post_code">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Certification *</label>
                                    <input type="text" placeholder="Certification" class="form-control" name="certification">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Expirence *</label>
                                    <input type="text" placeholder="Expirence" class="form-control" name="expirence">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Categrie *</label>
                                    <select class="select2" name="staff_categries">
                                        <option value="">Please Select Categrie *</option>
                                        <?php
                                      $get_p_depart = "SELECT * FROM staff_categries";
                                    $run_p_depart = mysqli_query($con,$get_p_depart);
                                    while ($rows=mysqli_fetch_array($run_p_depart)) {
                                        $staff_categries_id = $rows['staff_categries_id'];
                                        $staff_categries_name = $rows['staff_categries_name'];
                                        $staff_categries_prifix = $rows['staff_categries_prifix'];
                                        
                                        echo "<option value='$staff_categries_id'>$staff_categries_name($staff_categries_prifix)</option>";
                                    }
                                      ?>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Staff Type *</label>
                                    <select class="select2" name="staff_type">  
                                        <option value="">Please Select Type *</option>
                                        <option value="permanet">Permanent</option>
                                        <option value="visiting">Visiting</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" placeholder="E-Mail" class="form-control" name="email">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Status *</label>
                                    <select class="select2" name="status">
                                        <option value="">Please Select Status *</option>
                                        <option value="Y">Active</option>
                                        <option value="N">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="save">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
                <?php
               include "footer.php";
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
    <!-- Smoothscroll Js -->
    <script src="js/jquery.smoothscroll.min.php"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-teacher.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:02 GMT -->
</html>