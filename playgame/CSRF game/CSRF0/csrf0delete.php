<?php
    $userId = $_GET['id'];
    include('csrf0connMySQL.php');
    $sql_query = "DELETE FROM csrf0 WHERE ID = $userId";
    mysqli_query($db_link,$sql_query);
    $db_link->close();
    header("Location: csrf0index.php");
?>