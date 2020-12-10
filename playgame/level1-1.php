<?php
  header("Content-type: level1-1.css"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" a href ="../Teamproject/index.css">
    <link rel="shortcut icon" href="/bird.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資安遊戲闖關網站</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="source1.js"></script>


</head>
<body a link="blue" vlink="red">
    <form action="" method="GET">
        <div class="instructions">
            <h1 style="text-align: center;">LEVEL1-1</h1>
            <div id="menubar" style="text-align: center";> <a href="../Teamproject/index.php" class="menu_exit">退出</a> </div>
        </div>
        <hr>

        <div style="text-align: center;">
            <a id="next_btn" style="display: none;" href="" >下一關</a> 
        </div>
        <br>
        <div style="text-align: center; font-size: 5;">
            <p><b>這個關卡是一個很經典的XSS漏洞，屬於Reflected XSS (反射型)，是由網頁後端直接嵌入由前端使用者所傳送過來的內容造成的。</b></p>
            <p><b>請嘗試在網頁注入一個 alert() ，即可即可過關!</b></p>
        </div>

        <div style="text-align: center;">
            <?php
                ini_set("display_errors", 0);
                $ans = $_GET["name"];
                echo "Your answer is: $ans";
            ?>
        </div>

        <br>
        <div style="text-align: center;">
            <button type="button" id="hintList">提示</button>
            <!--<button type="button" id="writeup">writeup</button>-->
            <div style="list-style: none; ">
                <li id="hint1"><b></b></li>
                <li id="hint2"></li>
                <li id="hint3"></li>
            </div>
            
        </div>
    </form>

    
    <script>
        let x = 0;
        $("#hintList").click(function(){
            x ++;
            switch(x){
                case 1:
                    $("#hint1").text("1. 執行一個<script>");
                    break;

                case 2:
                    $("#hint2").text("2. 在<script>裡加入alert()");
                    break;

                case 3:
                    $("#hint3").text("3. 別再點了!!!動手試試，就會知道結果了!!!");
                    break;

                default:
                    break;
            }
        });
    </script>

</body>
</html>
