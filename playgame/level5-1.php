<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" a href ="playgame5.css">
    <link rel="shortcut icon" href="/bird.jpg">
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資安遊戲闖關網站</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="source.js"></script>
</head>

<body a link="blue" vlink="red">
    <div class="instructions">
        <h1 style="text-align: center;">LEVEL5-1</h1>
        <div id="menubar" style="text-align: center";> <a href="../Teamproject/index.php" class="menu_exit">退出</a> </div>
    </div>
    <hr>

    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="" >下一關</a> 
    </div>
    <br>

    <div style="text-align: center;">
    <form action="../downloadfile/level5-1.txt" method="GET">
        下載點:
        <a href="../downloadfile/level5-1.txt" download><b>Download</b></a>
    </form>
        <br>
        <?php
            ini_set("display_errors",0);
            $ans = $_GET["input"];
            if($ans == "13500"){
                echo '<script>alert("Congratuation! You sucessed!")</script>';
                
            }
            echo '<form action=level5-1.php =GET>
            <input name=input value"'.$ans.'"/>
            <input type=submit name=submit value="送出"/>
            </form><br>';
        ?>
    </div>

    <div style="text-align: center;">
            <button type="button" id="hintList">提示</button>
            <div style="list-style: none; ">
                <li id="hint1"><b></b></li>
            </div>
        </div>

        <script>
        let j = 0;
        $("#hintList").click(function(){
            j ++;
            switch(j){
                case 1:
                    $("#hint1").text("1. 摩斯密碼");
                    break;
            }
        });
    </script>
    
    
</body>
</html>