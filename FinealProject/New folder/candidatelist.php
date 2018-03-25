<?php require_once("include/db.php"); ?>
<?php require_once("include/functions.php")  ?>

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

        <br> <br>
                    <div class="col-sm-offset-4 col-sm-8" style="margin-left:300px;">
        <br>
                        <?php echo SuccessMessage();?>
                        <?php echo ErrorMessage();?>
                         <h1>Voter List</h1>
                        <div class="table-responsive">
                        <table class="table table-stripped table-hover">
                            <tr>
                            <th>SrNo</th>
                                <th>Date Of Creation</th>
                                <th>Candidates Name</th>
                                <th>Candidates Email</th>
                                <th>Candidates CNIC</th>
                                <th>Candidates Department</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $ConnectingDB;
                            $Query="SELECT * FROM king ORDER BY datetime desc";
                            $Execute=mysql_query($Query);
                            $SrNo=0;
                            while($DataRows=mysql_fetch_array($Execute)){
                                $Id=$DataRows['id'];
                                $DateTime=$DataRows['datetime'];
                                $Username=$DataRows['username'];
                                $Email=$DataRows['email'];
                                $Cnic=$DataRows['cnic'];
                                $Dept=$DataRows['dept'];
                                $SrNo++;
                            
                            ?>
                            <tr>
                            <td><?php echo $SrNo;?></td>
                                <td><?php echo $DateTime;?></td>
                                <td><?php echo $Username;?></td>
                                <td><?php echo $Email;?></td>
                                <td><?php echo $Cnic;?></td>
                                <td><?php echo $Dept;?></td>
                                <td><button type="submit" class="btn btn-danger">Delete</button><button type="submit" class="btn btn-success pull-left">Edit</button></td> <?php }?>
                            </tr>
                            </table>
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
        