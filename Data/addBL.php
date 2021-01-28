<?php
    include("../config.php");
    $level = "../";
    include($level.Lib_path."DB.php");
    $MaSach = $_POST['idSach'];
    $NguoiDang = $_POST['NguoiDang'];
    $NoiDung = $_POST['NoiDungBL'];
    $result = DP::run_query("INSERT INTO `binhluan`(`TenNguoiBL`, `NoiDung`, `SoSao`, `MaKH`, `MaSach`) VALUES (?,?,?,?,?)"
                        ,[$NguoiDang,$NoiDung,"5",null,$MaSach],1);
    header('location:'.$level.Page_path.'ChiTietSach.php?id='.$MaSach);
?>