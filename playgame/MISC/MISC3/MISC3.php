<!DOCTYPE html>
<html lang="en">

<head>
    <title>遊戲</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once("../../../header.php");
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" a href="../../playgame_css/playgame5.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="source.js"></script> -->
</head>

<body a link="blue" vlink="red">
    <div class="body2">
        <div class="instructions">
            <h1><a href="../../gamepoint/level5index.php" class="exit">


                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 15 20">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                </a>
                <b>MISC-III</b>
            </h1>

        </div>
        <hr>

        <div style="text-align: center;">
            <a id="next_btn" style="display: none;" href="">Next</a>
        </div>
        <br>

        
        <div>
            <p><b>齁~什麼煩人的事情都有，老闆要你現在立馬解開這個文件裡的加密文字。</b></p>
            <p><b>--請解開密文過關--</b></p><br>
        </div>

        <div style="text-align: center;">
            <form action="../../downloadfile/base64.txt" method="GET">
                下載點:
                <a href="../../downloadfile/base64.txt" download><b>Download</b></a>
            </form>
            <br>
            <div>
                <form action="MISC3.php" method="post">
                    <b>通關密碼</b>
                    <input type="varchar" name="Key">
                    <input type="submit" name="KeySubmit" value="驗證">
                </form>
            </div>
        </div>

    <!-- 更新程式  開始-->

    <?php
        #防止warning出現
        ini_set("display_errors", 0);
        #記住開始的時間點
        if ($_SESSION["MISC3_time"] == null)//每個關卡的SESSION名字都要改
        {
            $_SESSION["MISC3_time"] = time();
        }
        else if($_SESSION["MISC3_time"]!=null){
            //echo '開始時間'.(date('Y-m-d H:i:s',$_SESSION["MISC3_time"]+7*3600));//顯示開始時間點,可不加
        }
        #通關驗證
        if(isset($_POST["KeySubmit"]))
        {
        $Key = $_POST["Key"];
        #判斷是不是正確答案
        if($Key == "thisisbase64")
        {   
        $enddate=time();//讀取完成時間
        $resultendtate = mysqli_query($connect,"UPDATE game SET  MISC_3open='$enddate' WHERE Username='$name'");
        $totaltime=($enddate-$_SESSION["MISC3_time"]);
        // echo '<br>'."結束時間:".(date('Y-m-d H:i:s',$enddate+7*3600));
        // echo '<br>'."總共花費:".($enddate-$_SESSION["time"])."秒";//顯示結束時間點,可不加
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
                $resultcheck=mysqli_query($connect,"SELECT MISC_3 FROM game WHERE Username='$name'");
                if(mysqli_num_rows($resultcheck) > 0)
                {
                while($row = mysqli_fetch_assoc($resultcheck))
                {
                    $check=$row["MISC_3"];
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
                    $result=mysqli_query($connect,"UPDATE game SET  MISC_3=400    WHERE Username='$name'");
                    $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                    }
                else if($totaltime>300&&$totaltime<=600){//時間在5分鐘~10分鐘間
                    $score+=180;
                    $result=mysqli_query($connect,"UPDATE game SET  MISC_3=350    WHERE Username='$name'");
                    $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                    }
                else if($totaltime>600&&$totaltime<=900){//時間在10分鐘~15分鐘間
                    $score+=160;
                    $result=mysqli_query($connect,"UPDATE game SET  MISC_3=280    WHERE Username='$name'");
                    $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                    }
                else if($totaltime>900&&$totaltime<=1200){//時間在15分鐘~20分鐘間
                    $score+=140;
                    $result=mysqli_query($connect,"UPDATE game SET  MISC_3=230    WHERE Username='$name'");
                    $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                }
                else if($totaltime>1200&&$totaltime<=1800){//時間在20分鐘~30分鐘間
                    $score+=120;
                    $result=mysqli_query($connect,"UPDATE game SET  MISC_3=200    WHERE Username='$name'");
                    $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                }
                else if($totaltime>1800&&$totaltime<=2700){//時間在30分鐘~45分鐘間
                    $score+=100;
                    $result=mysqli_query($connect,"UPDATE game SET  MISC_3=150    WHERE Username='$name'");
                    $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                }
                else if($totaltime>2700&&$totaltime<=3600){//時間在45分鐘~1小時間
                    $score+=75;
                    $result=mysqli_query($connect,"UPDATE game SET  MISC_3=100    WHERE Username='$name'");
                    $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                }
                else if($totaltime>3600){//時間大於1小時
                    $score=50;
                    $result=mysqli_query($connect,"UPDATE game SET  MISC_3=50    WHERE Username='$name'");
                    $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                }
                }        
                echo '<div class="pass"><br>'."恭喜通關~<br>";
                echo '<a href="../MISC4/MISC4.php">前往下一關</a><br>';
                echo '<a href="../../gameset.php">返回主頁</a><br></div>';
        }
        
        #不是正確答案的情況
        else
        {   
            echo '<div class="fail">';
            echo '<br>'."通關密碼不正確,請繼續加油!<br>";
            //echo '<a href="MISC1.php">返回關卡</a><br>';
            echo '</div>';
        }
        }
    ?>

    <!-- 結束 -->
        <br>

        <?php
            include("MISC3.html");
        ?>
        <!-- <div style="text-align: center;">
            <p>請幫我拿解開檔案，謝謝!</p>
        </div>
        <div style="text-align: center;">
            <button type="button" id="hintList">Hint</button>
            <div style="list-style: none; ">
                <li id="hint1"><b></b></li>
                <li id="hint2"><b></b></li>
                <li id="hint3"><b></b></li>
            </div>
        </div>
    </div>
    <script>
        let j = 0;
        $("#hintList").click(function() {
            j++;
            switch (j) {
                case 1:
                    $("#hint1").text("1.這是一個zip偽加密的檔案");
                    break;
                case 2:
                    $("#hint2").text("2.內容經由Base64 code加密過");
                    break;
                case 3:
                    $("#hint3").text("3.內容經由Hex code加密過");
                    break;

            }
        });
    </script> -->


    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br>




    <div class="footer">
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
            </div>
        </footer>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>