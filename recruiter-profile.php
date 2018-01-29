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
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'sent')"><i class="fa fa-paper-plane fa-fw" aria-hidden="true"></i>Sent</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'Draft')"><i class="fa fa-floppy-o fa-fw" aria-hidden="true"></i>Draft</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'Jobs-Posted')"><i class="fa fa-share fa-fw" aria-hidden="true"></i>Jobs Posted</a><br>
  
  <b><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Settings</b>
  
  
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'visibility')"><i class="fa fa-eye-slash fa-fw" aria-hidden="true"></i>Visibility</a>
  <a class="nav-link tablinks p-1" href="#" onclick="openCity(event, 'block-user')"><i class="fa fa-lock fa-fw" aria-hidden="true"> </i>Block User</a>
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
								   
				                   <!--sent ends-->  								   
				  
                

               

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