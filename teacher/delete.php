<?php
include "db.php";


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
?>