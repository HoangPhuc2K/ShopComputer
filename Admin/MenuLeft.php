 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Menu bên trái -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Menu bên trái - Tên shop -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">BookShop</div>
  </a>

  <!-- Phân cách -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Bảng điều khiển -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo $level.Page_path."Admin.php"?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Điều Khiển</span></a>
    </li>

    <!-- Phân cách -->
    <hr class="sidebar-divider">

    <!-- Tụa đề -->
    <div class="sidebar-heading">
      Công cụ
    </div>

    <!-- Nav Item - Menu cấp 2 cài đặt-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Cài đặt web</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Custom Components:</h6>
          <a class="collapse-item" href="buttons.html">Buttons</a>
          <a class="collapse-item" href="cards.html">Cards</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Menu cấp 2 chỉnh sửa -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities-1" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Quản lý sách</span>
      </a>
      <div id="collapseUtilities-1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Chức năng quản lí sách</h6>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="2" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Thêm sách</button>
          </form>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="3" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Xoá sách</button>
          </form>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="4" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Sửa sách</button>
          </form>
        </div>
      </div>
    </li>
	
	
	 <!-- Nav Item - Menu cấp 2 thêm xóa sửa tác giả -->
   <!-- Phần này Quý-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities-quanlytacgia" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Quản lý tác giả</span>
      </a>
      <div id="collapseUtilities-quanlytacgia" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Chức năng quản lí tác giả</h6>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="5" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Thêm tác giả</button>
          </form>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="6" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Xoá tác giả</button>
          </form>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="7" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Sửa tác giả</button>
          </form>
        </div>
      </div>
    </li>
    <!--Menu them xoa sua nha xuat ban-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities-quanlynhaxuatban" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Quản lý nhà xuất bản</span>
      </a>
      <div id="collapseUtilities-quanlynhaxuatban" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Chức năng quản lí NXB</h6>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="8" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Thêm nhà xuất bản</button>
          </form>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="9" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Xoá nhà xuất bản</button>
          </form>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="10" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Sửa nhà xuất bản</button>
          </form>
        </div>
      </div>
    </li>
    <!--TaiKhoan -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities-quanlytaikhoan" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Quản lý tài khoản</span>
      </a>
      <div id="collapseUtilities-quanlytaikhoan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Chức năng quản lí tài khoản</h6>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="11" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Khoá tài khoản</button>
          </form>
          <form action="<?php echo $level.Page_path."Admin.php"?>" method="post">
            <input type="text" name = "id" value ="12" hidden = true>
            <button  class="collapse-item" style = "border: none;background-color: white;">Mở khoá tài khoản</button>
          </form>
        </div>
      </div>
    </li>
    <!-- -->

    <!-- Phân cách -->
    <hr class="sidebar-divider">

    <!-- Tưa đề -->
    <div class="sidebar-heading">
      Thống kê
    </div>

    <!-- Nav Item - Menu cấp hai các page web hiện có -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Login Screens:</h6>
          <a class="collapse-item" href="login.html">Login</a>
          <a class="collapse-item" href="register.html">Register</a>
          <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Other Pages:</h6>
          <a class="collapse-item" href="404.html">404 Page</a>
          <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Biểu đồ thống kê -->
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Biểu đồ</span></a>
      </li>

      <!-- Nav Item - Bảng danh sách khách hàng + nhân viên -->
      <li class="nav-item">
          <form action="<?php echo $level.Data_path."TimKiemSach_Data.php"?>" method="post">
            <input type="text" name = "id" value ="13" hidden = true>
            <button  class="collapse-item nav-link" style = "border: none;background-color: transparent;"> <i class="fas fa-fw fa-table"></i> Bảng sách</button>
          </form>
        </li>

        <!-- Phân cách-->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Thu nhỏ -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>