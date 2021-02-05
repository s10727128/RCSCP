<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>
	  <meta charset="UTF-8">
	  <?php
	include('../header.php');
	?>      
	<link rel="stylesheet" type="text/css" href="css/login.css"> 
</head>    
<body>    
    <div class="login">    
    <form id="login" method="post" action="login.php">    
       
	<h3><b>會員登入</b></h3>
        </label>   <br>
        <input type="varchar" name="Username" id="Uname" placeholder="帳號"  required="required">    
          
		<br><br>
        </label>    
        <input type="password" name="Password" id="Uname" placeholder="密碼"  required="required">    
        <br>      <br>
        <input type="submit" name="submit" id="fadeIn fourth" value="登入">       
         

    </form>     
		
</div>       
<?PHP
header("Content-Type: text/html; charset=utf8");
require_once('connect.php');//連結資料庫
if($_SESSION)
{
	header("Location: /js-hackgame/Teamproject/index.php");
}
if(!isset($_POST["submit"])){

}
else{//檢測是否有submit操作 
$name = $password = $pwd = '';
$name=mysqli_real_escape_string($connect,$_POST['Username']);//post獲取表單裡的name
$pwd=mysqli_real_escape_string($connect,$_POST['Password']);//post獲取表單裡的password
$sql = "SELECT * FROM user WHERE Username = '$name'";//檢測資料庫是否有對應的帳號
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$password=$row['Password'];
		if(password_verify($pwd,$password)){
		$id = $row["ID"];
		$name = $row["Username"];
		//session_start();
		$_SESSION['id'] = $id;
		$_SESSION['Username'] = $name;
		echo '<h3 class="forok"><b>登入成功,3秒後自動返回首頁</b></h3>';
   		echo '<meta http-equiv=REFRESH CONTENT=3;url=../index.php>';
		}
		else{
			echo'<h3 class="error"><b>登入失敗,帳號或密碼錯誤,3秒後自動返回登入介面</b></h3>';
			
			echo '<meta http-equiv=REFRESH CONTENT=3;url=login.php>';
		}
	}
}
else
{
	echo('<h3 class="error"><b>登入失敗,帳號或密碼錯誤,3秒後自動返回登入介面</b></h3>');
	echo '<meta http-equiv=REFRESH CONTENT=3;url=login.php>';
}
}

?>
</body>
</html>