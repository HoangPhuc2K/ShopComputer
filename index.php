<?php
    $level ="";
    $_isIndex = true;
    $_isChiTiet = false;
    $_isPhanTrang = false;
    $_isGioHang = false;
    $_isDatHang = false;
    include ("config.php");
    include (Lib_path."DB.php");
    $Login = DP::run_query("select * from taikhoan",[],2);
    session_start();
    $_SESSION['id'] = false;
    $_SESSION['KiemTra'] = true;
    $_SESSION['ad'] = false;
    $_SESSION['DangKy'] = "";
    $_SESSION['HienTrangTK'] = false;
    if(isset($_POST['username']) && isset($_POST['password'])){
        $_username = $_POST['username'];
        $_password = $_POST['password'];
        foreach($Login as $in){
            if($in['TenTK'] == $_username && $in['MatKhau'] == $_password && $in['TrangThai'] == 'No' && $in['HienTrang'] == 'No'){
                $_SESSION['id'] = true;
                if($in['Quyen'] == "QuanTri"){
                    $_SESSION['ad'] = true;
                }
                else {
                    $_SESSION['ad'] = false;
                }
                break;
            }
            if($in['TenTK'] == $_username && $in['MatKhau'] == $_password && $in['TrangThai'] == 'No' && $in['HienTrang'] == 'Yes'){
                $_SESSION['id'] = true;
                $_SESSION['HienTrangTK'] = true;
                break;
            }
        }
        if($_SESSION['id']){
            if($_SESSION['HienTrangTK'] == false){
                include ("Layout.php");
            }else {
                header('location:'.$level.Page_path."Login.php");
                exit();
            }
        }
        else{
            $_SESSION['KiemTra'] = false;
            header('location:'.$level.Page_path."Login.php");
            exit();
        }
    }
    else{
        include ("Layout.php");
    }
?>