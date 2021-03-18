<?php
include("../../header.php");
if($access!=1){
    exit("錯誤執行");
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="ModifyScore.css">
<body>
<div class="modify">
  
  <form action="" method="post">
  <b>修改的使用者帳號:</b>
    <input type="varchar" name="Username" id="Username">
  <br>
  <b>修改XSS1分數:</b>
  <input type="varchar" name="XSS1" id="Score">
  <br>
  <b>修改XSS2分數:</b>
  <input type="varchar" name="XSS2" id="Score">
  <br>
  <b>修改XSS3分數:</b>
  <input type="varchar" name="XSS3" id="Score">
  <br>
  <b>修改Phishing1分數:</b>
  <input type="varchar" name="Phishing1" id="Score">
  <br>
  <b>修改Phishing2分數:</b>
  <input type="varchar" name="Phishing2" id="Score">
  <br>
  <b>修改SQL1分數:</b>
  <input type="varchar" name="SQL1" id="Score">
  <br>
  <b>修改SQL2分數:</b>
  <input type="varchar" name="SQL2" id="Score">
  <br>
  <b>修改CSRF1分數:</b>
  <input type="varchar" name="CSRF1" id="Score">
  <br>
  <b>修改CSRF2分數:</b>
  <input type="varchar" name="CSRF2" id="Score">
  <br>
  <b>修改MISC1分數:</b>
  <input type="varchar" name="MISC1" id="Score">
  <br>
  <b>修改MISC2分數:</b>
  <input type="varchar" name="MISC2" id="Score">
  <br>
  <b>修改MISC3分數:</b>
  <input type="varchar" name="MISC3" id="Score">
  <br>
  <b>修改MISC4分數:</b>
  <input type="varchar" name="MISC4" id="Score">
  <br>
  <b>修改MISC5分數:</b>
  <input type="varchar" name="MISC5" id="Score">
  <br>
  <b>修改MISC6分數:</b>
  <input type="varchar" name="MISC6" id="Score">
  <br>
  <input type="submit" name="Modify" value="修改">
 </form>
</div>

 </body>
 </html>
<?php
if(isset($_POST['Modify'])){
require_once('../connect.php');
$name=mysqli_real_escape_string($connect,$_POST['Username']);
$XSS1=mysqli_real_escape_string($connect,$_POST['XSS1']);
$XSS2=mysqli_real_escape_string($connect,$_POST['XSS2']);
$XSS3=mysqli_real_escape_string($connect,$_POST['XSS3']);
$Phishing1=mysqli_real_escape_string($connect,$_POST['Phishing1']);
$Phishing2=mysqli_real_escape_string($connect,$_POST['Phishing2']);
$SQL1=mysqli_real_escape_string($connect,$_POST['SQL1']);
$SQL2=mysqli_real_escape_string($connect,$_POST['SQL2']);
$CSRF1=mysqli_real_escape_string($connect,$_POST['CSRF1']);
$CSRF2=mysqli_real_escape_string($connect,$_POST['CSRF2']);
$MISC1=mysqli_real_escape_string($connect,$_POST['MISC1']);
$MISC2=mysqli_real_escape_string($connect,$_POST['MISC2']);
$MISC3=mysqli_real_escape_string($connect,$_POST['MISC3']);
$MISC4=mysqli_real_escape_string($connect,$_POST['MISC4']);
$MISC5=mysqli_real_escape_string($connect,$_POST['MISC5']);
$MISC6=mysqli_real_escape_string($connect,$_POST['MISC6']);
$sql = "UPDATE game SET  XSS_1='$XSS1',XSS_2='$XSS2',XSS_3='$XSS3',Phishing_1='$Phishing1',Phishing_2='$Phishing2'
,SQL_1='$SQL1',SQL_2='$SQL2',CSRF_1='$CSRF1',CSRF_2='$CSRF2',MISC_1='$MISC1',MISC_2='$MISC2'
,MISC_3='$MISC3',MISC_4='$MISC4',MISC_5='$MISC5',MISC_6='$MISC6' WHERE Username='$name'";
$result=mysqli_query($connect,$sql);
$sum=$XSS1+$XSS2+$XSS3+$Phishing1+$Phishing2+$SQL1+$SQL2+$CSRF1+$CSRF2+$MISC1+$MISC2+$MISC3+$MISC4+$MISC5+$MISC6;
$sql="UPDATE user SET Score='$sum' WHERE Username='$name'";
$result=mysqli_query($connect,$sql);
echo'<div class="forok">';
echo "修改成功,3秒後自動返回主介面";//成功輸出修改成功
echo '</div>';
echo '<meta http-equiv=REFRESH CONTENT=3;url=access.php>';
}
?>