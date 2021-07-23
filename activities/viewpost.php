<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="News and Activities" />
  <meta property="og:description"   content="kemuda News and Activity Page" />
  <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
    <title>News and Activities</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <script src='assets/js/jquery.min.js' type='text/javascript'></script>
<script src='assets/bootstrap/js/bootstrap.min.js' type='text/javascript'></script>
<script src='assets/js/jquery-ui.js' type='text/javascript'></script>


<script>
$(document).ready(function(e) {
    latest_posts();
});

function latest_posts(){
	$(".othernews").html("<img src='progress.gif' width='30px'>");
	var id=$("#currentid").val();

	$.ajax({
		type:"POST",
		url:"script/posts.php",
		data:{
			othernews:"othernews",
			id:id
		},
		success:function(result){
			$(".othernews").html(result);
		}
		
	});
	
	
}

</script>
</head>

<body>
<div class="container-fluid">
	<div class="row headersection">
    <div class='col-md-1'>
    <a href='index.php'><img src='assets/img/logo.png' class='img img-responsive'></a>
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
    
    
  
    
    <?php
	if(isset($_GET['id'])){
	include 'script/connection.php';	
	$id=$_GET['id'];
	$query=mysqli_query($con,"SELECT * FROM tblposts WHERE id=$id");
	
	while($row=mysqli_fetch_array($query)){
		$image="imagepost/".$row[3];	
		$title=$row[1];
		$content=$row[2];
		$dateposted=$row[6];
		
	
	?>
   
    
  
  
     <div class='container' style='margin-bottom:50px;padding-top:20px;'>
     
    <input type='hidden' id='currentid' value='<?php echo $id ?>'/>
   
    <img src='<?php echo $image?>' class='center-block img-responsive img-thumbnail'>
   <div class='row' style='margin-bottom:10px;'>
   	<div class='col-md-12'>
    	
        <div class='postparagraph'>
        <div class='page-header'><h1><?php echo $title; ?></h1></div>
       
        <span class='text text-info pull-right'>Posted on <?php echo $dateposted; ?></span>
        <p style='clear:right;'>
        <?php echo $content; ?>
        </p>
        <hr/>
        </div>
     
    </div>
    
   </div>
  
   <div class='othernews' style='padding-left:20px;padding-right:20px'>
     
     </div>
   
    <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button" 
    data-href="http://www.your-domain.com/your-page.html" 
    data-layout="button_count">
  </div>
   
    </div>
    <?php
	}
		
	}
	?>
   
       	


</body>

</html>