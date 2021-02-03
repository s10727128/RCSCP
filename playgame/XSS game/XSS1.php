<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="/Teamproject/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="/js-hackgame/Teamproject/css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=stylesheet href="../CSS/playgame1.css">
    <script src="../JavaScript/XSS1.js"></script>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/js-hackgame/Teamproject/index.php">TIK GAME
        <span class="sr-only">(current)</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <?php
          $RootDir = $_SERVER['DOCUMENT_ROOT'];
          $connectDir="$RootDir/js-hackgame/Teamproject/register/connect.php";
          require_once($connectDir);
          $name='';
          session_start();
          $id = @$_SESSION['id']; 
          $sql = "SELECT * FROM user WHERE ID='$id'";
          $result=mysqli_query($connect,$sql);
          if(mysqli_num_rows($result) > 0)
          {
	        while($row = mysqli_fetch_assoc($result))
	        {
		      $name=$row["Username"];
		      $access=$row["Access"];
	        }
	        //echo "歡迎.$name".'<br>';
	        echo '<li class="nav-item">';
          echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/account/profile.php">'.$name.'</a>';
          echo '</li>';
	        echo '<li class="nav-item">';
          echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/logout.php">登出</a>';
          echo '</li>';
	        if($access==1)
	        {
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/account/access.php">資料表</a>';
            echo '</li>';
	        }
          }
          else
          {   
          echo '<li class="nav-item">';
          echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/register.php">註冊</a>';
          echo '</li>';
	        echo '<li class="nav-item">';
          echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/login.php">登入</a>';
          echo '</li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

    <div class="body2">
        <form action="" method="GET">
        <div class="instructions">
            <h1><b>LEVEL1-1</b></h1>
            <div id="menubar" > <a href="../gamepoint/level1index.php" class="menu_exit">EXIT</a> </div>
        </div>
        <hr>

        <div>
            <a class="btn btn-secondary" id="next_btn" style="display: none;" href="" >Next</a> 
        </div>
        <br>    
        <div">
            <p><b>這個關卡是一個很經典的XSS漏洞，屬於Reflected XSS (反射型)，是由網頁後端直接嵌入由前端使用者所傳送過來的內容造成的。</b></p>
            <p><b>請嘗試在網頁注入一個 alert() ，即可即可過關!</b></p>
        </div>

        <?php
            ini_set("display_errors", 0);
            $ans = $_GET["name"];
            echo "Your answer is: $ans";
        ?>
        <br>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modelId">
            提示
        </button>

        <!-- Modal -->
        <div class="hint">
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title">提示</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                            <p>1.&nbsp;執行一個	&lt; script &gt;<br>2.&nbsp;在	&lt; script &gt;裡加入alert()<br>3.&nbsp;不知道輸入在哪嗎?仔細觀察網址<br>4.&nbsp;將neam=test，改成name=	&lt; script &gt;alert()&lt;/ script &gt;
                            </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>

    
    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
            
        });
    </script>      




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>