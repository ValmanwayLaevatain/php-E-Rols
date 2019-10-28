<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Surat Masuk</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php?page=home">Dashboard</a></li>
                            <li><a href="index.php?page=masuk-read">Surat Masuk</a></li>
                            <li class="active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<?php
if (isset($_GET['id']) AND isset($_POST['no_surat']) AND isset($_POST['t_diterima']) AND isset($_POST['t_surat']) AND isset($_POST['perihal']) AND isset($_POST['isi_surat']) AND isset($_POST['alamat_pengirim']) AND isset($_POST['waktu']) AND isset($_POST['tempat']) AND isset($_POST['lampiran']) AND isset($_POST['keterangan']))
{
    include "../koneksi.php";


    $id = $_GET['id'];
    $no_surat = $_POST['no_surat'];
    $t_diterima = $_POST['t_diterima'];
    $t_surat = $_POST['t_surat'];
    $perihal = $_POST['perihal'];
    $isi_surat = $_POST['isi_surat'];
    $alamat_pengirim = $_POST['alamat_pengirim'];
    $waktu = $_POST['waktu'];
    $tempat = $_POST['tempat'];
    $lampiran = $_POST['lampiran'];
    $keterangan = $_POST['keterangan'];
    $user = $_SESSION['nama'];



      if(empty($no_surat))
  {
    ?>
                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Nomor Surat Harus Diisi.
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


                <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
  else
  {
    if(empty($t_diterima))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Tanggal Diterima Surat Harus Diisi.
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


                <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
  else
  {
    if(empty($t_surat))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Tanggal Surat Harus Diisi.
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


                <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    else
  {
    if(empty($perihal))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Perihal Harus Diisi.
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


                <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    else
  {
    if(empty($isi_surat))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Isi Surat Harus Diisi.
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


                <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    else
  {
    if(empty($alamat_pengirim))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Pengirim Harus Diisi.
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


                <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    else
  {
    if(empty($waktu))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Waktu Surat Harus Diisi.
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


                <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    else
  {
    if(empty($tempat))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Tempat Surat Harus Diisi.
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


                <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    else
  {
    if(empty($lampiran))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Lampiran Surat Harus Diisi.
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


                <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    else
  {
    if(empty($keterangan))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Keterangan Surat Harus Diisi.
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


                <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
        
          else
          {
            $query = "SELECT * FROM surat_masuk WHERE id= '$id'";

            $cek = mysqli_query($db,$query);

            $num = mysqli_num_rows($cek);

            if($num > 0)
            {
                $query = "UPDATE surat_masuk SET
                no_surat='$no_surat',
                t_diterima='$t_diterima',
                t_surat='$t_surat',
                perihal='$perihal',
                isi_surat='$isi_surat',
                alamat_pengirim='$alamat_pengirim',
                waktu='$waktu',
                tempat='$tempat',
                lampiran='$lampiran',
                keterangan='$keterangan',
                user='$user'
                WHERE id='$id'"; 
            }
            else
              {
                    $query = "INSERT INTO surat_masuk (id,no_surat,t_diterima,t_surat,perihal,isi_surat,alamat_pengirim,waktu,tempat,lampiran,keterangan,user) VALUES ('$id','$no_surat','$t_diterima','$t_surat','$perihal','$isi_surat','$alamat_pengirim','$waktu','$tempat','$lampiran','$keterangan','$user')";
              }

                  $sql = mysqli_query($db, $query);
                  if($sql)
                  {
                    ?>    
                    <div class="col-sm-12">
                        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                          <span class="badge badge-pill badge-success">Selamat!</span> Data berhasil diedit.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
              
                      <div class="content mt-3">
                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-header">
                                  <strong>Proses</strong> Edit Data
                                  </div>
                                      <div class="card-body card-block">
                  
                  <form action="index.php?page=masuk-read" method="post" enctype="multipart/form-data" class="form-horizontal">    
                  
                                      
                                  
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
                              <span class="badge badge-pill badge-danger">Gagal!</span> Terjadi kesalahan saat mencoba untuk menyimpan data ke database.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>

                        <div class="content mt-3">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                        <strong>Proses</strong> Edit Data
                                        </div>
                                            <div class="card-body card-block">
         

                        <form action="index.php?page=masuk-edit" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                   
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
    }

}
}
}
}
}
}
}
}
}
}

else
{
  ?>
        <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-danger">Gagal!</span> Maaf Anda Sebelumnya Harus Mengakses Halaman Ini Pada Form Edit Surat Masuk.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        <div class="content mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <strong>Proses</strong> Edit Data
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
