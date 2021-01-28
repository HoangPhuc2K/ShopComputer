<?php

    $level = "../";
    session_start();
    $_isIndex = false;
    $_isChiTiet = true;
    $_isPhanTrang = false;
    $_isGioHang = false;
    $_isDatHang = false;
    include ($level."config.php");
    include ($level.Lib_path."DB.php");
    include ($level."Layout.php");
?>