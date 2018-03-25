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
        .ad:link{
            color: #00cc00;
            width: 125px;
            font-weight: bold;
            text-decoration: none;
            display: block;
            text-align: center;
            
            text-transform: uppercase;
            font-size: 15px;
            
        }
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
            float: left;
            color: white;
        }
      div.nav{
           width: 1148px;
            background-color: green;
            margin: auto;
            overflow: auto;
             padding: 0x;
    
    box-shadow: 5px 10px 8px 10px grey;
        }
        .df{
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
            <ul class="pull-left" style="color: white!important; font-weight:bold;"><li><a class="ad" href="" style="color: white;">ONLINE VOTING SYSTEM</a></li></ul><br>
        <ul class="pull-right">
            
        <li class="df"><a class="ad" class="ad" href="#">Home</a></li>
            
          
            <li class="df"><a class="ad" href="#">Logout</a></li>
        </ul>
        </div>
       
                  <br> <br> <br>
                <div class="col-sm-2" style="background-color:green; color: white !important; font-weight:bolder; font-size:14px;  border: 1px solid green;
    padding: 10px;
    border-radius: 0px 20px 20px 0px;">
                <br>
                <br>
                <ul id="Side_Menu" class="nav nav-pills nav-stacked" style="font-size:25px; color:white !important;">
                    <li class=""><a href="dashboard.php"><span class="glyphicon glyphicon-th"></span>Add candidate</a></li><br>
                    <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Add Voter</a></li><br>
                    <li><a href="categories.php"><span class="glyphicon glyphicon-tags"></span>Candidate List</a></li><br>
                    <li><a href="admins.php"><span class="glyphicon glyphicon-user"></span>Voter List</a></li><br>
                    <li><a href="comments.php"><span class="glyphicon"></span>Add Election</a></li>
                     <li><a href="comments.php"><span class="glyphicon "></span></a></li>
                     <li><a href="comments.php"><span class="glyphicon "></span></a></li>
                     <li><a href="comments.php"><span class="glyphicon "></span></a></li>
                  <li><a href="comments.php"><span class="glyphicon "></span></a></li><li><a href="comments.php"><span class="glyphicon "></span></a></li><li><a href="comments.php"><span class="glyphicon "></span></a></li><li><a href="comments.php"><span class="glyphicon "></span></a></li><li><a href="comments.php"><span class="glyphicon "></span></a></li><li><a href="comments.php"><span class="glyphicon "></span></a></li><li><a href="comments.php"><span class="glyphicon "></span></a></li>
                    </ul>
                    
                        
                       <!--  <h1 style="font-weight:bold; color:green; text-decoration:underline; ">Add Voter</h1>
        <br>
                        <form action=".php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label for="Username">UserName:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope text-primary"></span> </span>
                                    <input class="form-control" type="text" name="Username" id="Username" placeholder="Username">
                                                
                                            
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="Password">CNIC:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock text-primary"></span></span>
                                    <input class="form-control" type="text" name="Password" id="Password" placeholder="Password">
                                 
                                </div>
                                </div>
                                 <div class="form-group">
                                    <label for="Username">DEPARTMENT:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope text-primary"></span> </span>
                                    <input class="form-control" type="text" name="Username" id="Username" placeholder="Username">
                                                
                                     </div>     
                                        </div>
                                
                                           <div class="form-group">
                                    <label for="Username">EMAIL:</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope text-primary"></span> </span>
                                    <input class="form-control" type="text" name="Username" id="Username" placeholder="Username">
                                                
                                            
                                        </div> <br>
                                <input class="btn btn-success btn-block" type="submit" name="Submit" value="Add Voter">
                                
                            
                                          </div>
                            </fieldset>
                        </form> -->
           </div>
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer>
           <div class="footer" id="Footer" style="margin-top:100px;">
            <hr> <p> Theme By | Jiya Khan | &copy;2017-2020 --- All Rights Reserved.</p>
               
            </div> </footer>      
    </body>
</html>