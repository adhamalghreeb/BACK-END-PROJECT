<?php
session_start();
require_once("query.php");
if(isset($_POST["sm3"])){
   $order_name = $_POST['order'];

    $Data=getData("orders","order_id","order_name='$order_name'");
    if($Data){
    $data=mysqli_fetch_assoc($Data);
        $orID=$data['order_id'];
        $id=$_SESSION['userID'];
        $AddData=addData("customerhasproduct","customer_id,order_id","'$id','$orID'");
    if($AddData){
        echo "Done";
    }else{
        echo "error";
    }
}else{
    echo "<h1>product Not available</h1>";
}

}
else{
    echo"Please type your order";
}
?>