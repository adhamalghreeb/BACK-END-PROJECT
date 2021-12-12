<?php
session_start();
require_once("query.php");
$customer_id = $_SESSION['userID'];
$selectData=getData("customerhasproduct","*","customer_id ='$customer_id'");
echo'<center><h1>Order History</h1></center>';
if($Data=mysqli_fetch_assoc($selectData)){
    $product_id = $Data['order_id'];

    $selectcustomername=getData("customers","username","customer_id='$customer_id'");
    $customername=mysqli_fetch_assoc($selectcustomername);
    $customerr=$customername['username'];
    
    $selectproductname=getData("orders","order_name","order_id='$product_id'");
    $productname=mysqli_fetch_assoc($selectproductname);
    $productt=$productname['order_name'];

    echo "customer_id: $customer_id , customer_name: $customerr  <br/>";
    echo "prduct_id: $product_id, product_name: $productt  <br/>";
    echo "<hr/>";
}