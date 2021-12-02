<?php
    //載入連結SQL檔
    include_once("../../../../../RCSCP/header.php");
    include("csrf0connMySQL.php");
    $sql_query = "SELECT * FROM csrf0 ORDER BY ID ASC";
    $result = mysqli_query($db_link,$sql_query);
    $total_records = mysqli_num_rows($result);
    $idcount = $total_records + 1;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>遊戲</title>
    <!-- Plugin JavaScript -->
    <script src="../../../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <link rel=stylesheet href="/playgame/CSRF game/CSRF summary/CSRF0/csrf0index.css">
</head>
<body>
    <br><Br>
    <h1><a href="csrf0index.php">返回上一頁</a></h1>
    <form action="" method="GET" name="formAdd" id="formAdd">
        <b>請輸入姓名：</b><input type="text" name="Username" id="Username"></br>
        <b>請輸入積分：</b><input type="text" name="Score" id="Score"></br>
        <input type="hidden" name="action" value="add">
        <br><br>
        <input type="submit" name="button" value="新增資料">
        <input type="reset" name="button2" value="重新填寫">
    </form>
    <?php
        //先檢查請求來源是否是我們上面創建的 form
        if (isset($_GET["action"])&&($_GET["action"] == "add")) {

            //取得請求過來的資料
            $name = $_GET["Username"];
            $Score = $_GET['Score'];

            //判斷SQL ID number
            $idcount=$total_records + 1;
            
            //資料表查訪指令，請注意 "" , '' 的位置
            //INSERT INTO 就是新建一筆資料進哪個表的哪個欄位
            $sql_query = "INSERT INTO csrf0 (ID, Username, Score) VALUES ('$idcount', '$name', '$Score')";

            //對資料庫執行查訪的動作
            mysqli_query($db_link,$sql_query);

            //導航回首頁
            //header("Location: index.php");

            echo "新增成功";    
        }
    ?>
    <div class="footer">
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
            </div>
        </footer>
    </div>
</body>
</html>