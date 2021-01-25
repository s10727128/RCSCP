<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/trophy.css" type="text/css">
  </head>
  <body>
      <div class="container">

        <!--改php-->
          <table class="table table-striped table-bordered table-condensed table-hover" >
              <caption style="text-align: center;">排行榜</caption>
              <thead>
                <tr>
                  <th scope="col">名次</th>
                  <th scope="col">姓名</th>
                  <th scope="col">分數</th>
                </tr>
              </thead>
              <?php
              require_once('../register/connect.php');
              $sql="SELECT Username,Score FROM user ORDER BY Score DESC";
              $i=1;
              $result=mysqli_query($connect,$sql);
                if(mysqli_num_rows($result) > 0)
                {
	              while($row = mysqli_fetch_assoc($result))
	              {
                $name=$row["Username"];
                $score=$row["Score"];
                echo '<tr>';
                echo '<td>'.  $i.'</td>';
                echo '<td>' . $name. '</td>';
                echo '<td>' . $score . '</td>';
                $i++;
                echo '</tr>';
                }
                echo "</table>"; 
                }
              ?>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>曹</td>
                  <td>100</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>昌</td>
                  <td>70</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td >111</td>
                  <td >12</td>
                </tr>
              </tbody>
            </table>
            <button class="exit"><a href="../test1/index.html">exit</a></button>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>