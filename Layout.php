<!DOCTYPE html>
<html lang="vi">
<?php
    include_once ($level.Header_path."Head.php");
?>
<body>
    <?php
        include ($level.Data_path."LoadLayout.php");
        include ($level.Header_path."TopHeader.php");
        if($_isIndex){
            include ($level.Data_path."index_data.php");
            include ($level.Content_path."SlideShow.php");
            include ($level.Content_path."DanhMucSach.php");
            include ($level.Content_path."SachBanChay.php");
            include ($level.Content_path."TinTucBaiViet.php");
            include ($level.Content_path."DoiTac.php"); 
            include ($level.Footer_path."Dangky.php");

        }
        if($_isChiTiet){
            include ($level.Data_path."index_data.php");
            include ($level.Data_path."chitiet_data.php");
            include ($level.Content_path."ThongTinSanPham.php");
        }
        if($_isPhanTrang){
            include ($level.Data_path."index_data.php");
            include ($level.Data_path."PhanTrang_Data.php");
            include ($level.Content_path."PhanTrang.php");
        }
        if($_isGioHang){
            include ($level.Data_path."index_data.php");
            include ($level.Content_path."GioHang.php");
        }
        if($_isDatHang){
            include ($level.Data_path."index_data.php");
            include ($level.Data_path."DatHang_Data.php");
            include ($level.Content_path."FromDatHang.php");
        }

        include ($level.Footer_path."Footer.php");
    ?>
</body>
</html>