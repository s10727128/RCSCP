
  
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="../css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


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
          echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/login.html">登入</a>';
          echo '</li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>