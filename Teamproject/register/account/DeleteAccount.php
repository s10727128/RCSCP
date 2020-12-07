<?php
if(!isset($_POST['Delete'])){
    exit("錯誤執行");
    }//判斷是否有submit操作
require_once('../connect.php');
$name=$_POST['Username'];
$sql = "DELETE FROM user WHERE Username='$name'";
$result=mysqli_query($connect,$sql);
echo "刪除成功,5秒後自動返回主介面";//成功輸出刪除成功
echo '<meta http-equiv=REFRESH CONTENT=5;url=access.php>';
?>