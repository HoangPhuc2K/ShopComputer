<div class="container" id="container-content">
	<div class="row">
		<div class="col-xl-4 col-lg-4 col-md-12">
			<hr class="line">
		</div>
		<div class="col-xl-4 col-lg-4 col-md-12">
			<h3 id="title"><i class="fas fa-bars"></i> TIN TỨC - BÀI VIẾT</h3>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-12">
			<hr class="line">
		</div>
	</div>
	<div class="row">
		<?php foreach($DsBaiViet as $BaiViet) { ?>
		<div class="col-xl-3 col-lg-3 col-md-6">
			<a class="link" href="#">
				<div class="card">
					<img src="<?php echo $level.img_path.$BaiViet['HinhAnh']?>" class="card-img-top" alt="...">
					<div class="card-body">
					    <p class="card-text"><?php echo $BaiViet['TieuDe'] ?></p>
					</div>
					<div class="card-footer">
						<p class="card-text">
							<?php echo $BaiViet['NoiDung'] ?>
						</p>
					</div>
				</div>
			</a>
		</div>
		<?php }?>
	</div>
</div>