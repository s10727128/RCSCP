<!DOCTYPE html>
<html lang="en">

<head>
    <title>遊戲</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <?php
    include_once("../../Teamproject/header.php");
    ?>

    <link rel=stylesheet href="../CSS/playgame1.css">
    <script src="../JavaScript/XSS2.js"></script>
</head>

<body>
<?php
    require_once("../../Teamproject/register/connect.php");
    $starttime = time();
    $sqlgame = "UPDATE game SET  XSS_2open='$starttime' WHERE Username='$name'";
    $resultgame = mysqli_query($connect, $sqlgame);
?>
    <div class="body2">
        <form action="" method="POST">
            <div class="instructions">
                <h1><a href="../gamepoint/level1index.php" class="exit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 15 20">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </a><b>XSS-II</b>
                </h1>
            </div>
            <hr><br>
            <div>
                <p><b>雖然上次的漏洞已經被你找到，並進行修補。</b></p>
                <p><b>但那似乎只有解決問題表面，問題的源頭依然未解決。</b></p>
                <p><b>身為網站維修人員的你，應該知道我再說什麼吧?</b></p>
                <p><b>--繼承第一關的作法，看你能不能找到其中的奧秘!--</b></p>
            </div>


        <!--遊戲輸入框內容-->
        <?php
            $ans = @$_POST["input"];
            echo '<div><form action=XSS2.php method=POST>
            <input name=input value="' . $ans . '"></form>
            <input type=submit value="搜尋"></div><br>';
            echo "Your answer is: " .htmlspecialchars($ans);
        ?>
        <br><br>
        
        <?php
            include_once("XSS2.html");
        ?>

        </div>

    <br><br><br><br> <br><br><br><br><br><br>
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
