<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tik Game</title>
<link rel="shortcut icon" href="/bird.jpg">
<link rel="stylesheet" href="../CSS/playgame1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../JavaScript/XSS3.js"></script>


</head>
<body a link="blue" vlink="red">
    <div class="instructions">
        <h1 style="text-align: center;">LEVEL1-3</h1>
        <div id="menubar" style="text-align: center";> <a href="../../Teamproject/index.php" class="menu_exit">Exit</a> </div>
    </div>
    <br>
    <hr>

    <!--下一關按鈕-->
    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="" >Next</a> 
    </div>

    <div class="message_box" id="messagebox">
        <h1 class="header">Chat room</h1>

        <div class="message_logs" id="messagelogs">
            <div class="message">
                <div class="user-photo"><img src="../../photo/elephant.jpeg"></div>
                <p class="message_chat">What's up, Bro!</p>
            </div>
            <div class="message">
                <div class="user-photo"><img src="../../photo/elephant.jpeg"></div>
                <p class="message_chat">Haha</p>
            </div>
        </div>
        
        <div class="chat-form">
            <input type="text" class="talk_box" id="talkbox">
            <button id="chat-form-button" onclick="sendFunction()">Send</button>
        </div>
    </div>


    <br>
    <div style="text-align: center;">
        <button type="button" id="hintList" class="button">Hint</button>
        <div class="word2" style="list-style: none; ">
                <li id="hint1"><b></b></li>
                <li id="hint2"></li>
                <li id="hint3"></li>
            </div>
    </div>

    <script>
        let x = 0;
        $("#hintList").click(function(){
            x ++;
            switch(x){
                case 1:
                    $("#hint1").text("1. 一般的<script>alert\(\)\<\/script\>無法執行");
                    break;

                case 2:
                    $("#hint2").text("2. 試試看用<img>");
                    break;

                case 3:
                    $("#hint3").text("3. \<img src=\"***.jpg\" onerror=\"alert()\"\>");
                    break;

                default:
                    break;
            }
        });
    </script>

</body>
</html>
