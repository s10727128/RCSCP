<?php
$server="localhost";  //主機
$db_Username="root";  //資料庫使用者名稱
$db_Password="";  //資料庫使用者密碼
$db_Database="data";//資料庫名稱
$connect=mysqli_connect($server,$db_Username,$db_Password,$db_Database);
if(!$connect){
	die("錯誤:".mysqli_connect_error());//如果連結失敗輸出錯誤
}
?>