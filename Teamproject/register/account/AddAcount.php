<?php 
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['Add'])){
exit("錯誤執行");
}//判斷是否有submit操作
require_once('../connect.php');//連結資料庫
$name = $password = $pwd ='';
$name=$_POST['Username'];//post獲取表單裡的name
$pwd=$_POST['Password'];//post獲取表單裡的password
$score=$_POST['Score'];
$access=$_POST['Access'];
$password = MD5($pwd);
$sql="select * from user where Username='$name'";
$result=mysqli_query($connect,$sql);
if (mysqli_num_rows($result)>0)
{
    echo'<div class="error">';
	echo '<b>帳號重複</b>';
    echo'</div>';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=AddAcount.html>';	
}
else{
    $sql="insert into user(Username,Password,Score,Access) values ('$name','$password','$score','$access')";//向資料庫插入表單傳來的值的sql
    
    $result=mysqli_query($connect,$sql);//執行sql
    
    if (!$result){
    die('錯誤:' );//如果sql執行失敗輸出錯誤
    }
    else{
        echo'<div class="forok">';
    echo "<b>新增成功,3秒後自動返回主介面</b>";//成功輸出註冊成功
    echo'</div>';
    echo '<meta http-equiv=REFRESH CONTENT=3;url=access.php>';
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AddAcount.css">
</head>
<body>
</body>
</html>