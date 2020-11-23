<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="/bird.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資安遊戲闖關網站</title>
    <script src="source2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body a link="blue" vlink="red">
    <div class="instructions">
        <h1 style="text-align: center;">LEVEL1-2</h1>
        <div id="menubar" style="text-align: center";> <a href="../Teamproject/index.html" class="menu_exit">退出</a> </div>
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
            $ans = $_GET["input"];
            echo '<form action=level1-2.php method=GET>
            <input name=input value="'.$ans.'">
            <input type=submit name=submit value="搜尋"/>
            </form><br>';
            
            echo "Your answer is: ".htmlspecialchars($ans);
        ?>
    </div>
    <br>

    <div style="text-align: center;">
            <button type="button" id="hintList">提示</button>
            <div style="list-style: none; ">
                <li id="hint1"><b></b></li>
                <li id="hint2"></li>
                <li id="hint3"></li>
                <li id="hint4"></li>
            </div>
        </div>
    </form>

    
    <script>
        let j = 0;
        $("#hintList").click(function(){
            j ++;
            switch(j){
                case 1:
                    $("#hint1").text("1. 執行一個<script>");
                    break;

                case 2:
                    $("#hint2").text("2. 哇...<script>行不通，試試看輸入其他東西");
                    break;

                case 3:
                    $("#hint3").text("3. 按右鍵打開網頁原始碼，或是按下F12");
                    break;

                case 4:
                $("#hint4").text("4. 觀察input1裡的value變化，試著執行");
                break;

                default:
                    break;
            }
        });
    </script>


</body>
</html>
