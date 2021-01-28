<?php  
	include("../config.php");
	$level = "../";
	include($level.Lib_path."DB.php");
	session_start();
	$_SESSION["set_id"] = "6";
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$ma_TacGia = $_POST['MaTG'];
	}
	$result = DP::run_query("UPDATE `tacgia` SET `TrangThai`=? WHERE `MaTG` = ?",["Yes",$ma_TacGia],1);
	header('location:'.$level.Page_path.'Admin.php');
?>