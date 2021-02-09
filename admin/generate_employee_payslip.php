<?php
include "../db.php";
$view_id = $_GET["generate_payslip"];
$select_staff = "SELECT st.* from staff as st where staff_id = '$view_id'";
$result_staff = mysqli_query($con,$select_staff);
$row_staff = mysqli_fetch_array($result_staff);

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
                        <li>Generate Employee Payslip: Admin User</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                       
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="img/figure/teacher.jpg" alt="teacher">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">Jessia Rose</h3>
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
                                        <tbody style="color: #fff;">
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $row_staff["first_name"];?></td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $row_staff["gender"];?></td>
                                            </tr>
                                            <tr>
                                                <td>Joining Date:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $row_staff["joining_date"];?></td>
                                            </tr>
                                            <tr>
                                                <td>Mobile:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $row_staff["phone_mobile"];?></td>
                                            </tr>
                                            <tr>
                                                <td>Expirence:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $row_staff["expirence_in_yraar"];?></td>
                                            </tr>
                                          
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                        <h3 style="color: #fff;"><b>Payroll Details</b></h3>
                        <table style="color: #fff;">
                            <tr>
                                <td>Payroll group</td>
                                <td></td>
                                <td></td>
                                <td>      :permanent</td>
                            </tr>
                        </table>
                        <br>
                        <br>
                       <h3 style="color: #fff;">Payroll categories of this payroll group</h3>
                       <?php
              $select_payroll_categries = "SELECT * from payroll_categrie";
$employee_payroll_result = mysqli_query($con,$select_payroll_categries);
?>
 <table id="new">
             <thead>
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Categrie name</th>
                                        <th>Categrie code</th>
                                        <th>Categrie Type</th>
                                        <th>Categrie Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                    while ($row = mysqli_fetch_array($employee_payroll_result)) {
                       

                        echo "<tr>
                        <td>
                        <div class='form-check'>
                        <input type='checkbox' name='payroll_group' value=".$row["amount"]." class='form-check-input'>
                        <label class='form-check-label' style='color:#fff;'>".$row["payroll_cat_id"]."</label>
                        </div>
                        </td>
                        <td>".$row["payroll_cat_name"]."</td>
                        <td>".$row["payroll_cat_code"]."</td>
                        <td>".$row["categrie_type"]."</td>
                        <td>".$row["amount"]."</td>
                        <td>
                        <div class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='flaticon-more-button-of-three-dots'></span>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right'>
                        <a class='dropdown-item' href='delete.php?delete_payroll_categrie=".$row["payroll_cat_id"]."'><i class='fas fa-times text-orange-red'></i>Delete</a>
                        <a class='dropdown-item' href='edit_payroll_categrie.php?edit_payroll_categrie=".$row["payroll_cat_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>Edit</a>
                        <a class='dropdown-item' href='student_details.php?view_student_id=".$row["payroll_cat_id"]."'><i class='fas fa-redo-alt text-orange-peel'></i>view</a>
                          </div>
                          </div>
                          </td>
                        </tr>";
                    }
                    ?>
                        
                    </tbody>
    </table>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Group Name *</label>
                                    <input type="text" placeholder="Categries Name" class="form-control" name="group_name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    
                                    <button id="calculate">calculate</button>
                                </div>
                                <p id="result"></p>
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
    <script type="text/javascript">
        $(document).ready(function(){
             $(function() {
            $("#calculate").click(function() {
            
                var total = 0;

                $("#new").ready(function() {
                $("tbody:first tr").each(function() {
                    if ($(this).children("td").first().children("div").children("input").is(":checked")) {
                        if ("dituction" == $(this).children("td").eq(3).text()) total = total - parseInt($(this).children("td").eq(4).text());
                        else if ("earning" == $(this).children("td").eq(3).text()) total = total + parseInt($(this).children("td").eq(4).text());
                    }
                });
                alert(total);
            });
            });
        });
        //       $("#button").click(function(){
        //     var favorite = [];
        //    $.each($("input[name='payroll_group']:checked"), function(){
        //         favorite.push($(this).val());
        //     });
        //    var total = 
        //     console.log("My favourite sports are: " + favorite);
        //     $('#result').html(favorite);

        // });
             // $("#payroll_group [type='checkbox']").val();
        // $("button").click(function(){
        //     var favorite = [];
        //     $.each($("#payroll_group[name='payroll_group']:checked"), function(){
        //         favorite.push($(this).val());
        //     });
        //     alert("My favourite sports are: " + favorite.join(", "));
        // });

           //  $('#payroll_group').val();
           //  $('#payroll_group').is(":checked");
           // var selected_course = $("#payroll_group [type='checkbox']").val();
            
        })
    </script>

</body>

<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:02 GMT -->
</html>



