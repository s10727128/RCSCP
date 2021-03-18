<!DOCTYPE html>
<html lang="en">
<?php
include_once("../../Teamproject/header.php");
?>

<head>
    <link rel="shortcut icon" href="/bird.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>資安遊戲闖關網站</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel=stylesheet href="../CSS/playgame6.css">
</head>

<body a link="blue" vlink="red">
    <div class="body2">
    <div class="instructions">
            <h1><a href="../gamepoint/level6index.php" class="exit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 15 20">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                </a><b>LEVEL 1-1</b>
            </h1>
        </div>

    <!--下一關按鈕-->
    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="">Next</a>
    </div>
    <br>


    <!-- <input type="submit" name="search" href="level2-2-2.php"> -->
    <!--遊戲輸入框內容-->
    <div style="text-align: center;">
        <?php
        ini_set("display_errors", 0);
        $ans = $_GET["input"];
        if ($ans == "U_Are_Very_Strong_2021") {
            echo '<script>alert("Congratuation! You sucessed!")</script>';
        }

        echo '<form action="" method=GET>
            <input name="input" value="' . $ans . '">
            <input type=submit name=submit value="搜尋">
            </form><br>';

        echo "你現在是一位駭客，請利用網站XSS漏洞，將注入連結導向\"Phishing1-2.php\"這個網址，取得密碼。";
        echo '<br>';
        echo "Your answer is:" . $ans;
        ?>
    </div>
    <br>

    <div style="text-align: center;">
        <button type="button" id="hintList" class="button">提示</button>
        <div class="word2" style="list-style: none; ">
            <li id="hint1"></li>
            <li id="hint2"></li>
            <li id="hint3"></li>
            <li id="hint4"></li>
        </div>
    </div>
    </div>

    <div class="footer">
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
            </div>
        </footer>

    </div>
    <script>
        let x = 0;
        $("#hintList").click(function() {
            x++;
            switch (x) {
                case 1:
                    $("#hint1").text("1. 還記得XSS2的關卡嗎?可以看一下原始碼。");
                    break;

                case 2:
                    $("#hint2").text("2. 沒錯，跟XSS2一樣有程式碼的漏洞，可以注入程式碼。");
                    break;

                case 3:
                    $("#hint3").text('3. 可以利用<a href="">test</a>，2; 當作注入的連結。');
                    break;

                case 4:
                    $("#hint4").text('4. 解答有很多個方法，但本關卡提供為<a href="Phishing1-2.php">test</a>');
                    break;

                default:
                    break;
            }
        });
    </script>


</body>

</html>