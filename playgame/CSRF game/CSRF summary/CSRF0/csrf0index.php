<?php
    //載入連結SQL檔
    include_once("../../../../Teamproject/header.php");
    include("csrf0connMySQL.php");
    $sql_query = "SELECT * FROM csrf0 ORDER BY ID ASC";
    $result = mysqli_query($db_link,$sql_query);
    $total_records = mysqli_num_rows($result);
    $idcount = $idcount=$total_records + 1;


    //判斷使用者玩過此關
    $flag = "SELECT * FROM scrf0 WHERE SCRF_1open VALUES";
    $palyer1 = "INSERT FROM csrf0 WHERE (ID, Username, Score) VALUES('1', 'player1', '800')";
    $palyer2 = "INSERT FROM csrf0 WHERE (ID, Username, Score) VALUES('2', 'player2', '150')";
    $palyer3 = "INSERT FROM csrf0 WHERE (ID, Username, Score) VALUES('3', 'player3', '50')";


    if($flag = 0){
        $setflag = "UPDATE game SET  SCRF_1open='1' WHERE Username='$name'";
        $resultgame = mysqli_query($connect, $setflag);

        //清除所有資料
        if($flag = 1){
            for($idcount ; $idcount > 0; $idcount --){
                $sql_delete = mysqli_query($db_link,"DELETE FROM csrf0 WHERE ID = $idcount");
            }
        }

        //新增遊戲資料
        if($idcount = 0){
            for($i = 1 ; $i <= 3; $i ++){
                $sql_add = mysqli_query($db_link, $palyer[$i]);
            }
        }
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
    <p align= "center">目前資料筆數：<?php echo $total_records;?>，<a href="csrf0create.php">新增資料</a></p>

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
                echo "<td><a href='csrf0delete.php?id=".$row_result['ID']."'>刪除</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>