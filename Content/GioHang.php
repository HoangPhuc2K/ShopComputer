<?php
  $_SESSION['KTSL'] = true;
  $check = false;
  if(isset($_SESSION['GioHang'])){
      foreach($_SESSION['GioHang'] as $item){
        if(isset($item)){
          $check = true;
          break;
        }
      }
  }
  if(isset($_POST['CapNhat'])){
    $_SESSION['GioHang'][$_POST['idSL']]['SoLuong'] = $_POST['SoLuong'];
  }
  $sum = 0;
  if($check){ 
    foreach($_SESSION['GioHang'] as $item){
      $sum += ($item['Gia'] - ($item['Gia']*$item['GiamGia']))* $item['SoLuong'];
    }
  }
?>
<div class="container mt-3">
	<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-12">
				<hr class="line">
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12">
				<h3 id="title"><i class="fas fa-shopping-cart"></i> GIỎ HÀNG</h3>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-12">
				<hr class="line">
			</div>
	</div>
<div class="container"> 
<?php
    if($check){
  ?>
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Tên sách</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:12%">Số lượng</th> 
    <th style="width:22%" class="text-center">Thành tiền</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody>
      <?php foreach($_SESSION['GioHang'] as $item){ ?>
      <tr> 
      <td data-th="Product"> 
        <div class="row"> 
        <div class="col-sm-2 hidden-xs"><img src="<?php echo $level.img_path.$item['HinhAnh'] ?>" alt="<?php echo $item['Ten'] ?>" class="img-responsive" width="75">
        </div> 
        <div class="col-sm-10"> 
          <h5 class="nomargin"><?php echo $item['Ten'] ?></h5> 
        </div> 
        </div> 
      </td> 
      <td data-th="Price"><?php echo $item['Gia'] ?></td> 
      <td data-th="Quantity">
      <form action="GioHang.php " method="post">
        <input class="form-control text-center" name="SoLuong" value="<?php echo $item['SoLuong'] ?>" type="number">
        <input type="text" name = "idSL" hidden = true value="<?php echo $item['id']?>">
        <button type="submit" name = "CapNhat" class="btn btn-info">Cập nhật</button>
      </form>
      </td> 
      <td data-th="Subtotal" class="text-center"><?php $ThanhTien = ($item['Gia'] - ($item['Gia'] * $item['GiamGia']))*$item['SoLuong']; echo $ThanhTien; ?></td> 
      <td class="actions" data-th="">
        <form action="<?php echo $level.Data_path."Delete_GioHang.php"?>" method="post">
          <input type="text" name= "id" value = "<?php echo $item['id'] ?>" hidden = true>
          <button type = "submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
          </button>
        </form>
      </td> 
      </tr> 
    <?php } ?>
  </tbody>
  <tfoot> 
      <tr class="visible-xs"> 
      </tr> 
      <tr> 
        <td><a href="<?php echo $level."index.php" ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
        </td> 
        <td colspan="2" class="hidden-xs"> </td> 
        <td class="hidden-xs text-center"><strong><?php echo "Tổng tiền : ".$sum ?></strong>
        </td> 
          <td><a href="<?php echo $level.Page_path."DatHang.php" ?>" class="btn btn-success btn-block" style="
        width: 168%;">Thanh toán <i class= "fa fa-angle-right"></i></a>
        </td> 
      </tr> 
    <?php } else { echo "<p>Giỏ hàng trống</p> ";} ?>
  </tfoot> 
 </table>
</div>
</div>