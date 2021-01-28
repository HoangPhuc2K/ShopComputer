<!--Phần Footer-->
<br>
<hr>
<div class="Footer">
	<!--Phần danh sách sản phẩm-->
	<section class="section sec_danhsach-sach">
		<div class="container cont_danhsach-sach relative">
			<div class="row row-small row_danhsach-sach">
				<!--Danh sách sản phẩm mới-->
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cot1 padding_giua_cot">
					<div class="khung-net-dut">
						<div class="padding_caccot">
							<p>
								<span style="font-size: 120%; color: blue;">Sản phẩm mới nhất</span>
							</p>
							<br>
							<ul class="ul_new-sanpham">
								<?php foreach($DsSach as $Sach){ ?>
		        				<li>
		        					<a href="<?php echo $level.Page_path."ChiTietSach.php?id=".$Sach['MaSach']?>">
		        						<img src="<?php echo $level.img_path.$Sach['HinhAnh']?>" alt="" class="size-img-book-footer">
		        						<span class="product-title"><?php echo $Sach['TenSach'] ?></span><br>
		        					</a>
		        					<span class="span_giatien">
		        						<?php echo $Sach['GiaSach'] ?>
		        						<span><u>đ</u></span>
		        					</span>
		        				</li>
		        				<br>
		        				<hr>
								<?php }?>
				    		</ul>
			    		</div>
		    		</div>
				</div>
				<!--Sách bán chạy nhất-->
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cot2 padding_giua_cot">
					<div class="khung-net-dut">
						<div class="padding_caccot">
							<p>
								<span style="font-size: 120%; color: blue;">Sách bán chạy nhất</span>
							</p>
							<br>
							<ul class="ul_new-sanpham">
								<?php foreach($DsSach as $Sach){ ?>
		        				<li>
		        					<a href="<?php echo $level.Page_path."ChiTietSach.php?id=".$Sach['MaSach']?>">
		        						<img src="<?php echo $level.img_path.$Sach['HinhAnh']?>" alt="" class="size-img-book-footer">
		        						<span class="product-title"><?php echo $Sach['TenSach'] ?></span><br>
		        					</a>
		        					<span class="span_giatien">
		        						<?php echo $Sach['GiaSach'] ?>
		        						<span><u>đ</u></span>
		        					</span>
		        				</li>
		        				<br>
		        				<hr>
								<?php }?>
				    		</ul>
				    	</div>
				    </div>
				</div>
				<!--Sách đặc sắc nhất-->
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cot3 padding_giua_cot">
					<div class="khung-net-dut">
						<div class="padding_caccot">
							<p>
								<span style="font-size: 120%; color: blue;">Sách đặc sắc nhất</span>
							</p>
							<br>
							<ul class="ul_new-sanpham">
								<?php foreach($DsSach as $Sach){ ?>
		        				<li>
		        					<a href="<?php echo $level.Page_path."ChiTietSach.php?id=".$Sach['MaSach']?>">
		        						<img src="<?php echo $level.img_path.$Sach['HinhAnh']?>" alt="" class="size-img-book-footer">
		        						<span class="product-title"><?php echo $Sach['TenSach'] ?></span><br>
		        					</a>
		        					<span class="span_giatien">
		        						<?php echo $Sach['GiaSach'] ?>
		        						<span><u>đ</u></span>
		        					</span>
		        				</li>
		        				<br>
		        				<hr>
								<?php }?>
				    		</ul>
						</div>
					</div>
				</div>
				<!--Xếp hạng sách-->
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cot4 padding_giua_cot ">
					<div class="khung-net-dut">
						<div class="padding_caccot">
							<p>
								<span style="font-size: 120%; color: blue;">Bài viết</span>
							</p>
							<br>
							<ul class="ul_xephang-sanpaham">
								<?php foreach($DsBaiViet as $BaiViet){ ?>
        		        		<li>
		        					<a href="">
		        						<img src="<?php echo $level.img_path.$BaiViet['HinhAnh']?>" alt="" class=" xephang-sach-footer">
		        						<span><h5 class="post-title is-large "><?php echo $BaiViet['TieuDe'] ?></h5></span>
		        					</a>
		        				</li>
		        				<br>
		        				<hr>
	        			        <?php }?>
		    				</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<!--Phần thông tin hỗ trợ và fabpage ở cuối trang-->
	<hr>
	<br>
	<section class="section_thongtin-hotro-fanpage container">
		<div class="row row_hotro-fanpage">
			<div class="col-lg-9 col-xs-12" style="padding-left: 20px;">
				<div class="row row-hotro">
					<div class="col-3 col-sm-3 col-xs-12" style="padding-left: 0;">
						<p><span style="font-size: 120%; color: #000000;">Hỗ trợ khách hàng</span></p>
						<p>
							<span style="color: #ff0000; font-size: 90%;">Hotline:&nbsp;
								<a href="tel:0901701202" class="ghe_chuot">0327826574</a><br>
								<span style="color: #808080;"><a href="#" class="ghe_chuot">- Hướng dẫn mua hàng.</a><br>
									<a href="#" class="ghe_chuot">- Giao nhận và thanh toán.</a><br>
									<a href="#" class="ghe_chuot">- Đổi trả và bảo hành.</a><br>
									<a href="#" class="ghe_chuot">- Đăng ký thành viên.</a><br>
									<a href="#" class="ghe_chuot">- sách bảo mật.</a>
								</span>
							</span>
						</p>
					</div>
					<div class="col-lg-2 col-xs-12">
						<p>
							<span style="font-size: 120%; color: #000000;">Về BookShop</span>
						</p>
						<p>
							<a href="#" class="ghe_chuot"><span style="font-size: 90%;">- Trang chủ.</span></a><br>
							<a href="#" class="ghe_chuot"><span style="font-size: 90%;">- Sản phẩm.</span></a><br>
							<a href="#" class="ghe_chuot"><span style="font-size: 90%;">- Tin tức.</span></a><br>
							<a href="#" class="ghe_chuot"><span style="font-size: 90%;">- Liên hệ.</span></a>
						</p>
					</div>
					<div class="col-lg-3  col-xs-12">
						<p>
							<span style="font-size: 120%; color: #000000;">Hỗ trợ thanh toán</span>
						</p>
						<p>
							<a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwiu6Jb3sOPoAhVXFo8KHXrTBGIYABACGgJzYg&ohost=www.google.com&cid=CAESQOD2z2zbduTr8-eFHboI4n_f5vW4QFBDptsBj1x0dLvO3Vv_Z8mqitccTs_JpiQp0P9w4PXUq76aGNRuf3VG3Mw&sig=AOD64_2VcvVNVK_jyPytb5O12bUb9xNMNw&q=&ved=2ahUKEwi9go_3sOPoAhVTcCsKHS0zA7gQ0Qx6BAgNEAE&adurl=" class="xoa_gachchan">
								<img class="alignnone size-full wp-image-16842" src="<?php echo $level.img_path."thanhtoan_1.png"?>" alt="">	
							</a>
							<a href="https://www.paypal.com/vn/home" class="xoa_gachchan">
								<img class="alignnone size-full wp-image-16842" src="<?php echo $level.img_path."thanhtoan_2.png"?>" alt="">
							</a>
							<a href="https://www.mastercard.com/global.html" class="xoa_gachchan">
								<img class="alignnone size-full wp-image-16842" src="<?php echo $level.img_path."thanhtoan_3.png"?>" alt="">
							</a>
							<a href="https://www.americanexpress.com/" class="xoa_gachchan">
								<img class="alignnone size-full wp-image-16842" src="<?php echo $level.img_path."thanhtoan_4.png"?>" alt="">
							</a>
							<a href="https://twitter.com/Mastercard?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="xoa_gachchan">
								<img class="alignnone size-full wp-image-16842" src="<?php echo $level.img_path."thanhtoan_5.png"?>" alt="">
							</a>
							<a href="https://www.paypal.com/vn/webapps/mpp/merchant?&gclid=Cj0KCQjw-Mr0BRDyARIsAKEFbed9A16OZMPJ7AooEQtqN3yeR0rr7OCTAG-WQKvvJ8dZfFg-H16TLzkaAqk8EALw_wcB&gclsrc=aw.ds" class="xoa_gachchan">
								<img class="alignnone size-full wp-image-16842" src="<?php echo $level.img_path."thanhtoan_6.png"?>" alt="">
							</a>
							<a href="https://visangon.com/thi-thuc-nhap-canh-viet-nam/gia-han-visa/vietnam-visa-extension-and-renewal/?gclid=Cj0KCQjw-Mr0BRDyARIsAKEFbedw2YLCsaLnR0m694d-WFRNWieUclpIVY_0RLWKvo3YNHTC08oy1RoaAh1OEALw_wcB" class="xoa_gachchan">
								<img class="alignnone size-full wp-image-16842" src="<?php echo $level.img_path."thanhtoan_7.png"?>" alt="">
							</a>
							
						</p>
					</div>
					<div class="col-lg-4  col-xs-12" style="padding-right: 0; padding-left: 30px;">
						<p>
							<span style="font-size: 120%; color: #000000;">Tải ứng dụng</span>
						</p>
						<p>
							<span style="color: #000000;">
								<strong>
									<span style="font-size: 90%;">GiuseArt Apps</span>
								</strong>
							</span><br>
							<a href="https://play.google.com/store/apps/details?id=com.google.android.gms&hl=vi" class="xoa_gachchan"><img class="wp-image-16844 alignnone" src="img/googleplay.png" alt="" width="80" height="23"></a>
							<a href="https://anhnbt.com/apps/tai-app-store/" class="xoa_gachchan"><img class="wp-image-16844 alignnone" src="<?php echo $level.img_path."appstore.png"?>" alt="" width="80" height="23"></a>
							<strong>
								<span style="font-size: 90%; color: #000000;">BookShop.com<br>
									<a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjAwZ75suPoAhUIHisKHaT8ChAYABABGgJzZg&ohost=www.google.com&cid=CAESQOD250pFftD94PHGjc9tlfks-mBWD4vzDnFka667d9a2iP5xvgwcaD1ZNIU08IuuSnL5hJiLqV5S51rosLWRTYg&sig=AOD64_2HlQFQ14UMC3tO-TT9_A3MM_XxzQ&q=&ved=2ahUKEwiHrJb5suPoAhUF4nMBHZv5B0cQ0Qx6BAgUEAE&adurl=" class="xoa_gachchan"><img class="wp-image-16844 alignnone" src="img/googleplay.png" alt="" width="80" height="23"></a>
									<a href="https://play.google.com/store/books?hl=en" class="xoa_gachchan"><img class="wp-image-16844 alignnone" src="<?php echo $level.img_path."googleplay.png"?>" alt="" width="80" height="23"></a>
								</span>
							</strong>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6  col-sm-9 col-xs-12 fabpage">
				<p>
					<span style="font-size: 120%; color: #000000;">Fanpage Facebook</span>
				</p>
				<p>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcaothang.edu.vn%2F&tabs=272&width=340&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</p>
			</div>
		</div>
	</section>
	<br>
	<!--Phần thông tin chi tiết liên hệ cuối trang-->
	<section class="section_thongtin-cuoitrang">
		<div class="thongtin-chitiet">
			<div class="container">
				<p style="margin: 0; text-align: center; font-size: 12.5px;">
					<b>THIẾT KẾ BỞI HOÀNG PHÚC,PHÚ QUÍ, ANH NHẬT<br/>
						Cao thang<br/>
						Hotline: 0327826574<br/>
						Email: 0306181157@caothang.edu.vn
					</b>
				</p>
			</div>
			<br>
		</div>
	</section>	
</div>
<div id="back-to-top" class="back-to-top" data-toggle="tooltip" data-placement="left" title="Đầu trang">
	<span class="glyphicon glyphicon-circle-arrow-up text-primary">
		<a href="#"><i class="icon-angle-up"> </i></a>
	</span>
</div>