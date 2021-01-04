<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" a href ="../CSS/playgame3.css">
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
            <div id="menubar" > <a href="../gamepoint/level3index.html" class="menu_exit">EXIT</a> </div>
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
            <br></br>
        </div>

        <div>
            <?php
                echo "通關密碼: ";
                echo '<input type="varchar" name="Key">';
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo '<input type="submit" name="KeySubmit" value="驗證"  >';
                if(isset($_POST["KeySubmit"])){
                  $Key=$_POST['Key'];
                  if($Key=="0800092000")
                  {
                      echo '<br>'."恭喜通關!!";
                      exit();
                  }
                  else
                  {
                      echo '<br>'."通關密碼不正確,請繼續加油!";
                  }
                }
            ?>
        </div>

        <br><br>
        <div class="login"> 
        <form id="login" method="post" action="">    
        <label><b>SQL injection    
        </b>    
        </label>    
        <input type="varchar" name="Username" id="Uname" placeholder="名稱"  >    
        <br><br>    
        <input type="password" name="Password" id="Pass" placeholder="密碼"  >    
        <br><br>    
        <input type="submit" name="submit" id="log" value="登入">       
        <br><br>         
        </form> 
        </div>
        <br>
        </form>
    
    <?php
    if(isset($_POST["submit"])){
        require_once('level3connect.php');//連結資料庫
        $name = $password = $pwd = '';
        
        $name=$_POST['Username'];//post獲取表單裡的name
        $password=$_POST['Password'];//post獲取表單裡的password
        
        
        $sql = "SELECT * FROM sqli_login WHERE Username = '$name' and Password='$password'";//檢測資料庫是否有對應的
        $result=mysqli_query($connect,$sql);
    {
    if(mysqli_num_rows($result) > 0)
    {
    while($row = mysqli_fetch_assoc($result))
	{
		$KEYYYYYY=$row["KeyWord"];
	}
    echo("注入成功!!").'<br>';
    echo "通關密碼為".$KEYYYYYY.'<br>';
    }
    else
    {
	echo "注入失敗".'<br>';
    }
    }
    }
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Button trigger modal -->    
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
      提示
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

