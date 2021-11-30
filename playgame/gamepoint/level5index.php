<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
          
    <?php
    include_once("../../header.php");
    ?>
    <link rel=stylesheet a href="css/level1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  >

    <title>遊戲</title>
</head>

    <body>
    <h1><b>
            MISC關卡選擇
        </b>
    </h1>

    <div class="auto">
    
    <?php   
    include_once("../MISC/MISC_summary/MISC0.php");
    ?>
         <?php
    date_default_timezone_set('Asia/Taipei');
        $MISC1total=0;
        $sql="SELECT MISC_1 FROM game WHERE MISC_1 IS NOT null ";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
              $MISC1total++;
          }
        }
        echo '<div class="testtext2"><b>目前通關人數:'.$MISC1total .' </b></div>';
        ?>

        <button class="btn">
            <?php
            $sql="SELECT MISC_1,MISC_1open FROM game WHERE MISC_1 IS NOT null && Username='$name'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $row=$row['MISC_1open'];
                #修改class
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d H:i:s',$row)).'</span></div>';
            }
            }
            else{
               echo '<div class="item"><span><a href="../MISC/MISC1/MISC1.php">摩斯密碼</a></span></div>';
            }
            
            ?>
        </button>

        <?php
        $MISC2total=0;
        $sql="SELECT MISC_2 FROM game WHERE MISC_2 IS NOT null ";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
              $MISC2total++;
          }
        }
        echo '<div class="testtext2"><b>目前通關人數:'.$MISC2total .' </b></div>';
        ?>

        <button class="btn">
            <?php
    date_default_timezone_set('Asia/Taipei');
            $sql="SELECT MISC_2,MISC_2open FROM game WHERE MISC_2 IS NOT null && Username='$name'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $row=$row['MISC_2open'];
                #修改class
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d H:i:s',$row)).'</span></div>';
            }
            }
            else{
               echo '<div class="item"><span><a href="../MISC/MISC2/MISC2.php">反編譯</a></span></div>';
            }
            
            ?>
        </button>


        <?php
        $MISC3total=0;
        $sql="SELECT MISC_3 FROM game WHERE MISC_3 IS NOT null ";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
              $MISC3total++;
          }
        }
        echo '<div class="testtext2"><b>目前通關人數:'.$MISC3total .' </b></div>';
        ?>

        <button class="btn">
            <?php
    date_default_timezone_set('Asia/Taipei');
            $sql="SELECT MISC_3,MISC_3open FROM game WHERE MISC_3 IS NOT null && Username='$name'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $row=$row['MISC_3open'];
                #修改class
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d H:i:s',$row)).'</span></div>';
            }
            }
            else{
               echo '<div class="item"><span><a href="../MISC/MISC3/MISC3.php">Base64</a></span></div>';
            }
            
            ?>
        </button>


      


        <?php
        $MISC5total=0;
        $sql="SELECT MISC_5 FROM game WHERE MISC_5 IS NOT null ";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
              $MISC5total++;
          }
        }
        echo '<div class="testtext2"><b>目前通關人數:'.$MISC5total .' </b></div>';
        ?>

        <button class="btn">
            <?php
    date_default_timezone_set('Asia/Taipei');
            $sql="SELECT MISC_4,MISC_4open FROM game WHERE MISC_4 IS NOT null && Username='$name'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $row=$row['MISC_4open'];
                #修改class
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d H:i:s',$row)).'</span></div>';
            }
            }
            else{
                echo '<div class="item"><span><a href="../MISC/MISC4/MISC4.php">凱薩密碼</a></span></div>';
            }
            
            ?>
        </button>


        <?php
        $MISC4total=0;
        $sql="SELECT MISC_4 FROM game WHERE MISC_4 IS NOT null ";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
              $MISC4total++;
          }
        }
        echo '<div class="testtext2"><b>目前通關人數:'.$MISC4total .' </b></div>';
        ?>

        <button class="btn">
            <?php
    date_default_timezone_set('Asia/Taipei');
            $sql="SELECT MISC_5,MISC_5open FROM game WHERE MISC_5 IS NOT null && Username='$name'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $row=$row['MISC_5open'];
                #修改class
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d H:i:s',$row)).'</span></div>';
            }
            }
            else{
                echo '<div class="item"><span><a href="../MISC/MISC5/MISC5.php">偽加密</a></span></div>';
            }
            
            ?>
        </button>
        
        <button class="btn">
            <div class="item"><span><a href="../gameset.php">返回</a></span></div>
        </button>
    </div>

    <br><br><br><br>
    

    <div class="footer">
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
            </div>
        </footer>

    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="/RCSCP/vendor/jquery/jquery.min.js"></script>
    <script src="/RCSCP/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/RCSCP/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="/RCSCP/js/scrolling-nav.js"></script>
    <script>
        document.addEventListener("touchstart", function() {}, false);
    </script>
    
    </body>
</html>