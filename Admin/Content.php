<div <?php if(isset($id) && $id == 1){ } else if(isset($id) && $id != 1){ echo "hidden = true";} ?> class="row">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4" >
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
              </div>
              <div class="col">
                <div class="progress progress-sm mr-2">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Content Row -->

<div class="row" <?php if(isset($id) && $id == 1){ } else if(isset($id) && $id != 1){ echo "hidden = true";} ?>>

  <!-- Area Chart -->
  <div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Doanh thu qua các tháng</h6>
        <div class="dropdown no-arrow">
          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Dropdown Header:</div>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="chart-area">
          <canvas id="myAreaChart"></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- Pie Chart -->
  <div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Nguồn doanh thu</h6>
        <div class="dropdown no-arrow">
          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Dropdown Header:</div>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="chart-pie pt-4 pb-2">
          <canvas id="myPieChart"></canvas>
        </div>
        <div class="mt-4 text-center small">
          <span class="mr-2">
            <i class="fas fa-circle text-primary"></i> Direct
          </span>
          <span class="mr-2">
            <i class="fas fa-circle text-success"></i> Social
          </span>
          <span class="mr-2">
            <i class="fas fa-circle text-info"></i> Referral
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Phần của phúc -->
 <!--TaiKhoan -->
<?php if(isset($id) && $id == 11){  ?>
<div  class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Danh tài khoản</h1>

  <!-- DataTales Example -->
  <!-- Link tham khảo phần table (https://startbootstrap.com/templates/sb-admin/)-->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Khoá tài khoản</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tên tài khoản</th><!--cột-->
              <th>Mật khẩu</th>
              <th>Quyền</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($TaiKhoan as $item) {
                # code...?>
                <tr>
                  <td><?php echo $item['TenTK']; ?></td><!--dòng-->
                  <td><?php echo $item['MatKhau']; ?></td>
                  <td><?php echo $item['Quyen']; ?></td>
                  <td>
                    <form action="<?php echo $level.Data_path."KhoaTaiKhoan_Data.php" ?>" method="post">
                      <input type="text" name= "TenTK" value = "<?php echo $item['TenTK'] ?>" hidden = true>
                      <button type = "submit" class="btn btn-danger btn-sm"><i class="fa fa-lock" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php }else if((isset($id) && $id != 11) || isset($id) == false ){} ?>
<?php if(isset($id) && $id == 12){  ?>
<div  class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Danh tài khoản</h1>

  <!-- DataTales Example -->
  <!-- Link tham khảo phần table (https://startbootstrap.com/templates/sb-admin/)-->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Mở tài khoản</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tên tài khoản</th><!--cột-->
              <th>Mật khẩu</th>
              <th>Quyền</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($TaiKhoanKhoa as $item) {
                # code...?>
                <tr>
                  <td><?php echo $item['TenTK']; ?></td><!--dòng-->
                  <td><?php echo $item['MatKhau']; ?></td>
                  <td><?php echo $item['Quyen']; ?></td>
                  <td>
                    <form action="<?php echo $level.Data_path."MoTaiKhoan_Data.php" ?>" method="post">
                      <input type="text" name= "TenTK" value = "<?php echo $item['TenTK'] ?>" hidden = true>
                      <button type = "submit" class="btn btn-success btn-sm"><i class="fa fa-unlock" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php }else if((isset($id) && $id != 12) || isset($id) == false ){} ?>
<!--TaiKhoan -->

<!--Sach -->
<?php if(isset($id) && $id == 13){  ?>
  <form class="row" method="post" action="<?php echo $level.Data_path."TimKiemSach_Data.php" ?>">
    <div class="col-6">
      <label for="exampleFormControlInput1">Tên sách</label>
      <input class="form-control w-75" type="text" name ="TenSach" placeholder="Tên sách">
      <label for="exampleFormControlInput2">Gía tiền</label>
      <input class="form-control w-75" type="text" name = "GiaTien" placeholder="giá tiền"> 
    </div>
    <div class = "col-6">
         <label for="exampleFormControlSelect2">Tác giả</label>
      <select class="form-control w-75" name="TacGia" id="exampleFormControlSelect1">
        <option value="">--Chọn--</option>
        <?php foreach ($TacGia as $TG) {?>
          <option value="<?php echo $TG['MaTG']?>"><?php echo $TG['TenTG']?></option>
        <?php }?>
      </select>
      <label for="exampleFormControlSelect3">Nhà xuất bản</label>
      <select class="form-control w-75" name ="NXB" id="exampleFormControlSelect1">
        <option value="">--Chọn--</option>
        <?php foreach ($NXB as $XB) {?>
          <option value="<?php echo $XB['MaNXB']?>"><?php echo $XB['TenNXB']?></option>
        <?php }?>
      </select><br>
    </div>
  <button type="submit" class="btn btn-primary">Tìm</button>
  </form>
<div  class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Danh sách sách</h1>

  <!-- DataTales Example -->
  <!-- Link tham khảo phần table (https://startbootstrap.com/templates/sb-admin/)-->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">sách</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

      <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Mã Sách</th><!--cột-->
              <th>Tên sách</th>
              <th>Số lượng tồn</th>
              <th>Hình ảnh</th>
              <th>Tác giả</th>
              <th>Loại sách</th>
              <th>Nhà xuất bản</th>
              <th>Gia tiền</th>
              <th>Tóm tắt</th>
            </tr>
          </thead>
          <tbody>
            <?php if (isset($_SESSION['TimKiem'])) { 
              foreach ($_SESSION['TimKiem'] as $item) {?>
                <tr>
                  <td><?php echo $item['MaSach']; ?></td><!--dòng-->
                  <td><?php echo $item['TenSach']; ?></td>
                  <td><?php echo $item['SoLuongTon']; ?></td>
                  <td><?php echo $item['HinhAnh']; ?></td>
                  <td><?php echo $item['MaTG']; ?></td>
                  <td><?php echo $item['MaTL']; ?></td>
                  <td><?php echo $item['MaNXB']; ?></td>
                  <td><?php echo $item['GiaSach']; ?></td>
                  <td><?php echo $item['TomTat']; ?></td>
                </tr>
              <?php }
            } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php }else if((isset($id) && $id != 13) || isset($id) == false ){} ?>
<!--Sach -->
<?php if(isset($id) && $id == 3){  ?>
<div  class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Danh Sách Sách</h1>

  <!-- DataTales Example -->
  <!-- Link tham khảo phần table (https://startbootstrap.com/templates/sb-admin/)-->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Xóa sách</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Mã Sách</th><!--cột-->
              <th>Tên sách</th>
              <th>Số lượng tồn</th>
              <th>Hình ảnh</th>
              <th>Tác giả</th>
              <th>Loại sách</th>
              <th>Nhà xuất bản</th>
              <th>Gia tiền</th>
              <th>Tóm tắt</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($Sach as $item) {
                # code...?>
                <tr>
                  <td><?php echo $item['MaSach']; ?></td><!--dòng-->
                  <td><?php echo $item['TenSach']; ?></td>
                  <td><?php echo $item['SoLuongTon']; ?></td>
                  <td><?php echo $item['HinhAnh']; ?></td>
                  <td><?php echo $item['MaTG']; ?></td>
                  <td><?php echo $item['MaTL']; ?></td>
                  <td><?php echo $item['MaNXB']; ?></td>
                  <td><?php echo $item['GiaSach']; ?></td>
                  <td><?php echo $item['TomTat']; ?></td>
                  <td>
                    <form action="<?php echo $level.Data_path."DeleteSach_Data.php" ?>" method="post">
                      <input type="text" name= "MaSach" value = "<?php echo $item['MaSach'] ?>" hidden = true>
                      <button type = "submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php }else if((isset($id) && $id != 3) || isset($id) == false ){} ?>
<?php if(isset($id) && $id == 2){ ?>
  <div>
  <form class="row" method="post" enctype="multipart/form-data" action="<?php echo $level.Data_path."InsertSach_Data.php" ?>">
    <div class="col-6">
      <label for="exampleFormControlInput1">Mã sách</label>
      <input class="form-control w-75" type="text" name ="MaSach" placeholder="Mã sách">
      <label for="exampleFormControlInput2">Tên sách</label>
      <input class="form-control w-75" type="text" name = "TenSach" placeholder="Tên sách">
      <label for="exampleFormControlInput3">Số lượng</label>
      <input class="form-control w-75" type="text" name="SoLuong" placeholder="Số lượng">
      <div class="form-group">
        <label for="exampleFormControlFile1">Chọn hình ảnh</label>
        <input type="file" class="form-control-file" name="HinhAnh" id="exampleFormControlFile1">
      </div>
      <label for="exampleFormControlSelect1">Loại sách</label>
      <select class="form-control w-75" name ="LoaiSach" id="exampleFormControlSelect1">
        <option value="">--Chọn--</option>
        <?php foreach ($LoaiSach as $Loai) {?>
          <option value="<?php echo $Loai['MaTL']?>"><?php echo $Loai['TenTL']?></option>
        <?php }?>

      </select>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Mô tả</label>
        <textarea class="form-control w-75" name="MoTa" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <div class="col-6">
      <label for="exampleFormControlSelect2">Tác giả</label>
      <select class="form-control w-75" name="TacGia" id="exampleFormControlSelect1">
        <option value="">--Chọn--</option>
        <?php foreach ($TacGia as $TG) {?>
          <option value="<?php echo $TG['MaTG']?>"><?php echo $TG['TenTG']?></option>
        <?php }?>
      </select>
      <label for="exampleFormControlSelect3">Nhà xuất bản</label>
      <select class="form-control w-75" name ="NXB" id="exampleFormControlSelect1">
        <option value="">--Chọn--</option>
        <?php foreach ($NXB as $XB) {?>
          <option value="<?php echo $XB['MaNXB']?>"><?php echo $XB['TenNXB']?></option>
        <?php }?>
      </select>
      <label for="exampleFormControlInput4">Gia tiền</label>
      <input class="form-control w-75" type="text" name="GiaTien" placeholder="Gía tiền">
      <label for="exampleFormControlInput5">Giảm giá</label>
      <input class="form-control w-75" type="text" name="GiamGia" placeholder="Giảm giá">
      <div class="form-group">
        <label for="exampleFormControlTextarea2">Tóm tắt</label>
        <textarea class="form-control w-75" name="TomTat" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
  <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Danh Sách Tác Giả</h1>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Thêm Tác Giả</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Mã Sách</th><!--cột-->
              <th>Tên sách</th>
              <th>Số lượng tồn</th>
              <th>Hình ảnh</th>
              <th>Tác giả</th>
              <th>Loại sách</th>
              <th>Nhà xuất bản</th>
              <th>Gia tiền</th>
              <th>Tóm tắt</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($Sach as $item) {
                # code...?>
                <tr>
                  <td><?php echo $item['MaSach']; ?></td><!--dòng-->
                  <td><?php echo $item['TenSach']; ?></td>
                  <td><?php echo $item['SoLuongTon']; ?></td>
                  <td><?php echo $item['HinhAnh']; ?></td>
                  <td><?php echo $item['MaTG']; ?></td>
                  <td><?php echo $item['MaTL']; ?></td>
                  <td><?php echo $item['MaNXB']; ?></td>
                  <td><?php echo $item['GiaSach']; ?></td>
                  <td><?php echo $item['TomTat']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
 <?php } else if((isset($id) && $id != 2) || isset($id) == false ){} ?>
 <?php if(isset($id) && $id == 4){ ?>
<div>

<form class="row" method="post" enctype="multipart/form-data"  action="<?php echo $level.Data_path."UpdateSach_data.php" ?>">
  <div class="col-6">
    <label for="exampleFormControlInput1">Mã sách</label>
    <input class="form-control w-75" type="text" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['MaSach'];}?>" name ="MaSach" placeholder="Mã sách">
    <label for="exampleFormControlInput2">Tên sách</label>
    <input class="form-control w-75" type="text" name = "TenSach" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['TenSach'];}?>" placeholder="Tên sách">
    <label for="exampleFormControlInput3">Số lượng</label>
    <input class="form-control w-75" type="text" name="SoLuong" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['SoLuongTon'];}?>" placeholder="Số lượng">
    <div class="form-group">
      <label for="exampleFormControlFile1">Chọn hình ảnh</label>
      <input type="text" name="HinhAnh_temp" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['HinhAnh'];}?>" hidden = true>
      <input type="file" class="form-control-file" name="HinhAnh_Sua" value="" id="exampleFormControlFile1">
    </div>
    <label for="exampleFormControlSelect1">Loại sách</label>
    <select class="form-control w-75" name ="LoaiSach" id="exampleFormControlSelect1">
      <option value="<?php if(isset($_POST['btnUp'])){ $result = DP::run_query("select * from `theLoai` where `MaTL` = ?",[$_POST['MaTL']],2); echo $result[0]['MaTL'];}?>">
      <?php if(isset($_POST['btnUp'])){ $result = DP::run_query("select * from `theLoai` where `MaTL` = ?",[$_POST['MaTL']],2); echo $result[0]['TenTL'];}
      else { echo '--Chọn--';}
      ?>
      </option>
      <?php foreach ($LoaiSach as $Loai) {?>
        <option value="<?php echo $Loai['MaTL']?>"><?php echo $Loai['TenTL']?></option>
      <?php }?>
    </select>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Mô tả</label>
      <textarea class="form-control w-75" name="MoTa" id="exampleFormControlTextarea1" rows="3"> <?php if(isset($_POST['btnUp'])){ echo $_POST['MoTa'];}?></textarea>
    </div>
  </div>
  <div class="col-6">
    <label for="exampleFormControlSelect2">Tác giả</label>
    <select class="form-control w-75" name="TacGia" id="exampleFormControlSelect1">
      <option value="<?php if(isset($_POST['btnUp'])){ $result = DP::run_query("select * from `tacgia` where `MaTG` = ?",[$_POST['MaTG']],2); echo $result[0]['MaTG'];}?>">
        <?php if(isset($_POST['btnUp'])){ $result = DP::run_query("select * from `tacgia` where `MaTG` = ?",[$_POST['MaTG']],2); echo $result[0]['TenTG'];}
        else { echo '--Chọn--';}
        ?>
      </option>
      <option value="">--Chọn--</option>
      <?php foreach ($TacGia as $TG) {?>
        <option value="<?php echo $TG['MaTG']?>"><?php echo $TG['TenTG']?></option>
      <?php }?>
    </select>
    <label for="exampleFormControlSelect3">Nhà xuất bản</label>
    <select class="form-control w-75" name ="NXB" id="exampleFormControlSelect1">
      <option value="<?php if(isset($_POST['btnUp'])){ $result = DP::run_query("select * from `nhaxuatban` where `MaNXB` = ?",[$_POST['MaNXB']],2); echo $result[0]['MaNXB'];}?>">
        <?php if(isset($_POST['btnUp'])){ $result = DP::run_query("select * from `nhaxuatban` where `MaNXB` = ?",[$_POST['MaNXB']],2); echo $result[0]['TenNXB'];}
        else { echo '--Chọn--';}
        ?>
      </option>
      <?php foreach ($NXB as $XB) {?>
        <option value="<?php echo $XB['MaNXB']?>"><?php echo $XB['TenNXB']?></option>
      <?php }?>
    </select>
    <label for="exampleFormControlInput4">Gia tiền</label>
    <input class="form-control w-75" type="text" name="GiaTien" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['GiaSach'];}?>" placeholder="Gía tiền">
    <label for="exampleFormControlInput5">Giảm giá</label>
    <input class="form-control w-75" type="text" name="GiamGia" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['GiamGia'];}?>" placeholder="Giảm giá">
    <div class="form-group">
      <label for="exampleFormControlTextarea2">Tóm tắt</label>
      <textarea class="form-control w-75" name="TomTat" id="exampleFormControlTextarea1" rows="3"> <?php if(isset($_POST['btnUp'])){ echo $_POST['TomTat'];}?></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sửa</button>
</form>

  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Sách</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sửa sách</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Mã Sách</th><!--cột-->
              <th>Tên sách</th>
              <th>Số lượng tồn</th>
              <th>Hình ảnh</th>
              <th>Tác giả</th>
              <th>Loại sách</th>
              <th>Nhà xuất bản</th>
              <th>Gia tiền</th>
              <th>Tóm tắt</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($Sach as $item) {
                # code...?>
                <tr>
                  <td><?php echo $item['MaSach']; ?></td><!--dòng-->
                  <td><?php echo $item['TenSach']; ?></td>
                  <td><?php echo $item['SoLuongTon']; ?></td>
                  <td><?php echo $item['HinhAnh']; ?></td>
                  <td><?php echo $item['MaTG']; ?></td>
                  <td><?php echo $item['MaTL']; ?></td>
                  <td><?php echo $item['MaNXB']; ?></td>
                  <td><?php echo $item['GiaSach']; ?></td>
                  <td><?php echo $item['TomTat']; ?></td>
                  <td>
                  <form action="<?php echo $level.Page_path."Admin.php" ?>" method="post">
                      <input type="text" name= "MaSach" value = "<?php echo $item['MaSach']?>" hidden = true>
                      <input type="text" name= "TenSach" value = "<?php echo $item['TenSach']?>" hidden = true>
                      <input type="text" name= "SoLuongTon" value = "<?php echo $item['SoLuongTon']?>" hidden = true>
                      <input type="text" name= "HinhAnh" value = "<?php echo $item['HinhAnh']?>" hidden = true>
                      <input type="text" name= "MoTa" value = "<?php echo $item['MoTa']?>" hidden = true>
                      <input type="text" name= "MaTG" value = "<?php echo $item['MaTG']?>" hidden = true>
                      <input type="text" name= "MaTL" value = "<?php echo $item['MaTL']?>" hidden = true>
                      <input type="text" name= "MaNXB" value = "<?php echo $item['MaNXB']?>" hidden = true>
                      <input type="text" name= "GiaSach" value = "<?php echo $item['GiaSach']?>" hidden = true>
                      <input type="text" name= "TomTat" value = "<?php echo $item['TomTat']?>" hidden = true>
                      <input type="text" name= "GiamGia" value = "<?php echo $item['GiamGia']?>" hidden = true>
                      <input type="text" name= "id" value = "4" hidden = true>
                      <button type = "submit" name="btnUp" class="btn btn-success btn-sm">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                      </button>
                  </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } else if((isset($id) && $id != 4) || isset($id) == false ){ } ?>
<!-- -->
<!--Phần thêm xóa sửa tác giả-->
<!--Phần của Quý-->

<!-- Từ đây -->

<!-- Kiểm id nếu là 6 thì là phần thêm tác giả và ẩn nó đi khỏi Admin.php -->
<?php if(isset($id) && $id == 6){  ?>
<div  class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Danh Sách Tác Giả</h1>

  <!-- DataTales Example -->
  <!-- Link tham khảo phần table (https://startbootstrap.com/templates/sb-admin/)-->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Xóa Tác Giả</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Mã Tác Giả</th><!--cột-->
              <th>Tên Tác Giả</th>
              <th>Liên Lạc</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($TacGia as $item) {
                # code...?>
                <tr>
                  <td><?php echo $item['MaTG']; ?></td><!--dòng-->
                  <td><?php echo $item['TenTG']; ?></td>
                  <td><?php echo $item['LienLac']; ?></td>
                  <td>
                    <form action="<?php echo $level.Data_path."DeleteTacGia_Data.php" ?>" method="post">
                      <input type="text" name= "MaTG" value = "<?php echo $item['MaTG'] ?>" hidden = true>
                      <button type = "submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php }else if((isset($id) && $id != 6) || isset($id) == false ){} ?>
<?php if(isset($id) && $id == 5){ ?>
  <div >


    <form class="row" method="post" action="<?php echo $level.Data_path."InsertTacGia_Data.php" ?>">
      <div class="col-6">
        <label for="exampleFormControlInput1">Mã tác giả</label><br>
        <input class="form-control w-75" type="text" name ="MaTG" placeholder="Nhập mã tác giả..."><br>
        <label for="exampleFormControlInput2">Tên tác giả</label><br>
        <input class="form-control w-75" type="text" name = "TenTG" placeholder="Nhập tên tác giả..."><br>
        <label for="exampleFormControlInput3">Liên lạc</label><br>
        <input class="form-control w-75" type="text" name="LienLac" placeholder="Nhập liên lạc..."><br>
        <button type="submit" class="btn btn-primary">Thêm</button>
      </div>
    </form>
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Danh Sách Tác Giả</h1>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Thêm Tác Giả</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Mã Tác Giả</th>
                  <th>Tên Tác Giả</th>
                  <th>Liên Lạc</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($TacGia as $item) {
                # code...?>
                <tr>
                  <td><?php echo $item['MaTG']; ?></td>
                  <td><?php echo $item['TenTG']; ?></td>
                  <td><?php echo $item['LienLac']; ?></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
 <?php } else if((isset($id) && $id != 5) || isset($id) == false ){} ?>
 <?php if(isset($id) && $id == 7){ ?>
<div>

  <form class="row" method="post" action="<?php echo $level.Data_path."UpdateTacGia_Data.php" ?>">
    <div class="col-6">

      <label for="exampleFormControlInput1">Mã tác giả</label><br>
      <input class="form-control w-75" type="text" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['MaTG'];}?>" name ="MaTG" placeholder="Nhập mã tác giả..."><br>
      <label for="exampleFormControlInput2">Tên tác giả</label><br>
      <input class="form-control w-75" type="text" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['TenTG'];}?>" name = "TenTG" placeholder="Nhập tên tác giả..."><br>
      <label for="exampleFormControlInput3">Liên lạc</label><br>
      <input class="form-control w-75" type="text" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['LienLac'];}?>" name="LienLac" placeholder="Nhập liên lạc..."><br>
      <button type="submit" class="btn btn-primary">Sửa</button>
    </div>
  </form>

  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Tác Giả</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sửa Tác Giả</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Mã Tác Giả</th>
                <th>Tên Tác Giả</th>
                <th>Liên Lạc</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($TacGia as $item) {
                # code...?>
                <tr>
                  <td><?php echo $item['MaTG']; ?></td>
                  <td><?php echo $item['TenTG']; ?></td>
                  <td><?php echo $item['LienLac']; ?></td>
                  <td>
                    <form action="<?php echo $level.Page_path."Admin.php?id=7" ?>" method="post">
                      <input type="text" name= "MaTG" value = "<?php echo $item['MaTG'] ?>" hidden = true>
                      <input type="text" name= "TenTG" value = "<?php echo $item['TenTG'] ?>" hidden = true>
                      <input type="text" name= "LienLac" value = "<?php echo $item['LienLac'] ?>" hidden = true>
                      <input type="text" name= "id" value = "7" hidden = true>
                      <button type = "submit" name="btnUp" class="btn btn-success btn-sm">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } else if((isset($id) && $id != 7) || isset($id) == false ){ } ?>
<!--Đến đây-->
<!--Phần thêm xóa sửa tác giả-->
<!--Phần của Nhật-->

<!-- Từ đây -->

<!-- Kiểm id nếu là 6 thì là phần thêm tác giả và ẩn nó đi khỏi Admin.php -->
<?php if(isset($id) && $id == 9){ ?>
<div  class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Danh Sách Nhà Xuất Bản</h1>

  <!-- DataTales Example -->
  <!-- Link tham khảo phần table (https://startbootstrap.com/templates/sb-admin/)-->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Xóa NXB</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Mã Nhà Xuất Bản</th><!--cột-->
              <th>Tên Nhà Xuất Bản</th>
              <th>Địa chỉ</th>
              <th>Điện thoại</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($NXB as $item) {
                # code...?>
                <tr>
                  <td><?php echo $item['MaNXB']; ?></td><!--dòng-->
                  <td><?php echo $item['TenNXB']; ?></td>
                  <td><?php echo $item['DIACHINXB']; ?></td>
                  <td><?php echo $item['DIENTHOAI']; ?></td>
                  <td>
                    <form action="<?php echo $level.Data_path."DeleteNXB_Data.php" ?>" method="post">
                      <input type="text" name= "MaNXB" value = "<?php echo $item['MaNXB'] ?>" hidden = true>
                      <button type = "submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } else if((isset($id) && $id != 9) || isset($id) == false ){} ?>
<?php if(isset($id) && $id == 8){ ?>
  <div>


    <form class="row" method="post" action="<?php echo $level.Data_path."InsertNXB_Data.php" ?>">
      <div class="col-6">
        <label for="exampleFormControlInput1">Mã tác nhà xuất bản</label><br>
        <input class="form-control w-75" type="text" name ="MaNXB" placeholder="Nhập mã nhà xuất bản..."><br>
        <label for="exampleFormControlInput2">Tên nhà xuất bản</label><br>
        <input class="form-control w-75" type="text" name = "TenNXB" placeholder="Nhập tên nhà xuất bản..."><br>
      </div>
      <div class="col-6">
        <label for="exampleFormControlInput3">Địa chỉ</label><br>
        <input class="form-control w-75" type="text" name="DiaChi" placeholder="Nhập địa chỉ..."><br>
        <label for="exampleFormControlInput3">Điện thoại</label><br>
        <input class="form-control w-75" type="text" name="DienThoai" placeholder="Nhập điện thoại..."><br>
      </div>
      <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Danh Sách Nhà Xuất Bản</h1>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Thêm NXB</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Mã Nhà Xuất Bản</th><!--cột-->
                  <th>Tên Nhà Xuất Bản</th>
                  <th>Địa chỉ</th>
                  <th>Điện thoại</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($NXB as $item) {
                # code...?>
                <tr>
                 <td><?php echo $item['MaNXB']; ?></td>
                 <td><?php echo $item['TenNXB']; ?></td>
                 <td><?php echo $item['DIACHINXB']; ?></td>
                 <td><?php echo $item['DIENTHOAI']; ?></td>

               </tr>
             <?php } ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>
<?php } else if((isset($id) && $id != 8) || isset($id) == false ){} ?>
<?php if(isset($id) && $id == 10){ ?>
<div >

  <form class="row" method="post" action="<?php echo $level.Data_path."UpdateNXB_Data.php" ?>">
    <div class="col-6">
      <label for="exampleFormControlInput1">Mã Nhà Xuất Bản</label><br>
      <input class="form-control w-75" type="text" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['MaNXB'];}?>" name ="MaNXB" placeholder="Nhập mã nhà xuất bản..."><br>
      <label for="exampleFormControlInput2">Tên Nhà Xuất Bản</label><br>
      <input class="form-control w-75" type="text" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['TenNXB'];}?>" name = "TenNXB" placeholder="Nhập tên nhà xuất bản..."><br>
    </div>
    <div class="col-6">
      <label for="exampleFormControlInput3">Địa Chỉ</label><br>
      <input class="form-control w-75" type="text" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['DiaChi'];}?>" name="DiaChi" placeholder="Nhập địa chỉ..."><br>
      <label for="exampleFormControlInput3">Điện Thoại</label><br>
      <input class="form-control w-75" type="text" value="<?php if(isset($_POST['btnUp'])){ echo $_POST['DienThoai'];}?>" name="DienThoai" placeholder="Nhập số điện thoại..."><br>
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
  </form>

  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Nhà Xuất Bản</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sửa NXB</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Mã Nhà Xuất Bản</th>
                <th>Tên Nhà Xuất Bản</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($NXB as $item) {
                # code...?>
                <tr>
                  <td><?php echo $item['MaNXB']; ?></td>
                  <td><?php echo $item['TenNXB']; ?></td>
                  <td><?php echo $item['DIACHINXB']; ?></td>
                  <td><?php echo $item['DIENTHOAI']; ?></td>
                  <td>
                    <form action="<?php echo $level.Page_path."Admin.php?id=10" ?>" method="post">
                      <input type="text" name= "MaNXB" value = "<?php echo $item['MaNXB'] ?>" hidden = true>
                      <input type="text" name= "TenNXB" value = "<?php echo $item['TenNXB'] ?>" hidden = true>
                      <input type="text" name= "DiaChi" value = "<?php echo $item['DIACHINXB'] ?>" hidden = true>
                      <input type="text" name= "DienThoai" value = "<?php echo $item['DIENTHOAI'] ?>" hidden = true>
                      <input type="text" name= "id" value = "10" hidden = true>
                      <button type = "submit" name="btnUp" class="btn btn-success btn-sm">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } else if((isset($id) && $id != 10) || isset($id) == false ){} ?>
<!---->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>