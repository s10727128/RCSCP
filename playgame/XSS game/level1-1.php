<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tik Game</title>
    <link rel="stylesheet" a href ="../CSS/playgame1.css">
    <link rel="shortcut icon" href="/photo/bird.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../JavaScript/source1.js"></script>


</head>
<body a link="blue" vlink="red">
    <form action="" method="GET">
        <div class="instructions">
            <h1>LEVEL1-1</h1>
            <div id="menubar" > <a href="../../Teamproject/index.php" class="menu_exit">EXIT</a> </div>
        </div>
        <hr>

        <div>
            <a id="next_btn" style="display: none;" href="" >Next</a> 
        </div>
        <br>    
        <div">
            <p><b>這個關卡是一個很經典的XSS漏洞，屬於Reflected XSS (反射型)，是由網頁後端直接嵌入由前端使用者所傳送過來的內容造成的。</b></p>
            <p><b>請嘗試在網頁注入一個 alert() ，即可即可過關!</b></p>
        </div>

        <div>
            <?php
                ini_set("display_errors", 0);
                $ans = $_GET["name"];
                echo "Your answer is: $ans";
            ?>
        </div>

        <br>
        <button type="button" id="hintList" class="button">Hint</button>
            <div class="word2" style="list-style: none; ">
            
                <li id="hint1"></li>
                <li id="hint2"></li>
                <li id="hint3"></li>
                <li id="hint4"></li>
            </div>
    </form>


    modal
    
    <script>
        let x = 0;
        $("#hintList").click(function(){
            x ++;
            switch(x){
                case 1:
                    $("#hint1").text("1. 執行一個<script>");
                    break;

                case 2:
                    $("#hint2").text("2. 在<script>裡加入alert()");
                    break;

                case 3:
                    $("#hint3").text("3. 不知道輸入在哪嗎?仔細觀察網址");
                    break;

                case 4:
                $("#hint4").text("4. 將neam=test，改成name\=\<script\>alert\(\)\<\/script\>");
                break;

                default:
                    break;
            }
        });
    </script>

</body>
</html>
