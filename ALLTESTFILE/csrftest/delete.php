<?php
    $userId = $_GET['id'];
    include('connMySQL.php');
    $sql_query = "DELETE FROM user WHERE ID = $userId";
    mysqli_query($db_link,$sql_query);
    $db_link->close();
    header("Location: index.php");
?>