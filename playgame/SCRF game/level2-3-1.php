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
        <h1 style="text-align: center;">LEVEL2-1</h1>
        <div id="menubar" style="text-align: center";> <a href="../Teamproject/index.php" class="menu_exit">EXIT</a> </div>
    </div>  
    <hr>

    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="" >Next</a> 
    </div>
    <br>

    因為良心發現，開始轉行從駭客變黑客
    

    <div style="text-align: center;">
        下載點:
        <a href="level2-1-2.php"><b>Download</b></a>
        <br>
        <br>
        <?php
            ini_set("display_errors",0);
            $ans = $_GET["input"];
            if($ans == "Ap459djC!486?@2tgp"){
                echo '<script>alert("Congratuation! You sucessed!")</script>';
            }
            echo '<form action=level2-3-1.php ="GET">
            <input name=input value"'.$ans.'"/>
            <input type=submit name=submit value="送出"/>
            </form><br>';
        ?>
    </div>

    <div style="text-align: center;">
            <button type="button" id="hintList">Hint</button>
            <div class="word2" style="list-style: none; ">
                <li id="hint1"><b></b></li>
                <li id="hint2"></li>
                <li id="hint3"></li>
                <li id="hint4"></li>
                <li id="hint5"></li>
            </div>
        </div>

        <script>
        let j = 0;
        $("#hintList").click(function(){
            j ++;
            switch(j){
                case 1:
                    $("#hint1").text("1.");
                    break;
                case 2:
                    $("#hint2").text("2.");
                    break;
                case 3:
                    $("#hint3").text("3.");
                    break;

            }
        });
    </script>
    
    
</body>
</html>