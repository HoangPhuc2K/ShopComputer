
<div class="container mt-3">
	<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-12">
				<hr class="line">
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12">
				<h3 id="title"><i class="fas fa-shopping-cart"></i> Đặt Hàng</h3>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-12">
				<hr class="line">
			</div>
</div>
<?php $Them = false; if($_SESSION['KTSL']){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        do{
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            $MaHD = substr(str_shuffle($permitted_chars), 0, 7);
            $KiemTra = DP::run_query("select * from `hoadon` where `MaHD` = ? ",[$MaHD],2);
            
        }while($KiemTra != null);
        do{
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            $MaKH = substr(str_shuffle($permitted_chars), 0, 7);
            $KiemTra = DP::run_query("select * from `khachhang` where `MaKH` = ? ",[$MaKH],2);
            
        }while($KiemTra != null);
        $sum = 0;
        if($check){ 
            foreach($_SESSION['GioHang'] as $item){
                $sum += ($item['Gia'] - ($item['Gia']*$item['GiamGia']))* $item['SoLuong'];
            }
        }
        $kh = DP::run_query("INSERT INTO `khachhang`(`MaKH`, `TenKH`, `DiaChi`, `SDT`) VALUES (?,?,?,?)",[$MaKH,$_POST['TenKH'],$_POST['DiaChi'],$_POST['SDT']],1);
        $hd = DP::run_query("INSERT INTO `hoadon` (`MaHD`,  `MaKH`, `TongTien`) VALUES (?,?,?)",[$MaHD,$MaKH,$sum],1);
        foreach($_SESSION['GioHang'] as $item){
            $thanhtien = $item['SoLuong'] * ($item['Gia'] - ($item['Gia'] * ($item['GiamGia'] * 100)));
            $chitiet = DP::run_query("INSERT INTO `chitiethoadon`(`MaHD`, `MaSach`, `SoLuong`, `DonGia`, `GiamGia`, `ThanhTien`) VALUES (?,?,?,?,?,?)"
            
                                    ,[$MaHD,$item['id'],$item['SoLuong'],$item['Gia'],$item['GiamGia'],$thanhtien],1);
        }
        unset($_SESSION['GioHang']);
        $Them = true;
    }else{
        if($_SESSION['KTSL'] == false){
            foreach($_SESSION['KTGH'] as $item){ 
                echo '<p> Sách:'.$item['TenSP'].' không đủ số lượng</p>';
            } 
        }
    }
}
?>
<?php if($_SESSION['KTSL'] && $Them == false){ ?>
<form class="row" method="post" enctype="multipart/form-data" action="<?php echo $level.Page_path."DatHang.php" ?>">
    <div class="col-6">
      <label for="exampleFormControlInput1">Tên khách hàng</label>
      <input class="form-control w-75" type="text" name ="TenKH" placeholder="Tên khách hàng">
      <label for="exampleFormControlInput2">Địa chỉ</label>
      <input class="form-control w-75" type="text" name = "DiaChi" placeholder="Địa chỉ">
    </div>
    <div class="col-6">
      <label for="exampleFormControlSelect2">Email</label>
      <input type="email" class="form-control w-75" name ="mailDat" placeholder="email">
      <label for="exampleFormControlSelect3">Số điện thoại</label>
      <input class="form-control w-75" type="text" name ="SDT" placeholder="Số điện thoại">
    </div>
    <button type="submit" class="btn btn-primary">Đặt</button>
  </form>
<?php }else { echo '<p>Đặt hàng thành công </p>';} ?>
</div>