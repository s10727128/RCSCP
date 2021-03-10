<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action="" method="post">
        通關密碼
        <input type="varchar" name="Key">
        <input type="submit" name="KeySubmit" value="驗證">
    </form>
</body>
</html> -->
<?php
// if (isset($_POST["KeySubmit"])) {
// $_SESSION["name"] = $_POST["Key"];
// }
// echo $_SESSION["name"];

session_start();
if ($_SESSION["time"] == null)
{
    $_SESSION["time"] = time();
}
else if($_SESSION["time"]!=null){
    echo '開始時間'.(date('Y-m-d H:i:s',$_SESSION["time"]+7*3600));
}


?>