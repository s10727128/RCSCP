<?php
    //載入連結SQL檔
    include_once("../../../../Teamproject/header.php");
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
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</head>
<body>
    <br><br><br><h1 align = "center">會員資料總表</h1>

    <div class="content" style="text-align: center; color: red;">
        <br><p>內文:管理員的身分，可以自由的新增、刪除會員的資料。<br>偷偷告訴你~可以觀察網址上有什麼變化!</p>
    </div><br>

    <p align= "center">目前資料筆數：<?php echo $total_records;?>，<a href="csrf0create.php">新增資料</a></p>

    <table  border="1" align= "center">
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
                echo "<td><a href='delete.php?id=".$row_result['ID']."'>刪除</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>