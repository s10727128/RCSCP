<?php
include("../../header.php");
if($access!=1){
    exit("錯誤執行");
}
?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="DeleteAccount.css">
</head>
<body>
<div class="delete">
<form action="DeleteAccount.php" method="post">
  <B>要刪除的使用者帳號:<br></B>
  <input type="varchar" name="Username" id="Username">
  <br>
  <input type="submit" name="Delete" value="刪除">
 </form>
</div>
 
 </body>
 </html>
<?php
if(isset($_POST['Delete'])){
require_once('../connect.php');
$name=mysqli_real_escape_string($connect,$_POST['Username']);
$sql = "DELETE FROM user WHERE Username='$name'";
$result=mysqli_query($connect,$sql);
echo "刪除成功,5秒後自動返回主介面";//成功輸出刪除成功
echo '<meta http-equiv=REFRESH CONTENT=5;url=access.php>';
}
?>