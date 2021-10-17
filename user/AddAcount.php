<?php
include("../header.php");
if ($access != 1) {
  exit("錯誤執行");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/AddAcount.css">
</head>

<body>
  <div class="add">
    <form action="AddAcount.php" method="post">
      <b>使用者名稱:</b>
      <input type="varchar" name="Username" id="Username">
      <BR>
      <b>使用者密碼:</b>
      <input type="varchar" name="Password" id="Password">
      <BR>
      <b>使用者分數:</b>
      <input type="varchar" name="Score" id="Score">
      <BR>
      <b>使用者權限:</b>
      <input type="varchar" name="Access" id="Access">

      <input type="submit" name="Add" value="新增">
  </div>
  </form>
</body>

</html>
<?php
if (isset($_POST['Add'])) {
  require_once('connect.php'); //連結資料庫
  //判斷是否有submit操作
  $name = $password = $pwd = '';
  $name = mysqli_real_escape_string($connect, $_POST['Username']); //post獲取表單裡的name
  $pwd = mysqli_real_escape_string($connect, $_POST['Password']); //post獲取表單裡的password
  $score = mysqli_real_escape_string($connect, $_POST['Score']);
  $access = mysqli_real_escape_string($connect, $_POST['Access']);
  $password = password_hash($pwd, PASSWORD_DEFAULT);
  $sql = "select * from user where Username='$name'";
  $result = mysqli_query($connect, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo '<div class="error">';
    echo '<b>帳號重複</b>';
    echo '</div>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=AddAcount.php>';
  } else {
    $sql = "insert into user(Username,Password,Score,Access) values ('$name','$password','$score','$access')"; //向資料庫插入表單傳來的值的sql
    $result = mysqli_query($connect, $sql); //執行sql
    $sql = "insert into game(Username) values ('$name')"; //向資料庫插入表單傳來的值的sql
    $result = mysqli_query($connect, $sql); //執行sql
    if (!$result) {
      die('錯誤:'); //如果sql執行失敗輸出錯誤
    } else {
      echo '<div class="forok">';
      echo "<b>新增成功,3秒後自動返回主介面</b>"; //成功輸出註冊成功
      echo '</div>';
      echo '<meta http-equiv=REFRESH CONTENT=3;url=access.php>';
    }
  }
}
?>