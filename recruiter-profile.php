<!doctype html>
<html lang="en">
  <head>
    <title>recruiter profile</title>
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
        
<div class="container-fluid m-0 p-0">
	<div class="row">	
<!--left col -->      <div class="col-md-2"></div> <!--left col -->
	
	    <div class="col-md-8">          
                                             <!-- start your code from here-->
	       <div class="container-fluid p-2 my-2">
           <div class="row">
             <div class="col-md-2 bg-white">
              <h5>Filters</h5>
              
			  <div class="tab">

  
  <nav class="nav flex-column ">
  <a class="nav-link active tablinks p-1" href="#" onclick="openCity(event, 'profile')" id="defaultOpen"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'Inbox')"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>Inbox</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'Sent')"><i class="fa fa-paper-plane fa-fw" aria-hidden="true"></i>Sent</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'Draft')"><i class="fa fa-floppy-o fa-fw" aria-hidden="true"></i>Draft</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'Jobs-Posted')"><i class="fa fa-share fa-fw" aria-hidden="true"></i>Jobs Posted</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'Post-Job')"><i class="fa fa-black-tie fa-fw" aria-hidden="true"></i>Post Job</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'Paid-Services')"><i class="fa fa-key fa-fw" aria-hidden="true"></i>Paid Services</a><br>
  
  <b><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Settings</b>
  
  
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'visibility')"><i class="fa fa-eye-slash fa-fw" aria-hidden="true"></i>Visibility</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'Block-User')"><i class="fa fa-lock fa-fw" aria-hidden="true"> </i>Block User</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'Change-Password')"><i class="fa fa-key fa-fw" aria-hidden="true"></i>Password</a>
  
  
</nav>
  
</div>

             </div>
			 
             <div class="col-md-10">
                
                                             <!--profile page-->  
				        <div class="container-fluid p-2  bg-white tabcontent" id="profile">


      <h3>Personal Information</h3><hr>
	
	
		<form class="text-left" action="">
		
		
<div class="row">
	<div class="col-md-3">
	<img src="images/r-i-1.jpg" class="img-fluid">
	</div>
	
	<div class="col-md">
   Name&nbsp;&nbsp;<br><input type="text" name="jobTitle"  value="Jan Koum" class="w-75"> <i class="fa fa-pencil " aria-hidden="true" ></i><br><br>
   
   
   
   
   Date of Birth&nbsp; <br>
 <input type="date" name="bday" class="w-75"> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>
 
 Mobile&nbsp;&nbsp;<br><input type="tel" name="jobTitle"  value="1234567890" class="w-75"> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>
 
 
 </div>
 
 <div class="col-md">
 

Email&nbsp;&nbsp;<br><input type="email" name="jobTitle"   value="jankoum@gmail.com" class="w-75"> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>


Marital Status&nbsp;<br>
 <input list="mstatus" name="mstatus" value="Married" class="w-75">
  <datalist id="mstatus">
    <option value="Single/unmarried">
    <option value="Married">
	<option value="Widowed">
	<option value="Divorced">
	<option value="Separated">
	<option value="Other">
 </datalist> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>


 Gender<br>
<input type="radio" name="gender" value="male" checked>male
<input type="radio" name="gender" value="female"> female<br><br>

</div>
</div>



<div class="row">

<div class ="col-md">
Permanent Address&nbsp; 
 <textarea name="message" class="w-75 h-50">1601 Willow Road
Menlo Park, California 94025
United States of America</textarea> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>
 
Home Town / City&nbsp;&nbsp;<br>
<input type="text" name="jobTitle"  value="california" class="w-75"> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>
 
 </div>
 <div class="col-md">

 Key Skills<br>
 <textarea name="message"  class="w-75 h-50">
Data Mining, Social Sourcing, Direct Approach, Phone sourcing, Digital Sourcing.</textarea> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>


 


Pincode&nbsp;&nbsp;<br>
<input type="text" name="jobTitle"  value="94025" class="w-75"> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>



 </div>
 </div><br><br>
 

 
 <div class="row">
 
                                            <!--work Details-->
<div class="col-md">
											
<h5>Work Details</h5>

Currently Working in&nbsp;&nbsp;<br>
<input type="text" name="jobTitle"  value="Xyz Pvt. Ltd." class="w-75"> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>

Current Designation&nbsp;&nbsp;<br>
<input type="text" name="jobTitle"  value="Hr Director" class="w-75"> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>

Role in Hiring&nbsp;&nbsp;<br>
<input type="text" name="jobTitle"  value="Company Recruiter" class="w-75"> <i class="fa fa-pencil" aria-hidden="true" ></i><br><br>
</div>
				
										<!--Sectors Details-->
<div class="col-md">				
<h5>Sectors and Skills I Hire For</h5> 
 
 
Functional Area:&nbsp;&nbsp;
<input type="checkbox" name="bike1" value="hero">HR&nbsp;&nbsp;
<input type="checkbox" name="bike1" value="hero">Sales&nbsp;&nbsp;
<input type="checkbox" name="bike1" value="hero">BPO&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">Accounting&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">Production<br><br>


 
Industries:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="bike1" value="hero">Travel&nbsp;&nbsp;
<input type="checkbox" name="bike1" value="hero">Construction&nbsp;&nbsp;
<input type="checkbox" name="bike1" value="hero">Banking&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">IT&nbsp;&nbsp;
 <input type="checkbox" name="bike2" value="honda">Telecom&nbsp;&nbsp;<br><br>
 
 </div>
 
 </div>
 
 
 <div class="row">
 <div class="col-md text-right">
<input type ="submit" value="Save" class=" btn btn-large bg-success text-white" >
</div>
 <div class="col-md text-left">
<button type ="btn" class="btn bg-danger text-white"  href="#">Cancel</button> <br>
</div>
</div>

 
 
 
 



   
     </form> 
	

	
	
	
	
	
	
	
	
	
	  
	  
	  </div>
				                   <!--profile page ends-->  
								   
				                   <!--Inbox-->  

<div class="container-fluid p-2  bg-white tabcontent" id="Inbox">


      <h3>Inbox</h3><hr>
	  
	  <table class="table table-hover table-inverse">
  <thead>
    <tr >
      
      <th><button type ="button" class="" >Delete</button></th>
	  <th></th>
	  <th></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Mark<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">7:29 pm </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>William<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right"> 9:01 am </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 28</td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 25 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 20 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 18 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 15 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 10 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 8 </td>
    </tr>
    
     
  </tbody>
</table>
	
	
	
	
	  
	  
	  </div>
				                   <!--inbox ends-->  								   
								   
								   
				                   <!--sent starts-->  								   
	<div class="container-fluid p-2  bg-white tabcontent" id="Sent">


      <h3>Sent</h3><hr>
	  
	  <table class="table table-hover table-inverse">
  <thead>
    <tr >
      
      <th><button type ="button" class="" >Delete</button></th>
	  <th></th>
	  <th></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Mark<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">7:29 pm </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>William<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right"> 9:01 am </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 28</td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 25 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 20 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 18 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 15 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 10 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 8 </td>
    </tr>
    
     
  </tbody>
</table>
	
	
	
	
	  
	  
	  </div>							   
								   
				                   <!--sent ends-->  								   
				  
				  
				  						   
								   
								   
				                   <!--draft starts-->  								   
	<div class="container-fluid p-2  bg-white tabcontent" id="Draft">


      <h3>Draft</h3><hr> 
	  
	  <table class="table table-hover table-inverse">
  <thead>
    <tr >
      
      <th><button type ="button" class="" >Delete</button></th>
	  <th></th>
	  <th></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Mark<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">7:29 pm </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>William<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right"> 9:01 am </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 28</td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 25 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 20 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 18 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 15 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 10 </td>
    </tr>
	
	<tr>
      <td class="w-25"><input type="checkbox" name="vehicle" value="Bike">&nbsp;<b>Lara<b></td>
      <td class="w-50"> Job Application - <span class="text-muted">xyz applied for a job. please....</span> </td>
      <td class="text-right">jan 8 </td>
    </tr>
    
     
  </tbody>
</table>
	
	
	
	
	  
	  
	  </div>							   
								   
				                   <!--draft ends-->  
								   
								   
									<!--jobs posted starts-->  								   
	<div class="container-fluid p-2  bg-white tabcontent" id="Jobs-Posted">


      <h3>Jobs Posted</h3><hr> 
	  
	  <div class="container bg-white mb-2 px-3 py-2">
                  <a href="#"><h5>Software Engineer</h5></a><p>Wolters Kluwer India Pvt Ltd</p>
                  <i class="fa fa-briefcase" aria-hidden="true"></i><span> 4-7 yrs</span>
                  <i class="fa fa-map-marker" aria-hidden="true"></i><span> Mumbai(Marol)</span><br>
                  <span class="text-muted">Keyskills:</span><p>html, javascript, css, jquery, classic asp, ms sql server, asp.net, java...</p>
                  <span class="text-muted">Job Description:</span><p>Position: Software Engineer Reports to: Chief Technology Officer, Systems Location: Mumbai, ...</p>                  
				  <div class="row">
				  <div class="col-md text-left">
				  <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-inr" aria-hidden="true"> Not disclosed</i>
				  </div>
				  <div class="col-md text-right">
                  <button type="button" class="btn btn-outline-danger btn-sm float-right">Delete</button>
				  </div> 
				  </div> 
                </div> 
				
				
				
	<div class="container bg-white mb-2 px-3 py-2">
                  <a href="#"><h5>.Net Software Engineer - MAOS</h5></a><p>Wolters Kluwer India Pvt Ltd</p>
                  <i class="fa fa-briefcase" aria-hidden="true"></i><span> 4-7 yrs</span>
                  <i class="fa fa-map-marker" aria-hidden="true"></i><span> Mumbai(Marol)</span><br>
                  <span class="text-muted">Keyskills:</span><p>html, javascript, css, jquery, classic asp, ms sql server, asp.net, java...</p>
                  <span class="text-muted">Job Description:</span><p>Position: Software Engineer Reports to: Chief Technology Officer, Systems Location: Mumbai, ...</p>                  
				  <div class="row">
				  <div class="col-md text-left">
				  <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-inr" aria-hidden="true"> Not disclosed</i>
				  </div>
				  <div class="col-md text-right">
                  <button type="button" class="btn btn-outline-danger btn-sm float-right">Delete</button>
				  </div> 
				  </div> 
                </div> 
	
	
	
	
	  
	  
	  </div>							   
								   
				                   <!--jobs posted ends-->  							   
                
				
				<!--jobs posted starts-->  								   
	<div class="container-fluid p-2  bg-white tabcontent" id="Post-Job">


      <h3>Post Job</h3><hr> 
	  
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
								   
				                   <!--Post Job ends-->  
								   
								   
				                   <!--Paid services starts-->  
								   
	<div class="container-fluid p-2  bg-white tabcontent" id="Paid-Services">


      <h3>Paid Services</h3><hr> 
	  
	  <div class="container bg-white mb-2 px-3 py-2">
	      
			You haven't subscribed to any paid services.
		
	  
	  </div>	
</div>									   

		                               <!--Paid services ends-->
																		 
																		 
		                                                                 <!--settings-->
									<!--visibiliy starts-->  								   
	<div class="container-fluid p-2  bg-white tabcontent" id="visibility">


      <h3>Visibility</h3><hr> 
	  
	  <div class="container bg-white mb-2 px-3 py-2">
	      
         
		 <div class="row">
		  <div class= "col-md-6">
           Who can see my profile
		   </div>
		   <div class= "col-md-6">
		   <input type="radio" name="rprofile" value="public" >Public<br>
			<input type="radio" name="rprofile" value="followers">Only Followers<br>
          	<input type="radio" name="rprofile" value="users" checked>Only Logged in users<br>
            <input type="radio" name="rprofile" value="me">Only me			
           </div>
           </div><br>
		   
         
<div class="row">
		  <div class= "col-md-6">
           Who can see my stuff
		   </div>
		   <div class= "col-md-6">
		   <input type="radio" name="rstuff" value="spublic" checked>Public<br>
			<input type="radio" name="rstuff" value="sfollowers">Only Followers<br>
          	<input type="radio" name="rstuff" value="susers">Only Logged in users<br>
            <input type="radio" name="rstuff" value="sme">Only me			
           </div>
		  </div><br>
		  
		  
      <button type="button" class="btn btn-outline-success btn-sm float-right m-1">Save</button>	
    <button type="button" class="btn btn-outline-danger btn-sm float-right m-1">Default</button>
	  <br>
		  
                 
				
				
	
	
	
	
	  
	  
	  </div>	
</div>		  
								   
				                   <!--Visibility ends-->  							   

		
									<!--block user starts-->  								   
	<div class="container-fluid p-2  bg-white tabcontent" id="Block-User">


      <h3>Block User</h3><hr> 
	  
	  <div class="container bg-white mb-2 px-3 py-2">
	      
			You haven't blocked any user.
		
	  
	  </div>	
</div>		  
	
								   
				                   <!--password starts-->  	
								   
	<!--block user starts-->  								   
	<div class="container-fluid p-2  bg-white tabcontent" id="Change-Password">


      <h3>Change Password</h3><hr> 
	  
	  <div class="container bg-white mb-2 px-3 py-2">
	      <form>
  Current Password&nbsp;
  <input type="password" name="psw" class="ml-5"><br><br>
  New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="password" name="psw" class="ml-5"><br><br>
  Retype New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="password" name="psw">
</form>
		
		<button type="button" class="btn btn-outline-success btn-sm float-right m-1">Save</button>	
    <button type="button" class="btn btn-outline-danger btn-sm float-right m-1">Cancel</button>
	  <br>
	  
	  </div>	
</div>		  
	
								   
				                   <!--password ends-->  								   
		
		
								   
               

             </div>
           </div>
         </div>
 

		
		
												<!-- End your code here-->

												
 </div> 
	
<!--right col -->      <div class="col-md-2"></div> <!--right col -->
					  
	</div>					  
  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  </div>
  <?php include_once "script.php"; ?>
  </body>
</html>