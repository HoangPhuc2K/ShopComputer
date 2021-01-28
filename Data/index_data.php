<?php
    $DsSachBanChay = DP::run_query("select * from sach limit 0,4",[],2);
    $DsBanChayRight = DP::run_query("select * from sach order by MaSach desc limit 0,4",[],2);
    $DsBaiViet = DP::run_query("select * from baiviet",[],2);
    $DsSach = DP::run_query("select * from sach limit 0,4",[],2);
    $DsSlideShow = DP::run_query("SELECT * FROM `slideshow` ",[],2);
    $DsSachMoi = DP::run_query("SELECT * FROM `sach` ORDER BY `sach`.`NgayNhap` DESC limit 0,3",[],2);
    $DsTheLoai = DP::run_query("select * from `theloai`",[],2);
?>