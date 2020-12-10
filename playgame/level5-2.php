<?php
  header("Content-type: playgame5.css"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="/bird.jpg">
    <link rel="stylesheet" href="../Teamproject/game.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資安遊戲闖關網站</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="source.js"></script>
</head>

<body a link="blue" vlink="red">
    <div class="instructions">
        <h1 style="text-align: center;">LEVEL5-2</h1>
        <div id="menubar" style="text-align: center";> <a href="../Teamproject/index.php" class="menu_exit">退出</a> </div>
    </div>
    <hr>

    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="" >下一關</a> 
    </div>
    <br>

    <div style="text-align: center;">
    <form action="../downloadfile/SnakeGmae2.rar" method="GET">
        下載點:
        <a href="../downloadfile/SnakeGmae2.rar" download><b>Download</b></a>
    </form>
        <br>
        <?php
            ini_set("display_errors",0);
            $ans = $_GET["input"];
            if($ans == "Flag{Answer_is_135000}"){
                echo '<script>alert("Congratuation! You sucessed!")</script>';
            }
            echo '<form action=level5-2.php =GET>
            <input name=input value"'.$ans.'"/>
            <input type=submit name=submit value="送出"/>
            </form><br>';
        ?>
    </div>

    <div style="text-align: center;">
        <p>請吃到100顆蘋果，並拿到解答Flag。</p>
    </div>
    <div style="text-align: center;">
            <button type="button" id="hintList">提示</button>
            <div style="list-style: none; ">
                <li id="hint1"><b></b></li>
                <li id="hint2"><b></b></li>
                <li id="hint3"><b></b></li>
            </div>
        </div>

        <script>
        let j = 0;
        $("#hintList").click(function(){
            j ++;
            switch(j){
                case 1:
                    $("#hint1").text("1. 解答長這樣=> Flag{This_is_a_flag}。");
                    break;
                case 2:
                    $("#hint2").text("2. 建議使用工具jd-gui。");
                    break;
                case 3:
                    $("#hint3").text("3. 將下載好的檔案丟入jd-gui，查看裡面程式碼。");
                    break;

            }
        });
    </script>
    
    
</body>
</html>