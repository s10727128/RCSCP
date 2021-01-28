<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>
	  <meta charset="UTF-8">
	  <?php
	include('../header.php');
	?>      
	<link rel="stylesheet" type="text/css" href="css/register.css"> 
</head>    
<body>    
    <h2>登入 頁面</h2><br>    
    <div class="registerbox">    
    <form id="login" method="post" action="login.php">    
       
        </label>    
        <input type="varchar" name="Username" id="Uname" placeholder="Username"  required="required">    
        <br><br>    
            
        </label>    
        <input type="password" name="Password" id="Uname" placeholder="Password"  required="required">    
        <br><br>    
        <input type="submit" name="submit" id="fadeIn fourth" value="登入">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>記住我</span>    
		<br><br>  
	

		<a href="register.php" id="a1">創建帳號</a>
			
		 <a href="../index.php" id="a2">上一頁</a>    
		 
		</div>  
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
$name=$_POST['Username'];//post獲取表單裡的name
$pwd=$_POST['Password'];//post獲取表單裡的password
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
		echo("登入成功,5秒後自動返回主介面");
   		echo '<meta http-equiv=REFRESH CONTENT=5;url=../index.php>';
		}
		else{
			echo("登入失敗,帳號或密碼錯誤,5秒後自動返回登入介面");
			echo '<meta http-equiv=REFRESH CONTENT=5;url=login.php>';
		}
	}
}
else
{
	echo("登入失敗,帳號或密碼錯誤,5秒後自動返回登入介面");
	echo '<meta http-equiv=REFRESH CONTENT=5;url=login.php>';
}
}

?>
</body>
</html>