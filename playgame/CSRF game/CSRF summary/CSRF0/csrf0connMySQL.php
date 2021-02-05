<?php
$server="localhost";  //主機
$db_Username="root";  //資料庫使用者名稱
$db_Password="";  //資料庫使用者密碼
$db_Database="csrf";//資料庫名稱
$db_link=mysqli_connect($server,$db_Username,$db_Password,$db_Database);
if (!$db_link) {
    die('資料庫連結失敗!');
} else {
   echo '';
}
?>