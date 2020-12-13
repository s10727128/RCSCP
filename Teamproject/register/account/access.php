
<?php
require_once('../connect.php');
echo '<a href="AddAcount.html">新增帳號</a><br>';
echo '<a href="ModifyAccount_Access.html">修改帳號</a><br>';
echo '<a href="DeleteAccount.html">刪除帳號</a><br>';
session_start();
$sql = "SELECT * FROM user";
$result=mysqli_query($connect,$sql);
echo "<table>";
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