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

<?php
if (isset($_GET['username']))
{
    include "koneksi.php";

      $username = $_GET['username'];
      $sql = "SELECT * FROM pengguna WHERE username= '$username'";
      $q = mysqli_query($db,$sql);

      $row = mysqli_fetch_array($q,MYSQLI_ASSOC);
?>

  <div class="content mt-3">

        <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit</strong> User
                      </div>
                      <div class="card-body card-block">

   <form action="index.php?page=user-edit-notif" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="username" name="username" placeholder="Username" class="form-control" readonly value="<?php echo $row['username']; ?>"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" value="<?php echo $row['nama']; ?>"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control" value="<?php echo $row['alamat']; ?>"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. Telpon</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="no_hp" name="no_hp" placeholder="08xxx" class="form-control" value="<?php echo $row['no_hp']; ?>"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="email" name="email" placeholder="example@ex.com" class="form-control" value="<?php echo $row['email']; ?>"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                    
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-save"></i> Simpan
                        </button>
                        <a role="button" class="btn btn-primary btn-sm" href="index.php?page=user-read">
                        <i class="fa fa-reply"></i>
                           <font color="white">Kembali</font> </a>
</div>
</form>
</div>
</div>
</div>
</div>


<?php


include "koneksi.php";


$username = $_GET['username'];
$sql = "SELECT * FROM pengguna WHERE username= '$username'";
$q = mysqli_query($db,$sql);

$row = mysqli_fetch_array($q,MYSQLI_ASSOC);

?>

 <div class="content mt-3">

        <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Password</strong> <small> (Abaikan jika tidak ingin diedit)</small>
                      </div>
                      <div class="card-body card-block">

                       <form action="index.php?page=user-password-notif" method="post" enctype="multipart/form-data" class="form-horizontal">
                       <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
                        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password Lama</label></div>
                            <div class="col-12 col-md-5"><input type="password" id="password" name="password_lama" placeholder="******" class="form-control"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password Baru</label></div>
                            <div class="col-12 col-md-5"><input type="password" id="password" name="password_baru" placeholder="******" class="form-control"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Konfirmasi Password</label></div>
                            <div class="col-12 col-md-5"><input type="password" id="password" name="password_konfirmasi" placeholder="******" class="form-control"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-save"></i> Simpan
                        </button>
                        <a role="button" class="btn btn-primary btn-sm" href="index.php?page=user-read">
                        <i class="fa fa-reply"></i>
                           <font color="white">Kembali</font> </a>

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
                  <span class="badge badge-pill badge-danger">Gagal!</span> Maaf Anda Sebelumnya Harus Mengakses Halaman Ini Pada Form User.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        <div class="content mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <strong>Proses</strong> Edit User
                        </div>
                            <div class="card-body card-block">
       

        <form action="index.php" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-arrow-left"></i> Kembali
                          
                          </button>
                          </form>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
        <?php
}
?>