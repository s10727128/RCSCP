<?php
    //載入連結SQL檔
    include_once("../../../Teamproject/header.php");
    include("csrf1connMySQL.php");
    $sql_query = "SELECT * FROM csrf1 ORDER BY ID ASC";
    $result = mysqli_query($db_link,$sql_query);
    $total_records = mysqli_num_rows($result);
    $idcount = $total_records + 1;

    //判斷使用者玩過此關
    $sql = "SELECT CSRF_1open FROM game WHERE Username='$name'";
    $resultgame = mysqli_query($connect, $sql);
    if (mysqli_num_rows($resultgame) > 0) {
		while ($row = mysqli_fetch_assoc($resultgame)) 
            {
            $flag=$row["CSRF_1open"];
            }
        }
    
    //session_start();
    if($flag == 0){
        //清除所有資料
         for($total_records ; $total_records > 0; $total_records --){
             $sql_delete = mysqli_query($db_link,"DELETE FROM csrf1 WHERE ID = $idcount");
         }

        //新增遊戲資料
        $palyer1 = "INSERT INTO csrf1 (ID, Username, Score) VALUES ('1', 'player1', '800')";
        $palyer2 = "INSERT INTO csrf1 (ID, Username, Score) VALUES ('2', 'player2', '150')";
        $palyer3 = "INSERT INTO csrf1 (ID, Username, Score) VALUES ('3', 'player3', '50')";
         if($total_records == 0){
            $sql_add = mysqli_query($db_link, $palyer1);
            $sql_add = mysqli_query($db_link, $palyer2);
            $sql_add = mysqli_query($db_link, $palyer3);
        }

        //FLAG記錄玩家玩過此關
        $setflag = "UPDATE game SET  CSRF_1open='1' WHERE Username='$name'";
        $resultgame = mysqli_query($connect, $setflag);
        
    }else{
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>會員資料總表</title>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</head>`
<body>
    <br><br><br><h1 align = "center">會員資料總表</h1>
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