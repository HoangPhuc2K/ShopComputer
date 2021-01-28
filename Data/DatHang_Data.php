<?php
    $_SESSION['KTSL'] = true;
    foreach($_SESSION['GioHang'] as $item){
        $result = DP::run_query("select * from `sach` where `MaSach` = ?",[$item['id']],2);
        if($result[0]['SoLuongTon'] < $item['SoLuong']){
            $_SESSION['KTSL'] = false;
            $_SESSION['KTGH'][$item['id']]['TenSP'] = $item['Ten'];
        }
    }
?>