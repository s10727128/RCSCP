<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <?php
    include_once("../../Teamproject/header.php");
    ?>
    <link rel=stylesheet a href="css/level1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>遊戲</title>
</head>

<body>
    <h1><b>

            SQL Injection關卡難易度
        </b>
    </h1>

    <div class="auto">
    <?php   
    include_once("../SQL Injection game/SQL_summary/SQL0.php");
    ?>
    <?php
    
    date_default_timezone_set('Asia/Taipei');
        $SQL1total=0;
        $sql="SELECT SQL_1 FROM game WHERE SQL_1 IS NOT null ";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
              $SQL1total++;
          }
        }
        echo '<div class="testtext2"><b>目前通關人數:'.$SQL1total .' </b></div>';
        ?>

        <button class="btn">
            <?php
            $sql="SELECT SQL_1,SQL_1open FROM game WHERE SQL_1 IS NOT null && Username='$name'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $row=$row['SQL_1open'];
                #修改class
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d h:i:s',$row)).'</span></div>';
            }
            }
            else{
               echo '<div class="item"><span><a href="../SQL Injection game/level3-1.php">登入注入</a></span></div>';
            }
            
            ?>
        </button>

        <?php
    date_default_timezone_set('Asia/Taipei');
        $SQL2total=0;
        $sql2="SELECT SQL_2 FROM game WHERE SQL_2 IS NOT null ";
        $result2=mysqli_query($connect,$sql2);
        if(mysqli_num_rows($result2) > 0)
        {
          while($row = mysqli_fetch_assoc($result2))
          {
              $SQL2total++;
          }
        }
        echo '<div class="testtext2"><b>目前通關人數:'.$SQL2total .' </b></div>';
        ?>

        
        <button class="btn">
     
    
            <?php
            $sql="SELECT SQL_2,SQL_2open FROM game WHERE SQL_2 IS NOT null && Username='$name'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $row=$row['SQL_2open'];
                #修改class
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d H:i:s',$row)).'</span></div>';
            }
            } 
            else{
               echo '<div class="item"><span><a href="../SQL Injection game/level3-2.php">查詢注入</a></span></div>';
            }
            
            ?>
        </button>



        <button class="btn">
            <div class="item"><span><a href="../../Teamproject/html/gameset.php">返回</a></span></div>
        </button>
    </div>

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
    <!-- Bootstrap core JavaScript -->
    <script src="/js-hackgame/Teamproject/vendor/jquery/jquery.min.js"></script>
    <script src="/js-hackgame/Teamproject/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/js-hackgame/Teamproject/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="/js-hackgame/Teamproject/js/scrolling-nav.js"></script>
    <script>
        document.addEventListener("touchstart", function() {}, false);
    </script>
</body>

</html>