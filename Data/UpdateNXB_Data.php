<?php 
	include("../config.php");
	$level = "../";
	include($level.Lib_path."DB.php");
	session_start();
	$_SESSION["set_id"] = "10";
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$ma_NXB = $_POST['MaNXB'];
		$ten_NXB = $_POST['TenNXB'];
		$diachi = $_POST['DiaChi'];
		$dienthoai = $_POST['DienThoai'];
	}
	$result = DP::run_query("UPDATE `nhaxuatban` SET `MaNXB`=?,`TenNXB`=?,`DIACHINXB`=?,`DIENTHOAI`=? WHERE MaNXB =?"
				,[$ma_NXB,$ten_NXB,$diachi,$dienthoai,$ma_NXB],1);
				header('location:'.$level.Page_path.'Admin.php');
 ?>