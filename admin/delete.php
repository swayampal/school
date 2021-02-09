<?php
include "../db.php";


if (isset($_GET["delete_student"])) {
	$delete_id = $_GET["delete_student"];
	$delete_student = "DELETE from student where student_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One Product Has been deleted')</script>";
		echo "<script>window.open('all-student.php','_self')</script>";

}
}
if (isset($_GET["delete_guardian"])) {
	$delete_id = $_GET["delete_guardian"];
	$delete_student = "DELETE from gradian where guardian_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One Product Has been deleted')</script>";
		echo "<script>window.open('all-parents.php','_self')</script>";

}
}
if (isset($_GET["delete_course"])) {
		$delete_id = $_GET["delete_course"];
	$delete_student = "DELETE from course where course_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One Product Has been deleted')</script>";
		echo "<script>window.open('add_courses.php','_self')</script>";

}
}
if (isset($_GET["delete_class"])) {
	$delete_id = $_GET["delete_class"];
	$delete_student = "DELETE from class where class_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One Product Has been deleted')</script>";
		echo "<script>window.open('add_class.php','_self')</script>";

}	
}
if (isset($_GET["delete_department"])) {
		$delete_id = $_GET["delete_department"];
	$delete_student = "DELETE from department where department_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One Product Has been deleted')</script>";
		echo "<script>window.open('department.php','_self')</script>";

}
}
if (isset($_GET["delete_staff_categrie"])) {
	$delete_id = $_GET["delete_staff_categrie"];
	$delete_student = "DELETE from staff_categries where staff_categries_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One Product Has been deleted')</script>";
		echo "<script>window.open('categries.php','_self')</script>";

}
}
if (isset($_GET["delete_leave_type"])) {
	$delete_id = $_GET["delete_leave_type"];
	$delete_student = "DELETE from staff_leave_type where leave_type_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One Product Has been deleted')</script>";
		echo "<script>window.open('leave_type.php','_self')</script>";

}
}
if (isset($_GET["delete_staff"])) {
	$delete_id = $_GET["delete_staff"];
	$delete_student = "DELETE from staff where staff_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One Product Has been deleted')</script>";
		echo "<script>window.open('all-teacher.php','_self')</script>";

}
}

if (isset($_GET["delete_payroll_categrie"])) {
	$delete_id = $_GET["delete_payroll_categrie"];
	$delete_student = "DELETE from payroll_categrie where payroll_cat_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One categries Has been deleted')</script>";
		echo "<script>window.open('payroll_categrie.php','_self')</script>";

}
}

if (isset($_GET["delete_book"])) {
	$delete_id = $_GET["delete_book"];
	$delete_student = "DELETE from books where book_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One book deleted')</script>";
		echo "<script>window.open('add-book.php','_self')</script>";

}
}
if (isset($_GET["delete_batch"])) {
		$delete_id = $_GET["delete_batch"];
	$delete_student = "DELETE from batches where batch_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One batch deleted')</script>";
		echo "<script>window.open('batch.php','_self')</script>";

}
}

if (isset($_GET["delete_assigned_subject"])) {
	$delete_id = $_GET["delete_assigned_subject"];
	$delete_student = "DELETE from assign_course where assign_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One batch deleted')</script>";
		echo "<script>window.open('assign_subject.php','_self')</script>";

}
}

if (isset($_GET["delete_payroll_group"])) {
		$delete_id = $_GET["delete_payroll_group"];
	$delete_student = "DELETE from payroll_group where payroll_grp_id = '$delete_id'";
	$run_delete = mysqli_query($con,$delete_student);
	if($run_delete){
		echo "<script>alert('One batch deleted')</script>";
		echo "<script>window.open('payroll_group.php','_self')</script>";

}
}

?>