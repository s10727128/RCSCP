<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
          
  <?php
  include_once("../../Teamproject/header.php");
  ?>
        <link rel=stylesheet a href="css/level1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  >
    </head>

    <body>
    <h1><b>
            Phishing關卡難易度
        </b>
    </h1>

    <div class="auto">
    
    <?php   
    // include_once("../MISC/MISC_summary/MISC0.php");
    ?>
         <?php
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
                echo '<div class="item2"><span>'.'完成時間'.(date('Y-m-d H:i:s',$row+7*3600)).'</span></div>';
            }
            }
            else{
               echo '<div class="item"><span><a href="../Phishing/Phishing1-1.php">簡單</a></span></div>';
            }
            
            ?>
        </button>

       


        

        <button class="btn">
            <div class="item"><span><a href="../../Teamproject/html/gameset.php">返回</a></span></div>
        </button>
    </div>

    <br><br><br><br><br><Br><br><br><br><br>


    <div class="footer">
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
            </div>
        </footer>

    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    <script>
        document.addEventListener("touchstart", function() {}, false);
    </script>
    
    </body>
</html>