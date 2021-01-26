<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/trophy.css" type="text/css">
</head>

<body>

  <div class="container">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.html">TIK GAME
          <span class="sr-only">(current)</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register/register.php">註冊</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../Teamproject/register/login.html">登入</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="test">
      
    <!--改php-->
    <table class="table table-striped table-bordered table-condensed table-hover">
      <caption style="text-align: center;">排行榜</caption>
      <thead>
        <tr>
          <th scope="col">名次</th>
          <th scope="col">姓名</th>
          <th scope="col">分數</th>
        </tr>
      </thead>
      <?php
      require_once('../register/connect.php');
      $sql = "SELECT Username,Score FROM user ORDER BY Score DESC";
      $i = 1;
      $result = mysqli_query($connect, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $name = $row["Username"];
          $score = $row["Score"];
          echo '<tr>';
          echo '<td>' .  $i . '</td>';
          echo '<td>' . $name . '</td>';
          echo '<td>' . $score . '</td>';
          $i++;
          echo '</tr>';
        }
        echo "</table>";
      }
      ?>
    </table>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>