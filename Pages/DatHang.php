<?php
    $level = "../";
    session_start();
    $_isIndex = false;
    $_isChiTiet = false;
    $_isDanhMuc = false;
    $_isPhanTrang = false;
    $_isGioHang = false;
    $_isDatHang = true;
    include ($level."config.php");
    include ($level.Lib_path."DB.php");
    include ($level."Layout.php");
?>