<div class="container mt-3">
	<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-12">
				<hr class="line">
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12">
				<h3 id="title"><i class="fas fa-heart"></i> DANH MỤC</h3>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-12">
				<hr class="line">
			</div>
	</div>
	<div class="row">
			<?php if($Mang != null){ foreach($Mang as $Sach){?>
					<div class="col-xl-3 col-lg-3 col-md-6">
						<a class="link" href="<?php echo $level.Page_path."ChiTietSach.php?id=".$Sach['MaSach']?>">
							<div class="card-group">
							    <img src="<?php echo $level.img_path.$Sach['HinhAnh']?>" class="card-img-top" id="img-left"alt="...">
							    <div class="card-body">
							    	<small class="text-muted">Các loại sách khác</small>
							      	<p class="card-text characters"><?php echo $Sach['TenSach']?></p>
							    </div>
							   <div class="card-footer">
							   		<h5 id="price"><?php echo $Sach['GiaSach']?></h5>
							   </div>
							</div>
						</a>
					</div>
			<?php }}else { echo '<p style = "text-align: center; ">Không tìm thấy sách</p>';}?>
	</div>
	
	<div class="row mt-4">
			<ul class="pagination justify-content-center w-100">
				<?php if(isset($_GET['id'])){
				 if($page > 1 && $total_page > 1 ){?>
				 	<li class="page-item"><a class="page-link" href="<?php echo "PhanTrang.php?page=".($page-1)."&id=".$_GET['id']?>">Trang trước</a></li>
				<?php }
				}else{
					if($page > 1 && $total_page > 1 ){ ?>
					<li class="page-item"><a class="page-link" href="<?php echo "PhanTrang.php?page=".($page-1)."&ten=".$_GET['ten']?>">Trang trước</a></li>
				<?php }
				}
				?>
				<?php for($i = 1; $i <= $total_page ; $i++){
					if(isset($_GET['id'])){					
						if($i == $page){
							echo '<li class="page-item active"><span class="page-link">'.$i.'</span></li>';
						}
						else{
							echo '<li class="page-item active"><a class="page-link" href="PhanTrang.php?page='.$i.'&id='.$_GET['id'].'">'.$i.'</a></li>';
						}
					}else{
						if($i == $page){
							echo '<li class="page-item active"><span class="page-link">'.$i.'</span></li>';
						}
						else{
							echo '<li class="page-item active"><a class="page-link" href="PhanTrang.php?page='.$i.'&ten='.$_GET['id'].'">'.$i.'</a></li>';
						}
					}
				}?>
				<?php if(isset($_GET['ten'])){
					if($page < $total_page && $total_page > 2 ){?>
				 	<li class="page-item"><a class="page-link" href="<?php echo "PhanTrang.php?page=".($page+1)."&id=".$_GET['ten']?>?>">Trang sau</a></li>
				<?php }
				} else{ 
					if($page < $total_page && $total_page > 2 ){?>
					<li class="page-item"><a class="page-link" href="<?php echo "PhanTrang.php?page=".($page+1)."&id=".$_GET['id']?>?>">Trang sau</a></li>
					<?php }
				}?>
			</ul>
	</div>
</div>