<?php
include '../db.php';

?>
<table border="1">
	<thead>
		<tr>
			<th>
				<label>Time</label>
			</th>
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
			$monday_lectures = "SELECT * from lectures where lecture_time = '11am to 1pm' and lecture_day = 'monday'";
			$result_11to1 = mysqli_query($con,$monday_lectures);
			$m11to1 = mysqli_fetch_array($result_11to1);
			if ($m11to1["lecture_day"] == 'monday') {
				echo "<td>".$m11to1["lecture_name"]."</td>";
			}else{
				echo "<td> no class</td>";
			}
			$monday_lectures = "SELECT * from lectures where lecture_time = '11am to 1pm' and lecture_day = 'tuesday'";
			$result_11to1 = mysqli_query($con,$monday_lectures);
			$m11to1 = mysqli_fetch_array($result_11to1);
			if ($m11to1["lecture_day"] == 'tuesday') {
				echo "<td>".$m11to1["lecture_name"]."</td>";
			}else{
				echo "<td> no class</td>";
			}
			$monday_lectures = "SELECT * from lectures where lecture_time = '11am to 1pm' and lecture_day = 'firday'";
			 $result_11to1 = mysqli_query($con,$monday_lectures);
			 $m11to1 = mysqli_fetch_array($result_11to1);
			 if ($m11to1 &&$m11to1["lecture_day"] == !'') {
			 	echo "<td>".$m11to1["lecture_name"]."</td>";
			 }else{
			 	echo "<td> no class</td>";
			 }
			  $monday_lectures = "SELECT * from lectures where lecture_time = '11am to 1pm' and lecture_day = 'saturday'";
			 $result_11to1 = mysqli_query($con,$monday_lectures);
			 $m11to1 = mysqli_fetch_array($result_11to1);
			 if ($m11to1 &&$m11to1["lecture_day"] == !'') {
			 	echo "<td>".$m11to1["lecture_name"]."</td>";
			 }else{
			 	echo "<td> no class</td>";
			 }
			 ?>
			</tr>
		</tbody>
	</table>