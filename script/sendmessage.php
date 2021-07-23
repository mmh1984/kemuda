<?php
echo "Hello";
if(isset($_POST['name'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	$to = "enquiry@kemudainstitute.com";
	$subject = "Online Message (www.kemudainstitute.com)";
	$txt = "Name: $name ";
$txt .= "<br/>";
$txt.="email: $email ";
	$txt .= "<br/>";
$txt.="subject: $subject ";
	$txt .= "<br/>";
$txt.="message: $message ";
	$txt .= "<br/>";

$ccaddress="hasnah@kemudainstitute.com";
$ccname="HJ HASNAH HJ ASRI";
	
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:  ' . $name . ' <' . $email .'>' . " \r\n" .
			'Cc:  ' . $ccname . ' <' . $ccaddress .'>' . " \r\n" .
            'Reply-To: '.  $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
	


$result=mail($to,$subject,$txt,$headers);
	if($result) {
		echo "Your message was successfully sent. We will contact you as soon as possible.";
		
	}
	
	
	
}

	

else{
header('location:index.php');
	
}



?>