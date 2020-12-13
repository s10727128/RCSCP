<?php
require_once('../connect.php');
session_start();
$id = $_SESSION['id']; 
$name=$score='';

$sql = "SELECT * FROM user WHERE ID='$id'";
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$nickname=$row["Nickname"];
		$mail=$row["Email"];
		$age=$row["Age"];
	}
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<form action="EditProfile.php" method="post">
  <?php
   echo <<<form
   <form name ="login" method="post" action="EditProfile.php">
   暱稱:<input type="text" name="nickname" value="$nickname"/><br/>
   信箱:<input type="email" name="Email" value="$mail"><br>
   年齡:<input type="varchar" name="Age" value="$age"><br>
   <input type="submit" name="Modify" value="更改">
   </form>
   form;
  ?>
 </form>
 </body>
 </html>
 <?php
 if(isset($_POST['Modify'])){
require_once('../connect.php');
 $nickname=$_POST['nickname'];
 $email=$_POST['Email'];
 $Age=$_POST['Age'];
 $sql = "UPDATE user SET  Nickname='$nickname',Email='$email',Age='$Age' WHERE ID='$id'";
 $result=mysqli_query($connect,$sql);
 echo "修改成功,5秒後自動返回主介面";//成功輸出修改成功
 header('Location: profile.php');
 }
 ?>