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
		<table class="table table-striped table-bordered table-condensed table-hover">
      <thead class="table-dark">
        <tr class="thead">
          <th scope="col">關卡</th>
          <th scope="col">完成狀況</th>
        </tr>
      </thead>
	<body>
<?php 
// echo (date('Y-m-d H:i:s',time()+7*3600));
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
		echo '<tr>';
		$sql_2="SELECT $fieldinfo->name FROM game WHERE $fieldinfo->name is not null AND Username='$name'";
		$result2=mysqli_query($connect,$sql_2);
		while($row= mysqli_fetch_assoc($result2))
		{
		echo '<thead class="table-success">';
		echo '<td >'.$fieldinfo->name.'</td>';
		echo '<td >'."已完成".'</td>';
		echo '</thead>';
		}
		$sql_3="SELECT $fieldinfo->name FROM game WHERE $fieldinfo->name is null AND Username='$name'";
		$result3=mysqli_query($connect,$sql_3);
		while($row= mysqli_fetch_assoc($result3))
		{
		echo '<thead class="table-default">';
		echo '<td >'.$fieldinfo->name.'</td>';
		echo '<td >'."未完成".'</td>';
		echo '</thead>';
		}
		echo '</tr>';
	}
}
echo '<a href="EditProfile.php">更改個人資料</a><br>';
echo '<a href="ChangePassword.html">更換密碼</a><br>';
echo '<a href="analysis.php">個人評估表</a><br>';
?>

	</body>
</html>
