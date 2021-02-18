<?php
if(!isset($_POST['Modify'])){
    exit("錯誤執行");
    }//判斷是否有submit操作
require_once('../connect.php');
session_start();
$name=$_POST['Username'];//post獲取表單裡的name
$pwd=$_POST['Password'];//post獲取表單裡的password
$score=$_POST['Score'];
$access=$_POST['Access'];
$password = MD5($pwd);
$sql = "UPDATE user SET  Password='$password',Score='$score',Access='$access' WHERE Username='$name'";
$result=mysqli_query($connect,$sql);
echo'<div class="forok">';
echo "修改成功,3秒後自動返回主介面";//成功輸出修改成功
echo '</div>';
echo '<meta http-equiv=REFRESH CONTENT=3;url=access.php>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ModifyAccount_Access.css">
</head>
<body>
    
</body>
</html>