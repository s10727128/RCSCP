<!DOCTYPE html>
<html lang="en">

<head>

  <title>遊戲</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TIK Gammer</title>

  <link href="login_request.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <?php
  include_once("../header.php ");
  if(!isset($_SESSION['id'])) {
    echo'<body><br><br><br><br><br><br><br><br>';
    echo'<button class="btn">';
    echo'  <div class="item"><span><a href="../user/login.php">請先登入</a></span></div>';
    echo'</button>';
    echo'</div>';

    echo'</body>';
    //footer => for login_request
    echo' <div class="footer">';
    echo'<footer class="py-2 bg-dark ">';
    echo'<div class="container">';
    echo'  <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>';
    echo'</div>';
    echo'</footer>';
    echo'</div>';
    exit();
  }
  ?>
  <link href="gameset.css" rel="stylesheet" type="text/css">

</head>

<body>


  <h1> <b> 遊戲首頁 </b> </h1>

  <div class="flex">

    <!--level1 = xss-->
    <button class="btn">
      <div class="item"><span><a href="gamepoint/level1index.php"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp XSS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a></span></div>
    </button>
    <!--SQL-->
    <button class="btn">
      <div class="item"><span><a href="gamepoint/level2index.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CSRF &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></span></div>
    </button>
    <BR>
    <!--level3 = SQL-->
    <button class="btn">
      <div class="item"><span><a href="gamepoint/level3index.php">SQL Injection</a></span></div>
    </button>
    <!--level5 = MISC-->
    <button class="btn">
      <div class="item"><span><a href="gamepoint/level5index.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp MISC &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></span></div>
    </button>
    
    <br>
    <?php   
    include_once("../playgame/XSS game/XSS summary/XSS_defend.php");
    ?>
    <button class="btn">
      <div class="item"><span><a href="../index.php"><b>返回</b></a></span></div>
    </button>
  </div>
  <!-- <a href="#" class="action-button animate blue">Hello</a>
<a href="#" class="action-button animate red">How</a>
<a href="#" class="action-button animate green">Are</a>
<a href="#" class="action-button animate yellow">You?</a>
  -->
  <br>

  <br>
  <!--  Footer  -->
  <div class="footer">
    <footer class="py-2 bg-dark ">
      <div class="container">
        <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
      </div>
    </footer>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="/scrolling-nav.js"></script>
  <script>
    document.addEventListener("touchstart", function() {}, false);
  </script>
</body>

</html>