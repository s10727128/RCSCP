<?php
include("../../header.php");
?>
<?php
   echo '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>';
#SQL1 PR---------------------------------------------------------------------
      $result=mysqli_query($connect,"SELECT Username,SQL_1 FROM game ORDER BY SQL_1 DESC");
      $total=array();//總數
      $rank=array();//排行
      $i=1;//i為自己排名
      $j=1;//j為不同分數的數量
      $r=0;//r儲存排行陣列
      $k=0;//k儲存總數陣列
      if (mysqli_num_rows($result) > 0) {
        #排行總數
        while ($row = mysqli_fetch_array($result)) {
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
      $result=mysqli_query($connect,"SELECT Username,SQL_1 FROM game ORDER BY SQL_1 DESC");
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
            break;
          }
            $r++;
        }
        }
        //echo $mySQL1."%";
#SQL2 PR---------------------------------------------------------------------
      $resultall = mysqli_query($connect,"SELECT Username,SQL_2 FROM game ORDER BY SQL_2 DESC");
      $i=1;
      $j=1;
      $r=0;
      $k=0;
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
      $result = mysqli_query($connect,"SELECT Username,SQL_2 FROM game ORDER BY SQL_2 DESC");
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
        //echo $mySQL2."%";
#SQL資料庫平均---------------------------------------------------------------------
    $SQL1i=0;
    $SQL1sum=0;
    $result = mysqli_query($connect,"SELECT SQL_1 FROM game WHERE SQL_1 IS NOT NULL");
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["SQL_1"];
      $SQL1sum+=$score;
      $SQL1i++;
    }
    $SQL2i=0;
    $SQL2sum=0;
    $result = mysqli_query($connect,"SELECT SQL_2 FROM game WHERE SQL_2 IS NOT NULL");
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["SQL_2"];
      $SQL2sum+=$score;
      $SQL2i++;
    }        
#XSS1 PR---------------------------------------------------------------------
      $resultall = mysqli_query($connect,"SELECT Username,XSS_1 FROM game ORDER BY XSS_1 DESC");
      $i=1;
      $j=1;
      $r=0;
      $k=0;
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
      $result = mysqli_query($connect,"SELECT Username,XSS_1 FROM game ORDER BY XSS_1 DESC");
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
            break;
          }
            $r++;
        }
        }
      //echo $myXSS1."%";
#XSS2 PR---------------------------------------------------------------------
      $resultall = mysqli_query($connect,"SELECT Username,XSS_2 FROM game ORDER BY XSS_2 DESC");
      $i=1;
      $j=1;
      $r=0;
      $k=0;
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
      $result = mysqli_query($connect,"SELECT Username,XSS_2 FROM game ORDER BY XSS_2 DESC");
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
      //echo $myXSS2."%";
#XSS3 PR---------------------------------------------------------------------
      $resultall = mysqli_query($connect,"SELECT Username,XSS_3 FROM game ORDER BY XSS_3 DESC");
      $i=1;
      $j=1;
      $r=0;
      $k=0;
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
      $result = mysqli_query($connect,"SELECT Username,XSS_3 FROM game ORDER BY XSS_3 DESC");
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
      //echo $myXSS3."%";
#XSS資料庫平均---------------------------------------------------------------------
    $XSS1i=0;
    $XSS1sum=0;
    $result = mysqli_query($connect,"SELECT XSS_1 FROM game WHERE XSS_1 IS NOT NULL");
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["XSS_1"];
      $XSS1sum+=$score;
      $XSS1i++;
    }
    $XSS2i=0;
    $XSS2sum=0;
    $result = mysqli_query($connect,"SELECT XSS_2 FROM game WHERE XSS_2 IS NOT NULL");
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["XSS_2"];
      $XSS2sum+=$score;
      $XSS2i++;
    }        
    $XSS3i=0;
    $XSS3sum=0;
    $result = mysqli_query($connect,"SELECT XSS_3 FROM game WHERE XSS_3 IS NOT NULL");
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["XSS_3"];
      $XSS3sum+=$score;
      $XSS3i++;
    }        
#CSRF PR---------------------------------------------------------------------
    $resultall = mysqli_query($connect,"SELECT Username,CSRF_1 FROM game ORDER BY CSRF_1 DESC");
    $i=1;
    $j=1;
    $r=0;
    $k=0;
    if (mysqli_num_rows($resultall) > 0) {
      #排行總數
      while ($row = mysqli_fetch_array($resultall)) {
          $total[$k]=$row["CSRF_1"];
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
    $result = mysqli_query($connect,"SELECT Username,CSRF_1 FROM game ORDER BY CSRF_1 DESC");
    if (mysqli_num_rows($result) > 0) {   
      #個人排行判斷
      while ($row = mysqli_fetch_array($result)) {
        $user = $row["Username"];
        $score = $row["CSRF_1"];
        $rank[$r]=$row["CSRF_1"];
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
          $myCSRF1=(round(($j-$i)/$j,2)*100);
          break;
        }
          $r++;
      }
      }
    //echo $myCSRF1."%";
#CSRF資料庫平均---------------------------------------------------------------------
    $CSRF1i=0;
    $CSRF1sum=0;
    $result = mysqli_query($connect,"SELECT CSRF_1 FROM game WHERE CSRF_1 IS NOT NULL");
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["CSRF_1"];
      $CSRF1sum+=$score;
      $CSRF1i++;
    }
#MISC1 PR---------------------------------------------------------------------
    $resultall = mysqli_query($connect,"SELECT Username,MISC_1 FROM game ORDER BY MISC_1 DESC");
    $i=1;
    $j=1;
    $r=0;
    $k=0;
    if (mysqli_num_rows($resultall) > 0) {
      #排行總數
      while ($row = mysqli_fetch_array($resultall)) {
          $total[$k]=$row["MISC_1"];
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
    $result = mysqli_query($connect,"SELECT Username,MISC_1 FROM game ORDER BY MISC_1 DESC");
    if (mysqli_num_rows($result) > 0) {   
      #個人排行判斷
      while ($row = mysqli_fetch_array($result)) {
        $user = $row["Username"];
        $score = $row["MISC_1"];
        $rank[$r]=$row["MISC_1"];
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
          $myMISC1=(round(($j-$i)/$j,2)*100);
          break;
        }
          $r++;
      }
      }
    //echo $myMISC1."%";
#MISC2 PR---------------------------------------------------------------------
    $resultall = mysqli_query($connect,"SELECT Username,MISC_2 FROM game ORDER BY MISC_2 DESC");
    $i=1;
    $j=1;
    $r=0;
    $k=0;
    if (mysqli_num_rows($resultall) > 0) {
      #排行總數
      while ($row = mysqli_fetch_array($resultall)) {
          $total[$k]=$row["MISC_2"];
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
    $result = mysqli_query($connect,"SELECT Username,MISC_2 FROM game ORDER BY MISC_2 DESC");
    if (mysqli_num_rows($result) > 0) {   
      #個人排行判斷
      while ($row = mysqli_fetch_array($result)) {
        $user = $row["Username"];
        $score = $row["MISC_2"];
        $rank[$r]=$row["MISC_2"];
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
          $myMISC2=(round(($j-$i)/$j,2)*100);
          break;
        }
          $r++;
      }
      }
    //echo $myMISC2."%";
#MISC3 PR---------------------------------------------------------------------
    $resultall = mysqli_query($connect,"SELECT Username,MISC_3 FROM game ORDER BY MISC_3 DESC");
    $i=1;
    $j=1;
    $r=0;
    $k=0;
    if (mysqli_num_rows($resultall) > 0) {
      #排行總數
      while ($row = mysqli_fetch_array($resultall)) {
          $total[$k]=$row["MISC_3"];
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
    $result = mysqli_query($connect,"SELECT Username,MISC_3 FROM game ORDER BY MISC_3 DESC");
    if (mysqli_num_rows($result) > 0) {   
      #個人排行判斷
      while ($row = mysqli_fetch_array($result)) {
        $user = $row["Username"];
        $score = $row["MISC_3"];
        $rank[$r]=$row["MISC_3"];
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
          $myMISC3=(round(($j-$i)/$j,2)*100);
          break;
        }
          $r++;
      }
      }
    //echo $myMISC3."%";
#MISC資料庫平均---------------------------------------------------------------------
    $MISC1i=0;
    $MISC1sum=0;
    $result = mysqli_query($connect,"SELECT MISC_1 FROM game WHERE MISC_1 IS NOT NULL");
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["MISC_1"];
      $MISC1sum+=$score;
      $MISC1i++;
    }
    $MISC2i=0;
    $MISC2sum=0;
    $result = mysqli_query($connect,"SELECT MISC_2 FROM game WHERE MISC_2 IS NOT NULL");
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["MISC_2"];
      $MISC2sum+=$score;
      $MISC2i++;
    }
    $MISC3i=0;
    $MISC3sum=0;
    $result = mysqli_query($connect,"SELECT MISC_3 FROM game WHERE MISC_3 IS NOT NULL");
    while ($row = mysqli_fetch_array($result)) {
      $score = $row["MISC_3"];
      $MISC3sum+=$score;
      $MISC3i++;
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="analysis.css">
    <title>Document</title>
</head>
<body>
 <!-- myChart -->
<div class="myChart">
<canvas height="40vh" width="80vw"  id="myChart"></canvas>
</div>
<div class="word_right">
<h1 >123123123123123123123</h1>

<hr id="intermediate">
<h1 >123123123123123123123</h1>
</div>
<div class="footer">
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
            </div>
        </footer>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
var SQL = <?php echo ($mySQL1+$mySQL2)/2 ?>;
var XSS = <?php echo round(($myXSS1+$myXSS2+$myXSS3)/3) ?>;
var CSRF = <?php echo $myCSRF1 ?>;
var MISC = <?php echo ($myMISC1+$myMISC2+$myMISC3)/3 ?>;

var SQLAVG=<?php echo round(((round(($SQL1sum/$SQL1i)/200,2)*100)+(round(($SQL2sum/$SQL2i)/300,2)*100))/2) ?>;
var XSSAVG=<?php echo round(((round(($XSS1sum/$XSS1i)/200,2)*100)+(round(($XSS2sum/$XSS2i)/300,2)*100)+(round(($XSS3sum/$XSS3i)/400,2)*100))/3,2) ?>;
var CSRFAVG=<?php echo (round(($CSRF1sum/$CSRF1i)/300,2)*100) ?>;
var MISCAVG=<?php echo round(((round(($MISC1sum/$MISC1i)/300,2)*100)+(round(($MISC2sum/$MISC2i)/300,2)*100)+(round(($MISC3sum/$MISC3i)/300,2)*100))/3) ?>;

    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'radar',

    // The data for our dataset
    data: {
        labels: ['XSS', 'SQL', 'CSRF', 'MISC'],
        datasets: [{
            label: '關卡PR值(%)',
            borderColor: '#FFD700',
            data: [XSS, SQL, CSRF, MISC],
            borderWidth: 1,
            backgroundColor: [
                'rgba(255, 215, 0, 0.4)',
            ]
        },  {
            label: '總平均值(%)',
            borderColor: '#98FB98',
            data: [XSSAVG, SQLAVG, CSRFAVG, MISCAVG],
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
            backdropColor: [
                'rgba(0, 0, 0, 0.6)',
            ]
        }
    }
    }
});
    </script>
</body>
</html>
