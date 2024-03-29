  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/index.php">資安意識提升之互動平台
        <!--重點一-->
        <span class="sr-only">(current)</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
          //ini_set("display_errors", 0);
          session_start();
          if(!isset($_SESSION['id'])) {
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/user/register.php">註冊</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/user/login.php">登入</a>';
            echo '</li>';
          }
           else {
            $RootDir = $_SERVER['DOCUMENT_ROOT'];
            $connectDir="$RootDir/user/connect.php";
            require_once($connectDir);
            $name='';
            header("Cache-Control:private");
            $id = $_SESSION['id']; 
            $sql = "SELECT * FROM user WHERE ID='$id'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
             $name=$row["Username"];
             $Nickname = $row["Nickname"];
             $access=$row["Access"];
            }
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/user/profile.php">' . $Nickname . "(" . $name . ")" . '</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/user/logout.php">登出</a>';
            echo '</li>';
            if ($access == 1) {
              echo '<li class="nav-item">';
              echo  '<a class="nav-link js-scroll-trigger" href="/user/access.php">資料表</a>';
              echo '</li>';
            }
          }
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>