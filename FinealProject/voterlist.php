<?php require_once("include/db.php"); ?>
<?php require_once("include/functions.php")  ?>

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
                    <div class="col-sm-offset-2 col-sm-8">
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
                        
                        
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer>
           <div class="footer" id="Footer" style="margin-top:100px;">
            <hr> <p> Theme By | Jiya Khan | &copy;2017-2020 --- All Rights Reserved.</p>
               
            </div> </footer></div>            
    </body>
</html>