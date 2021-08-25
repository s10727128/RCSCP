<?php
include("../../header.php");
echo '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>';
?>
<?php
#SQL1 PR----------------------------------------------------------------------
     $mySQL1=PR("SQL_1");
#SQL2 PR----------------------------------------------------------------------
     $mySQL2=PR('SQL_2');
#SQL 資料庫平均----------------------------------------------------------------
    $SQL1AVG=AVG("SQL_1");
    $SQL2AVG=AVG("SQL_2");
#XSS1 PR----------------------------------------------------------------------
    $myXSS1=PR("XSS_1");
#XSS2 PR----------------------------------------------------------------------
    $myXSS2=PR("XSS_2");
#XSS3 PR----------------------------------------------------------------------
    $myXSS3=PR("XSS_3");
#XSS 資料庫平均-----------------------------------------------------------------
    $XSS1AVG=AVG("XSS_1");
    $XSS2AVG=AVG("XSS_2");
    $XSS3AVG=AVG("XSS_3");  
#CSRF PR----------------------------------------------------------------------
    $myCSRF1=PR("CSRF_1");
#CSRF 資料庫平均---------------------------------------------------------------
    $CSRFAVG=AVG("CSRF_1");
#MISC1 PR---------------------------------------------------------------------
    $myMISC1=PR("MISC_1");
#MISC2 PR---------------------------------------------------------------------
    $myMISC2=PR("MISC_2");
#MISC3 PR---------------------------------------------------------------------
    $myMISC3=PR("MISC_3");
#MISC4 PR---------------------------------------------------------------------
    $myMISC4=PR("MISC_4");
#MISC5 PR---------------------------------------------------------------------
    $myMISC5=PR("MISC_5");
#MISC 資料庫平均---------------------------------------------------------------
    $MISC1AVG=AVG("MISC_1");
    $MISC2AVG=AVG("MISC_2");
    $MISC3AVG=AVG("MISC_3");
    $MISC4AVG=AVG("MISC_4");
    $MISC5AVG=AVG("MISC_5");
#使用者成績--------------------------------------------------------------------
    $userSQL=($mySQL1+$mySQL2)/2;
    $userXSS=round(($myXSS1+$myXSS2+$myXSS3)/3,2);
    $userCSRF=$myCSRF1;
    $userMISC=($myMISC1+$myMISC2+$myMISC3+$myMISC4+$myMISC5)/5;    
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
var SQL = <?php echo $userSQL ?>;
var XSS = <?php echo $userXSS ?>;
var CSRF = <?php echo $userCSRF ?>;
var MISC = <?php echo $userMISC ?>;

var SQLAVG=<?php echo round(((round($SQL1AVG/200,2)*100)+(round($SQL2AVG/300,2)*100))/2) ?>;
var XSSAVG=<?php echo round(((round($XSS1AVG/200,2)*100)+(round($XSS2AVG/300,2)*100)+(round($XSS3AVG/400,2)*100))/3,2) ?>;
var CSRFAVG=<?php echo (round($CSRFAVG/300,2)*100) ?>;
var MISCAVG=<?php echo round(((round($MISC1AVG/300,2)*100)+(round($MISC2AVG/200,2)*100)+(round($MISC3AVG/400,2)*100)+(round($MISC4AVG/400,2)*100)+(round($MISC5AVG/500,2)*100))/5) ?>;

    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'radar',

    // The data for our dataset
    data: {
        labels: ['XSS', 'SQLi', 'CSRF', 'MISC'],
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
<?php
echo '<div class="word_right">';//XSS的評語
if($myXSS1==null||$myXSS2==null||$myXSS3==null)
{
  echo $Nickname."的XSS尚未完成所有關卡，請努力完成！";
}
else {
  Comment($userXSS,"XSS");
}

echo '<hr id="intermediate">';//CSRF的評語
if($userCSRF==null)
{
  echo $Nickname."的CSRF尚未完成所有關卡，請努力完成！";
}
else{
  Comment($userCSRF,"CSRF");
}

echo '<hr id="intermediate">';//SQL的評語
if($mySQL1==null||$mySQL2==null)
{
  echo $Nickname."的SQL尚未完成所有關卡，請努力完成！";
}
else{
  Comment($userSQL,"SQL");
}

echo '<hr id="intermediate">';//MISC的評語
if($myMISC1==null||$myMISC2==null||$myMISC3==null||$myMISC4==null||$myMISC5==null)
{
  echo $Nickname."的MISC尚未完成所有關卡，請努力完成！";
}
else {
  Comment($userMISC,"MISC");
}
?>
</div>
<div class="footer">
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
            </div>
        </footer>
</div>
</body>
</html>
<?php
//個人PR
function PR($gamename){
  global $name;
  global $connect;
  $result=@mysqli_query($connect,"SELECT Username,$gamename FROM game ORDER BY $gamename DESC"); 
  $total=array();//總數
  $rank=array();//排行
  $i=1;//i為自己排名
  $j=1;//j為不同分數的數量
  $r=0;//r儲存排行陣列
  $k=0;//k儲存總數陣列
  if (mysqli_num_rows($result) > 0) {
    #排行總數
    while ($row = mysqli_fetch_array($result)) {
        $total[$k]=$row["$gamename"];
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
  $result = mysqli_query($connect,"SELECT Username,$gamename FROM game ORDER BY $gamename DESC");
  if (mysqli_num_rows($result) > 0) {   
    #個人排行判斷
    while ($row = mysqli_fetch_array($result)) {
      $user = $row["Username"];
      $rank[$r]=$row["$gamename"];
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
        return (round(($j-$i)/$j,2)*100);
        break;
      }
        $r++;
    }
    }
}
//總平均
function AVG($gamename){
  $i=0;
  $sum=0;
  global $connect;
  $result = mysqli_query($connect,"SELECT $gamename FROM game WHERE $gamename IS NOT NULL");
  while ($row = mysqli_fetch_array($result)) {
    $score = $row["$gamename"];
    $sum+=$score;
    $i++;
  }
  return $sum/$i;
}
//評語
function Comment($grade,$gamename){
  global $Nickname;
  switch($grade){
    case ($grade>=90):
      echo $Nickname."對於 $gamename 的瞭解透徹，恭喜你成為頂尖中的佼佼者！";
      break;
    case ($grade>=60&&$grade<90):
      echo $Nickname."對於 $gamename 有一定程度的瞭解，優秀！";  
      break;
    case ($grade>=30&&$grade<60):
      echo $Nickname."對於 $gamename 的瞭解尚可，還可再努力！";
      break;
    default:
      echo $Nickname."對於 $gamename 的瞭解不足，請再加油！";
      break;
  }
}
?>
