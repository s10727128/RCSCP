<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="/bird.jpg">
    <link rel="stylesheet" href="../Teamproject/game.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資安遊戲闖關網站</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../source1.js"></script>
</head>

<body a link="blue" vlink="red">
    <div class="instructions">
        <h1 style="text-align: center;">LEVEL5-1</h1>
        <div id="menubar" style="text-align: center";> <a href="../Teamproject/index.html" class="menu_exit">退出</a> </div>
    </div>
    <hr>

    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="#" >下一關</a> 
    </div>
    <br>

    <div style="text-align: center;">
    <form action="../downloadfile/level5.hex" method="GET">
        下載點:
        <a href="../downloadfile/level5.hex" download><b>Download</b></a>
    </form>
        <br>
        <?php
            ini_set("display_errors",0);
            $ans = $_GET["input"];
            echo '<form action=level5-1.php =GET>
            <input name=input value"'.$ans.'"/>
            <input type=submit name=submit value="搜尋"/>
            </form><br>';
        ?>

        <?php
            
        ?>


    </div>
    
    
</body>
</html>