<?php
session_start();
include_once("query.php");
if(isset($_POST['sm3'])){
    $new_name=$_POST['new_user'];
    $new_pass=$_POST['new_pass'];
    $CandV = "username = '$new_name' AND password = '$new_pass'";
    $id=$_SESSION['userID'];
    $updateN=editData("customers", "$CandV", "customer_id='$id'");
        if($updateN){
            echo "Done";
        }else{
            echo "Error";
        }
}
?>