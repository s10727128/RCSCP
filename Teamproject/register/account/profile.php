<!DOCTYPE html>
<html>
	<head>
	</head>

		<meta charset="utf-8">
		<link rel="stylesheet" a href ="profile.css">
	<body>
<?php
require_once('../connect.php');
session_start();
$id = $_SESSION['id']; 
$name=$score='';

$sql = "SELECT * FROM user WHERE ID='$id'";
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$nickname=$row["Nickname"];
		$score=$row["Score"];
		$email=$row["Email"];
		$age=$row["Age"];
		$access=$row["Access"];
	}
}

echo "暱稱:";
echo $nickname.'<br>';
echo "信箱:";
echo $email.'<br>';
echo "年齡:";
echo $age.'<br>';
echo "分數:";
echo $score.'<br>';
echo '<a href="EditProfile.php">更改個人資料</a><br>';
echo '<a href="ChangePassword.html">更換密碼</a><br>';

if($access==1)
{
	echo '<a href="access.php">資料表</a><br>';
}
?>

<div id="menubar" > <a href="../../index.php" class="menu_exit">回到主頁</a> </div>
	</body>
</html>
