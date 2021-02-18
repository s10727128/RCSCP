<?php
include("../../header.php");
if($access!=1){
    exit("錯誤執行");
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="ModifyAccount_Access.css">
<body>
<div class="modify">
  
  <form action="ModifyAccount_Access.php" method="post">
  <b>修改使用者名稱:</b>
    <input type="varchar" name="Username" id="Username">
  <br>
  <b>修改密碼:</b>
  <input type="varchar" name="Password" id="Password">
  <br>
  <b>修改分數:</b>
  <input type="varchar" name="Score" id="Score">
  <br>
  <b>修改權限:</b>
  <input type="varchar" name="Access" id="Access">
  <br>
  <input type="submit" name="Modify" value="修改">
 </form>
</div>

 </body>
 </html>
<?php
if(isset($_POST['Modify'])){
require_once('../connect.php');
$name=mysqli_real_escape_string($connect,$_POST['Username']);//post獲取表單裡的name
$pwd=mysqli_real_escape_string($connect,$_POST['Password']);//post獲取表單裡的password
$score=mysqli_real_escape_string($connect,$_POST['Score']);
$access=mysqli_real_escape_string($connect,$_POST['Access']);
$password = password_hash($pwd,PASSWORD_DEFAULT);
$sql = "UPDATE user SET  Password='$password',Score='$score',Access='$access' WHERE Username='$name'";
$result=mysqli_query($connect,$sql);
echo'<div class="forok">';
echo "修改成功,3秒後自動返回主介面";//成功輸出修改成功
echo '</div>';
echo '<meta http-equiv=REFRESH CONTENT=3;url=access.php>';
}
?>