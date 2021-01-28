<br>
    <div class="row">
    <ul class="nav nav-tabs w-100 describe">
    <li class="nav-item active">
        <a class="nav-link active"  data-toggle="tab" href="#home">Mô tả</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Đánh giá</a>
    </li>
    </ul>
    <div class="tab-content w-100 ">
    <div id="home" class="tab-pane in active">
      <h3>GIỚI THIỆU SÁCH</h3>
      <?php echo $Sach[0]['MoTa'] ?>
      
    </div>
    <div id="menu1" class="tab-pane in">
      <div class="row">
          <div class ="col-6">
            <span class="heading">Xếp hạng</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>4.1 điểm trung bình 254 đánh giá</p>
            <hr style="border:3px solid #f1f1f1">
              <div class="side">
                <div>5 sao</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-5"></div>
                </div>
              </div>
              <div class="side right">
                <div>150</div>
              </div>
              <div class="side">
                <div>4 sao</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-4"></div>
                </div>
              </div>
              <div class="side right">
                <div>63</div>
              </div>
              <div class="side">
                <div>3 sao</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-3"></div>
                </div>
              </div>
              <div class="side right">
                <div>15</div>
              </div>
              <div class="side">
                <div>2 sao</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-2"></div>
                </div>
              </div>
              <div class="side right">
                <div>6</div>
              </div>
              <div class="side">
                <div>1 sao</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-1"></div>
                </div>
              </div>
              <div class="side right">
                <div>20</div>
              </div>
          </div>
          <div class ="col-6">
            <div href="" onclick="addClass(this)" class="a-rating nav-link">
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
            </div>
              <div class="col-12 write-comment pl-0 pr-0">
              <form action="<?php echo $level.Data_path."addBL.php"?>" method = "post">
                  <div class="input-group mb-3">
                      <input type="textarea" class="form-control" placeholder="Người đăng" name="NguoiDang" rows="3">
                      <input  type="textarea" class="form-control" placeholder="Nội dung bình luận" name="NoiDungBL" rows="3">
                      <input type="textarea" hidden= "true" value="<?php echo $Sach[0]['MaSach']?>" name ="idSach">
                      <div class="input-group-append">
                          <button class="btn btn-success" type="submit">
                              Gửi bình luận</button>
                      </div>
                  </div>
                  </form>
              </div>
              <?php foreach($DanhSachBL as $BL){?>
              <div class="col-12 media border p-3">
                <img src="../img/img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width: 60px;">
                <div class="media-body">
                    <h4>
                        <?php echo $BL['TenNguoiBL']?> <small><i><?php echo $BL['NgayDang']?> </i></small></h4>
                    <p>
                    <?php echo $BL['NoiDung']?> </p>
                </div>
            </div>
            <?php } ?>
          </div>
      </div>
    </div>
  </div>
 </div>
    
<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
function addClass(em){
  if(em.classList.contains("checked")== true)
    em.className = em.classList.remove('checked');
  else
    em.className = 'checked';
};
</script>