<?PHP
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST["submit"])){
exit("錯誤執行");
}//檢測是否有submit操作 
require_once('connect.php');//連結資料庫
$name = $password = $pwd = '';

$name=$_POST['Username'];//post獲取表單裡的name
$pwd=$_POST['Password'];//post獲取表單裡的password
$password = MD5($pwd);

$sql = "select * from user where Username = '".$name."' and Password='".$password."'";//檢測資料庫是否有對應的

$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$name = $row["Username"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['Username'] = $name;
	}
	echo("登入成功");
	header("Location: index.php");
}
else
{
	echo("登入失敗,帳號或密碼錯誤");
}

?>