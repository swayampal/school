<?php
include "../db.php";

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

if (isset($_POST["class"])) {
	$cid = $_POST["courseid"];
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

if (isset($_POST["batch"])) {
	$cid = $_POST["classid"];
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
?>

