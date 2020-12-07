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
	echo '帳號重複';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=AddAcount.html>';	
}
else{
    $sql="insert into user(Username,Password,Score,Access) values ('$name','$password','$score','$access')";//向資料庫插入表單傳來的值的sql
    
    $result=mysqli_query($connect,$sql);//執行sql
    
    if (!$result){
    die('錯誤:' .mysqli_error());//如果sql執行失敗輸出錯誤
    }
    else{
    echo "新增成功,5秒後自動返回主介面";//成功輸出註冊成功
    echo '<meta http-equiv=REFRESH CONTENT=5;url=access.php>';
    }
    }
?>