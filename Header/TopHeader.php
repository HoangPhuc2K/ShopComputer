
<div class="TopHeader fixed-top">
    <div class ="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo $level."index.php"?>"><img class="" src="<?php echo $level.icon_path."logo1.png"?>" alt="Logo website"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Danh mụac sách
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">
                    </a>
                    <?php foreach($LYLoaiSach as $Loai){ ?>
                        <a class="dropdown-item" href="<?php echo $level.Page_path."PhanTrang.php?id=".$Loai['MaTL'] ?>"><?php echo $Loai['TenTL'] ?></a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Tác giả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Sư kiện</a>
                </li>
                </ul>
                <ul class ="my-2 my-lg-0 navbar-nav" >
                <li class="nav-item Login dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="bi bi-person-fill" width="2em" height="1em" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php if(isset($_SESSION['id']) && $_SESSION['id']  == false){ ?>
                    <a class="dropdown-item" href="<?php echo $level.Page_path."Login.php"?>">
                        <svg class="bi bi-box-arrow-in-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z" clip-rule="evenodd"/>
                        </svg> Đăng Nhập
                    </a>
                    <a class="dropdown-item" href="<?php echo $level.Page_path."register.php"?>">
                        <svg class="bi bi-person-plus-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7.5-3a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V5.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M13 7.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
                        </svg> Đăng Kí
                    </a>
                    <?php } else{?>  <?php if(isset($_SESSION['ad']) && $_SESSION['ad'] == true){?>
                    <a class="dropdown-item" href="<?php echo $level.Page_path."Admin.php" ?>">
                        <svg class="bi bi-box-arrow-in-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z" clip-rule="evenodd"/>
                        </svg> Quản lý web
                    </a>
                    <?php
                        }
                    ?>
                        
                    <a class="dropdown-item" href="#">
                        <svg class="bi bi-box-arrow-in-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z" clip-rule="evenodd"/>
                        </svg> Thông tin tài khoản
                    </a>
                    <a class="dropdown-item" href="<?php echo $level.Data_path."LogOut_data.php" ?>">
                        <svg class="bi bi-person-plus-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7.5-3a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V5.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M13 7.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
                        </svg> LogOut
                    </a>
                    <?php }?>
                    </div> 

                </li>
                    <li class="nav-item Login dropdown">
                        <a class="nav-link" href="<?php echo $level.Page_path."GioHang.php" ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <svg class="bi bi-bag-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                            </svg>
                            <?php 
                                $check = false;
                                if(isset($_SESSION['GioHang'])){
                                    $check = true;
                                }
                            ?>
                            <?php if($check== true && count($_SESSION['GioHang']) > 0){
                                echo '<span class="badge badge-danger badge-counter">'.count($_SESSION['GioHang']).'</span>';
                            }?>
                        </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="<?php echo $level.Page_path."PhanTrang.php?Ten=1" ?>" method="get">
                <input class="form-control mr-sm-2" type="search" name = "ten" placeholder="Nhập tên sách" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm</button>
                </form>
            </div>
        </nav>
    </div>
</div>
<div>
<br><br>
<br><br>
</div>
