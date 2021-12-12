<?php
session_start();
include_once("login_form/login.html");
include_once("query.php");

if(isset($_POST['sb1'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['username']=$username;
    $getData=getData("customers","*","username='$username' AND password='$password'");
    if($getData){
       $Data=mysqli_fetch_assoc($getData);
        $id=$Data['customer_id'];
        $_SESSION['userID']=$id;
        header('Location:cart.php');
    }else{
        echo "ERROR";
        include_once("login.php");
    }
}
?>