<?php
    $code = $_POST['codeforgot'];
    $email = $_POST['codeforgottemp'];
    $level = "../";
    include $level."config.php";
    include $level.Lib_path."PHPMailer-5.2.26/class.smtp.php";
    include $level.Lib_path."PHPMailer-5.2.26/class.phpmailer.php";
    include $level.Lib_path."DB.php";
    if($code != ""){
        $result = DP::run_query("select * from `taikhoan` where Code = ? and TenTK = ?",[$code,$email],2);
        var_dump($result);
        if(count($result) > 0){
            if($email != ""){
                $nFrom = "BookShop.com";    //mail duoc gui tu dau, thuong de ten cong ty ban
                $mFrom = '12a122lt18@gmail.com';  //dia chi email cua ban 
                $mPass = 'hoangphuc123';       //mat khau email cua ban
                $nTo = $email; //Ten nguoi nhan
                $mTo = $email;   //dia chi nhan mail
                $mail = new PHPMailer();
                $code = $result[0]['MatKhau'];
                $body = "PassWord:".$code ;   // Noi dung email
                $title = 'Mật khẩu khôi phục';   //Tieu de gui mail
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
                    header('location:'.$level.Page_path.'Login.php');
                }
            }
        }
    }
?>