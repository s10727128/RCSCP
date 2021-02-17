<?php
<<<<<<< HEAD:playgame/CSRF game/CSRF1/csrf1index.php
=======
    //1. 引入程式檔
    include("../CSRF summary/CSRF0/csrf0connMySQL.php");
    
    //2. 加入sql 語法，白話文：從 user 的資料表中選擇所有欄位，並依照 cID 遞增排序
    $sql_query = "SELECT * FROM csrf0 ORDER BY ID ASC";
>>>>>>> 254c117ba353e3aa637d9805e65be95978c00064:playgame/CSRF game/csrf_sql/index.php

    //載入連結SQL檔
    include("csrf1connMySQL.php");
    $sql_query = "SELECT * FROM csrf1 ORDER BY ID ASC";
    $result = mysqli_query($db_link,$sql_query);
    $total_records = mysqli_num_rows($result);
    $idcount = $idcount=$total_records + 1;

    session_start();
    if( isset( $_SESSION['counter'] ) ) {
        if($_SESSION['counter'] = 1){
            //清除所有資料表內容
            for($idcount ; $idcount > 0; $idcount --){
                $sql_delete = "DELETE FROM csrf0 WHERE ID = $idcount";
                $result = mysqli_query($db_link,$sql_delete);
            }
        }else{
            $msg = "You have visited this page ".  $_SESSION['counter'];
            $msg .= "in this session.";
        }
        echo ($msg);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>會員資料總表</title>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</head>
<body>
    <h1 align = "center">會員資料總表</h1>
    <p align= "center">目前資料筆數：<?php echo $total_records;?>，<a href="csrf1create.php">新增資料</a></p>

    <table border="1" align= "center">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>積分</th>   
        </tr>


        <?php
            while($row_result = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row_result['ID']."</td>";
                echo "<td>".$row_result['Username']."</td>";
                echo "<td>".$row_result['Score']."</td>";
                echo "<td><a href='csrf1delete.php?id=".$row_result['ID']."'>刪除</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>