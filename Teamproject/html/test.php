<?php
include("../header.php");
?>
<?php
   echo '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>';
  #SQL1 PR---------------------------------------------------------------------
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
        #個人排行判斷
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
  #SQL2 PR---------------------------------------------------------------------
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
        #個人排行判斷
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
            break;
          }
            $r++;
        }
        }
        echo $mySQL2."%";
  #SQL資料庫平均---------------------------------------------------------------------
    $SQL1i=0;
    $SQL1sum=0;
    $sql = "SELECT SQL_1 FROM game WHERE SQL_1 IS NOT NULL";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["SQL_1"];
      $SQL1sum+=$score;
      $SQL1i++;
    }
    $SQL2i=0;
    $SQL2sum=0;
    $sql = "SELECT SQL_2 FROM game WHERE SQL_2 IS NOT NULL";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["SQL_2"];
      $SQL2sum+=$score;
      $SQL2i++;
    }        
  #XSS1 PR---------------------------------------------------------------------
    $sqlall = "SELECT Username,XSS_1 FROM game ORDER BY XSS_1 DESC";
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
          $total[$k]=$row["XSS_1"];
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
    $sql = "SELECT Username,XSS_1 FROM game ORDER BY XSS_1 DESC";
    $result = mysqli_query($connect, $sqlall);
    if (mysqli_num_rows($result) > 0) {   
      #個人排行判斷
      while ($row = mysqli_fetch_array($result)) {
        $user = $row["Username"];
        $score = $row["XSS_1"];
        $rank[$r]=$row["XSS_1"];
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
          $myXSS1=(round(($j-$i)/$j,2)*100);
        }
          $r++;
      }
      }
      echo $myXSS1."%";
  #XSS2 PR---------------------------------------------------------------------
    $sqlall = "SELECT Username,XSS_2 FROM game ORDER BY XSS_2 DESC";
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
          $total[$k]=$row["XSS_2"];
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
    $sql = "SELECT Username,XSS_2 FROM game ORDER BY XSS_2 DESC";
    $result = mysqli_query($connect, $sqlall);
    if (mysqli_num_rows($result) > 0) {   
      #個人排行判斷
      while ($row = mysqli_fetch_array($result)) {
        $user = $row["Username"];
        $score = $row["XSS_2"];
        $rank[$r]=$row["XSS_2"];
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
          $myXSS2=(round(($j-$i)/$j,2)*100);
          break;
        }
          $r++;
      }
      }
      echo $myXSS2."%";
  #XSS2 PR---------------------------------------------------------------------
    $sqlall = "SELECT Username,XSS_3 FROM game ORDER BY XSS_3 DESC";
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
          $total[$k]=$row["XSS_3"];
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
    $sql = "SELECT Username,XSS_3 FROM game ORDER BY XSS_3 DESC";
    $result = mysqli_query($connect, $sqlall);
    if (mysqli_num_rows($result) > 0) {   
      #個人排行判斷
      while ($row = mysqli_fetch_array($result)) {
        $user = $row["Username"];
        $score = $row["XSS_3"];
        $rank[$r]=$row["XSS_3"];
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
          $myXSS3=(round(($j-$i)/$j,2)*100);
          break;
        }
          $r++;
      }
      }
      echo $myXSS3."%";
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
var XSS = <?php echo ($myXSS1+$myXSS2+$myXSS3)/3 ?>;
var SQLAVG=<?php echo round(((round(($SQL1sum/$SQL1i)/200,2)*100)+(round(($SQL2sum/$SQL2i)/300,2)*100))/2) ?>;
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
            data: [XSS,70, SQL, 60, 80],
            borderWidth: 1,
            backgroundColor: [
                'rgba(255, 215, 0, 0.4)',
            ]
        },  {
            label: '總平均值(%)',
            borderColor: '#98FB98',
            data: [55,30, SQLAVG, 34, 55],
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
