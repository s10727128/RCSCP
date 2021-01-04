<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <!-- <p><b>你發現了某個網站中的SQL資料庫系統沒有針對SQL injection做保護</b></p>
            <p><b>而你想嘗試去破解這個網頁的登入驗證,並窺視使用者的資料</b></p>
            <p><b>聰明的你應該知道該怎麼做吧?</b></p>
            <p><b>--試著找到使用者資料裡所提供的過關密碼--</b></p> -->
        </div>

        <div>
            <?php
                echo "通關密碼: ";
                echo '<input type="varchar" name="Key"  >';
            ?>
        </div>

        <br><br>
        <div class="login"> 
        <!-- <link rel="stylesheet" a href ="../Teamproject/register/css/main.css"> -->
        <form id="login" method="post" action="../Teamproject/register/login.php">    
        <label><b>SQL injection    
        </b>    
        </label>    
        <input type="varchar" name="Username" id="Uname" placeholder="名稱"  required="required">    
        <br><br>    
        <input type="password" name="Password" id="Pass" placeholder="密碼"  required="required">    
        <br><br>    
        <input type="submit" name="submit" id="log" value="登入">       
        <br><br>         
        </form> 
        </div>




        <br>

        </form>
        <!-- Button trigger modal -->
        
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
      Hint
    </button>
    
    <!-- Modal -->
    <div class="hint"> 
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title">Hint</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <p>test</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
            
        });
    </script>
         


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

