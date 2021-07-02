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
  }
}
echo'<div class="login">';
echo '<form name ="login" method="post" action="EditProfile.php">';
echo '<b>暱稱</b>:<input type="text" name="nickname" id="nickname" minlength="2" maxlength="16" value="'.$nickname.'"/><br/>';
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
  
  $sql = "UPDATE user SET  Nickname='$nickname' WHERE ID='$id'";
  $result = mysqli_query($connect, $sql);
  header('Location: profile.php');
}
?>
