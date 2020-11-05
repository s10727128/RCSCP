<?php
require_once('connect.php');
session_start();
$id = $_SESSION['id']; 
$name=$score='';

$sql = "SELECT * FROM user WHERE ID='$id'";
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$name=$row["Username"];
		$score=$row["Score"];
	}
}


echo "名稱:";
echo $name;
echo '<br>';
echo "分數:";
echo $score.'<br>';
?>
