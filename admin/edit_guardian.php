<?php
include "../db.php";
$edit_id = $_GET["edit_guardian"];
$select_guardian = "SELECT * from gradian where guardian_id = '$edit_id'";
$guardian_result = mysqli_query($con,$select_guardian);
$row_guardian = mysqli_fetch_array($guardian_result);
$guardian_id = $row_guardian["guardian_id"];
$first_name = $row_guardian["first_name"];
$middle_name = $row_guardian["middel_name"];
$last_name = $row_guardian["last_name"];
$occupation = $row_guardian["occupation"];
$guardian_relation = $row_guardian["guardian_relation"];
$address1 = $row_guardian["address1"];
$address2 = $row_guardian["address2"];
$city = $row_guardian["city"];
$post_code = $row_guardian["post_code"];
$phone_mobile = $row_guardian["phone_mobile"];
$phone_emergency = $row_guardian["phone_emergency"];
$adhar_no = $row_guardian["adhar_no"];
$email = $row_guardian["email"];
$adhar_id = $row_guardian["adhar_id"];
$active = $row_guardian["active"];
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-parents.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Add Parents</title>
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
                    <h3>Parents</h3>
                    <ul>
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        <li>Add New Parents</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Parents</h3>
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
                                    <input type="text" placeholder="" class="form-control" name="fname" value="<?php echo $first_name;?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Middel Name *</label>
                                    <input type="text" placeholder="" class="form-control" name="mname" value="<?php echo $middle_name;?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input type="text" placeholder="" class="form-control" name="lname" value="<?php echo $last_name;?>">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Occupation</label>
                                    <input type="text" placeholder="" class="form-control" name="occupation" value="<?php echo $occupation;?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Relation *</label>
                                    <input type="text" placeholder="" class="form-control" name="relation" value="<?php echo $guardian_relation;?>">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address1</label>
                                    <input type="text" placeholder="" class="form-control" name="address1" value="<?php echo $address1;?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address2</label>
                                    <input type="text" placeholder="" class="form-control" name="address2" value="<?php echo $address2;?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>City *</label>
                                    <input type="text" placeholder="" class="form-control" name="city" value="<?php echo $city;?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Post_code *</label>
                                    <input type="text" placeholder="" class="form-control" name="post_code" value="<?php echo $post_code;?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" class="form-control" name="phone" value="<?php echo $phone_mobile;?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone_emergency</label>
                                    <input type="text" placeholder="" class="form-control" name="Phone_emergency" value="<?php echo $phone_emergency;?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Status *</label>
                                    <select class="select2" name="status">
                                        <option value="<?php echo $active;?>"><?php if($active == 'Y'){
                                        	echo "active";
                                        }else{
                                        	echo "Inactive";
                                        }?></option>
                                        <option value="Y">ACtive</option>
                                        <option value="N">Inactive</option>
                                    </select>
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Adhar ID</label>
                                    <input type="text" placeholder="" class="form-control" name="adharno" value="<?php echo $adhar_no;?>">
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail optional</label>
                                    <input type="email" placeholder="" class="form-control" name="email" value="<?php echo $email;?>">
                                </div>
                               
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload ID Photo (150px X 150px)</label>
                                    <input type="file" class="form-control-file" name="IDimage" value="<?php echo $adhar_id;?>">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="update">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
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

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-parents.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:02 GMT -->
</html>
<?php
if (isset($_POST["update"])) {
	 $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $occupation = $_POST["occupation"];
    $relation = $_POST["relation"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $post_code = $_POST["post_code"];
    $phone = $_POST["phone"];
    $phone_emergency = $_POST["Phone_emergency"];
    $adharno = $_POST["adharno"];
    $email = $_POST["email"];
    $status = $_POST["status"];
    $IDimage = $_FILES['IDimage']['name'];
    $temp_name1 = $_FILES['IDimage']['tmp_name'];
    move_uploaded_file($temp_name1,"picture/$IDimage");
    $update_guardian = "UPDATE gradian set first_name='$fname',middel_name='$mname',last_name='$lname',occupation='$occupation',guardian_relation='$relation',address1='$address1',address2='$address2',city='$city',post_code='$post_code',phone_mobile='$phone',phone_emergency='$phone_emergency',adhar_no='$adharno',email='$email',adhar_id='$IDimage',active='$status' where guardian_id = '$edit_id'";
    $update_guardian_result = mysqli_query($con,$update_guardian);
    if($update_guardian_result){
    echo "<h1>done</h1>";
    echo "<script> alert('New gradian Has Been Inserted')</script>";
echo "<script>window.open('all-parents.php','_self')</script>";
   }
}
?>
