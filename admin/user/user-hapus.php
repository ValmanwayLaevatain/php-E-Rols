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
                            <li class="active">Hapus</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

<?php
if (isset($_GET['username']))
{

    require_once "koneksi.php";


    $username = $_GET['username'];
    $query = "DELETE FROM pengguna WHERE username= '$username'";
    mysqli_query($db,$query);

?>
     <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Selamat!</span> Data User berhasil dihapus.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-lg-12">
            <div class="card">
             <div class="card-header">
                <strong>Proses</strong> Hapus User
                </div>
    <div class="card-body card-block">


<form action="index.php?page=user-read" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-dot-circle-o"></i> Lihat Hasil

</button>
</form>
</div>
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
                        <strong>Proses</strong> Hapus User
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
