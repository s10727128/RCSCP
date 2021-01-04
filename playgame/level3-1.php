<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" a href ="playgame3.css">
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
            <div id="menubar" > <a href="gamepoint/level3index.html" class="menu_exit">EXIT</a> </div>
        </div>
        <hr>

        <div>
            <a id="next_btn" style="display: none;" href="" >Next</a> 
        </div>
        <br>    
        <div">
            <p><b>你發現了某個網站中的SQL資料庫系統沒有針對SQL injection做保護</b></p>
            <p><b>而你想嘗試去破解這個網頁的登入驗證,並窺視使用者的資料</b></p>
            <p><b>聰明的你應該知道該怎麼做吧?</b></p>
            <p><b>--試著找到使用者資料裡所提供的過關密碼--</b></p>
        </div>

        <div>
            <?php
                echo "通關密碼: ";
                echo '<input type="varchar" name="Key"  >';
            ?>
        </div>

        <br><br>
        <div class="login"> 
        <link rel="stylesheet" a href ="../Teamproject/register/css/main.css">
        <form id="login" method="post" action="../Teamproject/register/login.php">    
        <label><b>用戶名稱    
        </b>    
        </label>    
        <input type="varchar" name="Username" id="Uname" placeholder="Username"  required="required">    
        <br><br>    
        <label><b>用戶密碼 
        </b>    
        </label>    
        <input type="password" name="Password" id="Pass" placeholder="Password"  required="required">    
        <br><br>    
        <input type="submit" name="submit" id="log" value="登入">       
        <br><br>         
        </form> 
        </div>




        <br>
        <button type="button" id="hintList" class="button">Hint</button>
         
    </form>



</body>
</html>

