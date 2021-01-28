<?php  
	include("../config.php");
	$level = "../";
	include($level.Lib_path."DB.php");
	session_start();
	$_SESSION["set_id"] = "11";
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$TenTK = $_POST['TenTK'];
	}
	$result = DP::run_query("UPDATE `taikhoan` SET `HienTrang`= ? WHERE `TenTK` = ?",["Yes",$TenTK],1);
	header('location:'.$level.Page_path.'Admin.php');
?>