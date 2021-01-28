<?php
    include("../config.php");
	$level = "../";
    include($level.Lib_path."DB.php");
    session_start();
	$_SESSION["set_id"] = "4";
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$masach = $_POST['MaSach'];
		$tensach = $_POST['TenSach'];
		$soluong = $_POST['SoLuong'];
		if(strlen($_FILES['HinhAnh_Sua']['name']) == 0){
			$hinhanh = $_POST['HinhAnh_temp'];
		}
		else{
			$hinhanh = $_FILES['HinhAnh_Sua']['name'];
			move_uploaded_file($_FILES['HinhAnh_Sua']['tmp_name'],"../img/".$_FILES['HinhAnh_Sua']['name']);
		}
		$loaisach = $_POST['LoaiSach'];
		$mota = $_POST['MoTa'];
		$tacgia = $_POST['TacGia'];
		$nxb = $_POST['NXB'];
		$giatien = $_POST['GiaTien'];
		$giamgia = $_POST['GiamGia'];
		$tomtat = $_POST['TomTat'];
	}
	$result = DP::run_query("UPDATE `sach` SET `TenSach`= ?,`SoLuongTon`= ? ,`MoTa`= ? ,`HinhAnh`= ? ,`MaTL`= ? ,`MaTG`= ? ,`MaNXB`= ?,`GiamGia`= ?,`GiaSach`=? ,`TomTat`= ? WHERE `MaSach` = ?"
                ,[$tensach,$soluong,$mota,$hinhanh,$loaisach,$tacgia,$nxb,$giamgia,$giatien,$tomtat,$masach],1);
     header('location:'.$level.Page_path.'Admin.php');
?>