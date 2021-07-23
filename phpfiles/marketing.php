<?php
$option=$_POST['option'];

switch($option){
case "poster":
show_poster();	
break;	
}


function show_poster(){
	$dir = '../marketing/images/';
$files = scandir($dir, 0);

echo "<div id='myCarousel' class='carousel slide' data-ride='carousel'>
    <!-- Indicators -->
    <ol class='carousel-indicators'>
      <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
      <li data-target='#myCarousel' data-slide-to='1'></li>
      <li data-target='#myCarousel' data-slide-to='2'></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class='carousel-inner'>";
     

   echo " <div class='item active'>";
       echo "<img src='marketing/images/".$files[2]."'  class='img-responsive' height='50%' onClick='show_poster(\"$files[2]\")' style='cursor:pointer;'>";
      echo"</div>";
   

for($i = 3; $i < count($files); $i++){
  
	echo " <div class='item'>";
       echo "<img src='marketing/images/".$files[$i]."' class='img-responsive' height='50%' onClick='show_poster(\"$files[$i]\")' style='cursor:pointer;'>";
      echo"</div>";
}

echo " </div>

    <!-- Left and right controls -->
    <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
      <span class='glyphicon glyphicon-chevron-left'></span>
      <span class='sr-only'>Previous</span>
    </a>
    <a class='right carousel-control' href='#myCarousel' data-slide='next'>
      <span class='glyphicon glyphicon-chevron-right'></span>
      <span class='sr-only'>Next</span>
    </a>
  </div>";
}
?>