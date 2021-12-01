<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>遊戲</title>

    <?php
    include_once("../../header.php");
    ?>
    <link href="css/level1.css" rel=stylesheet type="text/css">
</head>

<body>  
    <h1><b>XSS關卡選擇</b></h1>
  
    <div class="auto">
        
    <?php   
    include("../XSS game/XSS summary/XSS0.php");
    ?>
         <?php
        $XSS1total=0;
        $sql="SELECT XSS_1 FROM game WHERE XSS_1 IS NOT null ";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
              $XSS1total++;
          }
        }
        echo '<div class="testtext2"><b>目前通關人數:'.$XSS1total .' </b></div>';
        ?>

        <button class="btn">
            <?php
            $sql="SELECT XSS_1,XSS_1open FROM game WHERE XSS_1 IS NOT null && Username='$name'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $row=$row['XSS_1open'];
                #修改class
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d H:i:s',$row+7*3600)).'</span></div>';
            }
            }
            else{
               echo '<div class="item"><span><a href="../XSS game/XSS1.php?input=">反射型(1)</a></span></div>';
            }
            
            ?>
        </button>

        <?php
        $XSS2total=0;
        $sql2="SELECT XSS_2 FROM game WHERE XSS_2 IS NOT null ";
        $result2=mysqli_query($connect,$sql2);
        if(mysqli_num_rows($result2) > 0)
        {
          while($row = mysqli_fetch_assoc($result2))
          {
              $XSS2total++;
          }
        }
        echo '<div class="testtext2"><b>目前通關人數:'.$XSS2total .' </b></div>';
        ?>

        
        <button class="btn">
     
    
            <?php
            $sql="SELECT XSS_2,XSS_2open FROM game WHERE XSS_2 IS NOT null && Username='$name'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $row=$row['XSS_2open'];
                #修改class
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d H:i:s',$row+7*3600)).'</span></div>';
            }
            } 
            else{
               echo '<div class="item"><span><a href="../XSS game/XSS2.php">反射型(2)</a></span></div>';
            }
            
            ?>
        </button>

        <?php
        $XSS3total=0;
        $sql="SELECT XSS_3 FROM game WHERE XSS_3 IS NOT null ";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
              $XSS3total++;
          }
        }
        echo '<div class="testtext2"><b>目前通關人數:'.$XSS3total .' </b></div>';
        ?>

        <button class="btn">
            <?php
            $sql="SELECT XSS_3,XSS_3open FROM game WHERE XSS_3 IS NOT null && Username='$name'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $row=$row['XSS_3open'];
                #修改class
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d H:i:s',$row+7*3600)).'</span></div>';
            }
            }
            else{
               echo '<div class="item"><span><a href="../XSS game/XSS3.php">儲存型</a></span></div>';
            }
            
            ?>
        </button>
        <button class="btn">
            <div class="item"><span><a href="../../playgame/gameset.php">返回</a></span></div>
        </button>
    </div>

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