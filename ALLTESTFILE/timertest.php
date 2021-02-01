<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="../ALLTESTFILE/timertest.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
    <?php
        echo '<p id="timer">123</p>';  
        echo '<button id="timer_btn">timer_btn</button>';
    ?>

    <!-- <p id="timer">123</p>
    <button id="timer_btn">timer_btn</button> -->

    <script>
        var second = 0;
        $("#timer_btn").click(function(){
            $("#timer").text(second);
        });
    </script>

</body>
</html>