<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <?php
    include_once("../../Teamproject/header.php");
    ?>
    <link rel=stylesheet a href="css/level1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1><b>

            CSRF關卡難易度
        </b>
    </h1>

    <div class="auto">
    <?php   
    include_once("../CSRF game/CSRF summary/CSRF0/CSRF_summary.php");
    ?>
        <button class="btn">
            <div class="item"><span><a href="../CSRF game/CSRF1/csrf1index.php">簡單</a></span></div>
        </button>

        <!-- <button class="btn">
            <div class="item"><span><a href="../CSRF game/#">中級</a></span></div>
        </button>

        <button class="btn">
            <div class="item"><span><a href="../CSRF game/#">困難</a></span></div>
        </button> -->

        <button class="btn">
            <div class="item"><span><a href="../../Teamproject/html/gameset.php">返回</a></span></div>
        </button>
    </div>

    <br><br><br><br><br><br><br><br><br><br>


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