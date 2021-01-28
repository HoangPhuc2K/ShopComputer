<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = DP::run_query("select count(*) as dem from `sach` where MaTL = ? ",[$id],2);
    }
    if(isset($_GET['ten'])){
       $ten = $_GET['ten'];
        $result = DP::run_query("select count(*) as dem from `sach` where TenSach LIKE '%".$ten."%'",[],2);
    }
    
    $row = $result[0]['dem'];
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 8;
    $total_page = ceil($row / $limit);
    if($page > $total_page){
        $page = $total_page;
    } 
    else if($page < 1){

        $page = 1;
    }
    $start = ($page - 1) * $limit;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if($row > 0){
            $Mang = DP::run_query("select  * from `sach` where MaTL = ? limit ?,?",[$id,$start,$limit],2);
        }
        else{
            $Mang = null;
        }
    }
    if(isset($_GET['ten'])){
        $ten = $_GET['ten'];
        if($row > 0){
            $Mang = DP::run_query("select  * from `sach` where TenSach LIKE  '%".$ten."%' limit ?,? ",[$start,$limit],2);
        }
        else{
            $Mang = null;
        }
    }
?>