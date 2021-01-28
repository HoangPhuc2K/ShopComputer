  <?php
    session_start();
    if(isset($_POST['id'])){
      $id = $_POST['id'];
    }
    if(isset($_SESSION['set_id'])){
      $id = $_SESSION['set_id'];
      unset($_SESSION['set_id']);
    }
  ?>
  <!DOCTYPE html>
  <html lang="vi">
  <?php 
    $level = "../";
    include ("../config.php");
    include ($level.Lib_path."DB.php");
    include ($level.Admin_path."Head.php");
  ?>

  <body id="page-top">

            <?php
              include ($level.Data_path."LoadAdmin_Data.php");
              include ($level.Admin_path."MenuLeft.php");
              include ($level.Admin_path."TopHeader.php");
              include ($level.Admin_path."Content.php");
            ?>
            

    </div>
    <?php
      include ($level.Admin_path."Footer.php");
    ?>
          


    </body>

    </html>
