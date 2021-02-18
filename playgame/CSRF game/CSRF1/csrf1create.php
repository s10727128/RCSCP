<?php
    //載入連結SQL檔
    include("csrf1connMySQL.php");
    $sql_query = "SELECT * FROM csrf1 ORDER BY ID ASC";
    $result = mysqli_query($db_link,$sql_query);
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
</head>
<body>
    <a href="csrf1index.php">返回主頁</a>
    <form action="" method="GET" name="formAdd" id="formAdd">
        請輸入姓名:<input type="text" name="Username" id="Username"></br>
        請輸入積分:<input type="text" name="Score" id="Score"></br>
        <input type="hidden" name="action" value="add">
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
            // if((NOT EXISTS("SELECT * FROM csrf1 where ID = '$idcount'")){
            //     $idcount = $idcount;
            // }
            
             
            
            //資料表查訪指令，請注意 "" , '' 的位置
            //INSERT INTO 就是新建一筆資料進哪個表的哪個欄位
            $sql_query = "INSERT INTO csrf1 (ID, Username, Score) VALUES ('$idcount', '$name', '$Score')";

            //對資料庫執行查訪的動作
            mysqli_query($db_link,$sql_query);

            //導航回首頁
            //header("Location: index.php");

            echo "新增成功";    
        }
    ?>
    
</body>
</html>