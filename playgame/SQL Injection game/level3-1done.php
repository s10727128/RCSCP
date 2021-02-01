<?php
include_once("../../Teamproject/header.php");
if(isset($_POST["KeySubmit"])){
    $Key=$_POST['Key'];
    if($Key=="0800092000")
    {
        $enddate=time();
        $sql="select SQL_1open from game where Username='$name'";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
            $date=$row["SQL_1open"];
          }
       }
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
        $totaltime=$enddate-$date;
        echo $score;
        if($totaltime<=180){
          $score+=200 ;
          $gamescore="UPDATE game SET SQL_1=200 WHERE Username='$name'";
          $result=mysqli_query($connect,$gamescore);
          $totalscore="UPDATE user SET  score=$score WHERE Username='$name'";
          $result=mysqli_query($connect,$totalscore);
        }
        else if($totaltime>180&&$totaltime<=360){
          $sql="UPDATE user SET  score=180 WHERE Username='$name'";
          $result=mysqli_query($connect,$sql);
        }
        else if($totaltime>360&&$totaltime<=600){
          $sql="UPDATE user SET  score=160 WHERE Username='$name'";
          $result=mysqli_query($connect,$sql);
        }
        echo $totaltime;
        
        echo '<br>'."恭喜通關!!";
        exit();
    }
    else
    {   
        echo '<div class="word2">';
        echo '<br>'."通關密碼不正確,請繼續加油!";
        echo '</div>';
    }
  }   
?>