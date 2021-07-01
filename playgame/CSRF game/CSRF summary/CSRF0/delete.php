<?php
    $userId = $_GET['id'];
    include('csrf0connMySQL.php');
    $sql_query = "DELETE FROM csrf0 WHERE ID = $userId";
    mysqli_query($db_link,$sql_query);
    $db_link->close();
    echo '<meta http-equiv=REFRESH CONTENT=0.25;url=csrf0index.php>';
?>