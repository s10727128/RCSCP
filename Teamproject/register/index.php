<?php
require_once('connect.php');
$name='';
session_start();
$id = @$_SESSION['id']; 
$sql = "SELECT * FROM user WHERE ID='$id'";
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$name=$row["Username"];
		$access=$row["Access"];
	}
	echo "歡迎.$name".'<br>';
	echo '<a href="account/profile.php">個人資料</a><br>';
	echo '<a href="logout.php">登出</a><br>';
	if($access==1)
	{
		echo '<a href="access.php">資料表</a><br>';
	}
}
else
{   echo '<a href="register.html">註冊</a>';
    echo "  ";
	echo '<a href="login.html">登入</a><br>';
}

?>