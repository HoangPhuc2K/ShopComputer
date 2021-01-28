
<div class="container">
    <div class = "row">
    <div class="col-lg-9 col-md-12">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $level.img_path.$Sach[0]['HinhAnh']?>" class="d-block w-100" alt="Thông tin sách">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="category.html">Các loại sản phẩm khác</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thông tin sản phẩm</li>
                </ol>
            </nav>
            <h3><?php echo $Sach[0]['TenSach'] ?></h3>
            <hr>
            <a href="" class="a-rating nav-link">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </a>
            <span id="f" style="font-weight:bold;color:red"><?php echo $Sach[0]['GiaSach'] ?><span class="woocommerce-Price-currencySymbol">₫</span></span>
            <p><?php echo $Sach[0]['TomTat'] ?></p>
            <hr>
            <div class="row">
                <div class="col-6">
                    <form action="<?php echo $level.Data_path."Insert_GioHang.php"?>" method="POST">
                        <input type="submit" name = "btnThem" value="Thêm giỏ hàng" class="btn btn-warning">
                        <input type="value" name = "idSach_1" value = "<?php echo $MaSach?>"hidden = true>
                    </form>
                </div>
                <div class="col-6">
                    <form action="" method="post">
                        <input type="submit" value="Mua ngay" class="btn btn-danger">
                        <input type="value" name = "idSach_2" value = "<?php echo $MaSach?>" hidden = true>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <?php include ($level.Content_path."MoTaDanhGia.php");?>
        </div>
        <div class ="col-lg-3 hidden">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase">Sản Phẩm Mới</div>
                    <ul class="list-group category_block">
                    <?php foreach($DsSachMoi as $item){ ?>
                        <li class="list-group-item">
                            <a href="<?php echo $level.Page_path."ChiTietSach.php?id=".$item['MaSach']?>" class="a-link">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                        <img src="<?php echo $level.img_path.$item['HinhAnh']?>" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text"><?php echo $item['TenSach'] ?></p>
                                                <span id="f" style="font-weight:bold;color:red"><?php echo $item['GiaSach'] ?> <span class="woocommerce-Price-currencySymbol">₫</span></span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </a>
                        </li>
                    <?php }?>
                    </ul>
                </div>
                <div class="card-header bg-primary text-white text-uppercase">DANH MỤC SẢN PHẨM</div>
                    <ul class="list-group category_block">
                     <?php foreach($DsTheLoai as $item){ ?>
                        <li class="list-group-item"><a href="<?php echo $level.Page_path."PhanTrang.php?id=".$item['MaTL']?>" class="a-link"><?php echo $item['TenTL']?></a></li>
                     <?php } ?>
                    </ul>
                    <div class="card-header bg-primary text-white text-uppercase">Bài viết</div>
                    <ul class="list-group category_block">
                    <?php foreach($DsBaiViet as $item){ ?>
                        <li class="list-group-item">
                            <a href="" class="a-link">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                        <img src="<?php echo $level.img_path.$item['HinhAnh']?>" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text"><?php echo $item['TieuDe'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </a>
                        </li>
                     <?php } ?>
                    </ul>
                </div>
                </div>   
            </div>
        </div>
    </div>
</div>