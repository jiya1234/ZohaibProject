<?php include("include/db.php"); ?>
<?php include("include/functions.php"); ?>
<?php
   $NameError="";
    $PostalError="";
    $CountryError="";
    $EmailError="";
    $CnicError="";
    $MobileError="";
if(isset($_POST['submit'])){
    $Name=mysql_real_escape_string($_POST['name']);
    $Postal=mysql_real_escape_string($_POST['postal']);
    $Country=mysql_real_escape_string($_POST['country']);
    $Email=mysql_real_escape_string($_POST['email']);
    $Cnic=mysql_real_escape_string($_POST['cnic']);
    $Mobile=mysql_real_escape_string($_POST['mobile']);
   if($Name="" || $Postal="" || $Country="" || $Email="" || $Cnic="" || $Mobile=""){
        $_SESSION["ErrorMessage"]="All Fields Are Required. Kindly Enter Required Fields";
        redirect_to("register.php"); } 
    if(!preg_match("/^[A-Z-a-z. ]*$/",$Name))
        {
            $NameError="Only letters and spaces are allowed";
        }
    if(!preg_match("/[0-9]{7}/",$Postal)){
        $PostalError="Only numbers are allowed. Max Limit is 7";
    }
    if(!preg_match("/^[A-Z-a-z. ]*/",$Country)){
        $CountryError="Only letters are allowed";
    }
    if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)){
        $EmailError="Invalid Email Format";
    }
    if(!preg_match("/[0-9]{11}/",$Cnic)){
        $CnicError="Cnic should be valid and must not be less and more than 11 numbers";
    }
    if(!preg_match("/[0-9]{11}/",$Mobile)){
        $MobileError="Must be 11 numbers and should be valid";
    }
  
    else{
        $ConnectingDB;
        $Query="INSERT INTO users(name,postal,country,email,cnic,mobile)VALUES('$Name','$Postal','$Country','$Email','$Cnic','$Mobile')";
        $Execute=mysql_query($Query);
        if($Execute){
            $_SESSION["SuccessMessage"]="You have been registered successfully. Please wait a little for verification";
            redirect_to("register.php");
        } 
        else{
            $_SESSION["ErrorMessage"]="Something went wrong. Try Again!";
            redirect_to("register.php"); 
        }
        
    }
}


?>
<style>

 .error {
            color: red;
        }
</style>
<!DOCTYPE>
<html>
  <head> <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 -->
    <link rel="stylesheet" href="home.css"></head>
    <body>
           <nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top" style="background-color:forestgreen;">
     <div class="container">
       <a class="navbar-brand pull-left" href="#">
         <img src="https://upload.wikimedia.org/wikipedia/en/thumb/d/d9/Karachi_University_logo.png/220px-Karachi_University_logo.png" width="70" height="70" alt="">
       </a>
       <a class="navbar-brand pull-left" style="color:white;">Online Voting System(Karachi University)</a>
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              
             <a class="nav-link" href=""><i class="fa fa-home fa-lg" aria-hidden="true"></i> Home </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href=""><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Election Details</a>
           </li>
      
          <a class="nav-link" href=""><i class="fa fa-sign-in" aria-hidden="true"></i> Signin</a>
           <li class="nav-item">
             <a class="nav-link" href=""><i class="fa fa-sign-in" aria-hidden="true"></i>Create Profile</a>
           </li>
           <li class="nav-item" >
              <a class="nav-link"  href=""><i class="fa fa-hand-o-right" aria-hidden="true"></i> PollingRoom</a>
            </li>
           <li class="nav-item">
             <a class="nav-link"  href=""><i class="fa fa-file" aria-hidden="true"></i> About Us</a>
           </li>
           <li class="nav-item" >
              <a class="nav-link"  href=""><i class="fa fa-laptop" aria-hidden="true"></i> Dashboard</a>
            </li>
           <li    class="nav-item">
            <a class="nav-link" href=""><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a>
          </li>
          
           <li class="nav-item">
             <a class="nav-link" href="#"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
           </li>
       
         </ul>
       </div>
     </div>
   </nav>

<div class="cont">
        <div class="container py-5">
    <div class="row">
            <div class="col-md-12">
        <br><br>
        <h2 class="text-center mb-4">Register yourself to cast your vote</h2>
                 <div class="row">
                        <div class="col-md-6 mx-auto">
                            <span class="anchor" id="formLogin"></span>
                            <div class="card rounder-0">
                            <div class="card-header">
                                <h3 class="">Register Yourself</h3>
                                <?php 
                                echo SuccessMessage();
                                echo ErrorMessage();
                                ?>
                                </div>
                                <div class="card-body">
                                  <div class="card-body">
                                    <form class="form" action="register.php" method="post">
                                        <div class="form-group">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            <label for="uname1"><b>Full Name</b></label>
                                            <input type="text" placeholder="Enter Full Name" class="form-control form-control-lg rounded-0" name="name" id="name" required> <span class="error">*<?php echo $NameError;?></span>
                                        </div>
                                        <div class="form-group">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            <label for="uname1"><b>Zip/Postal</b></label>
                                            <input type="text" placeholder="Zip/Postal" class="form-control form-control-lg rounded-0" name="postal" id="postal" required><span class="error">*<?php echo $PostalError;?></span>
                                        </div>
                                        <div class="form-group">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            <label for="uname1"><b>Country</b></label>
                                            <input type="text" placeholder="Country" class="form-control form-control-lg rounded-0" name="country" id="country" required><span class="error">*<?php echo $CountryError;?></span>
                                        </div>
                                        <div class="form-group">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            <label for="uname1"><b>Email</b></label>
                                            <input type="text" placeholder="Enter Email Address" class="form-control form-control-lg rounded-0" name="email" id="uusername" required><span class="error">*<?php echo $EmailError;?></span>
                                        </div>
                                        <div class="form-group">
                                                <i class="fa fa-id-card"></i>
                                            <label for="uname1"><b>CNIC</b></label>
                                            <input type="text" placeholder="Enter Your Cnic" class="form-control form-control-lg rounded-0" name="cnic" id="upassword" required=""><span class="error">*<?php echo $CnicError;?></span>
                                        </div>
                                          <div class="form-group">
                                                <i class="fas fa-mobile"></i>
                                            <label for="uname1"><b>Mobile Number</b></label>
                                            <input type="text" placeholder="Enter Your Mobile No." class="form-control form-control-lg rounded-0" name="mobile" id="upassword" required=""><span class="error">*<?php echo $MobileError;?></span>
                                        </div>
                                        <div>
                                            <div>
                                                <label style="text-align:center;">Already registered?<a href="login.php">Get yourself verified And login</a></label>
                                                <br>
                                                 <label> </label>
                                            </div>
                                            <label class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input">
                                              <span class="custom-control-indicator"></span>
                                              <span class="custom-control-description small">Remember me on this computer</span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg float-right" name="submit" [disabled]="!f.valid">Register</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                     </div>
                </div>
        </div>
            </div>
    </div>
        </div>
    
      <div class="footer">
<footer class="py-5">
    <div class="container">
      <p  class="m-0 text-center text-white">A Project By UBIT students</p>
      <br>
      <p class="m-0 text-center text-white">Copyright &copy; PAKISTAN ONLINE - VOTING 2017</p>
    </div>
    <!-- /.container -->
  </footer>

  </div>
        </body>
        </html>
        