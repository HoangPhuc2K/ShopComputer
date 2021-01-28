<?php  
	include("../config.php");
	$level = "../";
    include($level.Lib_path."DB.php");
    session_start();
    $_SESSION["set_id"] = "13";
	if(($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['TenSach']) && isset($_POST['GiaTien']))){
        if( strlen($_POST['TenSach']) > 0 &&  strlen($_POST['GiaTien']) > 0 && strlen($_POST['TacGia']) > 0 && strlen($_POST['NXB']) > 0){
            $TenSach = $_POST['TenSach'];
            $Gia = $_POST['GiaTien'];
            $tacgia = $_POST['TacGia'];
		    $nxb = $_POST['NXB'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `TenSach` like '%".$TenSach."%' and `GiaSach` = ? and `MaTG` = ? and `MaNXB` = ?",[$Gia,$tacgia,$nxb],2);
        }
        if( strlen($_POST['TenSach']) > 0 &&  strlen($_POST['GiaTien']) > 0 && strlen($_POST['TacGia']) > 0 && strlen($_POST['NXB']) == 0){
            $TenSach = $_POST['TenSach'];
            $Gia = $_POST['GiaTien'];
            $tacgia = $_POST['TacGia'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `TenSach` like '%".$TenSach."%' and `GiaSach` = ? and `MaTG` = ?",[$Gia,$tacgia],2);
        }
        if( strlen($_POST['TenSach']) > 0 &&  strlen($_POST['GiaTien']) > 0 && strlen($_POST['TacGia']) == 0 && strlen($_POST['NXB']) > 0){
            $TenSach = $_POST['TenSach'];
            $Gia = $_POST['GiaTien'];
		    $nxb = $_POST['NXB'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `TenSach` like '%".$TenSach."%' and `GiaSach` = ? and `MaNXB` = ?",[$Gia,$nxb],2);
        }
        if( strlen($_POST['TenSach']) > 0 &&  strlen($_POST['GiaTien']) > 0 && strlen($_POST['TacGia']) == 0 && strlen($_POST['NXB']) == 0){
            $TenSach = $_POST['TenSach'];
            $Gia = $_POST['GiaTien'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `TenSach` like '%".$TenSach."%' and `GiaSach` = ?",[$Gia],2);
        }
        if( strlen($_POST['TenSach']) > 0 &&  strlen($_POST['GiaTien']) == 0 && strlen($_POST['TacGia']) > 0 && strlen($_POST['NXB']) > 0){
            $TenSach = $_POST['TenSach'];
            $tacgia = $_POST['TacGia'];
		    $nxb = $_POST['NXB'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `TenSach` like '%".$TenSach."%' and `MaTG` = ? and `MaNXB` = ?",[$tacgia,$nxb],2);
        }
        if( strlen($_POST['TenSach']) > 0 &&  strlen($_POST['GiaTien']) == 0 && strlen($_POST['TacGia']) > 0 && strlen($_POST['NXB']) == 0){
            $TenSach = $_POST['TenSach'];
            $tacgia = $_POST['TacGia'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `TenSach` like '%".$TenSach."%' and `MaTG` = ? ",[$tacgia],2);
        }
        if( strlen($_POST['TenSach']) > 0 &&  strlen($_POST['GiaTien']) == 0 && strlen($_POST['TacGia']) == 0 && strlen($_POST['NXB']) == 0){
            $TenSach = $_POST['TenSach'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `TenSach` like '%".$TenSach."%' ",[],2);
        }
        if( strlen($_POST['TenSach']) == 0 &&  strlen($_POST['GiaTien']) == 0 && strlen($_POST['TacGia']) == 0 && strlen($_POST['NXB']) == 0){
            $_SESSION['TimKiem'] = null;
        }
        if( strlen($_POST['TenSach']) == 0  &&  strlen($_POST['GiaTien']) == 0 && strlen($_POST['TacGia']) == 0 && strlen($_POST['NXB']) > 0){
		    $nxb = $_POST['NXB'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `MaNXB` = ? ",[$nxb],2);
        }
        if( strlen($_POST['TenSach']) == 0  &&  strlen($_POST['GiaTien']) == 0 && strlen($_POST['TacGia']) > 0 && strlen($_POST['NXB']) > 0){
            $nxb = $_POST['NXB'];
            $tacgia = $_POST['TacGia'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `MaNXB` = ? and `MaTG` = ?",[$nxb,$tacgia],2);
        }
        if( strlen($_POST['TenSach']) == 0  &&  strlen($_POST['GiaTien']) == 0 && strlen($_POST['TacGia']) > 0 && strlen($_POST['NXB']) == 0){
            $tacgia = $_POST['TacGia'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `MaTG` = ?",[$tacgia],2);
        }
        if( strlen($_POST['TenSach']) == 0  &&  strlen($_POST['GiaTien']) > 0 && strlen($_POST['TacGia']) == 0 && strlen($_POST['NXB']) == 0){
            $Gia = $_POST['GiaTien'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `GiaSach` = ?",[$Gia],2);
        }
        if( strlen($_POST['TenSach']) == 0  &&  strlen($_POST['GiaTien']) > 0 && strlen($_POST['TacGia']) == 0 && strlen($_POST['NXB']) > 0){
            $Gia = $_POST['GiaTien'];
            $nxb = $_POST['NXB'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `GiaSach` = ? and `MaNXB` = ?",[$Gia,$nxb],2);
        }
        if( strlen($_POST['TenSach']) == 0  &&  strlen($_POST['GiaTien']) > 0 && strlen($_POST['TacGia']) > 0 && strlen($_POST['NXB']) == 0){
            $tacgia = $_POST['TacGia'];
            $Gia = $_POST['GiaTien'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `GiaSach` = ? and `MaTG` = ?",[$Gia,$tacgia],2);
        }
        if( strlen($_POST['TenSach']) == 0  &&  strlen($_POST['GiaTien']) > 0 && strlen($_POST['TacGia']) > 0 && strlen($_POST['NXB']) > 0){
            $tacgia = $_POST['TacGia'];
            $Gia = $_POST['GiaTien'];
            $nxb = $_POST['NXB'];
            $_SESSION['TimKiem'] = DP::run_query("select * from `sach` where `GiaSach` = ? and `MaTG` = ? and `MaNXB`",[$Gia,$tacgia,$nxb],2);
        }
    }
    else {
        $_SESSION['TimKiem'] = DP::run_query("select * from `sach` ",[],2);
    }
    header('location:'.$level.Page_path.'Admin.php');
?>