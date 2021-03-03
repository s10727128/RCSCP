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
    <link rel="shortcut icon" href="/bird.jpg">
    <link rel="stylesheet" a href="../../CSS/playgame3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script  src="time.js"></script> -->

</head>

<body a link="blue" vlink="red">
    <div class="body2">
    <?php
    require_once("../../../Teamproject/register/connect.php");
    $starttime = time();
    $sqlgame = "UPDATE game SET  SQL_1open='$starttime' WHERE Username='$name'";
    $resultgame = mysqli_query($connect, $sqlgame);
    ?>
    <form action="" method="POST">
        <div class="instructions">
                <h1><a href="../../gamepoint/level3index.php" class="exit">


                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"  viewBox="0 0 15 20">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </a>
                    <b>LEVEL3-1</b>
                </h1>

            </div>
        <hr>

        <div>
            <a id="next_btn" style="display: none;" href="">Next</a>
        </div>
        <br>
        <div">
            <p><b>你發現了某個網站中的SQL資料庫系統沒有針對SQL injection做保護</b></p>
            <p><b>而你想嘗試去破解這個網頁的登入驗證,並窺視使用者的資料</b></p>
            <p><b>聰明的你應該知道該怎麼做吧?</b></p>
            <p><b>--試著找到使用者資料裡所提供的過關密碼--</b></p>
            <br></br>
            </div>
            <div>
    </form>
    <form action="SQL_1done.php" method="post">
        <b>通關密碼</b>
        <input type="varchar" name="Key">
        <input type="submit" name="KeySubmit" value="驗證">
    </form>
    </div>

    <br><br>
    <div class="login">
        <form id="login" method="post" action="">
            <label><b>SQL injection
                </b>
            </label>
            <input type="varchar" name="Username" id="Uname" placeholder="名稱">
            <br><br>
            <input type="password" name="Password" id="Pass" placeholder="密碼">
            <br><br>
            <input type="submit" name="submit" id="log" value="登入">
            <br><br>
        </form>
    </div>
    <br>
    </form>

    <?php
    ini_set("display_errors", 0);
    if (isset($_POST["submit"])) {
        require_once('SQL_connect.php'); //連結資料庫
        $name = $password = $pwd = '';

        $name = $_POST['Username']; //post獲取表單裡的name
        $password = $_POST['Password']; //post獲取表單裡的password


        $sql = "SELECT * FROM sqli_login WHERE Username = '$name' and Password='$password'"; //檢測資料庫是否有對應的
        $result = mysqli_query($connect, $sql); {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $KEYYYYYY = $row["KeyWord"];
                }
                echo '<div class="pass">';
                echo ("<b>注入成功!!") . '<br>';
                echo '通關密碼為<div class="fail">' . $KEYYYYYY . '</b></div><br>';
            } else {
                echo '<div class="fail">';
                echo "<b>注入失敗</b>" . '<br>';
                echo '</div>';
            }
        }
    }
    ?>


    <?php
    include("SQL_1.html");
    ?>



    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
        提示
    </button> -->

    <!-- Modal -->
    <!-- <div class="hint">
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hint</h5> -->
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    <!-- </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <p>test</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

        <br>
        <br>
        <br>
        <br>
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

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>