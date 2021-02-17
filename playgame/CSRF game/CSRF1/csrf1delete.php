<?php
    $userId = $_GET['id'];
    include('csrf1connMySQL.php');
    $sql_query = "DELETE FROM csrf1 WHERE ID = $userId";
    mysqli_query($db_link,$sql_query);
    $db_link->close();
    header("Location: csrf1index.php");
?>