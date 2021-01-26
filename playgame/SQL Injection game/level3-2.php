<!DOCTYPE html>
<html lang="en">
<head>
    <title>資安遊戲闖關網站</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="/bird.jpg">
    <link rel="stylesheet" a href ="../CSS/playgame3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body a link="blue" vlink="red">
    <form action="" method="POST">
        <div class="instructions">
            <h1>LEVEL3-2</h1>
            <div id="menubar" > <a href="../gamepoint/level3index.html" class="menu_exit">EXIT</a> </div>
        </div>
        <hr>

        <div>
            <a id="next_btn" style="display: none;" href="" >Next</a> 
        </div>
        <br>    
        <div">
            <p><b>網頁搜尋時,通常會對該網頁的伺服器資料庫進行搜尋,找尋是否有相同的關鍵字.內容物.</b></p>
            <p><b>如果用戶與資料庫之間未使用任何輸入驗證/過濾，</b></p>
            <p><b>則用戶可以使用SQL查詢直接與資料庫進行連接.</b></p>
            <p><b>--試著找到該資料庫裡所有的資料,並從中找尋過關密碼--</b></p>
            <br></br>
        </div>

        <div>
        <?php
                echo "通關密碼: ";
                echo '<input type="varchar" name="Key">';
                echo "&nbsp";
                echo '<input type="submit" name="KeySubmit" value="驗證"  >';
                if(isset($_POST["KeySubmit"])){
                  $Key=$_POST['Key'];
                  if($Key=="PUI PUI")
                  {
                      echo '<br>'."恭喜通關!!";
                      exit();
                  }
                  else
                  {   
                      echo '<div class="word2">';
                      echo '<br>'."通關密碼不正確,請繼續加油!";
                      echo '</div>';
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
        <input type="varchar" name="search" placeholder="search" >
        <input type="submit" name="search_button"  value="搜尋">       
        <br><br>         
        </form> 
        </div>
        <br>
        </form>
    
    <?php
    echo "<table>";
    echo "<tr><td>名稱</td>"."<td>分數</td></tr>";  
    if(isset($_POST["search_button"])){
    require_once('level3connect.php');//連結資料庫
    $key=$_POST['search'];//post獲取表單裡的search
    //$sql = "SELECT * FROM sqli_select WHERE name='' union SELECT * FROM sqli_select";
    $sql = "SELECT * FROM sqli_select WHERE name='$key'";
        $result=mysqli_query($connect,$sql);
        if (!$result){
            echo "錯誤";
        }
    {
    if(mysqli_num_rows($result) > 0)
    {
	    while($row = mysqli_fetch_assoc($result))
	    {
        $name=$row["Name"];
        $score=$row["Score"];
        echo '<tr>';
        echo '<td>' . $name. '</td>';
        echo '<td>' . $score. '</td>';
        echo '</tr>';
        }
        echo "</table>"; 
    }
        else
        {
        echo '<div class="word2">';
        echo "查無搜尋結果".'<br>';
        echo '</div>';
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

