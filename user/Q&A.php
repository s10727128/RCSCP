<!DOCTYPE html>
<html lang="en">

<head>
<title>Q&A</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <script>
        function Submit() {
        alert("謝謝你~我們已經收到您的留言嘍~");
        }
  </script>

  <title>問題回報</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../css/Q&A.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!--PreLoader-->
  <div class="loader">
    <div class="loader-inner">
      <div class="cssload-loader"></div>
    </div>
  </div>

  <!--PreLoader Ends-->

  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="../index.php">資安意識提升之互動平台
        <span class="sr-only">(current)</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
          $RootDir = $_SERVER['DOCUMENT_ROOT'];
          $connectDir = "$RootDir/js-hackgame/Teamproject/register/connect.php";
          require_once($connectDir);
          $name = '';
          session_start();
          $id = @$_SESSION['id'];
          $sql = "SELECT * FROM user WHERE ID='$id'";
          $result = mysqli_query($connect, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $name = $row["Username"];
              $access = $row["Access"];
              $Nickname = $row["Nickname"];
            }
            //echo "歡迎.$name".'<br>';
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/account/profile.php">' . $Nickname . "(" . $name . ")" . '</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/logout.php">登出</a>';
            echo '</li>';
            if ($access == 1) {
              echo '<li class="nav-item">';
              echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/account/access.php">資料表</a>';
              echo '</li>';
            }
          } else {
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



    <!--Some Feature -->
    <br><br><br>
    <div style="text-align: center;" class="title">
      <h1><p>問題回報</p></h1>
      <label>~若有任何問題，歡迎在下方留言，讓我們知道~</label>
      <div class="return_form">
      <form action="../index.php">
          <textarea  rows="20" cols="45"></textarea>
          <br>
          <div>
              <button type="submit" onclick="Submit()">送出</button>
          </div>
      </form>
    </div>
    </div>


    


    <!--Some Feature ends-->



    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="../js/scrolling-nav.js"></script>
    <!--custom functions and script-->
    <script src="../js/functions.js"></script>

</body>

</html>