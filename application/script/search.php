<?php

$option=$_POST['option'];

switch ($option){
	case "date":
	search_date();
	break;
	
	case "ic":
	search_ic();
	break;
	
	case "all":
	view_all();
	break;	
}

function view_all() {
include '../assets/connection.php';

$query=mysqli_query($con,"SELECT
tblapplication.studentic,
tblapplication.studentname,
tblapplication.program,
tblapplication.course,
tblapplication.intake,
tblapplication.studymode,
tblapplication.campus,
tblapplication.regdate
FROM
tblapplication ORDER BY regdate DESC");

$count=mysqli_num_rows($query);

if($count==0){
echo "<p class='well'>No records found</p>";	
}
else{
echo "<p class='alert alert-info'>No of records:<strong>$count</strong></p>";	
echo "<table class='table table-condensed table-striped table-bordered' style='font-size:.9em;'>
	  <tr>
	  	<th>IC Number</th>
		<th>Student Name</th>
		<th>Program</th>
		<th>Course</th>
		<th>Intake</th>
		<th>Mode</th>
		<th>Campus</th>
		<th>Date Registered</th>
		<th>Option</th>
	  </tr>";
while($row=mysqli_fetch_array($query)){
$date=format_date($row[7]);
	echo " <tr>
	  	<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td  style='font-size:.8em;'>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[6]</td>
		<td>$date</td>
		<td><button class='btn btn-primary btn-sm' onclick='open_summary(\"$row[0]\")'>Open</button></td>
	  </tr>";
}
mysqli_close($con);	
}

	
}

//

function search_ic() {
include '../assets/connection.php';
$ic=$_POST['value'];

$query=mysqli_query($con,"SELECT
tblapplication.studentic,
tblapplication.studentname,
tblapplication.program,
tblapplication.course,
tblapplication.intake,
tblapplication.studymode,
tblapplication.campus,
tblapplication.regdate
FROM
tblapplication WHERE tblapplication.studentic='$ic'
ORDER BY regdate DESC

");

$count=mysqli_num_rows($query);

if($count==0){
echo "<p class='well'>No records found</p>";	
}
else{
echo "<p class='alert alert-info'>No of records:<strong>$count</strong></p>";	
echo "<table class='table table-condensed table-striped table-bordered' style='font-size:.9em;'>
	  <tr>
	  	<th>IC Number</th>
		<th>Student Name</th>
		<th>Program</th>
		<th>Course</th>
		<th>Intake</th>
		<th>Mode</th>
		<th>Campus</th>
		<th>Date Registered</th>
		<th>Option</th>
	  </tr>";
while($row=mysqli_fetch_array($query)){
	$date=format_date($row[7]);
	echo " <tr>
	  	<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td  style='font-size:.8em;'>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[6]</td>
		<td>$date</td>
		<td><button class='btn btn-primary btn-sm' onclick='open_summary(\"$row[0]\")'>Open</button></td>
	  </tr>";
}
mysqli_close($con);	
}

	
}
//


//

function search_date() {
include '../assets/connection.php';
$date=format_date1($_POST['value']);

$query=mysqli_query($con,"SELECT
tblapplication.studentic,
tblapplication.studentname,
tblapplication.program,
tblapplication.course,
tblapplication.intake,
tblapplication.studymode,
tblapplication.campus,
tblapplication.regdate
FROM
tblapplication WHERE tblapplication.regdate='$date'
ORDER BY regdate DESC

");

$count=mysqli_num_rows($query);

if($count==0){
echo "<p class='well'>No records found</p>";	
}
else{
echo "<p class='alert alert-info'>No of records:<strong>$count</strong></p>";	
echo "<table class='table table-condensed table-striped table-bordered' style='font-size:.9em;'>
	  <tr>
	  	<th>IC Number</th>
		<th>Student Name</th>
		<th>Program</th>
		<th>Course</th>
		<th>Intake</th>
		<th>Mode</th>
		<th>Campus</th>
		<th>Date Registered</th>
		<th>Option</th>
	  </tr>";
while($row=mysqli_fetch_array($query)){
	$date=format_date($row[7]);
	echo " <tr>
	  	<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td  style='font-size:.8em;'>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[6]</td>
		<td>$date</td>
		<td><button class='btn btn-primary btn-sm' onclick='open_summary(\"$row[0]\")'>Open</button></td>
	  </tr>";
}
mysqli_close($con);	
}

	
}
//

function format_date($date){
	list($y,$m,$d)=explode("-",$date);
	return $d."-".$m."-".$y;
	
}

function format_date1($date){
	list($d,$m,$y)=explode("-",$date);
	return $y."-".$m."-".$d;
	
}
?>