<!-- Thêm một tác giả -->
<!--Phần này Quý làm-->
<?php 
	include("../config.php");
	$level = "../";
	session_start();
	$_SESSION["set_id"] = "5";
	include($level.Lib_path."DB.php");
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$ma_TacGia = $_POST['MaTG'];
		$ten_TacGia = $_POST['TenTG'];
		$lienlac_TacGia = $_POST['LienLac'];
	}
	$result = DP::run_query("INSERT INTO `tacgia`(`MaTG`, `TenTG`, `LienLac`) VALUES (?,?,?)"
				,[$ma_TacGia,$ten_TacGia,$lienlac_TacGia],1);
				header('location:'.$level.Page_path.'Admin.php?id=5');
 ?>