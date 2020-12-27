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
        <h1 style="text-align: center;">LEVEL5-3</h1>
        <div id="menubar" style="text-align: center";> <a href="../Teamproject/index.php" class="menu_exit">EXIT</a> </div>
    </div>
    <hr>

    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="" >Next</a> 
    </div>
    <br>

    <div style="text-align: center;">
    <form action="../downloadfile/stego.zip" method="GET">
        下載點:
        <a href="../downloadfile//stego.zip" download><b>Download</b></a>
    </form>
        <br>
        <?php
            ini_set("display_errors",0);
            $ans = $_GET["input"];
            if($ans == "AIOcfjw0793!BQopcbe97504"){
                echo '<script>alert("Congratuation! You sucessed!")</script>';
            }
            echo '<form action=level5-3.php =GET>
            <input name=input value"'.$ans.'"/>
            <input type=submit name=submit value="送出"/>
            </form><br>';
        ?>
    </div>

    <div style="text-align: center;">
        <p>請幫我拿解開檔案，謝謝!</p>
    </div>
    <div style="text-align: center;">
            <button type="button" id="hintList">Hint</button>
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
                    $("#hint1").text("1.這是一個zip偽加密的檔案");
                    break;
                case 2:
                    $("#hint2").text("2.內容經由Base64 code加密過");
                    break;
                case 3:
                    $("#hint3").text("3.內容經由Hex code加密過");
                    break;

            }
        });
    </script>
    
    
</body>
</html>