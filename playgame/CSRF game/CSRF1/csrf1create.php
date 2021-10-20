<?php

include_once("../../../../RCSCP/header.php");
//載入連結SQL檔
include("csrf1connMySQL.php");
$sql_query = "SELECT * FROM csrf1 ORDER BY ID ASC";
$result = mysqli_query($db_link, $sql_query);
$total_records = mysqli_num_rows($result);
$idcount = $total_records + 1;

//清除所有資料表內容
// for($idcount ; $idcount > 0; $idcount --){
//     $sql_delete = "DELETE FROM csrf1 WHERE ID = $idcount";
//     $result = mysqli_query($db_link,$sql_delete);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增會員資料</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel=stylesheet href="../../playgame_css/playgame2.css">

</head>

<body>
    <div class="body2">
        <div class="instructions">
            <h1><a href="csrf1index.php" class="exit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 15 20">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                </a>
                <b>返回上一頁</b>
            </h1>
        </div>
        <hr><br>
        <form action="" method="GET" name="formAdd" id="formAdd">
            請輸入姓名: <input type="text" name="Username" id="Username"></br>
            請輸入積分: <input type="text" name="Score" id="Score"></br>
            <input type="hidden" name="action" value="add">
            <br><br>
            <input type="submit" name="button" value="新增資料">
            <input type="reset" name="button2" value="重新填寫">
        </form>
        <div class="brfooter"></div>
        <?php
        //先檢查請求來源是否是我們上面創建的 form
        if (isset($_GET["action"]) && ($_GET["action"] == "add")) {

            //取得請求過來的資料
            $name = $_GET["Username"];
            $Score = $_GET['Score'];

            //判斷SQL ID number
            // if((NOT EXISTS("SELECT * FROM csrf1 where ID = '$idcount'")){
            //     $idcount = $idcount;
            // }



            //資料表查訪指令，請注意 "" , '' 的位置
            //INSERT INTO 就是新建一筆資料進哪個表的哪個欄位
            $sql_query = "INSERT INTO csrf1 (ID, Username, Score) VALUES ('$idcount', '$name', '$Score')";

            //對資料庫執行查訪的動作
            mysqli_query($db_link, $sql_query);

            //導航回首頁
            //header("Location: index.php");

            echo "新增成功";
        }
        ?>
 


     <script src="/js-hackgame/Teamproject/vendor/jquery/jquery.min.js"></script>
    <script src="/js-hackgame/Teamproject/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/js-hackgame/Teamproject/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="/js-hackgame/Teamproject/js/scrolling-nav.js"></script>
    <script>
        document.addEventListener("touchstart", function() {}, false);
    </script>
    </div>

</body>

</html>