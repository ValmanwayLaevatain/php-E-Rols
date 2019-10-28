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
                ?>
                <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Selamat!</span> Password berhasil diedit.
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


                <form action="index.php?page=user-profile" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-home"></i> Dashboard
                          </button>
                          </form>
                          </div>
                          </div>
                          </div>
                          </div>
                    
                <?php
                }
                else
                {
                ?>

                <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-danger">Gagal!</span> Gagal merubah password.
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


                <form action="index.php?page=user-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-arrow-left"></i> Kembali
                          </button>
                          </form>
                          </div>
                          </div>
                          </div>
                          </div>

                <?php
                }

            }
            else
            {
            ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Konfirmasi password tidak cocok.
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


                <form action="index.php?page=user-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-arrow-left"></i> Kembali
                          </button>
                          </form>
                          </div>
                          </div>
                          </div>
                          </div>
               
            
            <?php
            }
        }
        else
        {
        ?>

             <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Minimal password baru adalah 5 karakter.
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


                <form action="index.php?page=user-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-arrow-left"></i> Kembali
                          </button>
                          </form>
                          </div>
                          </div>
                          </div>
                          </div>
        
        <?php
        }
    }
    else
    {
    ?>

         <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Password lama tidak cocok.
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


                <form action="index.php?page=user-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-arrow-left"></i> Kembali
                          </button>
                          </form>
                          </div>
                          </div>
                          </div>
                          </div>
    <?php
    }

?>