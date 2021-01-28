<?php 
    $MaSach = $_GET['id'];
    $Sach = DP::run_query("select * from sach where MaSach = ?",[$MaSach],2);
    $DanhSachBL = DP::run_query("select * from binhluan where MaSach = ?",[$MaSach],2);
?>
