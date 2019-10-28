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
                                  <strong>Proses</strong> Edit Data
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
                        <li><a href="index.php?page=user-read">User</a></li>
                            <li class="active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


<?php
if (isset($_POST['username']))
{
include "koneksi.php";

    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $id_role = '2';
    
    if(empty($nama))
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Nama Lengkap Harus Diisi.";
                    $not4 = "index.php?page=user-edit&username=";
                    $not5 = $username;
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
    else
      if(empty($alamat))
      {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Alamat Harus Diisi.";
                    $not4 = "index.php?page=user-edit&username=";
                    $not5 = $username;
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
        
    }
    else
      if(empty($no_hp))
      {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Nomor Telpon Harus Diisi.";
                    $not4 = "index.php?page=user-edit&username=";
                    $not5 = $username;
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
    else
      if(empty($email))
      {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Email Harus Diisi.";
                    $not4 = "index.php?page=user-edit&username=";
                    $not5 = $username;
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
    else
    {
        $query = "SELECT * FROM pengguna WHERE username= '$username'";

    $cek = mysqli_query($db,$query);

    $num = mysqli_num_rows($cek);

    if($num > 0)
        {
            $query = "UPDATE pengguna SET
            nama='$nama',
            id_role = '$id_role',
            alamat = '$alamat',
            no_hp = '$no_hp',
            email = '$email'
            WHERE username='$username'"; 
        }
        else
            {
                $query = "INSERT INTO pengguna (username,nama,id_role,alamat,no_hp,email) VALUES ('$username','$nama','$id_role','$alamat','$no_hp','$email')";
            }
    
    $update = mysqli_query($db,$query);
    if($update)
        {
                    $not1 = "badge-success";
                    $not2 = "Selamat!";
                    $not3 = "Data User Berhasil Diedit.";
                    $not4 = "index.php?page=user-read";
                    $not5 = "";
                    $not6 = "Lihat Hasil";
                    $not7 = "alert-success";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
        }
        else
            {
                    $not1 = "badge-danger";
                    $not2 = "Gagal!";
                    $not3 = "gagal merubah Data User.";
                    $not4 = "index.php?page=user-edit&username=";
                    $not5 = $username;
                    $not6 = "Kembali";
                    $not7 = "alert-danger";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
            }
    }

}
else
{
                    $not1 = "badge-danger";
                    $not2 = "Gagal!";
                    $not3 = "Maaf Anda Sebelumnya Harus Mengakses Halaman Ini Pada Form Edit User.";
                    $not4 = "index.php";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-danger";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
   
}
?>

        
