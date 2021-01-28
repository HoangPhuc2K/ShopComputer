<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/admin.min.css" rel="stylesheet">

</head>
<?php 
  $level = "../";
  include $level."config.php";
  include $level.Lib_path."PHPMailer-5.2.26/class.smtp.php";
  include $level.Lib_path."PHPMailer-5.2.26/class.phpmailer.php";
  include $level.Lib_path."DB.php";
  $email = $_POST['emailforgot'];
  if($email != ""){
    $nFrom = "BookShop.com";    //mail duoc gui tu dau, thuong de ten cong ty ban
    $mFrom = '12a122lt18@gmail.com';  //dia chi email cua ban 
    $mPass = 'hoangphuc123';       //mat khau email cua ban
    $nTo = $email; //Ten nguoi nhan
    $mTo = $email;   //dia chi nhan mail
    $mail = new PHPMailer();
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    $code = substr(str_shuffle($permitted_chars), 0, 7);
    $result = DP::run_query("UPDATE `taikhoan` SET `Code`= ? WHERE `TenTK` = ?",[$code,$email],1);
    if($result > 0){
      $body = "code:".$code ;   // Noi dung email
      $title = 'Mã khôi phục';   //Tieu de gui mail
      $mail->IsSMTP();             
      $mail->CharSet  = "utf-8";
      $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
      $mail->SMTPAuth   = true;    // enable SMTP authentication
      $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
      $mail->Host       = "smtp.gmail.com";    // sever gui mail.
      $mail->Port       = 465;         // cong gui mail de nguyen
      // xong phan cau hinh bat dau phan gui mail
      $mail->Username   = $mFrom;  // khai bao dia chi email
      $mail->Password   = $mPass;              // khai bao mat khau
      $mail->SetFrom($mFrom, $nFrom);
      $mail->AddReplyTo('12a122lt18@gmail.com', 'BookShop.com'); //khi nguoi dung phan hoi se duoc gui den email nay
      $mail->Subject    = $title;// tieu de email 
      $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
      $mail->AddAddress($mTo, $nTo);
      // thuc thi lenh gui mail 
      if(!$mail->Send()) {
          echo '';
          
      } else {
          
          echo '';
      }
    }
    else{
      echo '';
    }
  }
?>
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Quên mật khẩu?</h1>
                    <p class="mb-4">Nhập code được gửi <br> Mật khẩu sẽ được gửi về email cửa bạn</p>
                  </div>
                  <form class="user" action = "<?php echo $level.Data_path."forgot_Data.php" ?>" method = "POST">
                    <div class="form-group">
                      <input type="value" name = "codeforgot"class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nhập code">
                      <input type="value" name = "codeforgottemp" value = "<?php echo $email ?>"class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" hidden = true >
                    </div>
                    <input type="submit" value="Gửi" class="btn btn-primary btn-user btn-block">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?php echo 'register.php' ?>">Tạo tài khoản!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo 'Login.php' ?>">Bạn đã có tài khoản? Đăng nhập!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
