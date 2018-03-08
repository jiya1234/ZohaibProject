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
        redirect_to('addvoter.php');
    }
    else{
        $ConnectingDB;
    $Query= "SELECT * FROM kings WHERE username='$Username' AND cnic='$Cnic' AND dept='$Dept'";
    $Execute=mysql_query($Query);
  if($admin=mysql_fetch_assoc($Execute)){ //whether these both things exist or not, we r not fetching anything
   $_SESSION["ErrorMessage"]="Already A Voter";
        redirect_to('addvoter.php');
      
}
        else{
            global $ConnectingDB;
            $query="INSERT INTO kings(datetime,username,email,cnic,dept) VALUES('$DateTime','$Username','$Email','$Cnic','$Dept')";
            $execute=mysql_query($query);
            if($execute){
            $_SESSION["SuccessMessage"]="Candidate Added Successfully";
            redirect_to('addvoter.php');
            }
            else{
              $_SESSION["ErrorMessage"]="Candidate Failed to add";
            redirect_to('addvoter.php') ;   
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
<head>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"></head>
    <style>
        body{
            margin: 0;
            font-family: 'Pacifico', cursive;
           
        }
        .header{
            margin-left: 100px;
            margin-right: 100px;
           
    
     padding: 15px;
    background-color: gainsboro;
    box-shadow: 5px 10px 8px 10px grey;
}
           
        }
        img{
            background-color: green;
        }
        a:link{
            color: #00cc00;
            width: 125px;
            font-weight: bold;
            text-decoration: none;
            display: block;
            text-align: center;
            
            text-transform: uppercase;
            font-size: 15px;
            
        }
        ul{
            margin: 0;
            padding: 0;
            list-style: none;
            float: left;
        }
        .nav{
           width: 1148px;
            background-color: green;
            margin: auto;
            overflow: auto;
             padding: 0x;
    
    box-shadow: 5px 10px 8px 10px grey;
        }
        li{
            float: left;
            margin-left:
        }
        a:hover{
            color: white;
        }
       

#Footer {
    padding: 10px;
    border-top: 1px solid black;
    color: #eeeeee;
    background-color: #211f22;
    text-align: center;
}
    </style>
    <body>
    <div style="margin-top:; height:10px; background:green;"></div>
       <div class="header">
        <img src="images/University-of-Karachi-Logo-1.png" width="1100px" height="150px">
        </div>
        <div class="nav">
            <ul class="pull-left" style="color: white!important; font-weight:bold;"><li><a href="" style="color: white;">ONLINE VOTING SYSTEM</a></li></ul><br>
        <ul class="pull-right">
            
        <li><a href="#">Home</a></li>
            
          
            <li><a href="#">Logout</a></li>
        </ul>
        </div>
        <br> <br>
                    <div class="col-sm-offset-4 col-sm-4" style="border:4px solid green;">
                         <h1 style="font-weight:bold; color:green; text-decoration:underline; ">Add Voter</h1>
        <br>
                        <?php echo SuccessMessage();?>
                        <?php echo ErrorMessage();?>
                        <form action="addvoter.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label for="Username">UserName:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope text-primary"></span> </span>
                                    <input class="form-control" type="text" name="username" id="Username" placeholder="Username">
                                                
                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="Cnic">CNIC:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock text-primary"></span></span>
                                    <input class="form-control" type="text" name="Cnic" id="Cnic" placeholder="Enter Cnic">
                                 
                                </div>
                                </div>
                                 <div class="form-group">
                                    <label for="Dept">DEPARTMENT:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope text-primary"></span> </span>
                                    <input class="form-control" type="text" name="Dept" id="department" placeholder="Username">
                                                
                                     </div>     
                                        </div>
                                
                                           <div class="form-group">
                                    <label for="email">EMAIL:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope text-primary"></span> </span>
                                    <input class="form-control" type="text" name="Email" id="email" placeholder="Username">
                                                
                                            
                                        </div> <br>
                                <input class="btn btn-success btn-block" type="submit" name="Submit" value="Add Voter">
                                
                            
                                          </div>
                            </fieldset>
                        </form>
                                </div><br>
    
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer>
           <div class="footer" id="Footer" style="margin-top:100px;">
            <hr> <p> Theme By | Jiya Khan | &copy;2017-2020 --- All Rights Reserved.</p>
               
            </div> </footer>  ade; Stackskills</p></a>
            </div>                
    </body>
</html>