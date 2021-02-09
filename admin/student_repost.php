<?php
include "../db.php";
if (isset($_POST["save"])) {
    $course_id = $_POST["course_id"];
    $accadmic_year = $_POST["accadmic_year"];
	$batches = $_POST["batches"];
	$staff = $_POST["staff"];
    $subject = $_POST["subject"];
	$status = $_POST["status"];
    $assign_course = "INSERT into assign_course(assign_course,assign_acc_year,assign_batch,assign_subject,staff_id,status)values('$course_id','$accadmic_year','$batches','$subject','$staff','$status')";
	$assign_course_result = mysqli_query($con,$assign_course);
	if ($assign_course_result) {
		echo "<script> alert('course assign')</script>";
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
                    <h3>Assign</h3>
                    <ul>
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        <li>Add New Department</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add Class Area Start Here -->
                 <form class="form-horizontal" action="" method="post" name="upload_excel" enctype="multipart/form-data">
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Department Schedule</h3>
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
                        
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>course Name*</label>
                                    <select id="assign_course_list" name="course_id" class="select2">
    
                                    </select>
                                   
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Accadmic Year*</label>
                                    
                                    <select id="assign_accad_list" name="accadmic_year" class="select2">
                                    <option>Select course First</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Batchs *</label>
                                    <select class="select2" name="batches" style="background-color: #1c1c3a;" id="assign_batch">
                                        <option value="">Select class first</option>
                                         
                                    </select>
                                </div>  
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Subject *</label>
                                    <select class="select2" name="subject" style="background-color: #1c1c3a;" id="assigned_subject">
                                       
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Staff *</label>
                                    <select class="select2" name="staff" style="background-color: #1c1c3a;" id="assigned_teacher">
                                        
                                    </select>
                                </div>                            
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Status *</label>
                                    <select class="select2" name="status">
                                        <option value="">Please Select</option>
                                        <option value="Y">Active</option>
                                        <option value="N">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="save">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <!-- view courses -->
                
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
                        
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by ID ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <!-- <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Class ..." class="form-control">
                                </div> -->
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <a href="student_export.php"><button type="submit" name="export" class="fw-btn-fill btn-gradient-yellow" id="pdf_export">Export PDF</button></a>
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <a href="student_export.php"><button type="submit" name="export" class="fw-btn-fill btn-gradient-yellow" id="csv_export">Export Csv</button></a>
                                </div>
                            </div>
                        
                        <div class="table-responsive" id="employee_table">
                            <table class="table display data-table text-nowrap" id="student">
                                
                               
                                
                            </table>
                        </div>
                    </div>
                </div>
            </form>
              
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
            assign_teacher();
            view_all_students();
        function assign_course(){
            $.ajax({
            url : "action.php",
            method : "POST",
            data : {assign_course:1},
            success : function(data){
                $("#assign_course_list").html(data)
            }
        })
    }
    
    function assign_teacher(){
            $.ajax({
            url : "action.php",
            method : "POST",
            data : {view_all_students:1},
            success : function(data){
                $("#assigned_teacher").html(data)
            }
        })
    }
    // view students
      function view_all_students(){
            $.ajax({
            url : "action.php",
            method : "POST",
            data : {viewallstudent:1},
            success : function(data){
                $("#student").html(data)
            }
        })
    }
    // view students

     $("#assign_course_list").change(function () {
        var val = $(this).val();
        var selected_course =  $("#assign_course_list option:selected").val();
        console.log("sdsdsd"+selected_course)
            $.ajax({
            url : "action.php",
            method : "POST",
            data : {selected_accad_year:1,selectedcourse:selected_course},
            success : function(data){
                $("#assign_accad_list").html(data)
            }
        })
        });
     $("#assign_accad_list").change(function(){
        var val = $(this).val();
        var selected_class = $("#assign_accad_list option:selected").val();
        console.log("hello"+selected_class)
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {assign_class:1,selectedclass:selected_class},
            success :function(data){
                $("#assign_batch").html(data)
            }
        })
     });
     $("#assign_batch").change(function(){
        var val = $(this).val();
        var selected_batch = $("#assign_batch option:selected").val();
        console.log("helloooo"+selected_batch)
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {assign_subject:1,selectedbatch:selected_batch},
            success :function(data){
                $("#assigned_subject").html(data)
            }
        })
     });

     // $('#create_excel').click(function(){  
     //       var excel_data = $('#employee_table').html();  
     //       var page = "excel.php?data=" + excel_data;  
     //       window.location = page;  
     //  }); 
//      $("#create_excel").click(function() {
// var export_type = $(this).data('export-type');
// $('#student').tableExport({
// type : export_type,
// escape : 'false',
// ignoreColumn: []
// });
// });
//  $("#try").click(function () {
// $('#student').tableExport({
// type:'pdf',
// jspdf: {
// orientation: 'p',
// margins: {
// left:20, top:10
// },
// autotable: false
// }
// });
// });
    
    $("#pdf_export").click(function(){
        html2canvas($('#student')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
    });
    });


    </script>
</body>
</html>

<?php

if (isset($_POST["export"])) {
// $query = $con->query("SELECT * from student");
// if($query->num_rows > 0){
//     $delimiter = ",";
//     $filename = "Student_list_" . date('Y-m-d') . ".csv";
//     $f = fopen('php://output', 'w');
//     $fields = array('Guardian', 'Name', 'Gender', 'Rejistration Date', 'Date of birth', 'Course', 'Class', 'Batch', 'Phone', 'E-mail');
//     fputcsv($f, $fields, $delimiter);
//     while($row = $query->fetch_assoc()){
//         $lineData = array($row['first_name'], $row['first_name'], $row['gender'], $row['registration_date'], $row['date_of_birth'], $row['st_course_id'], $row['st_class_id'], $row['st_batch_id'], $row['phone'], $row['eamil']);
//         fputcsv($f, $lineData, $delimiter);
//     }
//     // fseek($f, 0);
//     header('Content-Type: text/pdf; charset=utf-8');
//     header('Content-Disposition: attachment; filename="' . $filename . '"');
//     fpassthru($f);
// }
// exit;
}
?>

