<?php
include "../db.php";
if (isset($_GET["pay_fees"])) {
    $view_id = $_GET["pay_fees"];
$view_student_detail = "SELECT s.*,co.course_name,cl.class_name,bt.batch_name,fe.fees_amount,fe.fees_shedule_id from student as s INNER JOIN course as co ON s.st_course_id = co.course_id INNER JOIN class as cl ON s.st_class_id = cl.class_id INNER JOIN batches as bt ON s.st_batch_id = bt.batch_id
    INNER JOIN fees_shedule as fe ON s.st_class_id = fe.class_id where s.st_class_id = '$view_id'";
$view_result = mysqli_query($con,$view_student_detail);
$view_row = mysqli_fetch_array($view_result);
$student_id = $view_row["student_id"];
$guardian_id = $view_row["guardian_id"];
$first_name = $view_row["first_name"];
$middle_name = $view_row["middle_name"];
$last_name = $view_row["last_name"];
$gender = $view_row["gender"];
$date_of_birth = $view_row["date_of_birth"];
$phone = $view_row["phone"];
$registration_date = $view_row["registration_date"];
$email = $view_row["eamil"];
$academic_year = $view_row["class_name"];
$course_id = $view_row["course_name"];
$fees_shedule_id = $view_row["fees_shedule_id"];
$fees_amount = $view_row["fees_amount"];
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:43:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NEXgSCHOOL | Students Details</title>
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
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        <li>Student Details</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Details Area Start Here -->
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
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <!-- <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="img/figure/student1.jpg" alt="student">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"><?php $name=$first_name." ".$middle_name." ".$last_name;
                                    echo " $name";?></h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p style="color: #fff;">Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale 
                                word moun taiery.Aliquam erat volutpaturabiene natis massa sedde  sodale 
                                word moun taiery.</p>
                                
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody style="color: #fff;">
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium"><?php echo " $name"; ;?></td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $email;?></td>
                                            </tr>
                                            <tr>
                                                <td>Admission Date:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $registration_date;?></td>
                                            </tr>
                                            <tr>
                                                <td>Class:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $course_id;?></td>
                                            </tr>
                                            <tr>
                                                <td>Accadmic_year:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $academic_year;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="" method="POST">
                        <input type="text" name="balanced" id="insert_balance" hidden>
                     <?php
                $select_tt = "SELECT s.*,co.course_name,cl.class_name,bt.batch_name,fe.fees_amount,fe.fees_shedule_id from student as s INNER JOIN course as co ON s.st_course_id = co.course_id INNER JOIN class as cl ON s.st_class_id = cl.class_id INNER JOIN batches as bt ON s.st_batch_id = bt.batch_id
    INNER JOIN fees_shedule as fe ON s.st_class_id = fe.class_id where s.st_class_id = '$view_id'";
                
                $tt_result = mysqli_query($con,$select_tt);
                ?>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Class Schedules</h3>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead style="color: #fff;">
                                    <tr>
                                        <th>
                                            <label class="form-check-label">ID</label>
                                        </th>
                                        <th>Fees Collection</th>
                                        <th>Actual amount (Rupees)</th>
                                        <th>Amount to pay (Rupees)</th>
                                        <th>Pay fees ($)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                    while ($row = mysqli_fetch_array($tt_result)) {
                        echo "<tr style='color:#fff;'>
                        <td>
                        
                        
                        <label class='form-check-label' style='color:#fff;'>".$row["fees_shedule_id"]."</label>
                        
                        </td>
                        <td>".$row["first_name"]."</td>
                        <td>".$row["fees_amount"]."</td>
                        <td>".$row["fees_amount"]."</td>
                        <td><input type='text' id='set_amount' name='paid_amount' value='".$row["fees_amount"]."'></td>
                        
                        </tr>
                        <tr style='color:#fff;line-height: 200px;border:0;'>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style='color:#fff;border:0;'>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Amount</td>
                            <td style='color:#fff;'><input type='text' value='".$row["fees_amount"]."' id='main_amount' disabled></td>
                        </tr>
                        <tr style='color:#fff;border:0;'>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Balance Amount</td>
                            <td><p id='result' style='color:#fff;'></p></td>
                        </tr>";
                    }
                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Payment Mode *</label>
                            <input type="text" placeholder="Categries Name" class="form-control" name="group_name" value="Cash" disabled>
                             </div>
                             <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label style="align-items: right;">Amount Remaining *</label>
                                <p id="amount_to_pay" style="color: #fff;"></p>
                            </div>
                             <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="save">Pay fees</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Print summery</button>
                                </div>
                    </div>
                </div>
                </form>
                </div>
                <!-- <tr style="line-height: 10px"></tr> -->
                <!-- Student Details Area End Here -->
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
    <script type="text/javascript">
        $(document).ready(function(){
          
            $("#set_amount").change(function(){
                
                  var val = $(this).val();
                var main_amount = $("#main_amount").val();
                console.log("guuwuuddh"+main_amount);
                var val = $(this).val();
                var set_value = $("#set_amount").val();
                
                console.log("guuwuuddh"+set_value);
                // var result = var(main_amount)+var(set_amount);
                 // console.log("guuwuuddh"+result);
                // $('#result').html(main_amount + '+' + set_amount + '=' (parseInt(main_amount)+parseInt(set_amount)));
                var total = +main_amount - +set_value;
                console.log("gj"+total)
                $('#insert_balance').val(total);
        $('#result').html(total);
        $('#amount_to_pay').html(total);
        // $('#insert_balance').html(total);

            });
        });
    </script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:43:58 GMT -->
</html>
<?php
if (isset($_POST["save"])) {
    $paid_amount = $_POST["paid_amount"];
    $balanced = $_POST["balanced"];
    $save_fees = "INSERT into fees_indicidual(fees_id,student_id,fees_amount,paid_amount,balance_amount,payment_method)values('$fees_shedule_id','$student_id','$fees_amount','$paid_amount','$balanced','Cash')";
    $result_save_fees = mysqli_query($con,$save_fees);
    if ($result_save_fees) {
        echo "<script> alert('New Book Inserted')</script>";
    }

}
}
?>
