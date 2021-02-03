<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增會員資料</title>
</head>
<body>
    <form action="index.php" method="GET" name="formAdd" id="formAdd">
        請輸入姓名：<input type="text" name="Username" id="Username"><br/>
        請輸入Scored：<input type="text" name="Score" id="Score"><br/>
        <input type="hidden" name="action" value="add">
        <input type="submit" name="button" value="新增資料">
        <input type="reset" name="button2" value="重新填寫">
    </form>

    <?php
        //先檢查請求來源是否是我們上面創建的 form
        if (isset($_GET["action"])&&($_GET["action"] == "add")) {

            //引入檔，負責連結資料庫
            include("connMySQL.php");

            //取得請求過來的資料
            $name = $_GET["Username"];
            $Score = $_GET['Score'];

            //資料表查訪指令，請注意 "" , '' 的位置
            //INSERT INTO 就是新建一筆資料進哪個表的哪個欄位
            $sql_query = "INSERT INTO user (Username, Score) VALUES ('$name', '$Score')";

            //對資料庫執行查訪的動作
            mysqli_query($db_link,$sql_query);

            //導航回首頁
            //header("Location: index.php");
        }
    ?>
    
</body>
</html>