<!doctype html>
<html lang="en">

<head>
  <title>Tik Game個人評估</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  include_once("../../header.php");
  ?>
  <link rel="stylesheet" href="../../css/trophy.css" type="text/css">
</head>
<body>

  <div class="container">
    <!-- Navigation -->
    <div class="test">
      
    <!--改php-->
    <table class="table table-striped table-bordered table-condensed table-hover">
      <thead class="table-dark">
        <tr class="thead">
          <th scope="col">SQL-1佔比</th>
        </tr>
      </thead>
<?php
      require_once('../connect.php');
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';  
      echo '<br>';
      //搜尋所有帳號,如有管理員帳號,使用NOT IN排除搜尋--------------------------------
      $sqlall = "SELECT Username,SQL_1 FROM game ORDER BY SQL_1 DESC";
      $resultall = mysqli_query($connect, $sqlall);
      $total=array();
      $rank=array();
      $i=1;
      $j=1;
      $r=0;
      $k=0;
      $user = @$_SESSION['Username']; 
      if (mysqli_num_rows($resultall) > 0) {
        #排行總數
        while ($row = mysqli_fetch_array($resultall)) {
            $total[$k]=$row["SQL_1"];
          if($k==0){
          }
          else{
          if($total[$k]==$total[$k-1])
          {
            $j=$j;
          }
          else{
            $j++;
          }
          }
          $k++;
        }
      }
      $sql = "SELECT Username,SQL_1 FROM game ORDER BY SQL_1 DESC";
      $result = mysqli_query($connect, $sqlall);
      if (mysqli_num_rows($result) > 0) {   
        #排行判斷--------------------------------------------
        while ($row = mysqli_fetch_array($result)) {
          $user = $row["Username"];
          $score = $row["SQL_1"];
          $rank[$r]=$row["SQL_1"];
          if($r==0){  
          }
          else{
          if($rank[$r]==$rank[$r-1])
          {
            $i=$i;    
          }
          else{
            $i++;
          }
        }
        if($user==$name){
            echo '<thead class="table-danger">';
            echo '<td>'."前".(round($i/$j,2)*100)."%".'</td>';
            echo '</thead>';
          }
            $r++;
          echo '</tr>';
        }
        }

        echo '<thead class="table-dark">';
        echo '<tr class="thead">';
        echo '<th scope="col">SQL-2佔比</th>';
        echo '</tr>';
        echo '</thead>';
        $sqlall = "SELECT Username,SQL_2 FROM game ORDER BY SQL_2 DESC";
        $resultall = mysqli_query($connect, $sqlall);
        $total=array();
        $rank=array();
        $i=1;
        $j=1;
        $r=0;
        $k=0;
        $user = @$_SESSION['Username']; 
        if (mysqli_num_rows($resultall) > 0) {
          #排行總數
          while ($row = mysqli_fetch_array($resultall)) {
              $total[$k]=$row["SQL_2"];
            if($k==0){
            }
            else{
            if($total[$k]==$total[$k-1])
            {
              $j=$j;
            }
            else{
              $j++;
            }
            }
            $k++;
          }
        }
        $sql = "SELECT Username,SQL_2 FROM game ORDER BY SQL_2 DESC";
        $result = mysqli_query($connect, $sqlall);
        if (mysqli_num_rows($result) > 0) {   
          #排行判斷--------------------------------------------
          while ($row = mysqli_fetch_array($result)) {
            $user = $row["Username"];
            $score = $row["SQL_2"];
            $rank[$r]=$row["SQL_2"];
            if($r==0){  
            }
            else{
            if($rank[$r]==$rank[$r-1])
            {
              $i=$i;    
            }
            else{
              $i++;
            }
          }
          if($user==$name){
              echo '<thead class="table-danger">';
              echo '<td>'."前".(round($i/$j,2)*100)."%".'</td>';
              echo '</thead>';
            }
              $r++;
            echo '</tr>';
          }
          }
      ?>
    </table>
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