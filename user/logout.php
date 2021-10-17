<?php
session_start();
session_destroy();
header("Location: /RCSCP/index.php");
?>