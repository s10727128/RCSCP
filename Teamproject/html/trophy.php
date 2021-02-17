<!doctype html>
<html lang="en">

<head>
  <title>Tik Game排行榜</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  include_once("../header.php");
  ?>
  <link rel="stylesheet" href="../css/trophy.css" type="text/css">
</head>

<body>

  <div class="container">
    <!-- Navigation -->
    <div class="test">
      
    <!--改php-->  
    <table class="table table-striped table-bordered table-condensed table-hover">
      <caption><b>排行榜</b><BR>
      <form action="" method="post">
      搜尋名稱(需完全相同):
      <input type="varchar" name="search"  >
      <input type="submit"  name="search_button"  value="搜尋">
      <input type="submit"  name="reset_button"  value="清除結果">  
      </form>
      </caption>
      <thead class="table-dark">
        <tr class="thead">
          <th scope="col">名次</th>
          <th scope="col">姓名</th>
          <th scope="col">分數</th>
        </tr>
      </thead>
      <?php
      require_once('../register/connect.php');
      //搜尋所有帳號,如有管理員帳號,使用NOT IN排除搜尋--------------------------------
      $sqlall = "SELECT Username,Score FROM user ORDER BY Score DESC";
      $resultall = mysqli_query($connect, $sqlall);
      $rank=array();
      $i=1;
      $r=0;
      $user = @$_SESSION['Username']; 
      if (mysqli_num_rows($resultall) > 0) {
        #排行判斷--------------------------------------------
        while ($row = mysqli_fetch_array($resultall)) {
          $name = $row["Username"];
          $score = $row["Score"];
          $rank[$r]=$row["Score"];
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

        $sqlrank="UPDATE user SET  Rank='$i' WHERE Username='$name'";
        $resultrank = mysqli_query($connect, $sqlrank);
        if(!isset($_POST["search_button"])){
           #顯示所有資料---------------------------------------
          echo '<tr>';
          if($user==$name){
            echo '<thead class="table-success">';
            echo '<td >'. $i . '</td>';
            echo '<td>' . $name. '</td>';
            echo '<td>' . $score. '</td>';
            echo '</thead>';
          }
          else{
            echo '<td>' . $i . '</td>';
            echo '<td>' . $name. '</td>';          
            echo '<td>' . $score . '</td>';
          }

          //$i++;
          $r++;
          echo '</tr>';
        }
        else{
          {
          #顯示特定資料-----------------------------------------
          $key=mysqli_real_escape_string($connect,$_POST['search']);
          $sql = "SELECT * FROM user WHERE Username='$key' ORDER BY Score DESC";
          $result=mysqli_query($connect,$sql);
          if(mysqli_num_rows($result) > 0)
          {
               while($row = mysqli_fetch_assoc($result))
               {
              $name = $row["Username"];
              $score = $row["Score"];
              $RK=$row["Rank"];
              echo '<tr>';
              if($user==$name){
                echo '<thead class="table-success">';
                echo '<td >'. $RK . '</td>';
                echo '<td>' . $name. '</td>';
                echo '<td>' . $score. '</td>';
                echo '</thead>';
              }
              else{
              echo '<td>' . $RK.'</td>';
              echo '<td>' . $name. '</td>';
              echo '<td>' . $score. '</td>';
              }
              echo '</tr>';
              }
              echo "</table>"; 
              exit();
          }
              else
              { 
              echo "查無搜尋結果".'<br>';
              exit();
              }
          }
        }
        
        }
        $sql_select="SELECT Rank FROM user ORDER BY Rank DESC LIMIT 0 , 1";
          $result_select=mysqli_query($connect,$sql_select);
          if(mysqli_num_rows($result_select) > 0)
          {
            while($row = mysqli_fetch_assoc($result_select))
            {
             $Last=$row["Rank"];
            }
          }
        echo "</table>";
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