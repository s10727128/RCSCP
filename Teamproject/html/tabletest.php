
<script src='//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
<script src='//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js'></script>
<link href='//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css' rel='stylesheet'></link>

<table id="myTable" class="display">
    <meta charset="utf-8">
    <thead>
        <tr>
            <th>名次</th>
            <th>暱稱</th>
            <th>分數</th>
        </tr>
    </thead>

    <tbody>
        <!-- <tr> -->
            <!-- <td><i class="fa fa-angle-double-down"></i></td>
            <td>&lt;i class="fafa-angle-double-down"&gt;&lt;/i&gt;</td>
            <td>&amp;#xf103;</td>
            <td>content: "\f103";</td> -->
            <?php
      require_once('../register/connect.php');
      //搜尋所有帳號,如有管理員帳號,使用NOT IN排除搜尋--------------------------------
      $sqlall = "SELECT Username,Score,Nickname  FROM user ORDER BY Score DESC";
      $resultall = mysqli_query($connect, $sqlall);
      $rank=array();
      $i=1;
      $r=0;
      $user = @$_SESSION['Username']; 
      if (mysqli_num_rows($resultall) > 0) {
        #排行判斷--------------------------------------------
        while ($row = mysqli_fetch_array($resultall)) {
          $name = $row["Username"];
          $score = $row["Score"];
          $Nickname=$row["Nickname"];
          $rank[$r]=$row["Score"];
          if($r==0){
          }
          else{
          if($rank[$r]==$rank[$r-1])
          {
            $i=$i;
          }
          else{
            $i++;
          }
        }

        $sqlrank="UPDATE user SET  Rank='$i' WHERE Username='$name'";
        $resultrank = mysqli_query($connect, $sqlrank);
        echo '<tr>';
        if(!isset($_POST["search_button"])){
           #顯示所有資料---------------------------------------
          if($user==$name){
            echo '<thead class="table-success">';
            echo '<td >'. $i . '</td>';
            echo '<td>' . $Nickname. '</td>';
            echo '<td>' . $score. '</td>';
            echo '</thead>';
            
          }
          else{
            echo '<td>' . $i . '</td>';
            echo '<td>' . $Nickname. '</td>';          
            echo '<td>' . $score . '</td>';
          }

          //$i++;
          $r++;
        }
    }
}
    ?>
        </tr>
    </tbody>
</table>



<script>
    $('#myTable').DataTable({
        language: {
            searching: true,
            "emptyTable": "無資料...",
            "processing": "處理中...",
            "loadingRecords": "載入中...",
            "lengthMenu": "每頁 _MENU_ 筆資料",
            "zeroRecords": "無搜尋結果",
            "info": "_START_ 至 _END_ / 共 _TOTAL_ 筆",
            "infoEmpty": "尚無資料",
            "infoFiltered": "(從 _MAX_ 筆資料過濾)",
            "infoPostFix": "",
            "search": "搜尋字串:",
            "paginate": {
                "first": "首頁",
                "last": "末頁",
                "next": "下頁",
                "previous": "前頁"
            },
            "aria": {
                "sortAscending": ": 升冪",
                "sortDescending": ": 降冪"
            }
        }
    });
</script>
 <!-- Bootstrap core JavaScript -->
 <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src='//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js'></script>  
  <link href='//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css' rel='stylesheet'></link>
  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="../js/scrolling-nav.js"></script>