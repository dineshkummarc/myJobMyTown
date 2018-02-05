
     <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 

  <nav class="navbar navbar-expand-sm navbar-light border-bottom bg-white">
  <!-- Brand -->
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">My Job My Town</a>

  <!-- Links -->

  <ul class="navbar-nav ml-auto">
      <li class="nav-item" style="padding-right: 30px;">
      <a class="nav-link" href="browse-jobs.php">Jobs</a>
    </li>
    <li class="nav-item" style="padding-right: 30px;">
      <a class="nav-link" href="browse-recruiters.php">Recuiter</a>
    </li>
    
     <li class="nav-item dropdown" style="padding-right: 30px;">
      <a class="nav-link dropdown-toggle" href=""  id="navbardrop" data-toggle="dropdown">
        Career Info
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Create resume</a>
        <a class="dropdown-item" href="learn-skills.php">Learn Skills</a>
        <a class="dropdown-item" href="#">Blog</a>
      </div>
    </li>
    <li class="nav-item" style="padding-right:30px;">
   <!--<button  type="button" class="btn btn-sm"><a class="nav-link" href="post-job.php"  class="btn navbar-btn btn-sm text-xshort">Post a Job</a></button>-->
   <a href="post-job.php" class="btn btn-md p-1 m-1 float-right bg-primary text-white nav-link" role="button">Post a Job</a>
    </li>
	
    
	 <li class="nav-item dropdown" style="padding-right: 30px;">
      <a class="nav-link dropdown-toggle" href=""  id="navbardrop" data-toggle="dropdown">
        Login/Sign up
      </a>
      <div class="dropdown-menu">
        <span class="nav-link lgalert">Login</span>
        <span class="nav-link sualert">Sign up</span>
        
      </div>
    </li>
    
  </ul>
</div>
</nav> 
                                        
                                   
								   
                                   <!--google translate start-->
<div class="fixed-bottom text-right mr-3" id="google_translate_element" ></div>
	                              <!--google translate end-->
								  
								  
											
                                       <!--login-->
   <div class="col-md-6 offset-md-3 bg-white lgtoggle" style="display:none;position:absolute;z-index:50;">									   
	<div class="row" >
  <div class="col-md-4" style="background-color:#2874F0; ">
    <h2 class="mt-3 ml-3 text-white">Login</h2>
    <p class="ml-3 text-white text-justify">
      Lorem Ipsum is simply dummy text of the printing and typesetting 
    </p>
    <img src="images/job2.png" class="img-fluid" style="margin-top:50%; ">
 
  </div>
  <div class="col-md-8 " style="height:620px;">
<form class="mt-3 ml-3">
      <div class="form-group sab-form-group2">
            <label for="email" >Email:</label>
         <input type="E-mail" class="form-control sab-form-control" id="email" placeholder="E-mail id" required=""  >
      </div>
             
      <div class="form-group sab-form-group2">
        <label for="email" >Passwords:</label>
         <input type="password" class="form-control sab-form-control"  id="password" placeholder="password" name="password" required="" >
     </div>
     <a href="smc.php" class="btn btn-lg btn-primary btn-block sab-btn2">Login</a>
          <center><a href="#"><p class="sab-bottom-text2">Forgotton your password?</p></a></center>
          <center><p class="sab-bottom-text2 text-primary sualert">Create an account</p></center>
		  


  </form>

  </div>
</div>  								   
</div>  								   
 
                                         <!--login end-->											
                                        

										<!--sign up end-->											
	
       
    <div class="col-md-6 offset-md-3 sutoggle bg-white" style="display:none;position:absolute;z-index:50;"> 

<button type="button" class="close" data-dismiss="">&times;</button>
<div class = "row">
  <div class="col-md-4" style="background-color:#2874F0; ">
  
    <h2 class="mt-3 ml-3 text-white">Sign Up</h2>
    <p class="ml-3 text-white text-justify">
     
      
      <ul>
        <h5>Stand out</h5>
<hr>
       <h5>Post Jobs for Free</h5>
    
<hr>

 <h5>Engage with Talent</h5>
    
<hr>

     </ul> </p>
    
    <img src="images/signup4.png" class="img-fluid" style="margin-top:100px;-webkit-filter: drop-shadow(10px 10px 10px #222);
  filter: drop-shadow(15px 15px 15px #222);  ">
 
  </div>


  <div class="col-md-8 p-3" style="height:620px;" >
<form>
      <div class="form-group ">
            <label for="email" >Name :</label>
         <input type="name" class="form-control" id="name" placeholder="Enter your full name" required=""  >
      </div>
             
    
     <div class="form-group">
        <label for="email" >Email :</label>
         <input type="email" class="form-control"  id="email" placeholder="Enter your active email id to recieve relevant jobs" name="Email" required="" >
     </div>
       <div class="form-group ">
        <label for="email" >Password :</label>
         <input type="password" class="form-control"  id="password" placeholder="password" name="password" required="" >
     </div>
      <div class="form-group ">
        <label for="email" >Confirm password :</label>
         <input type="password" class="form-control"  id="password" placeholder="Confirm password" name="confirm password" required="" >
     </div>
   <div class="form-group ">
        <label for="tel" >mobile number:</label>
         <input type="tel" class="form-control"  id="PN" placeholder="Enter your mobile number" name="mobile" required="" >
     </div>
     <label for="tel" >Location:</label>
        <input list="browsers" class="form-control" placeholder="choose your location" name="browser" class="w-100">
  <datalist id="browsers">
    <option value="bangalore"></option>
    <option value="pune"></option>
    <option value="Chrome"></option>
    <option value="Opera"></option>
    <option value="Safari"></option>
  </datalist>

<br>
     <a href="smc.php" class="btn btn-lg btn-primary btn-block  sab-btn2">Sign In</a>
         
         <p class="text-right mt-1">already a user <span class="lgalert text-primary">Sign In</span></p>


  </form>
  </div>
</div>   
</div>   
												<!-- Sign up end-->
												<!-- End your code here-->

  
  <?php include_once "script.php"; ?>
  