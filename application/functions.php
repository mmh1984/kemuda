<?php
$option=$_POST["option"];
switch($option){

case "login":
login();
break;	
	
}

function login(){
$email=$_POST['email'];
$password=$_POST['password'];
include '../phpfiles/connection.php';
$query=mysqli_query($con,"SELECT * FROM tbladminusers WHERE email='$email' and password='$password'");

if(mysqli_num_rows($query)>0){
  while($row=mysqli_fetch_array($query)){
	session_start();
	$_SESSION['user']=$row[1];  
	$site=$_SESSION['site']=$row[5];
	$_SESSION['level']="pageadmin";
	 
	}
  	
	echo $site;
}
else {
	echo "failed";
}
mysqli_close($con);
}


?>