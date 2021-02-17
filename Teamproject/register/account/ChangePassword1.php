<?php
  include("../../header.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" a href="ChangePasswordhtml.css">
    
  </head>
<body>

  <div class="login">

<form action="ChangePassword.php" method="post">
  <b>舊使用者密碼:</b><input type="text" name="Password" id="oldpass">
  <br>
  <b>新使用者密碼:</b><input type="password" name="NewPassword" id="newpass">
  <br>
  <b>新使用者密碼確認:</b><input type="password" name="NewPasswordConfirm" id="newpass">
  <br>
  <input type="submit" name="Modify" value="更改">
 </form>  </div>

 
 <div class="goback">
<a href="../account/profile.php">回去個人資料</a>
</div> 
 </body>
 </html>