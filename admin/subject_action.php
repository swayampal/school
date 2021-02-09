<?php
include "../db.php";

if (isset($_POST["subject_course"])) {
	$get_subject_course = "SELECT * FROM course";
	$run_p_cats = mysqli_query($con,$get_subject_course);
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
if (isset($_POST["subject_class"])) {
	$select_class = $_POST["selectedcourse"];
	if (!$select_class) {
		echo '
	<option value="">Select course First</option>';
	}else{
	$get_assign_course = "SELECT * FROM class where class_course = '$select_class'";
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
if (isset($_POST["subject_batch"])) {
	$select_batch= $_POST["selectedbatch"];
	if (!$select_batch) {
		echo '
	<option value="">Select class First</option>';
	}else{
	$get_assign_course = "SELECT * FROM batches where batch_class = '$select_batch'";
	$run_p_cats = mysqli_query($con,$get_assign_course);
	
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$batch_id = $rows['batch_id'];
		$batch_name = $rows['batch_name'];
		echo "<option value='$batch_id'>$batch_name</option>
		";
	}
}
}
?>