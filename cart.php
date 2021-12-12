<?php
//include_once("cart/cart.html");
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once("query.php");
$SRes = getData("orders","*","1=1");

if($SRes){
include_once("cart/cart.html");
}else{
    header("location:italy.php");
}
?> 

