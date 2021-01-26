<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <link rel="stylesheet" a href ="css/register.css">
<body>
<h1>註冊介面</h1>
<form action="register.php" method="post">
  使用者暱稱:
  <input type="varchar" name="Nickname" placeholder="暱稱" id="Uname" required="required">
  <br><br>
  使用者帳號:
  <input type="varchar" name="Username" placeholder="帳號" id="Uname" required="required">
  <br><br>
  使用者密碼:
  <input type="varchar" name="Password" placeholder="密碼" id="Uname" required="required">
  <br><br>
  使用者密碼確認:
  <input type="varchar" name="PasswordCheck" placeholder="密碼確認" id="Uname" required="required">
  <br><br>
  <input type="submit" name="register" value="註冊">
  <button type="button" ><a href="login.html">上一頁</a></button>
 </form>
 </body>
 </html>

<?php 
header("Content-Type: text/html; charset=utf8");
if(isset($_POST['register'])){
    require_once('connect.php');//連結資料庫
    $name = $password = $pwd =$pwd2=$nickname ='';
    $nickname=$_POST['Nickname'];//post獲取表單裡的暱稱
    $name=$_POST['Username'];//post獲取表單裡的帳號
    $pwd=$_POST['Password'];//post獲取表單裡的密碼
    $pwd2=$_POST['PasswordCheck'];
    $password = MD5($pwd);
    $sql="select * from user where Username='$name'";
    $result=mysqli_query($connect,$sql);
    if (mysqli_num_rows($result)>0)
    {
        echo '帳號重複';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.html>';	
    }
    else if($pwd!=$pwd2)
    {
        echo '輸入密碼不一致,請重新輸入';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.html>';	
    }
    else{
        $sql="insert into user(Username,Password,Nickname) values ('$name','$password','$nickname')";//向資料庫插入表單傳來的值的sql
        
        $result=mysqli_query($connect,$sql);//執行sql
        
        if (!$result){
        die();//如果sql執行失敗輸出錯誤
        }
        else{
            $_SESSION['Username'] = $name;
        echo "註冊成功,5秒後自動返回主介面";//成功輸出註冊成功
        echo '<meta http-equiv=REFRESH CONTENT=5;url=../index.php>';
        }
        }
}//判斷是否有submit操作
else{

}
?>