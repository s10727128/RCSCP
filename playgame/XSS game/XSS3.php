<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <?php
        include_once("../../Teamproject/header.php");
        ?>

    <link rel=stylesheet href="../CSS/playgame1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../JavaScript/XSS3.js"></script>
</head>
<body a link="blue" vlink="red">
<?php
    require_once("../../Teamproject/register/connect.php");
    $starttime = time();
    $sqlgame = "UPDATE game SET  XSS_3open='$starttime' WHERE Username='$name'";
    $resultgame = mysqli_query($connect, $sqlgame);
?>
    <div class="body2">
    <div class="instructions">
            <h1><a href="../gamepoint/level1index.php" class="exit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 15 20">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                </a><b>LEVEL 1-3</b>
            </h1>
        </div><hr><br>
    <div>
        <p><b>這一關是儲存型的XSS，所發出去的聊天訊息，都會存在伺服器裡。<br>如果你是駭客，要怎麼注入XSS呢?</b></p>
    </div>




    <!--下一關按鈕-->
    <div style="text-align: center;">
    <a class="btn btn-secondary" id="next_btn" style="display: none;" href="../../playgame/gamepoint/level1index.php" >Next</a> 
    </div>

    <div class="message_box" id="messagebox">
        <h1 class="header">Chat room</h1>

        <div class="message_logs" id="messagelogs">
            <div class="message">
                <div class="user-photo"><img src="../../photo/XSS/elephant.jpeg"></div>
                <p class="message_chat">What's up, Bro!</p>
            </div>
            <div class="message">
                <div class="user-photo"><img src="../../photo/XSS/elephant.jpeg"></div>
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
</div>
<br><br>
    <br><br>
<div class="footer">
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
            </div>
        </footer>

    </div>
      <!-- Bootstrap core JavaScript -->
      <script src="../../Teamproject/vendor/jquery/jquery.min.js"></script>
    <script src="../../Teamproject/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../Teamproject/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="../../Teamproject/js/scrolling-nav.js"></script>
    <script>
        document.addEventListener("touchstart", function() {}, false);
    </script>
</body>
</html>
