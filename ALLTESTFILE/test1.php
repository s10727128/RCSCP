<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localstorge + JSON test</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="test1.js"></script>
    
</head>
<body>
    <?php
        echo '<div style="text-align: right;">
                <button style="text-align: right;" onclick="Clear()" id="clear_btn">Clear all</button>
            </div>';


        ini_set("display_errors", 0);
        $id = $_GET["id"];
        $name = $_GET["name"];
        $fraction = $_GET["fraction"];

        echo '<form action="test1.php" method="GET">
            <input name="id" id="id" value="">
            <input name="name" id="name" value="">
            <input name="fraction" id="fraction" value="">
            <input type="submit" id="btn_add" onclick="Add()" value="新增">
         </form><br>';
        //echo "Your answer is: " .$id." ".$name." ".$fraction;
    ?>

    <div class="data_area">
        <div class="datatable">


            <div class="data">
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>積分</th>
                </tr>
            </div>

            <div class="data">
                <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                </tr>
            </div>
        </div>
    </div>

</body>
</html>