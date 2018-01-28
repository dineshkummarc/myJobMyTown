<!doctype html>
<html lang="en">
  <head>
    <title>page title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
  </head>
  <body style="background-color:#F4F4F4;">
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->
        
<div class="container-fluid my-4 p-0">
	<div class="row">	
<!--left col -->      <div class="col-md-1"></div> <!--left col -->
	
	    <div class="col-md-10 ">          
                                             <!-- start your code from here-->
											 
					                              <!-- post job -->			
   <div class="container-fluid p-2 my-2 bg-white">												  
	<h3 >Post Job</h3><hr>
	
	
	<form class="text-left" action="">

	
   Job Title&nbsp;&nbsp;<input type="text" name="jobTitle"  value="eg: urgent requirment of web developer"><br><br>

Job Type&nbsp;&nbsp;
<input type="radio" name="gender" value="male" checked>Full Time
<input type="radio" name="gender" value="female"> Part Time<br><br>


Industry&nbsp;
 <input list="ind" name="ind" >
  <datalist id="ind">
    <option value="Travel">
    <option value="Construction">
	<option value="Banking">
	<option value="IT">
	<option value="Telecom">
 </datalist><br><br>


Functional Area&nbsp;
 <input list="area" name="area" >
  <datalist id="area">
    <option value="HR">
    <option value="Sales">
	<option value="BPO">
	<option value="Accounting">
	<option value="Production">
 </datalist><br><br>




   Job Location&nbsp;&nbsp;<input type="text" name="jobTitle" ><br><br>

Job Role&nbsp;
 <input list="jobRole" name="role" >
  <datalist id="jobRole">
    <option value="Accountant">
    <option value="BPP/Telecaller">
	<option value="cashier">
	<option value="Designer">
	<option value="HR/Admin">
 </datalist><br><br>
 
 
 
 Experience&nbsp;
 <input list="exp" name="exp" >
  <datalist id="exp">
    <option value="Fresher">
    <option value="0 to 1">
	<option value="1 to 3">
	<option value="3 to 5">
	<option value="More than 5 Years">
 </datalist><br><br>

 
 
Qulification / Eligibility&nbsp;
<input type="checkbox" name="bike1" value="hero">SSLC&nbsp;&nbsp;
<input type="checkbox" name="bike1" value="hero">PUC&nbsp;&nbsp;
<input type="checkbox" name="bike1" value="hero">Any Degree&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">BA&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">BBA&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">BCA&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">BSC&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">BE&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">B Tech&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">Other<br><br>
 
 
 
 Key Skills&nbsp;&nbsp;<input type="text" name="keySkills"  value=""><br><br>
 
 
Job Description&nbsp; 
 <textarea name="message" style="width:500px; height:50px;"></textarea><br><br>
 
 
 Last Date of Application&nbsp; 
 <input type="date" name="lday"><br><br>
 

 Number of Vacancies&nbsp; 
 <input type="number" name="vac"><br><br>
 
 
Sallery P. A.&nbsp;
 <input list="sall" name="sall" >
  <datalist id="sall">
    <option value="less than 50,000 P.A">
    <option value="50,000 to 1,00,000 P.A">
	<option value="1,00,000 to 3,00,000 P.A">
	<option value="3,00,000 to 5,00,000 P.A">
	<option value="5,00,000 to 10,00,000 P.A">
	<option value="More than 10,00,000 P.A">
 </datalist><br><br>
 
 
 
 <b>Company Info</b><br><bn>
 
 Company Name&nbsp;&nbsp;<input type="text" name="jobTitle"  value=""><br><br>
 
 Website&nbsp;&nbsp;<input type="url" name="jobTitle"   value=""><br><br>
 
 Email&nbsp;&nbsp;<input type="email" name="jobTitle"   value=""><br><br>
 
 Telephone&nbsp;&nbsp;<input type="tel" name="jobTitle"  value=""><br><br>
 
 Company Description&nbsp; 
 <textarea name="message" style="width:500px; height:50px;"></textarea><br><br>
 
 
<input type ="submit" value="Post Now" class=" btn btn-large bg-success text-white" >
&nbsp;or&nbsp;
<button type ="btn" class="btn bg-danger text-white"  href="#">Add to Draft</button> <br>

<span class ="text-center">"By posting this job, you agree to <a href="#">Terms of Use </a> and <a href="#">Privacy Policy<a>. If you have any issues, please write to help@myjobmytown.com"</span>
 
 
 
 



   
     </form> 
	
	
	
	
	
	
	  
	  
	  </div>
	  
	
	  
	 
	  
	  
	  
	 
	    
 	                                              
	
		
		
			
		
		
		
		
		
		
		
												<!-- End your code here-->

												
 </div> 
	
<!--right col -->      <div class="col-md-1"></div> <!--right col -->
					  
	</div>					  
  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  </div>
  <?php include_once "script.php"; ?>
  </body>
</html>