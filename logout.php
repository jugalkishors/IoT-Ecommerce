<?php
session_start();

unset($_SESSION["uid"]);
unset($_SESSION["sid"]);


header('location:index.php');

session_write_close();
?>
