<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="/bird.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資安遊戲闖關網站</title>
    <script src="../source.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body a link="blue" vlink="red">
    <from action="" method="GET">
        <div class="instructions">
            <h1 style="text-align: center;">LEVEL1-1</h1>
            <div id="menubar" style="text-align: center";> <a href="../playgame.html" class="menu_exit">退出</a> </div>
        </div>
        <hr>

        <div style="text-align: center;">
            <a id="next_btn" style="display: none;" href="" >下一關</a> 
        </div>
        <br>
        <div style="text-align: center; font-size: 5;">
            <p><b>這個關卡是一個很經典的XSS漏洞，屬於Reflected XSS (反射型)，是由網頁後端直接嵌入由前端使用者所傳送過來的內容造成的。</b></p>
            <p><b>請嘗試在網頁注入一個 alert() ，即可即可過關!</b></p>
        </div>


        <div style="text-align: center;">
            <?php
                ini_set("display_errors", 0);
                $str = $_GET["name"];
            ?>
        </div>

        <div style="text-align: center;">
            <a href="">提示</a>
        </div>
    </from>



</body>
</html>
