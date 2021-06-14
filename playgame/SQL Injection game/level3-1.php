<!DOCTYPE html>
<html lang="en">

<head>
    <title>資安遊戲闖關網站</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once("../../Teamproject/header.php");
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="/bird.jpg">
    <link rel="stylesheet" a href="../CSS/playgame3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script  src="time.js"></script> -->

</head>

<body a link="blue" vlink="red">
    <div class="body2">
    <form action="" method="POST">
        <div class="instructions">
                <h1><a href="../gamepoint/level3index.php" class="exit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"  viewBox="0 0 15 20">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </a>
                    <b>SQL-1</b>
                </h1>
            </div>
        <hr>

        <div>
            <a id="next_btn" style="display: none;" href="">Next</a>
        </div>
        <br>
        <div>
            <p><b>你發現了某個網站中的SQL資料庫系統沒有針對SQL injection做保護</b></p>
            <p><b>而你想嘗試去破解這個網頁的登入驗證,並窺視使用者的資料</b></p>
            <p><b>聰明的你應該知道該怎麼做吧?</b></p>
            <p><b>--試著找到使用者資料裡所提供的過關密碼--</b></p>
            
            </div>
</div>
    </form>
    <?php
    #防止warning出現
    ini_set("display_errors", 0);
    #記住開始的時間點
    if ($_SESSION["time"] == null)//每個關卡的SESSION名字都要改
    {
        $_SESSION["time"] = time();
    }
    else if($_SESSION["time"]!=null){
        date_default_timezone_set('Asia/Taipei');
        // echo '開始時間'.(date('Y-m-d H:i:s',$_SESSION["time"]));//顯示開始時間點,可不加
    }
    #通關驗證
    if(isset($_POST["KeySubmit"]))
    {
    $Key=$_POST['Key'];
    #判斷是不是正確答案
    if($Key=="0800092000")
    {   
    $enddate=time();//讀取完成時間
    $resultendtate = mysqli_query($connect,"UPDATE game SET  SQL_1open='$enddate' WHERE Username='$name'");
    $totaltime=($enddate-$_SESSION["time"]);
    //echo '<br>'."結束時間:".(date('Y-m-d H:i:s',$enddate));
    //echo '<br>'."總共花費:".($enddate-$_SESSION["time"])."秒";//顯示結束時間點,可不加
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
            $resultcheck=mysqli_query($connect,"SELECT SQL_1 FROM game WHERE Username='$name'");
            if(mysqli_num_rows($resultcheck) > 0)
            {
              while($row = mysqli_fetch_assoc($resultcheck))
              {
                $check=$row["SQL_1"];
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
                $result=mysqli_query($connect,"UPDATE game SET  SQL_1=200    WHERE Username='$name'");
                $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                }
              else if($totaltime>300&&$totaltime<=600){//時間在5分鐘~10分鐘間
                $score+=180;
                $result=mysqli_query($connect,"UPDATE game SET  SQL_1=180    WHERE Username='$name'");
                $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                }
              else if($totaltime>600&&$totaltime<=900){//時間在10分鐘~15分鐘間
                $score+=160;
                $result=mysqli_query($connect,"UPDATE game SET  SQL_1=160    WHERE Username='$name'");
                $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
                }
              else if($totaltime>900&&$totaltime<=1200){//時間在15分鐘~20分鐘間
                $score+=140;
                $result=mysqli_query($connect,"UPDATE game SET  SQL_1=140    WHERE Username='$name'");
                $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
              }
              else if($totaltime>1200&&$totaltime<=1800){//時間在20分鐘~30分鐘間
                $score+=120;
                $result=mysqli_query($connect,"UPDATE game SET  SQL_1=120    WHERE Username='$name'");
                $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
              }
              else if($totaltime>1800&&$totaltime<=2700){//時間在30分鐘~45分鐘間
                $score+=100;
                $result=mysqli_query($connect,"UPDATE game SET  SQL_1=100    WHERE Username='$name'");
                $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
              }
              else if($totaltime>2700&&$totaltime<=3600){//時間在45分鐘~1小時間
                $score+=75;
                $result=mysqli_query($connect,"UPDATE game SET  SQL_1=75    WHERE Username='$name'");
                $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
              }
              else if($totaltime>3600){//時間大於1小時
                $score=50;
                $result=mysqli_query($connect,"UPDATE game SET  SQL_1=50    WHERE Username='$name'");
                $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
              }
            }        
            echo '<div class="pass"><br>'."恭喜通關~<br>";
            echo '<a href="level3-2.php">前往下一關</a><br>';
            echo '<a href="../../Teamproject/html/gameset.php">返回主頁</a><br><br></div>';
    }
    
      #不是正確答案的情況
    else
    {   
        echo '<div class="fail">';
        echo '<br>'."通關密碼不正確,請繼續加油!<br>";
        echo '<a href="level3-1.php">返回關卡</a><br>';
        echo '</div>';
    }
    }
    #3-1關卡
    if (isset($_POST["submit"])) {
        require_once('level3connect.php'); //連結level3資料庫

        $name = $_POST['Username']; //post獲取表單裡的name
        $password = $_POST['Password']; //post獲取表單裡的password
        
        if(strpos($name,'drop') !== false){ 
            exit();//防止drop table情形
            }
        if(strpos($password,'drop') !== false){ 
            exit();//防止drop table情形
            }
        #3-1注入程式
        $sql = "SELECT * FROM sqli_login WHERE Username = '$name' and Password='$password'"; 
        $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $KEYYYYYY = $row["KeyWord"];
                }
                echo '<div class="pass">';
                echo ("<b>注入成功!!") . '<br>';
                echo '通關密碼為<div class="fail">' . $KEYYYYYY . '</b></div><br>';
            } else {
                echo '<div class="fail">';
                echo "<b>注入失敗</b>" . '<br>';
                echo '</div>';
            }
    }
    ?>

    <form action="level3-1.php" method="post">
      <br>
        <b>通關密碼</b>
        <input type="varchar" name="Key">
        <input type="submit" name="KeySubmit" value="驗證">
    <br><br>

    </form>

   

    
    <br>
    <div class="login">
        <form id="login" method="post" action="">
            <label><b>SQL injection
                </b>
            </label>
            <input type="varchar" name="Username" id="Uname" placeholder="名稱">
            <br><br>
            <input type="password" name="Password" id="Pass" placeholder="密碼">
            <br><br><br>
            <input type="submit" name="submit" id="log" value="登入">
            <br><br>
        </form>
    </div>
    <br>
    </form>





  

<?php
    include("level3-1.html");
?>
        <br>
        <br>
        <br>
        <br>
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

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>


</div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>