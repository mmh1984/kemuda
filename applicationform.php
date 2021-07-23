<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Online Application</title>
<link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='css/custom.css' rel='stylesheet' type='text/css'>

</head>

<body style='background:#CCC;' id='mainbody'>
<div class="container" style='background:#fff;margin-top:1%;box-shadow:2px 2px 2px 2px #333;'>
	<div class="row">
		<div class="col-md-1">
      <a href='index.html'>
        <img src='img/logo.png' class='img img-responsive' id='logo'>
        </a>
        </div>
		
		<div class="col-md-8">
        <h1>KEMUDA INSTITUTE <small>REGISTRATION FORM</small><h1> 
        
		</div>
        <div class='col-md-2' style='padding-top:30px'>
       <span id='tracker' class='alert alert-info pull-right'>Section 1 of 4</span>
        </div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary" id='section1'>
				<div class="panel-heading">
					<h3 class="panel-title">
						Section 1: Program Application
					</h3>
				</div>
				<div class="panel-body">
                fields with * are required
                <p id='section1error'></p>
					<table class='table table-condensed table-striped table-responsive'>
                    <tr>
                      <td>Campus:</td>
                    <td>
                    <select id='campus' class='inputsmall form-control'>
                    <option value='BSB'>BSB</option>
                       <option value='KB'>KB</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                    <td>Study Mode:</td>
                    <td>
                    <select id='mode' class='inputsmall form-control'>
                    <option value='Full-Time'>Full-Time</option>
                       <option value='Part-Time'>Part-Time</option>
                    </select>
                    
                    </td>
                   
                    </tr>
                   <tr>
                    <td>Intake:</td>
                    <td>
                  		<input type='radio' name='intake' value='March' checked>March<br/>
                        <input type='radio' name='intake' value='June' >June<br/>
                        <input type='radio' name='intake' value='September' >September
                    </td>
                   </tr>
                    
                     <tr>
                    <td>Date:</td>
                    <td>
                  		<select id='day' class='customselect'></select>
                        <select id='month' class='customselect'></select>
                        <select id='year' class='customselect'></select>
                    </td>
                  
                  
                    </tr>
                    
                  
                    
                     <tr>
                    <td>Program:</td>
                    <td>
                  		<select id='course' class='inputsmall form-control'>
                        <option value='BTEC'>BTEC</option>
                        <option value='NCC'>NCC</option>
                        <option value='LCCI'>LCCI</option>
                        <option value='OUM'>OUM</option>
                        <option value='Kemuda Certificate'>KEMUDA Certificate</option>
                        </select>
                        <br/>
                       			
                       <span id='courselist' style='font-size:.8em'>
                       <p class='text text-info'>Select Program</p>
                       </span>
                    </td>
                    </tr>
                    <tr>
                    <td>Course Options: (Choose your 1st and 2nd option)</td>
                    <td><textarea id='option' class='form-control' rows='5' readonly></textarea></td>
                    </tr>
                    
                    
                     <tr>
                  
                    </tr>
                    </table>
				</div>
				<div class="panel-footer">
					<button class='btn btn-primary pull-right' onClick="section_2()">Next <span class='glyphicon glyphicon-forward'></span></button>
                    <br/>
                    <br/>
				</div>
			</div>
            
            <!--section 2-->
            
            <div class="panel panel-success" id='section2'>
				<div class="panel-heading">
					<h3 class="panel-title">
						Section 2: Personal Information
					</h3>
				</div>
				<div class="panel-body">
                fields with * are required
                  <p id='section2error'></p>
					<table class='table table-responsive table-striped table-condensed'>
                    <tr>
                    <td>*Full Name:</td><td><input type='text' id='fullname' class='form-control customselect'></td>
                     <td>*IC-Number</td><td><input type='text' id='icpassport' class='form-control inputsmall' maxlength="16" placeholder='00-000000'></td>
                    </tr>
                    <tr>
                    <td>Gender:</td>
                    <td><select id='gender' class='form-control inputsmall'>
                    	<option value='Male'>Male</option>
                        <option value='Female'>Female</option>
                    </select>
                    </td>
                    
                    <td>*DOB:</td>
                    <td><input type='text' id='dob' class='form-control inputsmall' maxlength="16" placeholder='dd-mm-yyyy'>
                    </td>
                    </tr>
                    
                    
                      <tr>
                    <td>IC Color:</td>
                    <td><select id='iccolor' class='form-control inputsmall'>
                    	<option value='Yellow'>Yellow</option>
                        <option value='Green'>Green</option>
                         <option value='Purple'>Purple</option>
                     
                    </select>
                    </td>
                      <td>Civil Status:</td>
                    <td><select id='civil' class='form-control inputsmall'>
                    	<option value='Single'>Single</option>
                        <option value='Married'>Married</option>
                         <option value='Divorced'>Divorced</option>
                  
                     
                    </select>
                    </td>
                    </tr>
                    <tr>
                    	<td>*Religion:</td>
                        <td><input type='text' id='religion' class='form-control inputsmall'></td>
                        <td>*Place of Birth:</td>
                        <td><input type='text' id='placeofbirth' class='form-control'></td>
                    </tr>
                    
                    <tr>
                    	<td>*Country of Birth:</td>
                        <td><input type='text' id='country' class='form-control'></td>
                        <td>*Citizenship:</td>
                        <td><input type='text' id='citizenship' class='form-control  inputsmall'></td>
                    </tr>
                    
                      <tr>
                    	<td>*Residential Address:</td>
                        <td><textarea class='form-control' rows='5' id='address'></textarea></td>
                        <td>*Contact Details</td>
                        <td>
                       <input type='text' id='mobile' class='inputsmall' placeholder="mobile"><br/><br/>
                          <input type='text' id='home' class='inputsmall' placeholder="home"><br/><br/>
                        <input type='text' id='office' class='inputsmall' placeholder="office">
                    	
                        </td>
                    </tr>
                    <tr>
                    <td>*Email Address:</td><td><input type='email' id='email' class='form-control'></td>
                     <td>Medical Issues (if any):</td><td><input type='text' id='medical' class='form-control'></td>
                    </tr>
                    </table>
				</div>
				<div class="panel-footer">
					<button class='btn btn-primary pull-left' onClick="section_1()">Previous <span class='glyphicon glyphicon-backward'></span>
                  
                    </button>
                    
                    <button class='btn btn-primary pull-right' onClick="section_3()">Next <span class='glyphicon glyphicon-forward'></span>
                  
                    </button>
                      <br/>
                    <br/>
				</div>
			</div>
            
            <!--end of section 2-->
            <!--section 3-->
            
            <div class="panel panel-info" id='section3'>
				<div class="panel-heading">
					<h3 class="panel-title">
						Section 3: Qualification
					</h3>
				</div>
				<div class="panel-body">
                <div class='row'>
                <div class='col-md-8'>
				<p>Fields with * are required</p>
                <p id='section3error'></p>
                <hr/>
              
                
               
                
                <div id='tblqualification'>
               
                <table class='table-striped table-condensed table-responsive' >
                	<thead>
                    <tr>
                     <th>Qualification:</th>
                    <th>Year</th>
                     <th>Subject</th>
                      <th>Grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
                 <button class='btn btn-default' onclick="add_row()"><span class='glyphicon glyphicon-plus' ></span> Add Row</button>
                    <button class='btn btn-primary' onclick="add_qualification()"><span class='glyphicon glyphicon-save-file'> </span>Save</button>
                    <button class='btn btn-danger' onclick='clear_qualification()'>Clear</button>
                 
                </div>
                </p>
                </div>
               <div class='col-md-4'>
               Qualification:
               <div id='qualificationcontent'>
               </div>
               </div>
                </div>
				</div>
				<div class="panel-footer">
					<button class='btn btn-primary pull-left' onClick="section_2()">Previous <span class='glyphicon glyphicon-backward'></span>
                  
                    </button>
                    
                    <button class='btn btn-primary pull-right' onClick="section_4()">Next <span class='glyphicon glyphicon-forward'></span>
                  
                    </button>
                    <br/>
                    <br/>
				</div>
			</div>
            <!--section 3 end-->
            <!--section 4-->
            <div class="panel panel-default" id='section4'>
				<div class="panel-heading">
					<h3 class="panel-title">
						Section 4: Parent/Guardian Details
					</h3>
				</div>
				<div class="panel-body">
                <p id='section4error'></p>
                <p>Fields with * are required</p>
                
               <p> Select:
                  <select id='guardian' class='customselect inputsmall'>
                    <option value="Mother">Mother</option>
                    <option value="Father">Father</option>
                    <option value="Relative">Relative</option>
                    <option value="Others">Others</option>
                    </select>
                    </p>
				 <table class='table table-striped table-condensed table-responsive' >
                	<tr>
                    <td>*Full Name:</td><td><input type='text' class='form-control' id='guardianname'> </td>
                     <td>*IC-Number:</td><td><input type='text' class='form-control inputsmall' id='guardianic' placeholder="00-000000"> </td>
                    </tr>
                   <tr>
                   <td>*Address</td><td>
                   <textarea id='guardianadd' class='form-control' rows='5'></textarea>
                   </td>
                    <td>*Contact Details</td>
                        <td>
                       <input type='text' id='guardianmobile' class='customselect inputsmall' placeholder="mobile"><br/><br/>
                          <input type='text' id='guardianhome' class='customselect inputsmall' placeholder="home"><br/><br/>
                        <input type='text' id='guardianoffice' class='customselect inputsmall' placeholder="office">
                    	
                        </td>
                   </tr> 
                   <tr>
                   <td>Employer:</td>
                   <td><select id='guardianemployer' class='customselect'>
                   	<option value='Government'>Government</option>
                    <option value='Private Sector'>Private Sector</option>
                    <option value='Self-Employed'>Self-Employed</option>
                    <option value='Retired'>Retired'</option>
                    <option value='Unemployed'>Unemployed</option>
                   </select>
                   </td>
                   <td>*Job Title</td>
                     <td><input type='text' id='guardiantitle' class='form-control'></td>
                   </tr>
                   <tr>
                   <td>Estimated monthly income (select one)</td>
                   <td>
                   <input type='radio' name='guardianincome' value='$1,000 or less' checked>$1,000 or less<br/>
                   <input type='radio' name='guardianincome' value='B$1,001 – B$ 3,000'>B$1,001 – B$ 3,000<br/>
                   <input type='radio' name='guardianincome' value='B$ 3,001 – B$ 5,000'>B$ 3,001 – B$ 5,000<br/>
                   <input type='radio' name='guardianincome' value='B$ 5,001 or above'>B$ 5,001 or above<br/>
                   <input type='radio' name='guardianincome' value='No Income'>No Income<br/>
                   </td>
                   </tr>
                </table>
                
				</div>
				<div class="panel-footer">
				<button class='btn btn-primary pull-left' onClick="section_3()">Previous <span class='glyphicon glyphicon-backward'></span>
                  
                    </button>
                    
                    <button class='btn btn-primary pull-right' onClick="finish()">Finish<span class='glyphicon glyphicon-check'></span>
                  
                    </button>
                    <br/>
                    <br/>
				</div>
			</div>
            <!--end of section 4-->
            
         
			
		</div>
	</div>
</div>
<div class='loading'>
	<div>
    	<h3 align="center">Submitting your application..</h3>
        <img src='img/progress.gif' width='50px;' class='center-block'>
        <br/>
        <button class='btn btn-primary' id='btncloseloading'>Close</button>
    </div>
</div>
<div class='summarycontainer'>
	<div class='summaryheader'>
    	<div class='row'>
        	<div class='col-md-4'></div>
            <div class='col-md-4'></div>
            <div class='col-md-4'>
            <button class='btn btn-primary' onClick="submit_application()"><span class='glyphicon glyphicon-save'></span>Submit</button>
            <button class='btn btn-info' onClick="print_summary()"><span class='glyphicon glyphicon-print' ></span>Print</button>
        <button class='btn btn-default' onClick="close_summary()"><span class='glyphicon glyphicon-close'></span>Close and Review Details</button>
            </div>
        </div>
    </div>
    <div class='summarydetails'>
  		<?php
		require 'phpfiles/summary.php';
		?>
    </div>

</div>

</body>
</html>
<script src='js/jquery.min.js' type='text/javascript'></script>
<script src='js/summary.js' type='text/javascript'></script>
<script src='js/jQuery.print.js'  type='text/javascript'></script>
 
<script>
$(document).ready(function(e) {
    /*populate year */
	populate_year();
	populate_day();
	populate_month();
	/**/
	
	
	/*section change */
	$("#section2").hide();
	$("#section3").hide();
$("#section4").hide();
	
	$("#course").change(function(e) {
		
        var course=$(this).val();
		
		load_course(course);
    });
	
	//function to populate date
	function populate_year(){
		var year=new Date();
	var currentyear=year.getFullYear();
	var yearahead=currentyear++;
	var content="<option value='"+ yearahead +"'>"+ yearahead +"</option>";
	content+="<option value='"+ currentyear +"'>"+ currentyear +"</option>";
	
	$("#year").append(content);	
	}
	
	function populate_day(){
		var content="";
	for (x=1;x<=31;x++){
		content+="<option value='"+ x +"'>"+ x +"</option>";
		
	}	
	
	$("#day").append(content);	
	}
	
	function populate_month(){
	
	var month=["January","February","March","April","May","June","July","August","September","October","November","December"];
		var content="";
		var monthindex=1;
	for (x=0;x<12;x++){
		content+="<option value='"+ monthindex +"'>"+ month[x] +"</option>";
		monthindex++;
		
	}	
	$("#month").append(content);	
		
	}
	//end of function
	
	//load_courses based on course provider
	
	function load_course(course){
	$("#courselist").empty();
	$.ajax({
	type:"POST",
	url:"phpfiles/courses.php",
	data:{
		course:course	
	},
	success:function(result){
		
		$("#courselist").html(result);	
	}
		
		
	});
		
	}
	
	
});

var rowcontents=[];

function add_option(){
var course=$("#course").val();
var coursename=$("input[name='coursename']:checked").val();
if(coursename==null){
	alert("Select your course from the list");	
}
else{
	$("#option").append("("+ course + " " + coursename+ ")<br/>");	
	$("#option").append("\n");	
}
}

//navigate through different section
function section_2(){
	if($("#option").val().length==0){
		$("#section1error").addClass("alert alert-warning");
		$("#section1error").html("Please select your preferred course");
	}
	else{
	$("#section1error").removeClass("alert alert-warning");
		$("#section1error").html("");
		$("#section1").hide();
		$("#section3").hide();
		$("#section2").show();	
		$("#tracker").html("Section 2 of 4");
	
	//
	var regdate=$("#day").val() +"-" +$("#month").val()+"-" + $("#year").val()
	rowcontents.push(regdate);
	rowcontents.push($("#campus").val());
	rowcontents.push($("#mode").val());
	$("input[name='intake']:checked").each(function(index, element) {
        rowcontents.push($(this).val());
    });
	rowcontents.push($("#course").val());
	
        rowcontents.push($("#option").val());
  
	
	$("#row0").html(rowcontents[0]);
	$("#row1").html(rowcontents[1]);
	$("#row2").html(rowcontents[2]);
	$("#row3").html(rowcontents[3]);
	$("#row4").html(rowcontents[4]);
	$("#row5").html(rowcontents[5]);
	
	
	}
}

function section_4(){
if(qyear.length==0){
		$("#section3error").addClass("alert alert-warning");
		$("#section3error").html("You have not added any qualifications yet");
	
}	
else{
		$("#section3error").removeClass("alert alert-warning");
		$("#section3error").html("");
		$("#section4").show();
		$("#section3").hide();
		$("#tracker").html("Section 4 of 4");
		
		var content="";
		for(x=0;x<qqualification.length;x++){
		content+="<tr>";
		content+="<td>"+qqualification[x]+"</td>";
		content+="<td>"+qyear[x]+"</td>";
		content+="<td>"+qsubject[x]+"</td>";
		content+="<td>"+qgrade[x]+"</td></tr>";
		
		
		}
		rowcontents.push(content);
		$("#summaryqualification tbody").append(content);//19
		
}
	
}

function section_1(){
		$("#section1").show();
		$("#section2").hide();	
		$("#tracker").html("Section 1 of 4");
}

function section_3(){
	
	var message='';
	$("#section4").hide();
	if($("#fullname").val().length==0){
	message+="Enter your fullname <br/>";	
	}
	else if($("#icpassport").val().length==0){
	message+="Enter your ic number/passport <br/>";	
	}
	
	else if($("#dob").val().length==0){
	message+="Enter your date of birth <br/>";	
	}
	else if($("#religion").val().length==0){
	message+="Religion cannot be empty <br/>";	
	}
	else if($("#country").val().length==0){
	message+="Country of birth cannot be empty <br/>";	
	}
	else if($("#placeofbirth").val().length==0){
	message+="Place of birth cannot be empty <br/>";	
	}
	else if($("#address").val().length==0){
	message+="Enter your address<br/>";	
	}
	else if($("#citizenship").val().length==0){
	message+="Citizenship cannot be empty <br/>";	
	}
	else if($("#mobile").val().length==0){
	message+="Please enter your mobile number<br/>";	
	}
	else if($("#email").val().length==0){
	message+="Please enter your email <br/>";	
	}

	if(message.length==0){
	$("#section2error").removeClass("alert alert-warning");
		$("#section2error").html("");
		$("#section3").show();
		$("#section2").hide();
		$("#tracker").html("Section 3 of 4");
		
		   rowcontents.push($("#fullname").val());
		   rowcontents.push($("#icpassport").val());
		   rowcontents.push($("#gender").val());
		   rowcontents.push($("#dob").val());
		   rowcontents.push($("#section2 #iccolor").val());
		   rowcontents.push($("#civil").val());
		   rowcontents.push($("#religion").val());
		   rowcontents.push($("#placeofbirth").val());
		   rowcontents.push($("#country").val());
		   rowcontents.push($("#address").val());
		   var phone="Mobile:" + $("#mobile").val() +"<br/>";
		   phone+="Home:" + $("#home").val() +"<br/>";
		   phone+="Office:" + $("#office").val() +"<br/>";
		   rowcontents.push(phone);
		   rowcontents.push($("#section2 #email").val());
		   rowcontents.push($("#medical").val());
		   
		   $("#row6").html(rowcontents[6]);
		   $("#row7").html(rowcontents[7]);
		   $("#row8").html(rowcontents[8]);
		   $("#row9").html(rowcontents[9]);
		   $("#row10").html(rowcontents[10]);
		   $("#row11").html(rowcontents[11]);
		   $("#row12").html(rowcontents[12]);
		   $("#row13").html(rowcontents[13]);
		   $("#row14").html(rowcontents[14]);
		   $("#row15").html(rowcontents[15]);
		   $("#row16").html(rowcontents[16]);
		   $("#row17").html(rowcontents[17]);
		   $("#row18").html(rowcontents[18]);
		   
		   
		   
		
	}
	else{
			$("#section2error").addClass("alert alert-warning");
		$("#section2error").html(message);
	}
}


function add_row(){
	var content="<tr><td> <select name='qualification' class='inputsmall'>";
         content+="<option value='O Level'>O Level</option>";
         content+="<option value='A Level'>A Level</option>";
         content+="<option value='Others'>Others</option>";
         content+="</select></td>";
	content+="<td><input type='text' name='qyear'></td>"
        content+="<td><input type='text' name='qsubject'></td>";
          content+="<td><input type='text' name='qgrade'></td>";
            content+="</tr>";
			
	$("#tblqualification table tbody").append(content);
	
}

//global variable
var qyear=[];
var qsubject=[];
var qgrade=[];
var qqualification=[];

function add_qualification(){

		qyear=[];
qsubject=[];
qgrade=[];
qqualification=[];
$("input[name='qyear']").next("span").remove();
$("input[name='qsubject']").next("span").remove();
$("input[name='qgrade']").next("span").remove();
$("input[name='qyear']").each(function(index, element) {
	
    if($(this).val().length==0){
		$(this).after("<span><br/>Enter qualification year</span>");	
	}
	else{
		$(this).next("span").remove();
		qyear.push($(this).val());	
	}
});	

//
$("input[name='qsubject']").each(function(index, element) {
	
    if($(this).val().length==0){
		$(this).after("<span><br/>Enter subject name</span>");	
	}
	else{
		$(this).next("span").remove();
		qsubject.push($(this).val());	
	}
});	

$("input[name='qgrade']").each(function(index, element) {
	
    if($(this).val().length==0){
		$(this).after("<span><br/>Enter= your grade</span>");	
	}
	else{
		$(this).next("span").remove();
		qgrade.push($(this).val());	
	}
});	

$("select[name='qualification']").each(function(index, element) {
	
  
	
		qqualification.push($(this).val());	

});	

	var qcontent="<table class='table table-condensed'>";
	qcontent+="<tr><th>Year</th><th>Subject</th><th>Grade</th>";
	for(x=0;x<qsubject.length;x++){
		qcontent+="<tr>";
				qcontent+="<td>"+qqualification[x]+"</td>";
		qcontent+="<td>"+qyear[x]+"</td>";
		qcontent+="<td>"+qsubject[x]+"</td>";
		qcontent+="<td>"+qgrade[x]+"</td></tr>";
	}
	qcontent+="</table>";
	$("#qualificationcontent").html(qcontent);
}

function clear_qualification(){
		$("#qualificationcontent").html("");
		$("#tblqualification table tbody").empty();
		alert(qualificationnotempty);
		qyear=[];
qsubject=[];
qgrade=[];
qqualification=[];
}

function finish(){
	var message='';
	if($("#guardianname").val().length==0){
		message+="Guardian name cannot be empty <br/>";	

	}
	else if($("#guardianic").val().length==0){
		message+=" IC number cannot be empty <br/>";	

	}
	else if($("#guardianadd").val().length==0){
		message+="Please enter the guardian's address <br/>";	

	}
	else if($("#guardianmobile").val().length==0){
		message+="Mobile number cannot be empty <br/>";	

	}
	else if($("#guardiantitle").val().length==0){
		message+="Please enter the job title<br/>";	

	}
	
	if(message.length==0){
	$("#section4error").removeClass("alert alert-warning");
		$("#section4error").html("");
		rowcontents.push($("#guardian").val());
		rowcontents.push($("#guardianname").val());
		rowcontents.push($("#guardianic").val());
		rowcontents.push($("#guardianadd").val());
		  var phone="Mobile:" + $("#guardianmobile").val() +"<br/>";
		   phone+="Home:" + $("#guardianhome").val() +"<br/>";
		   phone+="Office:" + $("#guardianoffice").val() +"<br/>";
		   rowcontents.push(phone);
		rowcontents.push($("#guardiantitle").val());
		rowcontents.push($("#guardianemployer").val());
		$("input[name='guardianincome']:checked").each(function(index, element) {
            rowcontents.push($(this).val());
        });
		
		 $("#row20").html(rowcontents[20]);
		 $("#row21").html(rowcontents[21]);
		 $("#row22").html(rowcontents[22]);
		 $("#row23").html(rowcontents[23]);
		 $("#row24").html(rowcontents[24]);
		 $("#row25").html(rowcontents[25]);
		 $("#row26").html(rowcontents[26]);
		 $("#row27").html(rowcontents[27]);
		 
		 $(".summarycontainer").show();
	}
	else{
	
$("#section4error").addClass("alert alert-warning");
		$("#section4error").html(message);		
	}
	
}

function close_summary(){
	$(".summarycontainer").hide();	
}

function show_summary(){
	$(".summarycontainer").show();	
}

function print_summary(){
	$.print($(".summarydetails").html());
	
}
function submit_application(){
$(".loading").show();
$(".loading button").hide();
$.ajax({
	type:"POST",
	url:"phpfiles/application.php",
	data:{
		option:"save",
		row:rowcontents
	},
	success:function(result){
		
		
		if(result=='success'){
			window.location.href='applicationsuccessful.html';
		}
		else{
			alert(success);	
		}
		
		
	},
	complete:function(result){
		$(".loading button").show();
	}
	
});

}

$("#btncloseloading").click(function(e) {
    $(".loading").hide();
});
</script>
