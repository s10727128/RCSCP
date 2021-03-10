
<?php
include_once("../../Teamproject/header.php");
if(isset($_POST["KeySubmit"]))
{
  $Key=$_POST['Key'];
  #判斷是不是正確答案
  if($Key=="0800092000")
  {   
    $enddate=time();//讀取完成時間
    #搜尋game裡的玩家的開啟時間
    $sql="select SQL_1open from game where Username='$name'";
    $result=mysqli_query($connect,$sql);
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        $date=$row["SQL_1open"];
      }
    }
    #搜尋user裡的玩家的分數
    $sqlscore="SELECT * FROM user WHERE Username='$name'";
    $resultscore=mysqli_query($connect,$sqlscore);
    if(mysqli_num_rows($resultscore) > 0)
    {
      while($row = mysqli_fetch_assoc($resultscore))
      {
        $score=$row["Score"];
      }
    }
    echo '<br>' ;
    echo '<br>' ;
    echo '<br>' ;
    echo '<br>' ;
    echo '<br>' ;
    echo '<br>' ;
    #確認玩家是否已經有分數  
    $checkscore="SELECT SQL_1 FROM game WHERE Username='$name' ";
    $resultcheck=mysqli_query($connect,$checkscore);
    if(mysqli_num_rows($resultcheck) > 0)
    {
      while($row = mysqli_fetch_assoc($resultcheck))
      {
        $check=$row["SQL_1"];
      }
    }
    if($check>0)
    {
      $score+=0;
    }
    #根據通關時間給分
    else
    {
      if($totaltime<=180){
          $score+=200;
          $gamescore="UPDATE game SET SQL_1=200 WHERE Username='$name'";
          $result=mysqli_query($connect,$gamescore);
          $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
          $result=mysqli_query($connect,$totalscore);
        }
      else if($totaltime>180&&$totaltime<=360){
          $score=180;
          $gamescore="UPDATE game SET SQL_1=180 WHERE Username='$name'";
          $result=mysqli_query($connect,$gamescore);
          $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
          $result=mysqli_query($connect,$totalscore);
        }
      else if($totaltime>360&&$totaltime<=600){
          $score=160;
          $gamescore="UPDATE game SET SQL_1=160 WHERE Username='$name'";
          $result=mysqli_query($connect,$gamescore);
          $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
          $result=mysqli_query($connect,$totalscore);
        }
      else if($totaltime>600&&$totaltime<=1200){
          $score=125;
          $gamescore="UPDATE game SET SQL_1=125 WHERE Username='$name'";
          $result=mysqli_query($connect,$gamescore);
          $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
          $result=mysqli_query($connect,$totalscore);
      }
      else if($totaltime>1200&&$totaltime<=1800){
        $score=100;
        $gamescore="UPDATE game SET SQL_1=100 WHERE Username='$name'";
        $result=mysqli_query($connect,$gamescore);
        $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
        $result=mysqli_query($connect,$totalscore);
      }
      else if($totaltime>1800&&$totaltime<=3600){
        $score=75;
        $gamescore="UPDATE game SET SQL_1=75 WHERE Username='$name'";
        $result=mysqli_query($connect,$gamescore);
        $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
        $result=mysqli_query($connect,$totalscore);
      }
      else if($totaltime>3600){
        $score=50;
        $gamescore="UPDATE game SET SQL_1=50 WHERE Username='$name'";
        $result=mysqli_query($connect,$gamescore);
        $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
        $result=mysqli_query($connect,$totalscore);
      }
      // echo'<div class="passtime">';
      // echo '<b>通關時間：</b>'.$totaltime.'<b>秒</b>';
      // echo '</div>';
    }        
    echo '<div class="pass"><br>'."恭喜通關~<br>";
    echo '<a href="level3-2.php">前往下一關</a><br>';
    echo '<a href="../../Teamproject/index.php">返回主頁</a><br></div>';
  }
  #不是正確答案的情況
  else
  {   
    echo '<div class="pass">';
    echo '<br>'."通關密碼不正確,請繼續加油!";
    echo '<br><a href="level3-1.php">返回關卡</a><br>';
    echo '</div>';
  }
}
else{
     echo '<br>' ;
    echo '<br>' ;
    echo '<br>' ;
    echo '<div class="pass"><br>' ;
  echo("錯誤執行");
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="level3.css">
    <title>過關</title>
</head>
<body>

</body>
</html>