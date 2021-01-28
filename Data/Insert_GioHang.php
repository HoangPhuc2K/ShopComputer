<?php
    $level = "../";
    include ($level."config.php");
    include ($level.Lib_path."DB.php");
    session_start();
    $id = $_POST['idSach_1'];
    $result = DP::run_query("select * from `sach` where MaSach = ?",[$id],2);
    if(count($result) > 0){
        $idSach = $result[0]['MaSach'];
        $Ten = $result[0]['TenSach'];
        $Gia = $result[0]['GiaSach'];
        $HinhAnh = $result[0]['HinhAnh'];
        $GiamGia = $result[0]['GiamGia'];
    }
    if(isset($_SESSION['GioHang'][$id])){
        $_SESSION['GioHang'][$id]['SoLuong'] += 1; 
    }
    else{
        $_SESSION['GioHang'][$id]['id'] = $idSach;
        $_SESSION['GioHang'][$id]['Ten'] = $Ten;
        $_SESSION['GioHang'][$id]['Gia'] = $Gia;
        $_SESSION['GioHang'][$id]['SoLuong'] = 1;
        $_SESSION['GioHang'][$id]['HinhAnh'] = $HinhAnh;
        $_SESSION['GioHang'][$id]['GiamGia'] = $GiamGia;
    }
    header('location:'.$level.Page_path."GioHang.php");
?>