<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TIK Gammer</title>
  
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/index.css" rel="stylesheet" type="text/css">
</head>

<body>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">TIK GAME
        <span class="sr-only">(current)</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">網站介紹</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#photo">相片</a>
          </li>
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

  

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active"
          style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1200')">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">First Slide</h3>
            <p class="lead">This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/800x600')">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">Second Slide</h3>
            <p class="lead">This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/O7fzqFEfLlo/1920x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">Third Slide</h3>
            <p class="lead">This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!--有改過顏色 -->
  <section id="services" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mr-auto">

          <h2>網站介紹</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita
            quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore
            ut velit dignissimos.</p>
        </div>
      </div>
    </div>


  </section>

  <section id="photo">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <h2>自拍照1</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor,
            provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa
            exercitationem, in, quo totam.</p>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="testbox1">
      <div class="content"></div>
      <div class="imagebox"></div>
    </div>
  </section>



  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>


  <!--bar-->
  <div class="bar">
    <ul>
      <li>
        <a href="html/trophy.php">
          <div class="icon">
            <i class="fa fa-trophy" aria-hidden="true"></i>
            <i class="fa fa-trophy" aria-hidden="true"></i>
          </div>
          <div class="name"><span data-text="積分榜">積分榜</span></div>
        </a>
      </li>
      <li>
        <a href="html/gameset.html">
          <div class="icon">
            <i class="fa fa-gamepad" aria-hidden="true"></i>
            <i class="fa fa-gamepad" aria-hidden="true"></i>

          </div>
          <div class="name"><span data-text="遊戲">遊戲</span></div>
        </a>
      </li>
      <li>
        <a href="../Teamproject/index.html">
          <div class="icon">
            <i class="fa fa-home" aria-hidden="true"></i>
            <i class="fa fa-home" aria-hidden="true"></i>
          </div>
          <div class="name"><span data-text="首頁">首頁</span></div>
        </a>
      </li>
      <li>
        <a href="https://forms.gle/YM4LhPU2JtQGR8F78">
          <div class="icon">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
          <div class="name"><span data-text="Q&A">Q&A</span></div>
        </a>
      </li>
    </ul>
  </div>







  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>