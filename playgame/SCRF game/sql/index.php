<?php
    //1. 引入程式檔
    include("connMySQL.php");
    
    //2. 加入sql 語法，白話文：從 members 的資料表中選擇所有欄位，並依照 cID 遞增排序
    $sql_query = "SELECT * FROM user ORDER BY ID ASC";

    //3. 使用 mysqli_query() 函式可以在 MySQL 中執行 sql 指令後會回傳一個資源識別碼，否則回傳 False。
    $result = mysqli_query($db_link,$sql_query);
    
    //4. 使用 mysqli_num_rows() 函式來取得資料筆數
    $total_records = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>會員資料的 CRUD 練習</title>
</head>
<body>
<h1 align = "center">會員資料總表</h1>
<p align= "center">目前資料筆數：，<a href='create.php'>新增資料</a></p>

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
            echo "<td><a href='update.php?id=".$row_result['ID']."'>修改</a> ";
            echo "<a href='delete.php?id=".$row_result['ID']."'>刪除</a></td>";
            echo "</tr>";
        }
    ?>

</table>
</body>
</html>