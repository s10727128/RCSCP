<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="/playgame/level1-1/bird.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資安遊戲闖關網站</title>
    <script src="./source.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body a link="blue" vlink="red">
    <form action="" method="GET">
        <div style="text-align: center; font-size: 5;">
            <p><b>這個關卡是一個很經典的XSS漏洞，屬於Reflected XSS (反射型)，是由網頁後端直接嵌入由前端使用者所傳送過來的內容造成的。</b></p>
            <p><b>請嘗試在網頁注入一個 alert() ，即可即可過關!</b></p>
        </div>


    <?php
        //ini_set("display_errors", 0);
        $str = $_GET["name"];
        echo $str;
    ?>
    </form>

</body>
</html>
