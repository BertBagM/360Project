<?php

session_start();
session_destroy();
session_start();
$_SESSION["user"] = NULL;
$_SESSION["admin"] = FALSE;
header('Location: index.php');
?>