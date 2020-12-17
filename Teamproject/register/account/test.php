<?php
$db = new PDO('mysql:host=localhost;dbname=data','root','');
if(isset($_POST['Username'])){
    $user=$_POST['Username'];
    
    $query=$db->query("SELECT * FROM user WHERE Username='{$user}'");
    if($query->rowCount()){
        die($user);
    }

}
?>

<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<body>
<form action="test.php" method="post">
  名稱:
  <input type="varchar" name="Username" id="Username" required="required">
  <br>
  <input type="submit" value="搜尋">
 </form>
 </body>
 </html>