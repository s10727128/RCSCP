<?php
    //1. 引入程式檔
    include("connMySQL.php");
    
    //2. 加入sql 語法，白話文：從 user 的資料表中選擇所有欄位，並依照 cID 遞增排序
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
    <p align= "center">目前資料筆數：<?php echo $total_records;?></p>

<div style="text-align: center;">
    <form action="" method="GET" name="formAdd" id="formAdd">
        <input type="hidden" name="Username" id="Username">
        <input type="hidden" name="Score" id="Score">
        <input type="hidden" name="action" value="add">
    </form> 
    <form action="" method="POST" name="formAdd2" id="formAdd2">
    <input style="text-align: center;" type="submit" name="button" value="新增資料">
    </form>
</div>


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
            echo "<td><a href='delete.php?id=".$row_result['ID']."'>刪除</a></td>";
            echo "</tr>";
        }

        //先檢查請求來源是否是我們上面創建的 form
    if(isset($_POST['button'])){
        if (isset($_GET["action"])&&($_GET["action"] == "add")) {

            //引入檔，負責連結資料庫
            include("connMySQL.php");
            $sql_query = "SELECT * FROM user ORDER BY ID ASC";
            $result = mysqli_query($db_link,$sql_query);
            $total_records = mysqli_num_rows($result);

            //取得請求過來的資料
            $name = $_GET["Username"];
            $score = $_GET['Score'];

            //判斷SQL ID number
            $idcount=$total_records + 1;
            

            //資料表查訪指令，請注意 "" , '' 的位置
            //INSERT INTO 就是新建一筆資料進哪個表的哪個欄位
            $sql_query = "INSERT INTO user (ID, Username, Score) VALUES ('$idcount', '$name', '$score')";

            //對資料庫執行查訪的動作
            mysqli_query($db_link,$sql_query);

            //導航回首頁

            $str1=mysqli_real_escape_string($db_link,"&action=add");
            $str2=mysqli_real_escape_string($db_link,"&button=新增資料");
            //header("Location: index.php?Username=&Score=&action=add&button=新增資料");
            echo '<meta http-equiv=REFRESH CONTENT=0; url=index.php?Username='.$name.'Score=1'.$str1.$str2.'>';
        }
    }
    ?>
</table>



</body>
</html>