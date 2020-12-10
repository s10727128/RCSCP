<?php
  header("Content-type: playgame1.css"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="/bird.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資安遊戲闖關網站</title>
    <script src="source.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body a link="blue" vlink="red">
    <div class="instructions">
        <h1 style="text-align: center;">LEVEL1-3</h1>
        <!--下一關按鈕-->
        <div id="menubar" style="text-align: center";> <a href="../Teamproject/index.php" class="menu_exit">退出</a> </div>
    </div>
    <hr>

    <div style="text-align: center;">
    <form action="" method="GET">
        <div id="input-bar" style="text-align: center;">
            <input id="input1" type="text" name="input1" value="Enter..." onfocus="this.value=''">
            <input type="submit" onclick="myFunction()" onkeypress="myFunction()" value="送出">
        </div>

        <h1>Test & Debug</h1>
        
        <div style="text-align: center;">
            <div>
                <p id="demo"></p>
            </div>
        </div>

    </form>
    
    </div>

</body>
</html>
