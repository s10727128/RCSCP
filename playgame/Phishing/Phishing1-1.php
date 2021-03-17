<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" a href ="playgame1.css">
<link rel="shortcut icon" href="/bird.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>資安遊戲闖關網站</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body a link="blue" vlink="red">
    <div class="instructions">
        <h1 style="text-align: center;">Phishing1</h1>
        <div id="menubar" style="text-align: center";> <a href="gamepoint/level1index.html" class="menu_exit">EXIT</a> </div>
    </div>
    <hr>

    <!--下一關按鈕-->
    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="" >Next</a> 
    </div>
    <br>


    <!-- <input type="submit" name="search" href="level2-2-2.php"> -->
    <!--遊戲輸入框內容-->
    <div style="text-align: center;">
        <?php
            ini_set("display_errors", 0);
            $ans = $_GET["input"];
            if($ans == "U_Are_Very_Strong_2021"){
                echo '<script>alert("Congratuation! You sucessed!")</script>';
                
            }

            echo '<form action="" method=GET>
            <input name="input" value="'.$ans.'">
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

    
    <script>
        let x = 0;
        $("#hintList").click(function(){
            x ++;
            switch(x){
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
