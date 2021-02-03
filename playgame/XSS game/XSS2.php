<!DOCTYPE html>
<html lang="en">
<head>
<title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <?php
    include_once("../../Teamproject/header.php");
    ?>

    <link rel=stylesheet href="../CSS/playgame1.css">
<script src="../JavaScript/XSS2.js"></script>


</head>
<body a link="blue" vlink="red">
    
<div class="body2">
<div class="instructions">
                <h1><a href="../gamepoint/level1index.php" class="exit">


                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"  viewBox="0 0 15 20">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>

                    </a><b>LEVEL1-2</b>
                </h1>

            </div>

    <!--下一關按鈕-->
    <div style="text-align: center;">
        <a id="next_btn" style="display: none;" href="" >Next</a> 
    </div>
    <br>

    <!--遊戲輸入框內容-->
    <div style="text-align: center;">
        <?php
            ini_set("display_errors", 0);
            $ans = $_GET["input"];
            echo '<form action=level1-2.php method=GET>
            <input name=input value="'.$ans.'">
            <input type=submit name=submit value="搜尋"/>
            </form><br>';
            
            echo "Your answer is: ".htmlspecialchars($ans);
        ?>
    </div>
    <br>

    <div style="text-align: center;">
            <button type="button" id="hintList" class="button">Hint</button>
            <div class="word2" style="list-style: none; ">
                <li id="hint1"></li>
                <li id="hint2"></li>
                <li id="hint3"></li>
                <li id="hint4"></li>
                <li id="hint5"></li>
            </div>
        </div>

    
    <script>
        let x = 0;
        $("#hintList").click(function(){
            x ++;
            switch(x){
                case 1:
                    $("#hint1").text("1. 執行一個<script>");
                    break;

                case 2:
                    $("#hint2").text("2. 哇...<script>行不通，試試看輸入其他東西");
                    break;

                case 3:
                    $("#hint3").text("3. 按右鍵打開網頁原始碼，或是按下F12");
                    break;

                case 4:
                $("#hint4").text("4. 觀察input1裡的value變化，試著執行");
                break;

                case 5:
                $("#hint5").text('5. "><script>alert()\<\/script>，利用\">讓Value裡為完整的函式');
                break;

                default:
                
                break;    
            }
        });
    
    </script>

  
</div>


</body>
</html>