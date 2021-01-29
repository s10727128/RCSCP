<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
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
      <caption style="text-align: center;"><b>排行榜</b></caption>
      搜尋名稱(需完全相同):
      <form action="" method="post">
      <input type="varchar" name="search"  >
      <input type="submit"  name="search_button"  value="搜尋">
      <input type="submit"  name="reset_button"  value="清除結果">  
      </form>
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
          echo '<td>' . $i . '</td>';
          echo '<td>' . $name. '</td>';
          echo '<td>' . $score . '</td>';
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
              echo '<td>' . $RK.'</td>';
              echo '<td>' . $name. '</td>';
              echo '<td>' . $score. '</td>';
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
        echo "</table>";
      }
      ?>
    </table>
  </div>
</body>

</html>