<?php
include("../header.php");
?>
<?php
   echo '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>';
    #SQL1 PR
      $sqlall = "SELECT Username,SQL_1 FROM game ORDER BY SQL_1 DESC";
      $resultall = mysqli_query($connect, $sqlall);
      $total=array();
      $rank=array();
      $i=1;//i為自己排名
      $j=1;//j為不同分數的數量
      $r=0;
      $k=0;//k儲存所有玩家分數
      $user = $_SESSION['Username']; 
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
        #個人排行判斷--------------------------------------------
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
            $mySQL1=(round(($j-$i)/$j,2)*100);
          }
            $r++;
        }
        }
        echo $mySQL1."%";
    #SQL2 PR
      $sqlall = "SELECT Username,SQL_2 FROM game ORDER BY SQL_2 DESC";
      $resultall = mysqli_query($connect, $sqlall);
      $total=array();
      $rank=array();
      $i=1;//i為自己排名
      $j=1;//j為不同分數的數量
      $r=0;
      $k=0;//k儲存所有玩家分數
      $user = $_SESSION['Username']; 
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
        #個人排行判斷--------------------------------------------
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
            $mySQL2=(round(($j-$i)/$j,2)*100);
          }
            $r++;
        }
        }
        echo $mySQL2."%";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/test.css">
    <title>Document</title>
</head>
<body>
<br><br><br><br>

 <!-- myChart -->
<div class="myChart">
<canvas id="myChart" ></canvas>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
var SQL = <?php echo ($mySQL1+$mySQL2)/2 ?>;
    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'radar',

    // The data for our dataset
    data: {
        labels: ['XSS', 'Phishing', 'SQL', 'CSRF', 'MISC'],
        datasets: [{
            label: '關卡PR值(%)',
            borderColor: '#FFD700',
            data: [99,70, SQL, 60, 80],
            borderWidth: 1,
            backgroundColor: [
                'rgba(255, 215, 0, 0.4)',
            ]
        },  {
            label: '總平均值(%)',
            borderColor: '#98FB98',
            data: [55,30, 72, 34, 55],
            borderWidth: 1,
            backgroundColor: [
                'rgba(144, 238, 144, 0.4)',
            ]},
    ]
    },
    // Configuration options go here    
    options: {
        scale: {
        angleLines: {
            display: false
        },
        ticks: {
            suggestedMin: 0,
            suggestedMax: 100,
            stepSize:20,
        }
    }
    }
});

    </script>
    
</body>
</html>
