<?php
session_start();
include 'assets/sessions.php';
//$loggeduser=initialize_session_admin();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Application</title>
<link href="custom.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Lato|Slabo+27px" rel="stylesheet">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="script/jquery-ui.js" type="text/javascript"></script>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>

<script>

$(document).ready(function(e) {
 
 load_result("all","all");
 
 
 
 

 
});
 function load_result(option,value){
$(".result").html("<img src='images/loader.gif' width='50px' class='center-block'>");
$.ajax({
	
	type:"POST",
	url:"script/search.php",	
	data:{
		option:option,
		value:value
	},
	success:function(result){
		$(".result").html(result);	
	}
	})

 }
 
 
 function search_ic(){
	 
var ic=$("#icnumber").val();
if(ic==''){
alert("Please enter the IC number");

}
else{
load_result("ic",ic);
}
}

 function search_date(){
	 
var d=$("#searchdate").val();
if(d==''){
alert("Please enter the IC number");

}
else{
load_result("date",d);
}
}

function open_summary(ic){
	
		window.location.href='viewapplication.php?ic='+ic;	
	
}
</script>
</head>

<body style="background:rgba(255,255,255,1);">
<div class="container-fluid">
<div class="row nomargin header" >
<div class="col-md-1" >
<img src="images/logo.png" class="img-responsive" id='logo'>
</div>
<div class="col-md-8">
<div class='row'>
<div class='col-md-6'>
<P class="spacersmall">&nbsp;</P>
<p class='well' id='search'>
Search IC: <input type='text' id='icnumber' placeholder='00-000000' maxlength="10" class='mediumselect'>
<button class='btn btn-default btn-sm' onClick="search_ic()"><span class='glyphicon glyphicon-search'></span></button>

</p>
</div>
<div class='col-md-6'>
<P class="spacersmall">&nbsp;</P>
<p class='well' id='search'>
Date: 

<input type='text' id='searchdate' placeholder='dd-mm-yyyy' maxlength="10" class='mediumselect' readonly>
<button class='btn btn-default btn-sm' onClick="search_date()"><span class='glyphicon glyphicon-search'></span></button>

</p>

</div>
</div>


</div>
<div class="col-md-3">
<P class="spacersmall">Logged in as: <?php echo $loggeduser; ?></P>
<P class="spacersmall">&nbsp;</P>
<a class='btn btn-primary' href='profile.php'>Change Password</a>
<a class='btn btn-danger' href='logout.php'>Logout</a>
</div>
</div>

<div class='row' style='padding:10px;'>
<div class='col-md-12'>
<div class='result'></div>
</div>

</div>


</div>
</body>
</html>
<script>
$("#searchdate").datepicker({ dateFormat: 'dd-mm-yy' });
</script>