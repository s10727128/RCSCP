<?php
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<?php
  include("../../header.php");
?>
<link rel="stylesheet" a href="Editprofile.css">

<body>

  <form action="EditProfile.php" method="post">
<?php
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
echo'<div class="login">';
echo '<form name ="login" method="post" action="EditProfile.php">';
echo '<b>暱稱</b>:<input type="text" name="nickname" id="nickname" minlength="2" maxlength="16" value="'.$nickname.'"/><br/>';
echo '<b>信箱</b>:<input type="email" name="Email" id="email" value="'.$mail.'"><br>';
echo '<b>年齡</b>:<input type="varchar" name="Age" id="age" value="'.$age.'" ><br>';
echo '<input type="submit" name="Modify" value="更改">';
echo '</form>';

echo'</div>';
    ?>
  </form>
  </div>
<br>
</body>

</html>
<?php

if (isset($_POST['Modify'])) {
  $nickname = mysqli_real_escape_string($connect,$_POST['nickname']);
  $email = mysqli_real_escape_string($connect,$_POST['Email']);
  $Age = mysqli_real_escape_string($connect,$_POST['Age']);
  // if($_POST['Age'] >=12 && $_POST['Age'] <=80){

  
  $sql = "UPDATE user SET  Nickname='$nickname',Email='$email',Age='$Age' WHERE ID='$id'";
  $result = mysqli_query($connect, $sql);
  header('Location: profile.php');
  // echo '<h3 class="forok"><b>修改成功,3秒後自動返回主介面</b></h3>';//成功輸出修改成功
  // echo '<meta http-equiv=REFRESH CONTENT=3;url=profile.php>';
  // }else{
  //   echo'老死了還敢來玩遊戲';
  // }
}
?>