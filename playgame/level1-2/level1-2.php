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
        <div id="menubar" style="text-align: center";> <a href="../playgame.html" class="menu_exit">退出</a> </div>
    </div>
    <hr>

    <!--下一關按鈕-->
    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="" >下一關</a> 
    </div>
    <br>

    <!--遊戲輸入框內容-->
    <?php
        //ini_set("display_errors", 0);
        $str = $_GET["name"];
    ?>







    <form action="levlel1-2.php" method="GET">
        <div id="input-bar" style="text-align: center;">
            <input id="input1" type="text" name="input1" value="Enter..." onfocus="this.value=''">
            <input type="submit" onclick="myFunction()" onkeypress="myFunction()" value="送出">
        </div>
        
        <div style="text-align: center;">
            <div>
                <p id="demo"></p>
            </div>
        </div>
    </form>








</body>
</html>
