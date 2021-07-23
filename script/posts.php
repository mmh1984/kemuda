<?php

if(isset($_POST['save'])){
save_post();

}

if(isset($_POST['latest'])){
	latest_post();


}

if(isset($_POST['othernews'])){
	other_post();


}


if(isset($_POST['headlines'])){
	headlines();


}


if(isset($_POST['upcoming'])){
	upcoming_events();


}

if(isset($_POST['today'])){
	today_events();


}

function upcoming_events(){
	include "connection.php";
	$today=date('y-m-d');
	$query=mysqli_query($con,"SELECT *
FROM
tblposts
WHERE tblposts.posttype = 'upcoming' and eventdate >'$today'
ORDER BY
tblposts.id DESC LIMIT 5");
echo "<table class='table'>";
	while($row=mysqli_fetch_array($query)){
		$date=format_date1($row[5]);
	echo "<tr style='background:#003;color:yellow'>
                	<td class='text text-info'><strong>$row[1]</strong></td>
                    <td>$date</td>
					
                </tr>
				<tr>
					<td colspan='2' class='well'>$row[2]</td>
				</tr>
				";
		
	}
echo "</table>";
mysqli_close($con);
	
}	


function today_events(){
	include "connection.php";
	$today=date('y-m-d');
	$query=mysqli_query($con,"SELECT *
FROM
tblposts
WHERE tblposts.posttype = 'upcoming' and eventdate ='$today'
ORDER BY
tblposts.id DESC LIMIT 5");

if(mysqli_num_rows($query)>0){
echo "<table class='table'>";
	while($row=mysqli_fetch_array($query)){
		$date=format_date1($row[5]);
	echo "<tr style='background:#003;color:yellow'>
                	<td class='text text-info'><strong>$row[1]</strong></td>
                    <td>$date</td>
					
                </tr>
				<tr>
					<td colspan='2' class='alert alert-info'>$row[2]</td>
				</tr>
				";
		
	}
echo "</table>";
}
else{
	echo "<p class='alert alert-warning' align='center'><strong>No events for today</strong></p>";	
}
mysqli_close($con);
	
}


function latest_post(){
	include "connection.php";
	$query=mysqli_query($con,"SELECT *
FROM
tblposts
WHERE tblposts.posttype <> 'upcoming'
ORDER BY
tblposts.id DESC LIMIT 1");
  echo "<h4><span class='glyphicon glyphicon-gift'></span> Latest Post</h4>";
	while($row=mysqli_fetch_array($query)){
		echo "<img src='activities/imagepost/$row[3]' class='img img-thumbnail img-responsive center-block' width='100%'>";
		echo "<h2><a href='activities/viewpost.php?id=$row[0]'>$row[1]</a></h2>";
		
	}

mysqli_close($con);
	
}	

function other_post(){
	$id=$_POST['id'];
	
	include "connection.php";
	$query=mysqli_query($con,"SELECT *
FROM
tblposts
WHERE
tblposts.id > $id AND tblposts.posttype <> 'upcoming'
ORDER BY
tblposts.id ASC
Limit 1
");

if(mysqli_num_rows($query)>0){

echo "<div class='row well'>";
echo " <h3 align='center' class='page-header'>Next Article</h3>";
	while($row=mysqli_fetch_array($query)){
		$part=mb_strimwidth($row[2],0,100);
		$part.="...<br/>";
		$part.="<a href='viewpost.php?id=$row[0]'>Read More</a>";
		echo "<div class='col-md-12'>
		<div class='media'>
  <div class='media-left'>
    <img src='imagepost/$row[3]' class='media-object img-thumbnail'  style='width:200px'>
  </div>
  <div class='media-body'>
    <h4 class='media-heading'>$row[1]</h4>
    <p>$part</p>
  </div>
</div>
		
		</div>";
		
	}

echo "</div>";
}
else {
	echo "<div class='well'>";
echo "<a class='btn btn-primary center-block' href='index.php'>Back</a>";	
	echo "</div>";
}

mysqli_close($con);
	
}	
	
	
	//
function headlines(){

	
	include "connection.php";
	$query=mysqli_query($con,"SELECT *
FROM
tblposts
WHERE
tblposts.posttype <> 'upcoming'
ORDER BY
tblposts.id DESC

");


	while($row=mysqli_fetch_array($query)){
		$part=mb_strimwidth($row[2],0,100);
		$part.="...<br/>";
		$part.="<a href='viewpost.php?id=$row[0]'>Read More</a>";
		echo "
		<div class='media'>
  <div class='media-left'>
    <img src='imagepost/$row[3]' class='media-object' style='width:100px'>
  </div>
  <div class='media-body'>
    <h5 class='media-heading'>$row[1]</h5>
   <a href='viewpost.php?id=$row[0]' class='text-link' style='font-size:.8em;'>Read More</a>
  </div>
</div>
";
		
	}


mysqli_close($con);
	
}	
	

function save_post(){
include "connection.php";
$title =sanitize_input($_POST['posttitle']);
$content=sanitize_input($_POST['postcontent']);
$image=$_FILES['postimage']['name'];
$type=$_POST['postcategory'];
if($_POST['eventdate']!=null){
$eventdate=format_date($_POST['eventdate']);
}
else{
$eventdate=date('y-m-d');	
}
$date=date('y-m-d');
	
	$query=mysqli_query($con,"INSERT INTO `kemuda`.`tblposts` (`postitle`, `postcontent`, `image`, `posttype`, `eventdate`, `dateposted`) VALUES ('$title','$content','$image','$type','$eventdate','$date')");
	if($query){
	
	move_uploaded_file($_FILES['postimage']['tmp_name'],"../imagepost/".$_FILES['postimage']['name']);
	
	echo "Successfully saved this post";
	}
	else{
		echo (die(mysqli_error($con)));	
	}
	mysqli_close($con);
	
}


function sanitize_input($input){
include "connection.php";
return mysqli_real_escape_string($con,$input);
	
}

function format_date($date){
  list($day,$month,$year)=explode("/",$date);
  
  return $year."-".$month."-".$day;	
	
}

function format_date1($date){
  list($year,$month,$day)=explode("-",$date);
  
  return $day."/".$month."/".$year;	
	
}

?>