<?php  
	include("../config.php");
	$level = "../";
	include($level.Lib_path."DB.php");
	session_start();
	$_SESSION["set_id"] = "3";
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$ma_Sach = $_POST['MaSach'];
	}
	$result = DP::run_query("UPDATE `sach` SET `TrangThai`=? WHERE `MaSach` = ?",["Yes",$ma_Sach],1);
	header('location:'.$level.Page_path.'Admin.php');
?>