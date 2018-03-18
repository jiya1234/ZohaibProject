<?php require_once("include/db.php"); ?>
<?php require_once("include/functions.php")  ?>
<?php
if(isset($_POST['Submit'])){

    $Username=mysql_real_escape_string($_POST['username']);
    $Email=mysql_real_escape_string($_POST['Email']);
    $Cnic=mysql_real_escape_string($_POST['Cnic']);
    $Dept=mysql_real_escape_string($_POST['Dept']);
    $CurrentTime=time();
    $DateTime=strftime("%B-%d-%Y %H:%M:%D", $CurrentTime);
    if($Username=="" || $Email="" || $Cnic="" || $Dept=""){
        $_SESSION["ErrorMessage"]="All Fields Must Be Filled Out";
        redirect_to('addcandidate.php');
    }
    else{
        $ConnectingDB;
    $Query= "SELECT * FROM king WHERE username='$Username' AND cnic='$Cnic' AND dept='$Dept'";
    $Execute=mysql_query($Query);
  if($admin=mysql_fetch_assoc($Execute)){ //whether these both things exist or not, we r not fetching anything
   $_SESSION["ErrorMessage"]="Already A Candidate";
        redirect_to('addcandidate.php');
      
}
        else{
            global $ConnectingDB;
            $query="INSERT INTO king(datetime,username,email,cnic,dept) VALUES('$DateTime','$Username','$Email','$Cnic','$Dept')";
            $execute=mysql_query($query);
            if($execute){
            $_SESSION["SuccessMessage"]="Candidate Added Successfully";
            redirect_to('addcandidate.php');
            }
            else{
              $_SESSION["ErrorMessage"]="Candidate Failed to add";
            redirect_to('addcandidate.php') ;   
            }
        }
    }
    
}
function redirect_to($NewLocation){
    header("Location:".$NewLocation);
    exit;
}
?>

<!DOCTYPE>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
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

                      <br>
        <br>
        <br>
        <br>
        <br>
        <br>

                    <div class="col-sm-offset-4 col-sm-4" style="border:4px solid green; margin-left:500px;">
                         <h1 style="font-weight:bold; color:green; text-decoration:underline; ">Add Candidate</h1>
        <br>
                        <?php
                       echo ErrorMessage();
                        ?>
                        <?php echo SuccessMessage();?>
                        <form action="addcandidate.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label for="Username">UserName:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope text-primary"></span> </span>
                                    <input class="form-control" type="text" name="username" id="Username" placeholder="Enter Full Name">
                                                
                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="Password">CNIC:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock text-primary"></span></span>
                                    <input class="form-control" type="text" name="Cnic" id="Cnic" placeholder="Enter Valid CNIC">
                                 
                                </div>
                                </div>
                                 <div class="form-group">
                                    <label for="Username">DEPARTMENT:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope text-primary"></span> </span>
                                    <input class="form-control" type="text" name="Dept" id="Dept" placeholder="Enter Name Of Dept">
                                                
                                     </div>     
                                        </div>
                                
                                           <div class="form-group">
                                    <label for="Username">EMAIL:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope text-primary"></span> </span>
                                    <input class="form-control" type="text" name="Email" id="Email" placeholder="Enter Email">
                                                
                                            
                                        </div> <br>
                                <input class="btn btn-success btn-block" type="submit" name="Submit" value="Add Candidate">
                                
                            
                                          </div>
                                
                            </fieldset>
                        </form>
                                </div><br>
     
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