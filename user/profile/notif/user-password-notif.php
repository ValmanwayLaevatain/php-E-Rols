<?php 
function notif($r1,$r2,$r3,$r4,$r5,$r6,$r7){
      ?>
                      <div class="col-sm-12">
                      <div class="alert <?php echo $r1; ?> alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill <?php echo $r2; ?>"><?php echo $r3; ?></span> <?php echo $r4; ?>.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="card">
                              <div class="card-header">
                                  <strong>Proses</strong> Edit My Profile
                                  </div>
                                  <div class="card-body card-block">


                      <form action="<?php echo $r5; ?><?php echo $r6; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                         
                              <button type="submit" class="btn btn-primary btn-sm" href= >
                                 <?php echo $r7; ?>
                                </button>
                                </form>
                                </div>
                                </div>
                                </div>
                                </div>
                  <?php

      }
      ?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        <li><a href="index.php?page=home">Dashboard</a></li>
                        <li><a href="index.php?page=user-profile">User</a></li>
                            <li class="active">Edit My Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">



<?php
include "../koneksi.php";


    $username = $_SESSION['username'];
    $password_lama = md5($_POST['password_lama']);
    $password_baru = $_POST['password_baru'];
    $password_konfirmasi = $_POST['password_konfirmasi'];

    $cek = $db->query("SELECT password FROM pengguna WHERE password='$password_lama'");

    if($cek->num_rows)
    {
        if(strlen($password_baru) >= 5)
        {
            if($password_baru == $password_konfirmasi)
            {
                $password_baru = md5($password_baru);

                $update = $db->query("UPDATE pengguna SET password='$password_baru' WHERE username='$username'");
                if($update)
                {
                    $not1 = "badge-success";
                    $not2 = "Selamat!";
                    $not3 = "Password Berhasil diedit.";
                    $not4 = "index.php?page=user-profile";
                    $not5 = "";
                    $not6 = "Lihat Hasil";
                    $not7 = "alert-success";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
                }
                else
                {
                    $not1 = "badge-danger";
                    $not2 = "Gagal!";
                    $not3 = "Gagal merubah password.";
                    $not4 = "index.php?page=user-edit";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-danger";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
                }

            }
            else
            {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Konfirmasi password tidak cocok.";
                    $not4 = "index.php?page=user-edit";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
            }
        }
        else
        {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Minimal password baru adalah 5 karakter.";
                    $not4 = "index.php?page=user-edit";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
        }
    }
    else
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Password lama tidak cocok.";
                    $not4 = "index.php?page=user-edit";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }

?>
