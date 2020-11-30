<?php
require_once('../connect.php');
session_start();
$id = $_SESSION['id']; 
$pwd=$_POST['NewPassword'];
$password = MD5($pwd);
$sql = "UPDATE user SET  Password='$password' WHERE ID='$id'";
$result=mysqli_query($connect,$sql);
echo "A";
?>