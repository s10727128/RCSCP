<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>關於我們</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../css/about.css" rel="stylesheet" type="text/css">
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
      <a class="navbar-brand js-scroll-trigger" href="../index.php">關於我們
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




  <!-- 有改過顏色
  <section id="services">
    <div class="container" style="border: 1px solid #000;">
      <div class="row" >
        <div class="col-lg-5 mr-auto">

          <h2 style="text-align: center;">網站介紹</h2>
          <p class="lead">現今社會中，充斥著許多的網路犯罪手法，使用者常常在沒有資訊安全意識的情況下，點下來自惡意人士所傳的網址，導致銀行存款被盜走，或是下載非官方的破解版軟件，以致電腦內的所存的個人資料被竊取。為了提升大家對於資訊安全的基本概念及意識，故此設計的此網站，讓大家對於資訊安全有基本的認知。同時藉由實際的操作遊玩，讓有興趣但無從下手的人，可以跨出對於資訊安全領域的第一步，同時推廣相關的資安競賽及遊戲網站，以提升此領域的人才。</p>
        </div>
        <div class="col-lg-5 mx-auto">

          <h2 style="text-align: center;">網站介紹</h2>
          <p class="lead">現今社會中，充斥著許多的網路犯罪手法，使用者常常在沒有資訊安全意識的情況下，點下來自惡意人士所傳的網址，導致銀行存款被盜走，或是下載非官方的破解版軟件，以致電腦內的所存的個人資料被竊取。為了提升大家對於資訊安全的基本概念及意識，故此設計的此網站，讓大家對於資訊安全有基本的認知。同時藉由實際的操作遊玩，讓有興趣但無從下手的人，可以跨出對於資訊安全領域的第一步，同時推廣相關的資安競賽及遊戲網站，以提升此領域的人才。</p>
        </div>
      </div>
    </div>
  </section> -->

  <!--Some Feature -->
  <br><br><br>
  <section id="services" class="single-feature padding">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
          <div class="heading-title mb-4">
            
            <div class="namecard">
              <h2 class="darkcolor font-normal bottom30"><span class="defaultcolor">關於</span>
              <id class="security_introduction">我們
              </h2>
              <hr>
              <br>
              <p class="bottom35"><B>指導老師：</B>陳金鈴教授</p>
              <br>
              <p class="bottom35"><b>專題學生：</b>涂承洋、鄭穎明、曹昌裕
              </p>
              <p class="bottom32"><B></B></p>
            </div>
           </div>
          

          
        </div>
        <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
        </div>
      </div>
    </div>
    <br><br id="whats">

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