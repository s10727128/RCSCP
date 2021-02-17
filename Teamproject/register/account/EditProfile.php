<?php
require_once('../connect.php');
session_start();
$id = $_SESSION['id'];
$name = $score = '';

$sql = "SELECT * FROM user WHERE ID='$id'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $nickname = $row["Nickname"];
    $mail = $row["Email"];
    $age = $row["Age"];
  }
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" a href="Editprofile.css">

<body>

  <form action="EditProfile.php" method="post">
    <?php
    echo '<form name ="login" method="post" action="EditProfile.php">';
    echo '暱稱:<input type="text" name="nickname" value="'.$nickname.'"/><br/>';
    echo '信箱:<input type="email" name="Email" value="'.$mail.'"><br>';
    echo '年齡:<input type="varchar" name="Age" value="'.$age.'"><br>';
    echo '<input type="submit" name="Modify" value="更改">';
    echo '</form>';
    ?>
  </form>
  </div>

  <div id="menubar"> <a href="../account/profile.php" class="menu_exit">回去個人資料</a> </div>
</body>

</html>
<?php
if (isset($_POST['Modify'])) {
  require_once('../connect.php');
  $nickname = $_POST['nickname'];
  $email = $_POST['Email'];
  $Age = $_POST['Age'];
  $sql = "UPDATE user SET  Nickname='$nickname',Email='$email',Age='$Age' WHERE ID='$id'";
  $result = mysqli_query($connect, $sql);
  echo "修改成功,5秒後自動返回主介面"; //成功輸出修改成功
  header('Location: profile.php');
}
?>