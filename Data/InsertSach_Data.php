<?php
	include("../config.php");
	$level = "../";
	include($level.Lib_path."DB.php");
	session_start();
	$_SESSION["set_id"] = "2";
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$masach = $_POST['MaSach'];
		$tensach = $_POST['TenSach'];
		$soluong = $_POST['SoLuong'];
		$hinhanh = $_FILES['HinhAnh']['name'];
		$loaisach = $_POST['LoaiSach'];
		$mota = $_POST['MoTa'];
		$tacgia = $_POST['TacGia'];
		$nxb = $_POST['NXB'];
		$gaitien = $_POST['GiaTien'];
		$giamgia = $_POST['GiamGia'];
		$tomtat = $_POST['TomTat'];
		
	}
	$result = DP::run_query("INSERT INTO `sach`(`MaSach`, `TenSach`, `SoLuongTon`, `MoTa`, `HinhAnh`, `MaTL`, `MaTG`, `MaNXB`, `GiamGia`, `GiaSach`, `TomTat`) VALUES (?,?,?,?,?,?,?,?,?,?,?)"
				,[$masach,$tensach,$soluong,$mota,$hinhanh,$loaisach,$tacgia,$nxb,$giamgia,$gaitien,$tomtat],1);
	move_uploaded_file($_FILES['HinhAnh']['tmp_name'],"../img/".$_FILES['HinhAnh']['name']);
				header('location:'.$level.Page_path.'Admin.php');
?>