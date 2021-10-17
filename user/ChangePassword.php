<?php
include("../header.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" a href="css/ChangePasswordhtml.css">

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
    </form>
  </div>


  <div class="goback">
    <a href="profile.php">回去個人資料</a>
  </div>
</body>

</html>

<?php
if (isset($_POST['Modify'])) {
  require_once('connect.php');
  $id = $_SESSION['id'];
  $sql = "select * from user where ID='$id'";
  $result = mysqli_query($connect, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $password = $row["Password"]; #從資料庫找出舊密碼
    }
  }

  $pwd = mysqli_real_escape_string($connect, $_POST['Password']); //post獲取表單裡的password
  $newpassword = mysqli_real_escape_string($connect, $_POST['NewPassword']);
  $Npwd = password_hash($newpassword, PASSWORD_DEFAULT);
  $newpassword2 = mysqli_real_escape_string($connect, $_POST['NewPasswordConfirm']);
  $Npwd2 = password_hash($newpassword2, PASSWORD_DEFAULT);

  if (password_verify($pwd, $password)) {
    if (password_verify($Npwd, $Npwd2)) {
      echo "新密碼不相符 請5秒後重新輸入";
      echo '<meta http-equiv=REFRESH CONTENT=5;url=ChangePassword.php>';
    } else {
      $sql = "UPDATE user SET  Password='$Npwd' WHERE ID='$id'";
      $result = mysqli_query($connect, $sql);
      echo "更改成功,5秒後自動返回個人介面";
      echo '<meta http-equiv=REFRESH CONTENT=5;url=profile.php>';
    }
  } else {
    echo "舊密碼不正確 請5秒後重新輸入";
    echo '<meta http-equiv=REFRESH CONTENT=5;url=ChangePassword.php>';
  }
}
?>