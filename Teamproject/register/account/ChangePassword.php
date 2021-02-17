<!DOCTYPE html>
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" a href="ChangePasswordphp.css">
</head>

<body>
<?php
if(!isset($_POST['Modify'])){
    exit("錯誤執行");
    }//判斷是否有submit操作
require_once('../connect.php');
session_start();
$id = $_SESSION['id']; 
$sql="select * from user where ID='$id'";
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$password=$row["Password"];
	}
}
                
$pwd=$_POST['Password'];//post獲取表單裡的password
$passwordcheck = MD5($pwd);
$newpassword=$_POST['NewPassword'];
$Npwd = MD5($newpassword);
$newpassword2=$_POST['NewPasswordConfirm'];
$Npwd2 = MD5($newpassword2);
if($passwordcheck!=$password)
{
echo "舊密碼不正確 請5秒後重新輸入";
echo '<meta http-equiv=REFRESH CONTENT=5;url=ChangePassword.html>';
}
else{
    if($Npwd!=$Npwd2){
        echo "新密碼不相符 請5秒後重新輸入";
        echo '<meta http-equiv=REFRESH CONTENT=5;url=ChangePassword.html>';
    }
    else{
        $sql = "UPDATE user SET  Password='$Npwd' WHERE ID='$id'";
        $result=mysqli_query($connect,$sql);
        echo "更改成功,5秒後自動返回個人介面";
        echo '<meta http-equiv=REFRESH CONTENT=5;url=profile.php>';
    }
} 
?>
</body>
</html>