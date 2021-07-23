<?php

$option=$_POST['option'];

switch ($option){
	case "save":
	save_application();
	break;
}


function save_application(){

include 'connection.php';
$content=$_POST['row'];

$count=count($content);
$row=array();
for($x=1;$x<$count;$x++){
	
	$row[$x]=mysqli_real_escape_string($con,$content[$x]);
}
$regdate=format_date($content[0]);

$query=mysqli_query($con,"INSERT INTO `kemuda`.`tblapplication` (`regdate`, `campus`, `studymode`, `intake`, `program`, `course`, `studentname`, `studentic`, `studentgender`, `studentdob`, `studenticcolor`, `studentcivil`, `studentreligion`, `studentplaceofbirth`, `studentcountryofbirth`, `studentaddress`, `studentcontact`, `studentemail`,`studentmedical`, `studentqualification`, `guardiantype`, `guardianname`, `guardianic`, `guardianaddress`, `guardiancontact`, `guardianjobtitle`, `guardianemployer`, `guardianincome`) VALUES ('$regdate','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]',
'$row[11]','$row[12]','$row[13]','$row[14]','$row[15]','$row[16]','$row[17]','$row[18]','$row[19]','$row[20]',
'$row[21]','$row[22]','$row[23]','$row[24]','$row[25]','$row[26]','$row[27]')");

if($query){
echo "success";	
}
else{
echo (die(mysqli_error($con)));	
}
mysqli_close($con);		
}

function format_date($date){
	list($d,$m,$y)=explode("-",$date);
	
	return $y."-".$m."-".$d;
}
?>