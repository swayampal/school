<?php
include "../db.php";
?>


<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nexzas | Add Class</title>
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
                                    <label>Course*</label>
                                    <select id="timetable_course" name="course_id" class="select2">
    
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select id="timetable_class" name="class_id" class="select2">
                                        <option>select course first</option>
                                    </select>
                                </div>                            
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Batch *</label>
                                    <select id="timetable_batch" name="batch_id" class="select2">
                                        <option>select class first</option>
                                    </select>
                                    
                                </div>
                                 
                               
                               <
                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="save" id="save">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            
               
               
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
                                                <label class="form-check-label">Time</label>
                                            </div>
                                        </th>
                                        <?php
                                        // $select_days = "SELECT * from "
                                        ?>
                                        <!-- <th>Days</th> -->
                                        <th>Monday</th>
                                        <th>tuesday</th>
                                        <th>wednesday</th>
                                        <th>thursday</th>
                                        <th>firday</th>
                                        <th>saturday</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <td>
                        <div class='form-check'>
                        <input type='checkbox' class='form-check-input'>
                        <label class='form-check-label' style='color:#fff;'>".$row["timetable_id"]."</label>
                        </div>
                        </td> -->
                        <?php
                        // $time = "SELECT * from lecture_time";
                        ?>

                 
                    <tr style="color: #fff;">
                        <td>11am to 1pm</td>
                         <?php
                $tuesday_lectures = "SELECT * from timetable where lecture_time = '11am to 1pm' and lecture_day = 'monday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'monday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                   $tuesday_lectures = "SELECT * from timetable where lecture_time = '11am to 1pm' and lecture_day = 'tuesday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'tuesday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                   $tuesday_lectures = "SELECT * from timetable where lecture_time = '11am to 1pm' and lecture_day = 'wednesday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'wednesday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                   $tuesday_lectures = "SELECT * from timetable where lecture_time = '11am to 1pm' and lecture_day = 'thursday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'thursday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                    $tuesday_lectures = "SELECT * from timetable where lecture_time = '11am to 1pm' and lecture_day = 'firday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'firday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                   $tuesday_lectures = "SELECT * from timetable where lecture_time = '11am to 1pm' and lecture_day = 'saturday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'saturday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                
               ?>
                    </tr>
                      
                       <tr style="color: #fff;">
                        <td>1pm to 3pm</td>
                         <?php
                $tuesday_lectures = "SELECT * from timetable where lecture_time = '1pm to 3pm' and lecture_day = 'monday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'monday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                   $tuesday_lectures = "SELECT * from timetable where lecture_time = '1pm to 3pm' and lecture_day = 'tuesday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'tuesday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                   $tuesday_lectures = "SELECT * from timetable where lecture_time = '1pm to 3pm' and lecture_day = 'wednesday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'wednesday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                   $tuesday_lectures = "SELECT * from timetable where lecture_time = '1pm to 3pm' and lecture_day = 'thursday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'thursday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                    $tuesday_lectures = "SELECT * from timetable where lecture_time = '1pm to 3pm' and lecture_day = 'firday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'firday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                   $tuesday_lectures = "SELECT * from timetable where lecture_time = '1pm to 3pm' and lecture_day = 'saturday'";
               $result_1to3 = mysqli_query($con,$tuesday_lectures);
               $monday_1to3 = mysqli_fetch_array($result_1to3);
                     if ($monday_1to3 &&$monday_1to3["lecture_day"] == 'saturday') {
                   
                       echo "<td>".$monday_1to3["lacture_name"]."</td>";
                   }else{
                    echo "<td> no class</td>";
                   
                   }
                
               ?>
                    </tr>
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
              assign_course();
              // time();
        function assign_course(){
            $.ajax({
            url : "action.php",
            method : "POST",
            data : {assign_course:1},
            success : function(data){
                $("#courses").html(data)
            }
        })
          }

    // $("#timetable_course").change(function(){
    //     var val = $(this).val();
    //     var courses = $("#timetable_course option:selected").val();
    //     console.log(courses)
    //     $.ajax({
    //         url : "action.php",
    //         method : "POST",
    //         data : {course:1,timetablecourse:courses},
    //         success : function(data){
    //             $("#timetable_class").html(data)
    //         }
    //     })
    // });
    // $("#timetable_class").change(function(){
    //     var val = $(this).val();
    //     var classe = $("#timetable_class option:selected").val();
    //     console.log(classe)
    //     $.ajax({
    //         url : "action.php",
    //         method : "POST",
    //         data : {classes:1,timetableclass:classe},
    //         success : function(data){
    //             $("#timetable_batch").html(data)
    //         }
    //     })
    // });

    // $("#timetable_batch").change(function(){
    //     var val = $(this).val();
    //     var batch = $("#timetable_batch option:selected").val();
    //     console.log(batch)
    //     $.ajax({
    //         url : "action.php",
    //         method : "POST",
    //         data : {batches:1,timetablebatch:batch},
    //         success : function(data){
    //             $("#lecture").html(data)
    //         }
    //     })
    // });


    	});
    </script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:03 GMT -->
</html>
