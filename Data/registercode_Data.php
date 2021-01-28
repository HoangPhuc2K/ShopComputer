<?php
    $code = $_POST['coderegister'];
    $email = $_POST['coderegistertemp'];
    var_dump($code);
    var_dump($email);
    $level = "../";
    include $level."config.php";
    include $level.Lib_path."PHPMailer-5.2.26/class.smtp.php";
    include $level.Lib_path."PHPMailer-5.2.26/class.phpmailer.php";
    include $level.Lib_path."DB.php";
    if(strlen($code) > 0){
        $result = DP::run_query("select * from `taikhoan` where Code = ? and TenTK = ?",[$code,$email],2);
        var_dump(count($result));
        if(count($result) > 0){
            $result = DP::run_query("UPDATE `taikhoan` SET `KichHoat`= ? WHERE `TenTK` = ?",["Yes",$email],1);
            header('location:'.$level.Page_path."Login.php");
        }
    }
?>