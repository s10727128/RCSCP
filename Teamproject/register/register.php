<!DOCTYPE html>
<html>
    <head>-
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
    include_once('../header.php');
    ?>
      
      <link rel="stylesheet" a href ="css/register.css">  
</head>

<body>
<div class="registerbox">

<form action="register.php" method="post">

<h3><b>會員註冊</b></h3><br>
  <input type="varchar" name="Nickname" placeholder="暱稱" id="Uname" minlength="2" maxlength="16" required="required" >
  <br><br>

  <input type="varchar" name="Username" placeholder="帳號" id="Uname" minlength="4" maxlength="16" required="required" >
  <br><br>

  <input type="password" name="Password" placeholder="密碼" id="Uname" minlength="4" maxlength="16"  required="required">
  <br><br>

  <input type="password" name="PasswordCheck" placeholder="密碼確認" id="Uname" minlength="4" maxlength="16" required="required">
  <br><br>
  <input type="submit" name="register" class="fadeIn fourth" value="註冊">
  
 </form>
</div>


<?php 
header("Content-Type: text/html; charset=utf8");
if($_SESSION)
{
	header("Location: /js-hackgame/Teamproject/index.php");
}
if(isset($_POST['register'])){
    require_once('connect.php');//連結資料庫
    $name = $password = $pwd =$pwd2=$nickname ='';
    $nickname=mysqli_real_escape_string($connect,$_POST['Nickname']);//post獲取表單裡的暱稱
    $name=mysqli_real_escape_string($connect,$_POST['Username']);//post獲取表單裡的帳號
    $pwd=mysqli_real_escape_string($connect,$_POST['Password']);//post獲取表單裡的密碼
    $pwd2=mysqli_real_escape_string($connect,$_POST['PasswordCheck']);
    if((strlen($nickname)>16)||(strlen($name)>16)||(strlen($pwd)>16)||(strlen($pwd2)>16)==1){
        echo '<h3 class="error"><b>字數過多</b></h3>';
        exit();
    }
    $password = password_hash($pwd,PASSWORD_DEFAULT);
    $sql="select * from user where Username='$name'";
    $result=mysqli_query($connect,$sql);
    if (mysqli_num_rows($result)>0)
    {
        echo '<h3 class="error"><b>帳號重複</b></h3>';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';	
    }
    else if($pwd!=$pwd2)
    {
        echo '<h3 class="error"><b>輸入密碼不一致,請重新輸入</b></h3>';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';	
    }
    else{
        $sql="insert into user(Username,Password,Nickname) values ('$name','$password','$nickname')";//向資料庫插入表單傳來的值的sql
        $result=mysqli_query($connect,$sql);//執行sql
        $sqlgame="insert into game(Username) values ('$name')";
        $resultgame=mysqli_query($connect,$sqlgame);
        
        if (!$result){
        die();//如果sql執行失敗輸出錯誤
        }
        else{
            //$_SESSION['Username'] = $name;
        echo '<h3 class="forok"><b>註冊成功,3秒後自動返回首頁</b></h3>';//成功輸出註冊成功
        echo '<meta http-equiv=REFRESH CONTENT=3;url=../index.php>';
        }
        }

}//判斷是否有submit操作
else{

}
?>





<div class="footer">
<div class="footer2">
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
            </div>
        </footer>
		</div>
    </div>
 </body>
 </html>
