<?php
    include("../config.php");
    session_start();
    $_SESSION['id'] = false;
    header('location:'."../index.php")
?>