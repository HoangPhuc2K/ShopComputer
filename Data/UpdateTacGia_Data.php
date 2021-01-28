<?php 
	include("../config.php");
	$level = "../";
	include($level.Lib_path."DB.php");
	session_start();
	$_SESSION["set_id"] = "7";
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$ma_TacGia = $_POST['MaTG'];
		$ten_TacGia = $_POST['TenTG'];
		$lienlac_TacGia = $_POST['LienLac'];
	}
	$result = DP::run_query("UPDATE `tacgia` SET `MaTG`=?,`TenTG`=?,`LienLac`=? WHERE `MaTG` = ?"
				,[$ma_TacGia,$ten_TacGia,$lienlac_TacGia,$ma_TacGia],1);
				header('location:'.$level.Page_path.'Admin.php');

 ?>