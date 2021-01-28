<div class="container" id="container-content">

		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-12">
				<hr class="line">
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12">
				<h3 id="title"><i class="fas fa-heart"></i> SÁCH BÁN CHẠY</h3>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-12">
				<hr class="line">
			</div>
		</div>
		<div class="row">
			<div class="col-xl-9 col-lg-9">
				<div class="row">
				<?php foreach($DsSachBanChay as $BanChay){ ?>
					<div class="col-xl-3 col-lg-3 col-md-6">
						<a class="link" href="<?php echo $level.Page_path."ChiTietSach.php?id=".$BanChay['MaSach']?>">
							<div class="card">
							    <img src="<?php echo $level.img_path.$BanChay['HinhAnh']?>" class="card-img-top" id="img-left"alt="...">
							    <div class="card-body">
							    	<small class="text-muted">Các loại sách khác</small>
							      	<p class="card-text characters"><?php echo $BanChay['TenSach']?></p>
							    </div>
							    <div class="card-footer">
							     	<h5 id="price"><?php echo $BanChay['GiaSach']?></h5>
							    </div>
							</div>
						</a>
					</div>
				<?php }?>
				</div>
				</div>
					<div class="col-xl-3 col-lg-3">
						<div class="row" id="row-right">
							<ul class="col-right">
							<?php foreach($DsBanChayRight as $RBanChay){ ?>
								<li>
									<a class="link" href="<?php echo $level.Page_path."ChiTietSach.php?id=".$RBanChay['MaSach']?>">
										<div class="row">
											<div class="col-5">
												<img src="<?php echo $level.img_path.$RBanChay['HinhAnh']?>"  class="img-right" alt="...">
											</div>
											<div class="col-7">
												<span><?php echo $RBanChay['TenSach']?></span> <br>
												<span id="price"><?php echo $RBanChay['GiaSach']?></span>
												<hr class="benphai">
											</div>
										</div>
									 </a>
								</li>
								<?php }?>
							</ul>
						</div>
					</div>

		</div>
</div>