<?php
$NameError="";
$EmailError="";
$GenderError="";
$WebsiteError="";
if(isset($_POST['Submit']))
{
    if(empty($_POST["Name"]))
    {
        $NameError="Name is Required";
       
    } 
    else
    {
        $Name= Test_User_Input($_POST["Name"]);
         if(!preg_match("/^[A-Z-a-z. ]*$/",$Name))
        {
            $NameError="Only lertters and spaces are allowed";
        }
    }
    if(empty($_POST["Email"]))
    {
        $EmailError="Email is Required";
    }
    else
    {
        $Email= Test_User_Input($_POST["Email"]);
         if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email))
    {
        $EmailError="Invalid Email Format";
    }
    }

if(empty($_POST["Gender"]))
    {
        $GenderError="Gender is Required";
    }
    else
    {
        $Gender= Test_User_Input($_POST["Gender"]);
        
    }
if(empty($_POST["Website"]))
    {
        $WebsiteError="Website is Required";
    }
    else
    {
        $Website= Test_User_Input($_POST["Website"]);
        if(!preg_match("/(https:|ftp:)\/\/+[a-zA-z0-9.\-_\/?\$=&\#\~'!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~'!]*/",$Website))
        {
            $WebsiteError="Invalid Website";
        }
            
    } 
if(!empty($_POST["Name"])&&!empty($_POST["Email"])&&!empty($_POST["Gender"])&&!empty($_POST["Website"]))
{
    if((preg_match("/^[A-Z-a-z. ]*$/",$Name)==true)&&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)==true)&&(preg_match("/(https:|ftp:)\/\/+[a-zA-z0-9.\-_\/?\$=&\#\~'!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~'!]*/",$Website)==true))
    {
        echo "<h2> Your Submitted Information is </h2> <br>";
        echo "Name:".ucwords ($_POST["Name"])." <br>";
        echo "Email: {$_POST["Email"]} <br>";
        echo "Gender: {$_POST["Gender"]} <br>";
        echo "Website: {$_POST["Website"]} <br>";
        echo "Comments: {$_POST["Comment"]} <br>";
$emailTo="jiyajo60@gmail.com";
$subject="Contact Form";
$body="A person name: ".$_POST["Name"].".. With the email: ".$_POST["Email"].".. Have gender:". $_POST["Gender"] . ".. Added Comment::".$_POST["Comment"];
$sender="From:jiyajo60@gmail.com";
if(mail($emailTo, $subject, $body, $sender))
{
    echo "MAIL SENT SUCCESSFULLY!";
}
else {
    echo "MAIL NOT SENT";
    
}
    }
    else
    {
        echo ' <span class="error">* Please Fill Out the following and Correct Information </span>';
    }
} }
function Test_User_Input($Data)
{
    return $Data;
}  
?> <br>
    <!DOCTYPE>
    <html>

    <head></head>
    <style type="text/css">
        input[type="text"],
        input[type="email"],
        textarea {
            border: 1px solid dashed;
            background-color: rgb(221, 216, 212);
            width: 600px;
            padding: .5em;
            font-size: 1.0em;
        }
        
        .error {
            color: red;
        }

    </style>
    <!--FormValidationProject-->

    <body>

        <?php?>
            <h2> Form Validation With PHP </h2>
            <form action="" method="POST">
                <legend>* Please Fill Out the following Fields.</legend>
                <fieldset>
                    Name: <br>
                    <input class="input" type="text" name="Name" value="">*<span class="error"><?php echo $NameError; ?></span><br> Email:
                    <br>
                    <input class="input" type="email" name="Email" value="">*<span class="error"><?php echo $EmailError; ?></span> <br> Gender:
                    <br>
                    <input class="radio" type="radio" name="Gender" value="Male">Male
                    <input class="radio" type="radio" name="Gender" value="Female">Female *<span class="error"><?php echo $GenderError; ?></span> <br> Website:
                    <br>
                    <input class="input" type="text" name="Website" value="">*<span class="error"><?php echo $WebsiteError; ?></span> <br> Comment:
                    <br>
                    <textarea Name="Comment" rows="5" cols="25"></textarea>
                    <br>
                    <br>
                    <input type="submit" name="Submit" value="Submit Your Information">
                </fieldset>
            </form>
    </body>

    </html>
