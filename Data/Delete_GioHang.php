<?php
    session_start();
    $id = $_POST['id'];
    if(isset($_POST['id'])){
        unset($_SESSION['GioHang'][$id]);
    }
    header('location:'."../Pages/GioHang.php");
    exit();
?>