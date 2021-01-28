<?php
    include ("../config.php");
    $level = "../";
    include ($level.Lib_path."DB.php");
    include $level.Lib_path."PHPMailer-5.2.26/class.smtp.php";
    include $level.Lib_path."PHPMailer-5.2.26/class.phpmailer.php";
    session_start();
    $ten = $_POST['UserName'];
    $_SESSION['Username'] = $ten;
    $matkhau = $_POST['PassWord'];
    $nmatkhau = $_POST['PassWord_f'];
    $quyen = "KH";
    $result_1 = DP::run_query("select * from `taikhoan` where TenTK like ?",[$ten],2);
    if(count($result_1) == 0){
        if($matkhau == $nmatkhau){
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            $code = substr(str_shuffle($permitted_chars), 0, 7);
            $result_2 = DP::run_query("INSERT INTO `taikhoan`(`TenTK`, `MatKhau`, `Quyen`,`Code`,`KichHoat`) VALUES (?,?,?,?,?)",[$ten,$matkhau,$quyen,$code,"No"],1);
            if($ten != ""){
                $nFrom = "BookShop.com";    //mail duoc gui tu dau, thuong de ten cong ty ban
                $mFrom = '12a122lt18@gmail.com';  //dia chi email cua ban 
                $mPass = 'hoangphuc123';       //mat khau email cua ban
                $nTo = $ten; //Ten nguoi nhan
                $mTo = $ten;   //dia chi nhan mail
                $mail = new PHPMailer();
                if($result_2 > 0){
                    $body = "code:".$code ;   // Noi dung email
                    $title = 'Mã đang ký';   //Tieu de gui mail
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
                header('location:'.$level.Page_path."register_code.php");
        }
        else{
            $_SESSION['DangKy'] = "Mật khẩu không khớp";
            header('location:'.$level.Page_path."register.php");
        }
    }
    else{
        $_SESSION['DangKy'] = "Eamil đã tồn tại ! Xin nhập 1 email khác";
        header('location:'.$level.Page_path."register.php");
    }
    
?>