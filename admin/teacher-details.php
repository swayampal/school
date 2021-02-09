<?php
include "../db.php";
$view_id = $_GET["view_teacher"];
$view_staff = "SELECT * from staff where staff_id = '$view_id'";
$result_view = mysqli_query($con,$view_staff);
$row_view = mysqli_fetch_array($result_view);
$joining_date = $row_view["joining_date"];
$first_name = $row_view["first_name"];
$last_name = $row_view["last_name"];
$gender = $row_view["gender"];
$phone_mobile = $row_view["phone_mobile"];
$phone_emergency = $row_view["phone_emergency"];
$address1 = $row_view["address1"];
$address2 = $row_view["address2"];
$city = $row_view["city"];
$post_code = $row_view["post_code"];
$certification = $row_view["certification"];
$expirence_in_yraar = $row_view["expirence_in_yraar"];
$staff_department = $row_view["staff_department"];
$staff_categrie = $row_view["staff_categrie"];
$staff_type = $row_view["staff_type"];
$email = $row_view["email"];
$active = $row_view["active"];
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Teacher Details</title>
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
                        <li>Teacher Details</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About Me</h3>
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
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="img/figure/teacher.jpg" alt="teacher">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"><?php $name=$first_name." ".$last_name;
                                    echo " $name";?></h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale 
                                word moun taiery.Aliquam erat volutpaturabiene natis massa sedde  sodale 
                                word moun taiery.</p>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $name;?></td>
                                            </tr>
                                            <tr>
                                                <td>Join Date:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $joining_date;?></td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $gender;?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone Mobile:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $phone_mobile;?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone Emergency:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $phone_emergency;?></td>
                                            </tr>
                                            <tr>
                                                <td>Address 1:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $address1;?></td>
                                            </tr>
                                            <tr>
                                                <td>Address 2:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $address2;?></td>
                                            </tr>
                                            <tr>
                                                <td>City:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $city;?></td>
                                            </tr>
                                            <tr>
                                                <td>POST Code:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $post_code;?></td>
                                            </tr>
                                            <tr>
                                                <td>Certification:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $certification;?></td>
                                            </tr>
                                            <tr>
                                                <td>Expirence:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $expirence_in_yraar;?></td>
                                            </tr>
                                            <tr>
                                                <td>Department:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $staff_department;?></td>
                                            </tr>
                                            <tr>
                                                <td>Categrie:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $staff_categrie;?></td>
                                            </tr>
                                            <tr>
                                                <td>Staff Type:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $staff_type;?></td>
                                            </tr>
                                            <tr>
                                                <td>E-Mail:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $email;?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:02 GMT -->
</html>