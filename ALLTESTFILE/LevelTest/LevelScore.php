<?php
    #搜尋user裡的玩家的分數
    $resultscore=mysqli_query($connect,"SELECT Score FROM user WHERE Username='$name'");
    if(mysqli_num_rows($resultscore) > 0)
    {
      while($row = mysqli_fetch_assoc($resultscore))
      {
        $score=$row["Score"];
      }
    }
    #確認玩家是否已經有分數  
    $resultcheck=mysqli_query($connect,"SELECT SQL_1 FROM game WHERE Username='$name'");
    if(mysqli_num_rows($resultcheck) > 0)
    {
      while($row = mysqli_fetch_assoc($resultcheck))
      {
        $check=$row["SQL_1"];
      }
    }
    #判斷是否已經有分數
    if($check>0)
    {
      $score+=0;//如果有分數,則不再另外給分
    }
    #根據通關時間給分
    else
    {
      if($totaltime<=300){//時間少於5分鐘
        $score+=200;
        $result=mysqli_query($connect,"UPDATE game SET  SQL_1=200    WHERE Username='$name'");
        $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
        }
      else if($totaltime>300&&$totaltime<=600){//時間在5分鐘~10分鐘間
        $score+=180;
        $result=mysqli_query($connect,"UPDATE game SET  SQL_1=180    WHERE Username='$name'");
        $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
        }
      else if($totaltime>600&&$totaltime<=900){//時間在10分鐘~15分鐘間
        $score+=160;
        $result=mysqli_query($connect,"UPDATE game SET  SQL_1=160    WHERE Username='$name'");
        $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
        }
      else if($totaltime>900&&$totaltime<=1200){//時間在15分鐘~20分鐘間
        $score+=140;
        $result=mysqli_query($connect,"UPDATE game SET  SQL_1=140    WHERE Username='$name'");
        $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
      }
      else if($totaltime>1200&&$totaltime<=1800){//時間在20分鐘~30分鐘間
        $score+=120;
        $result=mysqli_query($connect,"UPDATE game SET  SQL_1=120    WHERE Username='$name'");
        $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
      }
      else if($totaltime>1800&&$totaltime<=2700){//時間在30分鐘~45分鐘間
        $score+=100;
        $result=mysqli_query($connect,"UPDATE game SET  SQL_1=100    WHERE Username='$name'");
        $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
      }
      else if($totaltime>2700&&$totaltime<=3600){//時間在45分鐘~1小時間
        $score+=75;
        $result=mysqli_query($connect,"UPDATE game SET  SQL_1=75    WHERE Username='$name'");
        $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
      }
      else if($totaltime>3600){//時間大於1小時
        $score=50;
        $result=mysqli_query($connect,"UPDATE game SET  SQL_1=50    WHERE Username='$name'");
        $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
      }
    }        
    echo '<div class="pass"><br>'."恭喜通關~<br>";
    echo '<a href="level3-2.php">前往下一關</a><br>';
    echo '<a href="../../playgame/gamepoint/level3index.php">返回主頁</a><br></div>';
?>