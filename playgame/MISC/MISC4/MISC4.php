<!DOCTYPE html>
<html lang="en">

<head>
    <title>資安遊戲闖關網站</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once("../../../Teamproject/header.php");
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" a href="../../CSS/playgame5.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="source.js"></script> -->
</head>

<body a link="blue" vlink="red">
    <div class="body2">
        <div class="instructions">
            <h1><a href="../../gamepoint/level5index.php" class="exit">


                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 15 20">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                </a>
                <b>LEVEL5-3</b>
            </h1>

        </div>
        <hr>

        <div style="text-align: center;">
            <a id="next_btn" style="display: none;" href="">Next</a>
        </div>
        <br>

        
        <div>
            <p><b>--找到密碼過關--</b></p><br>
        </div>

        <div style="text-align: center;">
            <form action="../../../downloadfile/stego.zip" method="GET">
                下載點:
                <a href="../../../downloadfile/stego.zip" download><b>Download</b></a>
            </form>

            <?php
            ini_set("display_errors", 0);
            $ans = $_GET["input"];
            if ($ans == "UpassAllMisc666!") {
                echo '<script>alert("Congratuation! You sucessed!")</script>';
            }
            echo '<form action=MISC4.php =GET>
            <input name=input value"' . $ans . '"/>
            <input type=submit name=submit value="送出"/>
            </form><br>';
            ?>
        </div>
        <?php
    include("MISC4.html");
 ?>
        <!-- <div style="text-align: center;">
            <p>請幫我拿解開檔案，謝謝!</p>
        </div>
        <div style="text-align: center;">
            <button type="button" id="hintList">Hint</button>
            <div style="list-style: none; ">
                <li id="hint1"><b></b></li>
                <li id="hint2"><b></b></li>
                <li id="hint3"><b></b></li>
            </div>
        </div>
    </div>
    <script>
        let j = 0;
        $("#hintList").click(function() {
            j++;
            switch (j) {
                case 1:
                    $("#hint1").text("1.這是一個zip偽加密的檔案");
                    break;
                case 2:
                    $("#hint2").text("2.內容經由Base64 code加密過");
                    break;
                case 3:
                    $("#hint3").text("3.內容經由Hex code加密過");
                    break;

            }
        });
    </script> -->


    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br>




    <div class="footer">
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
            </div>
        </footer>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>