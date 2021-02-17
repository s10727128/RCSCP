<?php
    //載入連結SQL檔
    include_once("../../../Teamproject/header.php");
    include("csrf1connMySQL.php");
    $sql_query = "SELECT * FROM csrf1 ORDER BY ID ASC";
    $result = mysqli_query($db_link,$sql_query);
    $total_records = mysqli_num_rows($result);
    $idcount = $idcount=$total_records + 1;

    require_once("../../../Teamproject/register/connect.php");
    $sqlgame = "UPDATE game SET  SCRF_1open='1' WHERE Username='$name'";
    $resultgame = mysqli_query($connect, $sqlgame);


    //新增由西基本資料
    // session_start();
    // if( isset( $_SESSION['counter'] ) ) {
    //     if($_SESSION['counter'] = 1){
    //         //清除所有資料表內容
    //         for($idcount ; $idcount > 0; $idcount --){
    //             $sql_delete = "DELETE FROM csrf1 WHERE ID = $idcount";
    //             $result = mysqli_query($db_link,$sql_delete);
    //         }
    //     }else{
    //         $msg = "You have visited this page ".  $_SESSION['counter'];
    //         $msg .= "in this session.";
    //     }
    //     echo ($msg);
    // }
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