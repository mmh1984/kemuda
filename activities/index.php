<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News and Activities</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <script src='assets/js/jquery.min.js' type='text/javascript'></script>
<script src='assets/bootstrap/js/bootstrap.min.js' type='text/javascript'></script>
<script src='assets/js/jquery-ui.js' type='text/javascript'></script>


<script>
$(document).ready(function(e) {
    latest_posts();
	latest_headlines();
	latest_announcement();
	todays_announcement();
});

function latest_posts(){
	$(".latest-posts").html("<img src='progress.gif' width='30px'>");
	$.ajax({
		type:"POST",
		url:"script/posts.php",
		data:{
			latest:"latest"	
		},
		success:function(result){
			$(".latest-posts").html(result);
		}
		
	});
	
	
}

function latest_headlines(){
	$(".headlines").html("<img src='progress.gif' width='30px'>");
	$.ajax({
		type:"POST",
		url:"script/posts.php",
		data:{
			headlines:"latest"	
		},
		success:function(result){
			$(".headlines").html(result);
		}
		
	});
	
	
}

function latest_announcement(){
	$(".upcomingevents").html("<img src='progress.gif' width='30px'>");
	$.ajax({
		type:"POST",
		url:"script/posts.php",
		data:{
			upcoming:"latest"	
		},
		success:function(result){
			$(".upcomingevents").html(result);
		}
		
	});
	
	
}

function todays_announcement(){
	$(".todaysevent").html("<img src='progress.gif' width='30px'>");
	$.ajax({
		type:"POST",
		url:"script/posts.php",
		data:{
			today:"latest"	
		},
		success:function(result){
			$(".todaysevent").html(result);
		}
		
	});
	
	
}


function next_video(){
	var src=$("#vid").attr("src");
	var next="";
	//alert(src);	
	
	switch(src){
		case "videos/video1.mp4":
		next="videos/video2.mp4";
		break;
		
		case "videos/video2.mp4":
		next="videos/video3.mp4";
		break;
		
		case "videos/video3.mp4":
		next="videos/video4.mp4";
		break;
		
		case "videos/video4.mp4":
		next="videos/video5.mp4";
		break;
		
		case "videos/video5.mp4":
		next="videos/video1.mp4";
		break;
	}
	
	//alert(next);
	
	$("#vid").prop("src",next);
	$("#vid").css("transition","all");
	$("video").load();
	
	//get video height;
	var height=$("#vid").Height();
	
	$("#previous").css("top",(height/2)+"px");
	$("#next").css("top",(height/2)+"px");
	
}

</script>
</head>

<body class='indexbody'>
<div class="container-fluid">
	<div class="row headersection">
    <div class='col-md-1'>
    <a href='../index.html'><img src='assets/img/logo.png' class='img img-responsive'></a>
    </div>
		<div class="col-md-7">
		
				<h1>
					<strong>KEMUDA</strong> <small style='color:#069;'>News and Activity Page</small>
				</h1>
		
		</div>
		<div class="col-md-2">
			
				<br/>

					
                        	<input class="form-control" type="text" placeholder="search"/>
					
					
				
				
		
		</div>
	</div>
    </div>
    
    <!--main contents-->
    <div class='container-fluid' style='height:100vh;'>
    
    <div class='row'>
    
    	<div class='col-md-3' style='height:100vh;overflow:auto;'>
 	
     
       	<div>
        
        <h4><span class='glyphicon glyphicon-calendar'></span>Today's Event </h4>
           <div class='todaysevent'>
           
           </div>
        
        	<h4><span class='glyphicon glyphicon-calendar'></span> Upcoming Events </h4>
           <div class='upcomingevents'>
           
           </div>
            <hr/>
        </div>
        </div>
        
        <div class='col-md-6'  style='border-right:1px solid #aeaeae;border-left:1px solid #aeaeae;height:100vh;overflow:auto;'	>
   
     
       
     
      <div class='video'>
      <h4><span class='glyphicon glyphicon-film'></span> Featured Video</h4>
     <video width="400" controls>
  <source src="videos/video1.mp4" type="video/mp4" id='vid'>

  Your browser does not support HTML5 video.
</video>
<span id='previous' onclick='previous_video()'class='glyphicon glyphicon-backward'></span>
<span id='next' onclick='next_video()'class='glyphicon glyphicon-forward'></span>

      </div>
      
        <div class='latest-posts'>
       
        
        </div>
        
         
        </div>
        <div class='col-md-3' style='height:100vh;overflow:auto;'>
         <h4><span class='glyphicon glyphicon-star'></span> Headlines </h4>
         <div class='headlines'></div>
        </div>
        </div>
        </div>
<div class='container-fluid' style='border-top:1px solid #999'>
<h2><span class='glyphicon glyphicon-certificate'></span> Alumni Section</h2>
<div class='col-md-9 alumnistory'>

<!--start of media-->
<?php

include 'alumnistories.php';
?>
<!--end of media-->
</div>

<div class='col-md-3'>
<div class='well'>
<h5 align='center'>Join our Alumni Facebook group for latest news and updates!</h5>
<a href='https://www.facebook.com/groups/315706072100557/' target="new"><img src='assets/img/facebook-group-icon.jpg' class='img img-responsive img-rounded center-block'></a>

<a href='alumni.php'><img src='../successstories/alumni.png' class='img img-responsive img-rounded center-block' width='70%'></a>
</div>
</div>

</div>
    
<footer>

</footer>

</body>

</html>