<?php
session_start();
include_once("query.php");

if(isset($_SESSION['username'])){
    echo "This account already exist please login";
}
elseif(isset($_POST['sb2'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['username']=$username;
    $add=addData("customers","username,password","'$username','$password'");
    if($add){
        $getData=getData("customers","username","username='$username' AND password='$password'");
        $Data=mysqli_fetch_assoc($getData);
        $id=$Data['customr_id'];
        $_SESSION['userID']=$id;
        header('Location:cart.php');
    }
    else{
        echo "Error";
        include_once("sign.php");

    }

}require_once("sign_form/sign.html");
?>
