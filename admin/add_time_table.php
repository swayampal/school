<?php
include "../db.php";
if (isset($_POST["save"])) {
  $course_id = $_POST["course_id"];
  $class = $_POST["class"];
  $batch = $_POST["batch"];
  $lecture_name = $_POST["lecture_name"];
  $time = $_POST["time"];
  $lacture_day = $_POST["lacture_day"];
  $subject = $_POST["subject"];
  $lecturer = $_POST["lecturer"];
  $save_time_table = "INSERT into timetable(tt_course,tt_class,tt_batch,lacture_name,lecture_time,lecture_day,subject_name,teacher)values('$course_id','$class','$batch','$lecture_name','$time','$lacture_day','$subject','$lecturer')";
  $result_save = mysqli_query($con,$save_time_table);
  if ($result_save) {
    echo "<script>alert('done')</script>";
  }
}
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
                                <h3>Add Time Table</h3>
                            </div>
                        </div>
                        <form class="new-added-form" method="POST">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Course *</label>
                                    <select class="select2" name="course_id" id="courses">
                                       
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="select2" name="class" id="class">
                                        <option>Select Course First</option>
        
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Batch *</label>
                                    <select class="select2" name="batch" id="batch">
                                        <option>select Class first</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Lacture Name *</label>
                                    <input type="text" placeholder="" class="form-control" name="lecture_name">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Lacture Time</label>
                                     <select class="select2" name="time" id="time">
                                        <option>select time</option>

                                    </select>
                                </div>
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
                                
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="save">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
              assign_course();
              time();
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
    function time(){
            $.ajax({
            url : "action.php",
            method : "POST",
            data : {time:1},
            success : function(data){
                $("#time").html(data)
            }
        })
    }
     $("#courses").change(function () {
        var val = $(this).val();
        var selected_course =  $("#courses option:selected").val();
        console.log("sdsdsd"+selected_course)
            $.ajax({
            url : "action.php",
            method : "POST",
            data : {selected_accad_year:1,selectedcourse:selected_course},
            success : function(data){
                $("#class").html(data)
            }
        })
        });
      $("#class").change(function(){
        var val = $(this).val();
        var selected_class = $("#class option:selected").val();
        console.log("hello"+selected_class)
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {assign_class:1,selectedclass:selected_class},
            success :function(data){
                $("#batch").html(data)
            }
        })
     });
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
</html>

