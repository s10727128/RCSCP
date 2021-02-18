
<?php
include("../../header.php");
require_once('../connect.php');
$sql = "SELECT * FROM user";
$result=mysqli_query($connect,$sql);
echo "<table class='table2'>";
echo "<tr><td>帳號</td>"."<td>暱稱</td>"."<td>信箱</td>"."<td>年齡</td>"."<td>分數</td>"."<td>權限</td></tr>";
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
        $access=$row["Access"];
        $name=$row["Username"];
        $score=$row["Score"];
        $nickname=$row["Nickname"];
        $age=$row["Age"];
        $email=$row["Email"];
        echo '<tr>';
        echo '<td>' . $name. '</td>';
        echo '<td>' . $nickname. '</td>';
        echo '<td>' . $email. '</td>';
        echo '<td>' . $age. '</td>';
        echo '<td>' . $score . '</td>';
        echo '<td>' . $access. '</td>';
        echo '</tr>';
    }
    echo "</table>"; 
    
}
else
{   
    exit("錯誤執行"); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="access.css" type="text/css">
</head>
<body>
    
    <div class="body2">
        <div class="link">
<a href="AddAcount.html">新增帳號</a><br>
<a href="ModifyAccount_Access.html">修改帳號</a><br>
<a href="DeleteAccount.html">刪除帳號</a><br>
</div>
</div>
</body>
</html>