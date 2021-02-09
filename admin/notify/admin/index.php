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
<head>
  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Add Class</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../../css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../../css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="../../fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../../css/animate.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="../../css/select2.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="../../css/datepicker.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../../style.css">
    <!-- Modernize js -->
    <script src="../../js/modernizr-3.6.0.min.js"></script>
</head>
<body>
   <!-- view courses -->
               
                        
  <form method="POST">
    <h1>add lectures</h1>
    <div class="row">
      <label>Course*</label>
      <select name="course_id" id="courses">
        
      </select>
    </div>
    <div class="row">
      <label>Class*</label>
      <select name="class" id="class">
        <option>select course </option>
        
      </select>
    </div>
    <div class="col-xl-3 col-lg-6 col-12 form-group">
      <label>batch *</label>
      <select name="batch" id="batch">
        <option>select course first</option>
      </select>
    </div>
    <div class="col-xl-3 col-lg-6 col-12 form-group">
      <label>lecture_name *</label>
      <input type="text" name="lecture_name">
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
                                        echo "<option value='$lect_time'>$lect_time</option>";
                                    }
                                      ?>
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
      <button type="submit" name="save" id="save">Save</button>
    </div>
  </form>
  <table border="1">
    <thead>
      <tr>
        <th>Time</th>
        <th>Monday</th>
        <th>tuesday</th>
        <th>wednesday</th>
        <th>thursday</th>
        <th>firday</th>
        <th>saturday</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
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
                      
                       <tr>
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
                            
                          <script src="../../js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="../../js/plugins.js"></script>
    <!-- Popper js -->
    <script src="../../js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="../../js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="../../js/datepicker.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="../../js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="../../js/main.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        assign_course();
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
        $("#courses").change(function () {
          var val = $(this).val();
          var course_id =  $("#courses option:selected").val();
          console.log("sdsdsd"+course_id)
          $.ajax({
            url : "action.php",
            method : "POST",
            data : {class:1,courseid:course_id},
            success : function(data){
                $("#class").html(data)
            }
        })
        });
    $("#class").change(function(){
        var val = $(this).val();
        var class_id = $("#class option:selected").val();
        console.log("hello"+class_id)
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {batch:1,classid:class_id},
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
