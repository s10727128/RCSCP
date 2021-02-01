<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TIK Gammer</title>

    <?php
    include_once("../../Teamproject/header.php");
    ?>
    <link href="css/level1.css" rel=stylesheet type="text/css">
</head>

<body>
    <h1><b>

            XSS關卡難易度
        </b>
    </h1>
    <!--Button 1~4--->
    <!-- <div class="box-1">
            <div class="btn btn-one"><span><a href="../XSS game/XSS1.php?name=test">簡單</a></span></div> 
        </div>
        
        <div class="box-2">
            <div class="btn btn-two"><span><a href="../XSS game/XSS2.php?name=test">中級</a></span></div>
        </div>
        
        <div class="box-3">
            <div class="btn btn-three"><span><a href="../XSS game/XSS3.php?name=test">困難</a></span></div>
        </div>


        <div class="box-4">
            <div class="btn btn-four"><span><a href="../../Teamproject/html/gameset.php">返回</a></span></div>
        </div> -->

    <div class="auto">
        <button class="btn">
            <div class="item"><span><a href="../XSS game/XSS1.php?name=test">簡單</a></span></div>
        </button>

        <button class="btn">
            <div class="item"><span><a href="../XSS game/XSS2.php?name=test">中級</a></span></div>
        </button>

        <button class="btn">
            <div class="item"><span><a href="../XSS game/XSS3.php?name=test">困難</a></span></div>
        </button>

        <button class="btn">
            <div class="item"><span><a href="../../Teamproject/html/gameset.php">返回</a></span></div>
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