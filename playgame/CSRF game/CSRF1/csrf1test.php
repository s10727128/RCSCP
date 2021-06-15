<?php
    //載入連結SQL檔
    include_once("../../../Teamproject/header.php");
    include("csrf1connMySQL.php");
    $sql_query = "SELECT * FROM csrf1 ORDER BY ID ASC";
    $result = mysqli_query($db_link,$sql_query);
    $total_records = mysqli_num_rows($result);
    $idcount = $total_records;

    #記住開始的時間點
    if ($_SESSION["CSRF1_time"] == null)//每個關卡的SESSION名字都要改
    {
        $_SESSION["CSRF1_time"] = time();
    }
    else if($_SESSION["CSRF1_time"]!=null){
        date_default_timezone_set('Asia/Taipei');
        //echo '開始時間'.(date('Y-m-d H:i:s',$_SESSION["MISC1_time"]+7*3600));//顯示開始時間點,可不加
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
    <br><br><br><h1 align = "center">會員資料總表</h1>

    <div class="content" style="text-align: center; color: red;">
        <br><p>內文:管理員的身分，可以自由的新增、刪除會員的資料。<br>偷偷告訴你~可以觀察網址上有什麼變化!</p>
    </div><br>

    <p align= "center">目前資料筆數：<?php echo $total_records;?>，<a href="csrf1create.php">新增資料</a></p>

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
                echo "<td><a href='csrf1deletetest.php?id=".$row_result['ID']."'>刪除</a></td>";
                echo "</tr>";
            }


            #判斷是不是正確答案
            if($idcount == 0)
            {   
                $enddate=time();//讀取完成時間
                $resultendtate = mysqli_query($connect,"UPDATE game SET  CSRF1_open='$enddate' WHERE Username='$name'");
                $totaltime=($enddate-$_SESSION["CSRF1_time"]);
                echo '<br>'."結束時間:".(date('Y-m-d H:i:s',$enddate+7*3600));
                echo '<br>'."總共花費:".($enddate-$_SESSION["time"])."秒";//顯示結束時間點,可不加
                        #搜尋user裡的玩家的分數
                        $resultscore=mysqli_query($connect,"SELECT Score FROM user WHERE Username='$name'");
                        if(mysqli_num_rows($resultscore) > 0)
                        {
                        while($row = mysqli_fetch_assoc($resultscore))
                        {
                            $score=$row["Score"];
                        }
                        }
                        #確認玩家是否已經有分數  
                        $resultcheck=mysqli_query($connect,"SELECT CSRF_1 FROM game WHERE Username='$name'");
                        if(mysqli_num_rows($resultcheck) > 0)
                        {
                        while($row = mysqli_fetch_assoc($resultcheck))
                        {
                            $check=$row["CSRF_1"];
                        }
                        }
                        #判斷是否已經有分數
                        if($check>0)
                        {
                        $score+=0;//如果有分數,則不再另外給分
                        }
                        #根據通關時間給分
                        else
                        {
                        if($totaltime<=300){//時間少於5分鐘
                            $score+=200;
                            $result=mysqli_query($connect,"UPDATE game SET  CSRF_1=200    WHERE Username='$name'");
                            $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                            }
                        else if($totaltime>300&&$totaltime<=600){//時間在5分鐘~10分鐘間
                            $score+=180;
                            $result=mysqli_query($connect,"UPDATE game SET  CSRF_1=180    WHERE Username='$name'");
                            $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                            }
                        else if($totaltime>600&&$totaltime<=900){//時間在10分鐘~15分鐘間
                            $score+=160;
                            $result=mysqli_query($connect,"UPDATE game SET  CSRF_1=160    WHERE Username='$name'");
                            $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                            }
                        else if($totaltime>900&&$totaltime<=1200){//時間在15分鐘~20分鐘間
                            $score+=140;
                            $result=mysqli_query($connect,"UPDATE game SET  CSRF_1=140    WHERE Username='$name'");
                            $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                        }
                        else if($totaltime>1200&&$totaltime<=1800){//時間在20分鐘~30分鐘間
                            $score+=120;
                            $result=mysqli_query($connect,"UPDATE game SET  CSRF_1=120    WHERE Username='$name'");
                            $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                        }
                        else if($totaltime>1800&&$totaltime<=2700){//時間在30分鐘~45分鐘間
                            $score+=100;
                            $result=mysqli_query($connect,"UPDATE game SET  CSRF_1=100    WHERE Username='$name'");
                            $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                        }
                        else if($totaltime>2700&&$totaltime<=3600){//時間在45分鐘~1小時間
                            $score+=75;
                            $result=mysqli_query($connect,"UPDATE game SET  CSRF_1=75    WHERE Username='$name'");
                            $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                        }
                        else if($totaltime>3600){//時間大於1小時
                            $score=50;
                            $result=mysqli_query($connect,"UPDATE game SET  CSRF_1=50    WHERE Username='$name'");
                            $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                        }
                    }        
                    echo '<div class="pass"><br>'."恭喜全通關~<br>";
                    echo '<a href="../../../Teamproject/html/gameset.php">返回主頁</a><br></div>';
            }
            
            #不是正確答案的情況
            else
            {   
                echo '<div class="fail">';
                echo '<br>'."通關密碼不正確,請繼續加油!<br>";
                echo $idcount;
                //echo '<a href="MISC1.php">返回關卡</a><br>';
                echo '</div>';
            }
        ?>
    </table>
</body>
</html>