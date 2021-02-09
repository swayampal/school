

<?php
include "../db.php";
// assigned course start
if (isset($_POST["assign_course"])) {
	$get_assign_course = "SELECT * FROM course";
	$run_p_cats = mysqli_query($con,$get_assign_course);
	echo '
	<option value="">Select Course</option>';
	// echo "<select class='select2' name='course_id' style='background-color: #1c1c3a;'>";
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$course_id = $rows['course_id'];
		$course_name = $rows['course_name'];
		echo "<option value='$course_id'>$course_name</option>
		";
	}
	
}
// assigned coursed end
// time
if (isset($_POST["time"])) {
	$get_assign_course = "SELECT * FROM lecture_time";
	$run_p_cats = mysqli_query($con,$get_assign_course);
	echo '
	<option value="">Select time</option>';
	// echo "<select class='select2' name='course_id' style='background-color: #1c1c3a;'>";
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$time_id = $rows['time_id'];
		$lect_time = $rows['lect_time'];
		echo "<option value='$lect_time'>$lect_time</option>
		";
	}
	
} 
// time
// assigned class start

if (isset($_POST["selected_accad_year"])) {
	$cid = $_POST["selectedcourse"];
	if (!$cid) {
		echo '
	<option value="">Select Cours First</option>';
	}else{
	$get_assign_course = "SELECT * FROM class where class_course = '$cid'";
	$run_p_cats = mysqli_query($con,$get_assign_course);
	echo '
	<option value="">Select Class</option>';
	
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$class_id = $rows['class_id'];
		$class_name = $rows['class_name'];
		echo "<option value='$class_id'>$class_name</option>
		";
	}
}
}
// assigned class end

if (isset($_POST["assign_class"])) {
	$cid = $_POST["selectedclass"];
	if (!$cid) {
		echo '
	<option value="">Select Class First</option>';
	}else{
	$get_assign_course = "SELECT * FROM batches where batch_class = '$cid'";
	$run_p_cats = mysqli_query($con,$get_assign_course);
	echo '
	<option value="">Select batch</option>';
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$batch_id = $rows['batch_id'];
		$batch_name = $rows['batch_name'];
		echo "<option value='$batch_id'>$batch_name</option>
		";
	}
}
}

// assigned suject
if (isset($_POST["assign_subject"])) {
	$bid = $_POST["selectedbatch"];
	if (!$bid) {
		echo '
	<option value="">Select batch First</option>';
	}else{
	$get_assign_course = "SELECT * FROM session where subject_batch = '$bid'";
	$run_p_cats = mysqli_query($con,$get_assign_course);
	
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$session_id = $rows['session_id'];
		$session_name = $rows['session_name'];
		echo "<option value='$session_id'>$session_name</option>
		";
	}
}
}
// assigned teacher
if (isset($_POST["assign_teacher"])) {
	$get_assign_course = "SELECT * FROM staff";
	$run_p_cats = mysqli_query($con,$get_assign_course);
	echo '
	<option value="">Select Teacher</option>';
	// echo "<select class='select2' name='course_id' style='background-color: #1c1c3a;'>";
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$staff_id = $rows['staff_id'];
		$first_name = $rows['first_name'];
		$last_name = $rows['last_name'];
		echo "<option value='$staff_id'>$first_name.$last_name</option>
		";
	}
	
}

// lacture subject
if (isset($_POST["subject"])) {
	$subject_id = $_POST["selectedsubject"];
	if (!$subject_id) {
		echo '
	<option value="">Select Subject first</option>';
	}else{
		$get_all_teacher = "SELECT sf.staff_id,sf.first_name,sf.last_name FROM assign_course as ac INNER JOIN staff as sf ON ac.staff_id = sf.staff_id where assign_subject = '$subject_id'";
		$all_teacher_result = mysqli_query($con,$get_all_teacher);
		echo '
	<option value="">Select teacher</option>';
	while ($row = mysqli_fetch_array($all_teacher_result)) {
		$staff_id = $row["staff_id"];
		$first_name = $row["first_name"];
		$last_name = $row["last_name"];
		echo "<option value='$staff_id'>$first_name $last_name</option>
		";
	}
}
}

// time table course
if (isset($_POST["time_table_course"])) {
	$get_timetable_course = "SELECT * FROM course";
	$run_p_cats = mysqli_query($con,$get_timetable_course);
	echo '
	<option value="">Select Course</option>';
	// echo "<select class='select2' name='course_id' style='background-color: #1c1c3a;'>";
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$course_id = $rows['course_id'];
		$course_name = $rows['course_name'];
		echo "<option value='$course_id'>$course_name</option>
		";
	}
}
// time table class
if (isset($_POST["course"])) {
	$timetable_cid = $_POST["timetablecourse"];
	if (!$timetable_cid) {
		echo '
	<option value="">Select Cours First</option>';
	}else{
	$get_timetable_class = "SELECT * FROM class where class_course = '$timetable_cid'";
	$run_tt_class = mysqli_query($con,$get_timetable_class);
	echo '
	<option value="">Select Class</option>';
	
	while ($rows=mysqli_fetch_array($run_tt_class)) {
		$class_id = $rows['class_id'];
		$class_name = $rows['class_name'];
		echo "<option value='$class_id'>$class_name</option>
		";
	}
}
}
// time table batch
if (isset($_POST["classes"])) {
	$timetable_class = $_POST["timetableclass"];
	if (!$timetable_class) {
		echo '
	<option value="">Select Class First</option>';
	}else{
	$get_assign_course = "SELECT * FROM batches where batch_class = '$timetable_class'";
	$run_p_cats = mysqli_query($con,$get_assign_course);
	echo '
	<option value="">Select batch</option>';
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$batch_id = $rows['batch_id'];
		$batch_name = $rows['batch_name'];
		echo "<option value='$batch_id'>$batch_name</option>
		";
	}
}
}

// time table lacture
if (isset($_POST["batches"])) {
	$timetable_batch = $_POST["timetablebatch"];
	if (!$timetable_batch) {
		echo '
	<option value="">Select batch First</option>';
	}else{
	$get_assign_course = "SELECT sc.*,l.* FROM session as sc INNER JOIN lectures as l ON sc.session_id = l.subject_name WHERE subject_batch = '$timetable_batch'";
	$run_p_cats = mysqli_query($con,$get_assign_course);
	echo '
	<option value="">select lecture</option>';
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$lecture_id = $rows['lecture_id'];
		$lecture_name = $rows['lecture_name'];
		echo "<option value='$lecture_id'>$lecture_name</option>
		";
	}
}
}

// view student



if (isset($_POST["view_student"])) {
	$class_id = $_POST["selectedclass"];
	$select_student = "SELECT s.*,co.course_name,cl.class_name,bt.batch_name,fe.fees_amount from student as s INNER JOIN course as co ON s.st_course_id = co.course_id INNER JOIN class as cl ON s.st_class_id = cl.class_id INNER JOIN batches as bt ON s.st_batch_id = bt.batch_id
	INNER JOIN fees_shedule as fe ON s.st_class_id = fe.class_id where s.st_class_id = '$class_id'";
	$result_all_student = mysqli_query($con,$select_student);
	echo "<thead style='color: #fff;'>
                                    <tr>
                                        <th> 
                                            <div class='form-check'>
                                                <input type='checkbox' class='form-check-input checkAll'>
                                                <label class='form-check-label'>ID</label>
                                            </div>
                                        </th>
                                       <th>Photo</th>
                                        <th>Student</th>
                                        <th>Gender</th>
                                        <th>Rejistration Date</th>
                                        <th>Date of birth</th>
                                        <th>Course</th>
                                        <th>Class</th>
                                        <th>Batch</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>fees Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>";
	while ($student_row = mysqli_fetch_array($result_all_student)) {
		echo "<tr style='color:#fff;'>
						<td>
                        <div class='form-check'>
                        <input type='checkbox' class='form-check-input'>
                        <label class='form-check-label' style='color:#fff;'>".$student_row["student_id"]."</label>
                        </div>
                        </td>
                        <td class='text-center'>".$student_row["student_image"]."</td>
                        <td>".$student_row["first_name"]." ".$student_row["middle_name"]." ".$student_row["last_name"]."</td>
                        <td>".$student_row["gender"]."</td>
                        <td>".$student_row["registration_date"]."</td>
                        <td>".$student_row["date_of_birth"]."</td>
                        <td>".$student_row["course_name"]."</td>
                        <td>".$student_row["class_name"]."</td>
                        <td>".$student_row["batch_name"]."</td>
                        <td>".$student_row["phone"]."</td>
                        <td>".$student_row["eamil"]."</td>
                        <td>".$student_row["fees_amount"]."</td>
                        <td>
                        <div class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='flaticon-more-button-of-three-dots'></span>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right'>
                        <a class='dropdown-item' href='pay_fees.php?pay_fees=".$student_row["student_id"]."'>Pay</a>
                        <a class='dropdown-item' href='edit_department.php?edit_assigned_subject=".$student_row["student_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>Edit</a>
                          </div>
                          </div>
                          </td>
                        </tr>";
	}
	echo "<tbody>";
}
// view student

// staff list for employee payroll slip
if (isset($_POST["all_staff"])) {
	$select_staff = "SELECT * from staff";
	$result_all_staff = mysqli_query($con,$select_staff);
	echo "<thead style='color: #fff;'>
                                    <tr>
                                        <th> 
                                            <div class='form-check'>
                                                <input type='checkbox' class='form-check-input checkAll'>
                                                <label class='form-check-label'>ID</label>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>";
	while ($staff_row = mysqli_fetch_array($result_all_staff)) {
		echo "<tr style='color:#fff;'>
                        <td>
                        <div class='form-check'>
                        <input type='checkbox' class='form-check-input'>
                        <label class='form-check-label' style='color:#fff;'>".$staff_row["staff_id"]."</label>
                        </div>
                        </td>
                        <td>".$staff_row["first_name"]." ".$staff_row["last_name"]."</td>
                        
                        <td>
                        <div class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='flaticon-more-button-of-three-dots'></span>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right'>
                        <a class='dropdown-item' href='generate_employee_payslip.php?generate_payslip=".$staff_row["staff_id"]."'><i class='fas fa-times text-orange-red'></i>Generate_payslip</a>
                        <a class='dropdown-item' href='edit_department.php?edit_assigned_subject=".$staff_row["staff_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>View_payslip</a>
                          </div>
                          </div>
                          </td>
                        </tr>";
	}
	echo "<tbody>";
}

// if (isset($_POST["t_course_wise"])) {
// 	$course_id = $_POST["tcourse"];
// 	$select_staff = "SELECT * from staff where";
// 	$result_all_staff = mysqli_query($con,$select_staff);
// 	echo "<thead style='color: #fff;'>
//                                     <tr>
//                                         <th> 
//                                             <div class='form-check'>
//                                                 <input type='checkbox' class='form-check-input checkAll'>
//                                                 <label class='form-check-label'>ID</label>
//                                             </div>
//                                         </th>
//                                         <th>Name</th>
                                       
//                                         <th>Action</th>
//                                     </tr>
//                                 </thead>
//                                 <tbody>";
// 	while ($staff_row = mysqli_fetch_array($result_all_staff)) {
// 		echo "<tr style='color:#fff;'>
//                         <td>
//                         <div class='form-check'>
//                         <input type='checkbox' class='form-check-input'>
//                         <label class='form-check-label' style='color:#fff;'>".$staff_row["staff_id"]."</label>
//                         </div>
//                         </td>
//                         <td>".$staff_row["first_name"]." ".$staff_row["last_name"]."</td>
                        
//                         <td>
//                         <div class='dropdown'>
//                         <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
//                         <span class='flaticon-more-button-of-three-dots'></span>
//                         </a>
//                         <div class='dropdown-menu dropdown-menu-right'>
//                         <a class='dropdown-item' href='delete.php?delete_assigned_subject=".$staff_row["staff_id"]."'><i class='fas fa-times text-orange-red'></i>Delete</a>
//                         <a class='dropdown-item' href='edit_department.php?edit_assigned_subject=".$staff_row["staff_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>Edit</a>
//                           </div>
//                           </div>
//                           </td>
//                         </tr>";
// 	}
// 	echo "<tbody>";
// }

// staff list for employee payroll slip




// student reports
if (isset($_POST["viewallstudent"])) {
	$select_student = "SELECT s.*,co.course_name,cl.class_name,bt.batch_name from student as s 
	INNER JOIN course as co ON s.st_course_id = co.course_id 
	INNER JOIN class as cl ON s.st_class_id = cl.class_id 
	INNER JOIN batches as bt ON s.st_batch_id = bt.batch_id
	";
	$result_all_student = mysqli_query($con,$select_student);
	echo "<thead style='color: #fff;'>
                                    <tr>
                                        <th> 
                                            <div class='form-check'>
                                                <input type='checkbox' class='form-check-input checkAll'>
                                                <label class='form-check-label'>ID</label>
                                            </div>
                                        </th>
                                       <th>Photo</th>
                                        <th>Student</th>
                                        <th>Gender</th>
                                        <th>Rejistration Date</th>
                                        <th>Date of birth</th>
                                        <th>Course</th>
                                        <th>Class</th>
                                        <th>Batch</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>";
	while ($student_row = mysqli_fetch_array($result_all_student)) {
		echo "<tr style='color:#fff;'>
						<td>
                        <div class='form-check'>
                        <input type='checkbox' class='form-check-input'>
                        <label class='form-check-label' style='color:#fff;'>".$student_row["student_id"]."</label>
                        </div>
                        </td>
                        <td class='text-center'>".$student_row["student_image"]."</td>
                        <td>".$student_row["first_name"]." ".$student_row["middle_name"]." ".$student_row["last_name"]."</td>
                        <td>".$student_row["gender"]."</td>
                        <td>".$student_row["registration_date"]."</td>
                        <td>".$student_row["date_of_birth"]."</td>
                        <td>".$student_row["course_name"]."</td>
                        <td>".$student_row["class_name"]."</td>
                        <td>".$student_row["batch_name"]."</td>
                        <td>".$student_row["phone"]."</td>
                        <td>".$student_row["eamil"]."</td>
                        
                        <td>
                        <div class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='flaticon-more-button-of-three-dots'></span>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right'>
                        <a class='dropdown-item' href='pay_fees.php?pay_fees=".$student_row["student_id"]."'>Pay</a>
                        <a class='dropdown-item' href='edit_department.php?edit_assigned_subject=".$student_row["student_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>Edit</a>
                          </div>
                          </div>
                          </td>
                        </tr>";
	}
	echo "<tbody>";
}
// student reports

// students for attendence
if (isset($_POST["students"])) {
	$batch_id = $_POST["batch"];
	$attendence_students = "SELECT * from student where st_batch_id = '$batch_id'";
	$attend_result = mysqli_query($con,$attendence_students);
	echo "<thead style='color: #fff;'>
                                    <tr>
                                        <th> 
                                            <div class='form-check'>
                                                <input type='checkbox' class='form-check-input checkAll'>
                                                <label class='form-check-label'>ID</label>
                                            </div>
                                        </th>
                                       <th>Photo</th>
                                        <th>Student</th>
                                        <th>Gender</th>
                                        <th>Rejistration Date</th>
                                        <th>Date of birth</th>
                                        <th>Course</th>
                                        <th>Class</th>
                                        <th>Batch</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>";
        while ($attend_row = mysqli_fetch_array($attend_result)) {
        	echo "<tr style='color:#fff;'>
						<td>
                        <div class='form-check'>
                        <input type='checkbox' class='form-check-input'>
                        <label class='form-check-label' style='color:#fff;'>".$student_row["student_id"]."</label>
                        </div>
                        </td>
                        <td class='text-center'>".$student_row["student_image"]."</td>
                        <td>".$student_row["first_name"]." ".$student_row["middle_name"]." ".$student_row["last_name"]."</td>
                        <td>".$student_row["gender"]."</td>
                        <td>".$student_row["registration_date"]."</td>
                        <td>".$student_row["date_of_birth"]."</td>
                        <td>".$student_row["course_name"]."</td>
                        <td>".$student_row["class_name"]."</td>
                        <td>".$student_row["batch_name"]."</td>
                        <td>".$student_row["phone"]."</td>
                        <td>".$student_row["eamil"]."</td>
                        
                        <td>
                        <div class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='flaticon-more-button-of-three-dots'></span>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right'>
                        <a class='dropdown-item' href='pay_fees.php?pay_fees=".$student_row["student_id"]."'>Pay</a>
                        <a class='dropdown-item' href='edit_department.php?edit_assigned_subject=".$student_row["student_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>Edit</a>
                          </div>
                          </div>
                          </td>
                        </tr>";
        } 
        echo "</tbody>";                  
}
// students for attendence


// student view for all students
if (isset($_POST["all_view_students"])) {
	$allstudent = "SELECT st.*,gu.*,co.*,cl.*,bt.* from student as st
INNER JOIN gradian as gu ON st.guardian_id = gu.guardian_id
INNER JOIN course as co ON st.st_course_id = co.course_id
INNER JOIN class as cl ON st.st_class_id = cl.class_id
INNER JOIN batches as bt ON st.st_batch_id = bt.batch_id";
	$allstudentresult = mysqli_query($con,$allstudent);
	echo " <thead>
                                    <tr style='color: #fff;'>
                                        <th>
                                            <div class='form-check'>
                                                <input type='checkbox' class='form-check-input checkAll'>
                                                <label class='form-check-label'>Roll</label>
                                            </div>
                                        </th>
                                        <th>Photo</th>
                                        <th>Guardian</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Rejistration Date</th>
                                        <th>Date of birth</th>
                                        <th>Course</th>
                                        <th>Class</th>
                                        <th>Batch</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>";
                                while ($allrows = mysqli_fetch_array($allstudentresult)) {
                                	 echo "<tr style='color:#323259;'>
                        <td>
                        <div class='form-check'>
                        <input type='checkbox' class='form-check-input'>
                        <label class='form-check-label' style='color:#323259;'>".$allrows["student_id"]."</label>
                        </div>
                        </td>
                        <td class='text-center'>".$allrows["student_image"]."</td>
                        <td>".$allrows["first_name"]." ".$allrows["middel_name"]." ".$allrows["last_name"]."</td>
                        <td>".$allrows["first_name"]." ".$allrows["last_name"]."</td>
                        <td>".$allrows["gender"]."</td>
                        <td>".$allrows["registration_date"]."</td>
                        <td>".$allrows["date_of_birth"]."</td>
                        <td>".$allrows["course_name"]."</td>
                        <td>".$allrows["class_name"]."</td>
                        <td>".$allrows["batch_name"]."</td>
                        <td>".$allrows["phone"]."</td>
                        <td>".$allrows["eamil"]."</td>
                        <td>
                        <div class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='flaticon-more-button-of-three-dots'></span>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right'>
                        <a class='dropdown-item' href='delete.php?delete_student=".$allrows["student_id"]."'><i class='fas fa-times text-orange-red'></i>Delete</a>
                        <a class='dropdown-item' href='edit_student.php?edit_student=".$allrows["student_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>Edit</a>
                        <a class='dropdown-item' href='student_details.php?view_student_id=".$allrows["student_id"]."'><i class='fas fa-redo-alt text-orange-peel'></i>view</a>
                          </div>
                          </div>
                          </td>
                        </tr>";
                                }
                                echo "<tbody>";
}
// student view for all students
?>