<?php
include "../db.php";

// assigned course
if (isset($_POST["batch_course"])) {
	$get_assign_course = "SELECT * FROM course";
	$run_p_cats = mysqli_query($con,$get_assign_course);
	echo '
	<option value="">Select Course</option>';
	// echo "<select class='select2' name='course_id' style='background-color: #1c1c3a;'>";
	while ($rows=mysqli_fetch_array($run_p_cats)) {
		$course_id = $rows['course_id'];
		$course_name = $rows['course_name'];
		echo "<option class='select_course' selected_course='$course_id' value='$course_id'>$course_name</option>
		";
	}
	
}
// assigned accadmic year
// if (isset($_POST["assign_accadmic_year"])) {
// 	$get_assign_course = "SELECT * FROM academic_year";
// 	$run_p_cats = mysqli_query($con,$get_assign_course);
// 	// echo "<select class='select2' name='course_id' style='background-color: #1c1c3a;'>";
// 	while ($rows=mysqli_fetch_array($run_p_cats)) {
// 		$id = $rows['id'];
// 		$acd_year = $rows['acd_year'];
// 		echo "<option value='$id'>$acd_year</option>
// 		";
// 	}
// 	echo "Hello";
// }
// assigned select accadmic year
if (isset($_POST["selected_batch"])) {
	$cid = $_POST["selectedbatch"];
	if (!$cid) {
		echo '
	<option value="">Select Class First</option>';
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
?>