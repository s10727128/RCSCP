<?php
function Score($gametime1,$gametime2,$gamescore,$gamename){
    global $totaltime;
    global $connect;
    global $name;
    if($totaltime>$gametime1&&$totaltime<=$gametime2){
        $score+=$gamescore;
        $result=mysqli_query($connect,"UPDATE game SET  $gamename=$gamescore  WHERE Username='$name'");
        $result=mysqli_query($connect,"UPDATE user SET  score=$score WHERE Username='$name'");
        }
}
?>