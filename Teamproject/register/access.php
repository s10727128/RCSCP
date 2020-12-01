<?php
require_once('connect.php');

session_start();
$sql = "SELECT Username,Access,Score FROM user";
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0)
{
    echo "<table>";
	while($row = mysqli_fetch_assoc($result))
	{
        $access=$row["Access"];
        $name=$row["Username"];
        $score=$row["Score"];
        echo "<tr><td>名稱:".$name."<tr><td>分數:".$score."<tr><td>權限:".$access;
    }
    echo "</table>";
}
else
{   
    exit("錯誤執行");
}

?>