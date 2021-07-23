<?php
include 'connection.php';

$course=$_POST['course'];

$query=mysqli_query($con,"SELECT courseName FROM tblcourses WHERE courseProvider like '%$course%'");

$content="";
if($query){
	while($row=mysqli_fetch_array($query)){
		$content.="<input type='radio' name='coursename' value='$row[0]'>$row[0]<br/>";
		
	}
	$content.="<button class='btn btn-default btn-sm' onClick=\"add_option()\">Add</button>";
	echo $content;
	mysqli_close($con);
}
else{
	echo (die(mysqli_error($con)));	
}

?>