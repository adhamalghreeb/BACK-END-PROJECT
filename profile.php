<?php
session_start();
include_once("query.php");
$id=$_SESSION['userID'];
$selCN=getData("customers","username ,password","customer_id='$id'");
$customername=mysqli_fetch_assoc($selCN);
$username = $customername['username'];
$password = $customername['password'];
echo "username : $username <br />";
echo "password : $password <br />";
?>
<html><br />
   <form action="edit_prf.php" method="POST">
       <input type="text" name="new_user" placeholder="Enter your new username"><br>
       <input type="text" name="new_pass" placeholder="Enter your new password"><br>
       <input type="submit" name="sm3" value="sm3"><br>

   </form>
</html>

