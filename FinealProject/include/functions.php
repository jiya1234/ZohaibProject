<?php
require_once("include/db.php");
?>
<?php
$ConnectingDB;
session_start();
function ErrorMessage(){
    if(isset($_SESSION["ErrorMessage"])){
        $Output="<div class=\"alert alert-danger\">";
        $Output.=htmlentities($_SESSION["ErrorMessage"]); //so html code doesnot break
        $Output.="</div>";
        $_SESSION["ErrorMessage"]=null;
        return $Output;
    }
}
function SuccessMessage(){
    if(isset($_SESSION["SuccessMessage"])){
        $Output="<div class=\"alert alert-success\">";
        $Output.=htmlentities($_SESSION["SuccessMessage"]);
        $Output.="</div>";
        $_SESSION["SuccessMessage"]=null;
        return $Output;
    }
}
?>