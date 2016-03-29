<?php

session_start();
session_destroy();
session_start();
$_SESSION["user"] = NULL;
header('Location: index.php');
?>