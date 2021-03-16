<?php
include("../header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/test.css">
    <title>Document</title>
</head>
<body>
<br><br><br><br>

 <!-- myChart -->
<div class="myChart">
<canvas id="myChart" ></canvas>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'radar',

    // The data for our dataset
    data: {
        labels: ['XSS', 'Phishing', 'SQL', 'CSRF', 'MISC'],
        datasets: [{
            label: '關卡PR值(%)',
            borderColor: '#FFD700',
            data: [99,70, 80, 60, 80],
            borderWidth: 1,
            backgroundColor: [
                'rgba(255, 215, 0, 0.5)',
                // 'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ]
            
        },  {
            label: '總平均值(%)',
            borderColor: '#98FB98',
            data: [50,30, 72, 34, 55],
            borderWidth: 1,
            backgroundColor: [
                'rgba(144, 238, 144, 0.5)',
                // 'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ]},
    
    
    ]
        
    },


    // datasets: [{
    //         label: '總平均值(%)',
    //         backgroundColor: '#98FB98',
    //         data: [50,30, 72, 34, 55],
    //         borderWidth: 1,
    //     }]

    // Configuration options go here    
    options: {
        scale: {
        angleLines: {
            display: false
        },
        ticks: {
            suggestedMin: 0,
            suggestedMax: 100,
            stepSize:20,
        }
    }
    }

});
    </script>
    
</body>
</html>