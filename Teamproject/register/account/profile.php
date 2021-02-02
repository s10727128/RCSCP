<!DOCTYPE html>
<html>
	<head>
	</head>
		<title>Tik Game個人資料</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php
		include_once("../../header.php");
		?>
		<link rel="stylesheet" a href ="profile.css">
	<body>
<?php 
$sql = "SELECT * FROM user WHERE Username='$name'";
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
$sql = "SELECT XSS_1,XSS_2,XSS_3,Phishing_1,Phishing_2,SQL_1,SQL_2,SCRF_1,SCRF_2,MISC_1,MISC_2,MISC_3,MISC_4,MISC_5,MISC_6 FROM game WHERE Username='$name'";
$result=mysqli_query($connect,$sql);
$complete=array();
$i=0;
if(mysqli_num_rows($result) > 0)
{
	while($fieldinfo = mysqli_fetch_field($result))
	{
		$sql_2="SELECT $fieldinfo->name FROM game WHERE $fieldinfo->name is not null AND Username='$name'";
		$result2=mysqli_query($connect,$sql_2);
		while($row= mysqli_fetch_assoc($result2))
		{
		echo "關卡".$fieldinfo->name."已完成";
		echo "<br>";
		}
	}
}
echo '<a href="EditProfile.php">更改個人資料</a><br>';
echo '<a href="ChangePassword.html">更換密碼</a><br>';
?>

	</body>
</html>
