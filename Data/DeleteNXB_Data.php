<?php  
	include("../config.php");
	$level = "../";
	include($level.Lib_path."DB.php");
	session_start();
	$_SESSION["set_id"] = "9";
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$ma_NXB = $_POST['MaNXB'];
	}
	$result = DP::run_query("UPDATE `nhaxuatban` SET `TrangThai`=? WHERE MaNXB =?",["Yes",$ma_NXB],1);
				header('location:'.$level.Page_path.'Admin.php');
?>