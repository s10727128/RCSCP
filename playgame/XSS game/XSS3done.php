<?php
  include_once("../../header.php");
    $enddate=time();//讀取完成時間
    #搜尋game裡的玩家的開啟時間
    $sql="select XSS_3open from game where Username='$name'";
    $result=mysqli_query($connect,$sql);
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        $date=$row["XSS_3open"];
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
    $checkscore="SELECT XSS_3 FROM game WHERE Username='$name' ";
    $resultcheck=mysqli_query($connect,$checkscore);
    if(mysqli_num_rows($resultcheck) > 0)
    {
      while($row = mysqli_fetch_assoc($resultcheck))
      {
        $check=$row["XSS_3"];
      }
    }
    if($check>0)
    {
      $score+=0;
    }
    #根據通關時間給分
    else
    {
      $totaltime=$enddate-$date;
      if($totaltime<=180){
          $score+=400;
          $gamescore="UPDATE game SET XSS_3=400 WHERE Username='$name'";
          $result=mysqli_query($connect,$gamescore);
          $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
          $result=mysqli_query($connect,$totalscore);
        }
      else if($totaltime>180&&$totaltime<=360){
          $score=350;
          $gamescore="UPDATE game SET XSS_3=350 WHERE Username='$name'";
          $result=mysqli_query($connect,$gamescore);
          $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
          $result=mysqli_query($connect,$totalscore);
        }
      else if($totaltime>360&&$totaltime<=600){
          $score=300;
          $gamescore="UPDATE game SET XSS_3=300 WHERE Username='$name'";
          $result=mysqli_query($connect,$gamescore);
          $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
          $result=mysqli_query($connect,$totalscore);
        }
      else if($totaltime>600&&$totaltime<=1200){
          $score=250;
          $gamescore="UPDATE game SET XSS_3=250 WHERE Username='$name'";
          $result=mysqli_query($connect,$gamescore);
          $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
          $result=mysqli_query($connect,$totalscore);
      }
      else if($totaltime>1200&&$totaltime<=1800){
        $score=200;
        $gamescore="UPDATE game SET XSS_3=200 WHERE Username='$name'";
        $result=mysqli_query($connect,$gamescore);
        $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
        $result=mysqli_query($connect,$totalscore);
      }
      else if($totaltime>1800&&$totaltime<=3600){
        $score=150;
        $gamescore="UPDATE game SET XSS_3=150 WHERE Username='$name'";
        $result=mysqli_query($connect,$gamescore);
        $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
        $result=mysqli_query($connect,$totalscore);
      }
      else if($totaltime>3600){
        $score=100;
        $gamescore="UPDATE game SET XSS_3=50 WHERE Username='$name'";
        $result=mysqli_query($connect,$gamescore);
        $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
        $result=mysqli_query($connect,$totalscore);
      }
      echo $totaltime;
    }       
    echo '<div class="pass"><br>'."恭喜通關~<br>";
    echo '<a href="../../../index.php">返回主頁</a><br></div>';
    exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../playgame_css/playgame1.css">
    <title>過關</title>
</head>
<body>

</body>
</html>