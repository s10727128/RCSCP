<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="/bird.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資安遊戲闖關網站</title>
    <script src="../source2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body a link="blue" vlink="red">
    <div class="instructions">
        <h1 style="text-align: center;">LEVEL1-2</h1>
        <div id="menubar" style="text-align: center";> <a href="../../Teamproject/index.html" class="menu_exit">退出</a> </div>
    </div>
    <hr>

    <!--下一關按鈕-->
    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="" >下一關</a> 
    </div>
    <br>

    <!--遊戲輸入框內容-->
    <div style="text-align: center;">
        <?php
            ini_set("display_errors", 0);
            $ans = $_GET["input1"];
            echo '
            <form action=level1-2.php method=GET>
            <input name=input1 value="'.$ans.'">
            <input type=submit name=search value="搜尋"/>
            </form><br>';

            echo "Your answer is: ".htmlspecialchars($ans);
            
     
        ?>
    </div>

</body>
</html>
