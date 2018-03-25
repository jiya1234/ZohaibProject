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
                    <h2 class="text-center text-white mb-4">Signin As Registered Engineer </h2>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <span class="anchor" id="formLogin"></span>
        
                            <!-- form card login -->
                            
                            <div class="card rounded-0">
                                <div class="card-header">
                                    <h3 class="mb-0">Sign In</h3>
                                    
                                </div>
                                  <!-- <p style="color:red">Note: <i>Make sure you've pec Active Account.</i></p> -->
                                <div class="card-body">
                                    <form class="form" action="login.php" method="post">
                                        <div class="form-group">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            <label for="uname1"><b>Email</b></label>
                                            <input type="text" placeholder="Enter Email Address" class="form-control form-control-lg rounded-0" name="email" id="uusername" required>
                                        </div>
                                        <div class="form-group">
                                                <i class="fa fa-id-card"></i>
                                            <label for="uname1"><b>CNIC</b></label>
                                            <input type="password" placeholder="Enter Your Cnic" class="form-control form-control-lg rounded-0" name="password" id="upassword" required="" autocomplete="new-password">
                                        </div>
                                          <div class="form-group">
                                                <i class="fas fa-mobile"></i>
                                            <label for="uname1"><b>Mobile Number</b></label>
                                            <input type="password" placeholder="Enter Your Mobile No." class="form-control form-control-lg rounded-0" name="password" id="upassword" required="" autocomplete="new-password">
                                        </div>
                                        <div>
                                            <div>
                                                <label style="text-align:center;">Don't have Account? Create Account today: <a href="/signup">Signup Today?</a></label>
                                                <br>
                                                 <label> </label>
                                            </div>
                                            <label class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input">
                                              <span class="custom-control-indicator"></span>
                                              <span class="custom-control-description small">Remember me on this computer</span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg float-right" [disabled]="!f.valid">Login</button>
                                    </form>
                                </div>
                                <!--/card-block-->
                            </div>
                            <!-- /form card login -->
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>
        <!--/container-->
        
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
        