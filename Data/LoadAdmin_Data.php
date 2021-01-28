<?php
	$Sach = DP::run_query("select * from `sach` where `TrangThai` = 'No'",[],2);
	$LoaiSach = DP::run_query("select * from `theloai` where `TrangThai` = 'No'",[],2);
	$TacGia = DP::run_query("select * from `tacgia` where `TrangThai` = 'No'",[],2);
	$NXB = DP::run_query("select * from `nhaxuatban` where `TrangThai` = 'No'",[],2);
	$TaiKhoan = DP::run_query("select * from `taikhoan` where `HienTrang` = 'No' and `Quyen` != 'QuanTri' and `TrangThai` = 'No'",[],2);
	$TaiKhoanKhoa = DP::run_query("select * from `taikhoan` where `HienTrang` = 'Yes' and `Quyen` != 'QuanTri' and `TrangThai` = 'No'",[],2);
?>