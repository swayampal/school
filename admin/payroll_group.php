<?php
include "../db.php";
?>
<?php
if (isset($_POST["save"])) {
	$group_name = $_POST["group_name"];
	$salary_sedule = $_POST["salary_sedule"];
    // $employee_to_group = $_POST["employee_to_group"];
    // $emp="";
    // foreach ($employee_to_group as $emp1) {
    //     $emp.=$emp1.",";
    // }
    $checkbox1=$_POST['payroll_group'];  
    $chk="";
    foreach($checkbox1 as $chk1)  
   {  
      $chk .= ", ".$chk1;  
   }  
	$insert_payroll_categries = "INSERT into payroll_group(payroll_grp_name,salary_seduled,payroll_cat_name,employees_ids)values('$group_name','$salary_sedule','$chk','$emp')";
	$run_query = mysqli_query($con,$insert_payroll_categries);
if($run_query){
echo "<script> alert('New categrie Inserted')</script>";
   
}
}
?>

<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Add Class</title>
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
                    <h3>Classes</h3>
                    <ul>
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        <li>PayRoll Categries</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add Class Area Start Here -->
                  <form class="new-added-form" method="POST">
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>PayRoll Categries Schedule</h3>
                            </div>
                           
                        </div>
                      
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Group Name *</label>
                                    <input type="text" placeholder="Categries Name" class="form-control" name="group_name">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Salary type *</label>
                                    <select class="select2" name="salary_sedule">
                                        <option value="">Please Select</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="weekly">Weekly</option>
                                    </select>
                                </div>                            
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>status *</label>
                                    <select class="select2" name="categrie_type" hidden>
                                        <option value="">Please Select status</option>
                                        <option value="Y">Active</option>
                                        <option value="N">Inactive</option>
                                    </select>
                                </div>
                                <!-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Amount*</label>
                                    <input type="text" placeholder="amount" class="form-control" name="amount">
                                </div>  -->
                                <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Assign Categrie To This Payroll Group</h3>
                            </div>
                           
                        </div>
                                  <?php
                $select_payroll_categries = "SELECT * from payroll_categrie";
                $employee_payroll_result = mysqli_query($con,$select_payroll_categries);
                ?>
                
                        <div class="heading-layout1">
                            
                        </div>
                        <table class="table display data-table text-nowrap">
                                <thead style="color: #fff;">
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
                       

                        echo "<tr style='color:#fff;'>
                        <td>
                        <div class='form-check'>
                        <input type='checkbox' name='payroll_group[]' value=".$row["payroll_cat_code"]." class='form-check-input'>
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
               
         </div>
    
 </div>
</div>

                <!-- view courses -->
               
              
                  <?php
                $select_payroll_categries = "SELECT * from staff";
                $employee_payroll_result = mysqli_query($con,$select_payroll_categries);
                   
                ?>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Assign Employee To This Payroll Group</h3>
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
                        <!-- <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by ID ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Class ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form> -->
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead style="color: #fff;">
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>CEmployee ID</th>
                                        <th>First Name</th>
                                        <th>staff categrie</th>
                                        <th>phone mobile</th>
                                        <th>staff_type</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                    while ($row = mysqli_fetch_array($employee_payroll_result)) {
                        echo "<tr style='color:#fff;'>
                        <td>
                        <div class='form-check'>
                        <input type='checkbox' name='employee_to_group[]' value=".$row["staff_id"]." class='form-check-input'>
                        <label class='form-check-label' style='color:#fff;'>".$row["staff_id"]."</label>
                        </div>
                        </td>
                        <td>".$row["staff_id"]."</td>
                        <td>".$row["first_name"]."</td>
                        <td>".$row["staff_categrie"]."</td>
                        <td>".$row["phone_mobile"]."</td>
                        <td>".$row["staff_type"]."</td>
                        
                        <td>
                        <div class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='flaticon-more-button-of-three-dots'></span>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right'>
                        <a class='dropdown-item' href='delete.php?delete_staff=".$row["staff_id"]."'><i class='fas fa-times text-orange-red'></i>Delete</a>
                        <a class='dropdown-item' href='edit_staff.php?edit_staff=".$row["staff_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>Edit</a>
                        <a class='dropdown-item' href='student_details.php?view_student_id=".$row["staff_id"]."'><i class='fas fa-redo-alt text-orange-peel'></i>view</a>
                          </div>
                          </div>
                          </td>
                        </tr>";
                    }
                    ?>
                                </tbody>
                            </table>
                             <div class="col-md-6 form-group"></div>
                <div class="col-12 form-group mg-t-8">
                 <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="save">Save</button>
                 <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
             </div>
                        </div>
                    </div>
                </div>
            </form>
                <!-- view courses -->
                 <?php
                $select_payroll_categries = "SELECT * from payroll_group";
                $employee_payroll_result = mysqli_query($con,$select_payroll_categries);
                   
                ?>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Class Schedules</h3>
                            </div>
                          
                        </div>
                        <!-- <form class="mg-b-20"> -->
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by ID ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Class ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        <!-- </form> -->
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead style="color: #fff;">
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Group ID</th>
                                        <th>Group Name</th>
                                        <th>Salary Sedule</th>
                                        <th>Salary Categrie</th>
                                        <th>Employees</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                    while ($row = mysqli_fetch_array($employee_payroll_result)) {
                        echo "<tr style='color:#fff;'>
                        <td>
                        <div class='form-check'>
                        <input type='checkbox' class='form-check-input'>
                        <label class='form-check-label' style='color:#fff;'>".$row["payroll_grp_id"]."</label>
                        </div>
                        </td>
                        <td>".$row["payroll_grp_id"]."</td>
                        <td>".$row["payroll_grp_name"]."</td>
                        <td>".$row["salary_seduled"]."</td>
                        <td>".$row["payroll_cat_name"]."</td>
                        <td>".$row["employees_ids"]."</td>
                        
                        <td>
                        <div class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='flaticon-more-button-of-three-dots'></span>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right'>
                        <a class='dropdown-item' href='delete.php?delete_payroll_group=".$row["payroll_grp_id"]."'><i class='fas fa-times text-orange-red'></i>Delete</a>
                        <a class='dropdown-item' href='edit_payroll_categrie.php?edit_payroll_group=".$row["payroll_grp_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>Edit</a>
                        <a class='dropdown-item' href='student_details.php?view_student_id=".$row["payroll_grp_id"]."'><i class='fas fa-redo-alt text-orange-peel'></i>view</a>
                          </div>
                          </div>
                          </td>
                        </tr>";
                    }
                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Add Class Area End Here -->
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:03 GMT -->
</html>