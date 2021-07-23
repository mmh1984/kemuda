<?php
session_start();
include 'assets/sessions.php';
$loggeduser=initialize_session_admin();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Application Details</title>
<link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>

<style>
.summarycontainer{
position:fixed;
z-index:100;
width:100%;
background-color:rgba(0,0,0,.6);
top:0;
left:0;

height:100vh;
	
}

.summaryheader {
background-color:#003;
padding:5px;


}

.summarydetails{

margin-left:auto;
margin-right:auto;
width:90%;
background-color:#FFF;	
height:100%;
overflow:scroll;
}

.rowprint{

font-size:.8em;
font-weight:bold;
padding:20px;
font-color:#333;
border:1px #999 solid;
}


</style>
</head>

<body>

<?php
$ic=$_GET['ic'];
include 'assets/connection.php';
$query=mysqli_query($con,"SELECT * FROM tblapplication WHERE studentic='$ic'");

if($query){
$row=array();

while($a=mysqli_fetch_array($query)){
	for($x=0;$x<28;$x++){
		$row[$x]=$a[$x];	
	}
}
}
else{
  die(mysqli_error($con));	
}
mysqli_close($con);

?>
<div class='container'>

<div class='summarycontainer'>
	<div class='summaryheader'>
    	<div class='row'>
        	
            <div class='col-md-12'>
          <a href='application.php' class='btn btn-default'>Back</a>
            <button class='btn btn-info' onClick="print_summary()">Print</button>

            </div>
        </div>
    </div>
    <div class='summarydetails'>
  		<div class="container">
        <div class="row">
        <table>
           <tr>
           <td>
           <img src="images/logo.png" width="100px"></td>
            <td>
                <h2>KEMUDA Institute
                <small>Registration Form</small></h2>
               </td>
            <td></td>
          </tr>
            </table>
        </div>
        <div class='row' style='border-bottom:2px solid #000;margin-bottom:20px;'></div>
        <div class="row">
            <table class='table table-condensed' width="80%">
           <tr >
           <td class='rowprint'>
                <h4>BSB Branch</h4>
                <p>Unit 25, Ground Floor, Spg 633Jln Beribi,<br/> Mukim Gadong Brunei Darussalam <br/>Tel: +673-2655614/2448679 </p>
          </td>
        
           <td class='rowprint' >
                <h4>KB Branch</h4>
                <p>3rd Floor Sek.Tunas Jaya PGGMB Lot 6227, <br/>Jln Pandan 6 Brunei Darrussalam<br/> Tel: +673-3337761 </p>
         </td>
         </tr>
         </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Program Details</h3>
                <h5>Registration Date:<strong><span id='row0'><?php echo format_date($row[0]) ?></span></strong></h5>
                <div>
                    <table class="table table-bordered table-condensed">
                       
                            <tr>
                                <td><strong>Campus:</strong></td>
                                <td><?php echo $row[1] ?></td>
                            </tr>
                      
                     
                            <tr>
                                <td><strong>Study Mode:</strong></td>
                                <td><?php echo $row[2] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Intake:</strong></td>
                                <td><?php echo $row[3] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Program: </strong></td>
                                <td><?php echo $row[4] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Course:</strong></td>
                                <td><?php echo $row[5] ?></td>
                            </tr>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Personal Details</h3>
                <div>
                    <table class="table table-bordered table-condensed">
                        
                            <tr>
                                <td><strong>Full Name:</strong></td>
                                <td><?php echo $row[6] ?></td>
                            </tr>
                      
                        
                            <tr>
                                <td><strong>IC Number:</strong></td>
                                <td><?php echo $row[7] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Gender: </strong></td>
                                <td><?php echo $row[8] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Date of Birth:</strong></td>
                                <td><?php echo $row[9] ?></td>
                            </tr>
                            <tr>
                                <td><strong>IC Color:</strong></td>
                                <td><?php echo $row[10] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Civil Status:</strong></td>
                                <td><?php echo $row[11] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Religion:</strong></td>
                                <td><?php echo $row[12] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Place of Birth:</strong></td>
                                <td><?php echo $row[13] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Country of Birth:</strong></td>
                                <td><?php echo $row[14] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Address:</strong></td>
                                <td><?php echo $row[15] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Contact No:</strong></td>
                                <td><?php echo $row[16] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Email Address:</strong></td>
                                <td><?php echo $row[17] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Medical Issues:</strong></td>
                                <td><?php echo $row[18] ?></td>
                            </tr>
                      
                    </table>
                </div>
            </div>
                <hr/>
            <div class="col-md-12">
                <h3>Qualifications </h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-condensed" id='summaryqualification'>
                        <thead>
                            <tr>
                                <th>Qualification </th>
                                <th>Year </th>
                                <th>Subject </th>
                                <th>Grade </th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php echo $row[19] ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <hr/>
                <h3>Guardian </h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-condensed">
                       
                            <tr>
                                <td><strong>Relationship:</strong></td>
                                <td><?php echo $row[20] ?></td>
                            </tr>
                       
                     
                            <tr>
                                <td><strong>Full-Name: </strong></td>
                                <td><?php echo $row[21] ?></td>
                            </tr>
                            <tr>
                                <td><strong>IC Number:</strong></td>
                                <td><?php echo $row[22] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Address: </strong></td>
                                <td><?php echo $row[23] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Contact Details:</strong></td>
                                <td><?php echo $row[24] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Job Title: </strong></td>
                                <td><?php echo $row[25] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Employer: </strong></td>
                                <td><?php echo $row[26] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Estimated Income(Monthly): </strong></td>
                                <td><?php echo $row[27] ?></td>
                            </tr>
                     
                    </table>
                </div>
            </div>
        </div>
    </div>
        <hr/>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase"><strong>Requirements to be attached</strong></h4>
                <ul>
                    <li>Photocopy IC (Front &amp; Back) – <strong>4 pieces Student
&amp; 1 Piece Parents</strong> </li>
                    <li>Photocopy Birth Certificate – Student&nbsp; </li>
                    <li><strong>2 pieces</strong> Photocopy O level and/or A level Certificate or Other Relevant Qualifications </li>
                    <li>Photocopy of School Leaving Certificate </li>
                    <li><strong>3 pieces </strong>Passport-Sized Photo<em> (Write your name &amp; I.C. No. at the back)</em> </li>
                </ul>
            </div>
        </div>
            <hr/>
        <div class="row">
            <div class="col-md-12">
                <h4><strong>RULES &amp; REGULATIONS</strong> </h4>
                <ul>
                    <li>Enrolling for a course at KEMUDA Institute (KI) constitutes a binding agreement on the student to follow the course schedule and to pay the full fee. </li>
                    <li>There will be no refund of fees once payment is made. </li>
                    <li>Minimum registration fee must be paid before a Student Confirmation Letter can be issued. </li>
                    <li>Students must comply with KI Attire regulations when entering classes. <em>Attire regulation: </em><strong><em>Smart &amp; Office Wear</em></strong><em>, please refer
to </em><a href="http://www.kemudainstitute.com/"><em>www.kemudainstitute.com</em></a><em> for further details.</em> </li>
                    <li>Students who are late in starting their course will not be entitled for any refund, or reduction in course fees;this also applies where students have been absent from class for a period of time and where they may not have been attending
                        all subjects for which they have enrolled.&nbsp; </li>
                    <li>Important notices are displayed on KI main notice board or KI Facebook Page or KI Instagram and it is the student’s responsibility to ensure that such notices are read, understood and adhered. </li>
                    <li>All details printed in catalogue and/or accompanying documents are correct at the time of printing. KI reserves the right to make changes to the structure and content of courses, including the cancellation of classes, if deemed necessary.
                        </li>
                    <li>Where an application form is signed on behalf of a student by his/her sponsor or guardian or representative, these conditions will still apply.&nbsp; </li>
                    <li>Students must retain all receipts produced at the time of payment(s) made. Any claim or dispute without original receipts will not be considered. </li>
                    <li>The Principal reserve the right to require a student to leave a course at any stage if the student does not fulfill the above requirements, if a student’s continual presence would, in the opinion of the Principal, be detrimental to
                        the wellbeing of staff, other students or KI generally or if a student does not meet his or her financial obligations. </li>
                </ul>
            </div>
        </div>
            <hr/>
        <div class="row">
            <div class="col-md-12">
                <h4><strong>STUDENT’S DECLARATION</strong> </h4>
                <p><strong><em>I, hereby confirm that the information
provided in this form is true and complete to the best of my knowledge. I have
read, understand and agree to strictly adhere to all KEMUDA Institute’s Rules
&amp; Regulations. </em></strong></p>
            </div>
             </div>
            <div class='row'>
            <div class="col-md-12">
            <table class='table table-bordered'>
            <tr>
                <td><strong>Signature of Student:</strong><td>_______________________</td>
                 <td><strong>Date:</strong></td><td>_______________________ </td>
                 </tr>
                </table>
            </div>
           
            </div>
            
            <div class='row'>
            <div class="col-md-12">
               <img src='images/financeuse.PNG' width='100%'>
              
            </div>
            
            </div>
       
    </div>
    </div>

</div>
</div>
</body>
</html>

  <script src="script/jquery.min.js"></script>
    <script src="script/bootstrap.min.js"></script> 
    <script src='script/jQuery.print.js'  type='text/javascript'></script>
	<script>
	function print_summary(){
		
	$.print($(".summarydetails").html());
	
}
	</script>
    
<?php
function format_date($date){
	list($y,$m,$d)=explode("-",$date);
	return $d."-".$m."-".$y;
	
}
?>