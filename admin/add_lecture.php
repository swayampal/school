<?php
include "../db.php";
?>
<?php
if (isset($_POST["save"])) {
	$lecture_name = $_POST["lecture_name"];
	$time = $_POST["time"];
	// $end_time = $_POST["end_time"];
    $lacture_day = $_POST["lacture_day"];
    $subject = $_POST["subject"];
    $lecturer = $_POST["lecturer"];
	$insert_payroll_categries = "INSERT into lectures(lecture_name,lecture_time,lecture_day,subject_name,lecturer)values('$lecture_name','$time','$lacture_day','$subject','$lecturer')";
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
                        <li>Lecture</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add Class Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>PayRoll Categries Schedule</h3>
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
                                    <label>Lecture name*</label>
                                    <input type="text" placeholder="Categries Name" class="form-control" name="lecture_name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>time *</label>
                                    <select class="select2" name="time">
                                        <option value="">Please Select</option>
                                       <?php
                                      $get_p_depart = "SELECT * FROM lecture_time";
                                    $run_p_depart = mysqli_query($con,$get_p_depart);
                                    while ($rows=mysqli_fetch_array($run_p_depart)) {
                                        $lect_time = $rows['lect_time'];
                                        // $session_name = $rows['session_name'];
                                        echo "<option value='$lect_time'>$lect_time</option>";
                                    }
                                      ?>
                                  </select>
                                </div>
                                                           
                                <!-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>End time *</label>
                                    <input type="time" placeholder="code" class="form-control" name="end_time" value="22:00">
                                </div> -->
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>lacture day*</label>
                                    <select class="select2" name="lacture_day">
                                        <option value="">Please Select</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                        <option value="saturday">Saturday</option>
                                    </select>
                                </div> 
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Subject name</label>
                                    <select class="select2" name="subject" id="subject_list">
                                        <option value="">select subject</option>
                                       <?php
                                      $get_p_depart = "SELECT * FROM session";
                                    $run_p_depart = mysqli_query($con,$get_p_depart);
                                    while ($rows=mysqli_fetch_array($run_p_depart)) {
                                        $session_id = $rows['session_id'];
                                        $session_name = $rows['session_name'];
                                        echo "<option value='$session_id'>$session_name</option>";
                                    }
                                      ?>
                                  </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>lecturer</label>
                                    <select class="select2" name="lecturer" id="techer_acord_subject">
                                        <option>select subject first</option>
                                       
                                  </select>
                                </div>
                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="save">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- view courses -->
                <?php
                $select_lecture = "SELECT l.*,sc.*,sf.* from lectures as l
                INNER JOIN session as sc ON l.subject_name = sc.session_id
                INNER JOIN staff as sf ON l.lecturer = sf.staff_id";
                $lecture_result = mysqli_query($con,$select_lecture);
                ?>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Class Schedules</h3>
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
                        <form class="mg-b-20">
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
                        </form>
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
                                        <th>lecture name</th>
                                        <th>start time</th>
                                        <th>emd time</th>
                                        <th>lacture day</th>
                                        <th>Subject</th>
                                        <th>lecturer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                    while ($row = mysqli_fetch_array($lecture_result)) {
                        echo "<tr style='color:#fff;'>
                        <td>
                        <div class='form-check'>
                        <input type='checkbox' class='form-check-input'>
                        <label class='form-check-label' style='color:#fff;'>".$row["lecture_id"]."</label>
                        </div>
                        </td>
                        <td>".$row["lecture_name"]."</td>
                        <td>".$row["lecture_time"]."</td>
                        <td>".$row["lecture_day"]."</td>
                        <td>".$row["session_name"]."</td>
                        <td>".$row["first_name"]." ".$row["last_name"]."</td>
                        <td>
                        <div class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='flaticon-more-button-of-three-dots'></span>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right'>
                        <a class='dropdown-item' href='delete.php?delete_payroll_categrie=".$row["lecture_id"]."'><i class='fas fa-times text-orange-red'></i>Delete</a>
                        <a class='dropdown-item' href='edit_payroll_categrie.php?edit_payroll_categrie=".$row["lecture_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>Edit</a>
                        <a class='dropdown-item' href='student_details.php?view_student_id=".$row["lecture_id"]."'><i class='fas fa-redo-alt text-orange-peel'></i>view</a>
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
    <script type="text/javascript">
    	$(document).ready(function(){
    		 $("#subject_list").change(function(){
        var val = $(this).val();
        var selected_subject = $("#subject_list option:selected").val();
        console.log("hello"+selected_subject)
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {subject:1,selectedsubject:selected_subject},
            success :function(data){
                $("#techer_acord_subject").html(data)
            }
        })
     });
    	});
    </script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:03 GMT -->
</html>