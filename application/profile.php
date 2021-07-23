<?php
session_start();
include 'assets/sessions.php';
$loggeduser=initialize_session_admin();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student Registration</title>
<link href="css/custom.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Lato|Slabo+27px" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="script/jquery.min.js" type="text/javascript"></script>
<script src="script/bootstrap.min.js" type="text/javascript"></script>
<script src="script/search.js" type="text/javascript"></script>


<script >
$(document).ready(function(e) {
	$("#passwordspan").css("display","none");
	
	$("#btnchange").click(function(e) {
        $("#passwordspan").fadeIn();
		$(this).hide();	
    });
	
	$("#btncancel").click(function(e) {
        $("#passwordspan").fadeOut();
		$("#btnchange").show();	
    });
	
	$("#btnsave").click(function(e) {
		
        var oldpassvalue='';
		var oldpass='';
		var newpass='';
		
		oldpassvalue=$("#oldpassvalue").val();
		
		oldpass=$("#oldpass").val();
		newpass=$("#newpass").val();
		
		if(oldpass==''){
			$("#message").html("enter your old password");	
		}
		else if(newpass==''){
			$("#message").html("enter your new password");	
		}
		else{
			if(oldpass != oldpassvalue){
			$("#message").html("Your old password is incorrect");	
			}
			else {
				$("#message").html("<img src='images/ajax-loader.gif'>");	
				$.ajax({
					type:"POST",
					url:"script/functions.php",
					data:{
						option:"change",
						newpass:newpass	
					},
					success: function(result){
						if(result=='success'){
							alert('Your password has been updated.You need to login again');
							window.location.href='logout.php';	
						}
						else {
							$("#message").html("Password update failed");	
						}
						
					}
					
				});
				
			}
		}
		
    });
	
	$("#name").dblclick(function(e) {
        $(this).removeAttr("readonly");
    });
	$("#name").focusout(function(e) {

		if($(this).val()==''){
		   $(this).after("<span class='text-warning'>Enter your new name</span>");	
		}
		else {
			
			  $(this).after("<img src='images/ajax-loader.gif' width='10px'>");	
			 
			 $.ajax({
					type:"POST",
					url:"script/functions.php",
					data:{
						option:"changename",
						newname:$(this).val()	
					},
					success: function(result){
						
						
					},
					complete: function(result){
					
					}
					
				});
			$(this).next("img").remove();
			  		$(this).attr("readonly","readonly");			
		}
        
    });
       
    
	
 });



</script>
</head>

<body>
<div class="container-fluid">
<div class="row nomargin header" >
<div class="col-md-1" >
<img src="images/logo.png" class="img-responsive">
</div>
<div class="col-md-6">
<h2 class="page-header">KEMUDA <small><span class='text-info text-right'>Scheduling System</span></small></h2>
</div>
<div class="col-md-5">
<p class='pull-right smallfont'>Logged in as:<span style='color:#F90;'><?php echo $loggeduser; ?></span></p>
<P class="spacersmall">&nbsp;</P><P class="spacersmall">&nbsp;</P>
<ul class="nav nav-pills smallfont">
<li><a href='index.php'>Add Classes</a></li>
<li><a href='search.php'>Classes</a></li>
<li  class='active'><a href='#'>Profile</a></li>
<li><a href='logout.php'>Logout</a></li>
</ul>


</div>
</div>

<!--contents -->
<div class='row spacersmall'></div>
<div class='row'>
<div class='col-md-3'></div>
<div class='col-md-6'>
<div class='panel panel-primary'>
	<div class='panel-heading' style='background-color:#003;'><h4>User Details</h4></div>
    <div class='panel-body'>
    <?php
	include 'assets/connection.php';
	$query=mysqli_query($con,"SELECT * FROM tbladminusers WHERE email='$loggeduser'");
	
	while($row=mysqli_fetch_array($query)){
		$name=$row[2];		
		$password=$row[3];
		$department=$row[4];
	
	
    
    ?>
    <table class='table table-condensed'>
    <tr>
        	<td></td>
            <td class='text-muted'><small>Double click on your name to change it</small></td>
    	</tr>
    	<tr>
        	<th>Full Name</th>
            <td><input type='text' id='name' class='form-control' readonly value='<?php echo $name; ?>'></td>
    	</tr>
        <tr>
        	<th>Department</th>
            <td><?php echo $department; ?></td>
    	</tr>
        </table>
        
        <table class='table table-striped' id='passwordspan'>
        <tr>
        	<th>Old Password
            <input type='hidden' id='oldpassvalue' value="<?php echo $password ?>">
            </th>
            <td><input type='password' id='oldpass' placeholder='*******'></td>
        </tr>
         <tr>
        	<th>New Password</th>
            <td><input type='password' id='newpass' placeholder='*******'></td>
        </tr>
         <tr>
        	<th></th>
            <td><span id='message' class='text-danger'></span>
            </td>
        </tr>
         <tr>
        	<th></th>
            <td><button class='btn btn-primary' id='btnsave'>Save</button>
            
            <button class='btn btn-warning' id='btncancel'>Cancel</button>
            </td>
        </tr>
       
       
    </table>
    <button class='btn btn-primary center-block' id='btnchange'>Change Password</button>
    <?php
	
	}
	?>
    </div>
    <div class='panel-footer'></div>
</div>
</div>
<div class='col-md-3'></div>
</div>

<!--end of contents-->
</div>

<!--modals -->
<!--modal -->
<div id="confirmmodal" class="modal fade" role="dialog">
<!--modal content-->
<div class="modal-dialog modal-sm">
<!--modal content -->
<div class="modal-content">
<div class="modal-header"><h3><span id="courselevel">Message</span><button class="close pull-right" data-dismiss="modal">
&otimes;</button></h3>
</div>
<div class="modal-body text-center">

<p>Deleting this subject will also remove the students from this class</p>

<button class="btn btn-danger btn-sm" onClick="delete_class()" data-dismiss="modal">Confirm</button>
<button class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
</div>
<div class="modal-footer"></div>
</div>

</div>
</div>



<!--end of modals-->


</body>
</html>
