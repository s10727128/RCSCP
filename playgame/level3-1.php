<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" a href ="playgame1.css">
    <link rel="shortcut icon" href="/bird.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資安遊戲闖關網站</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body a link="blue" vlink="red">
    <form action="" method="POST">
        <div class="instructions">
            <h1>LEVEL3-1</h1>
            <div id="menubar" > <a href="gamepoint/level1index.html" class="menu_exit">EXIT</a> </div>
        </div>
        <hr>

        <div>
            <a id="next_btn" style="display: none;" href="" >Next</a> 
        </div>
        <br>    
        <div">
            <p><b>你發現了某個網站中的SQL資料庫系統沒有針對SQL injection做保護</b></p>
            <p><b>而你想嘗試去駭入這個網頁的登入驗證,並窺視使用者的資料</b></p>
            <p><b>聰明的你應該知道該怎麼做吧?</b></p>
            <p><b>--試著找到使用者資料裡所提供的過關密碼--</b></p>
        </div>

        <div>
            <?php
                echo "通關密碼: ";
                echo '<input type="varchar" name="Key"  >';
            ?>
        </div>

        <br>
        <button type="button" id="hintList" class="button">Hint</button>
         
    </form>



</body>
</html>

