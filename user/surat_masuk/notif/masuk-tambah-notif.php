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
                                  <strong>Proses</strong> Tambah Data
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
                            <li class="active">Tambah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<?php
if (isset($_POST['no_surat']) AND isset($_POST['t_diterima']) AND isset($_POST['t_surat']) AND isset($_POST['perihal']) AND isset($_POST['isi_surat']) AND isset($_POST['alamat_pengirim']) AND isset($_POST['waktu']) AND isset($_POST['tempat']) AND isset($_POST['lampiran']) AND isset($_POST['keterangan']))
{
    include "../koneksi.php";


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
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Nomor Surat Harus Diisi.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
  }
  else
  {
    if(empty($t_diterima))
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Tanggal Diterima Surat Harus Diisi.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    } 
  else
  {
    if(empty($t_surat))
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Tanggal Surat Harus Diisi.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
    else
  {
    if(empty($perihal))
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Perihal Harus Diisi.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
    else
  {
    if(empty($isi_surat))
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Isi Surat Harus Diisi.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
    else
  {
    if(empty($alamat_pengirim))
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Pengirim Harus Diisi.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
    else
  {
    if(empty($waktu))
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Waktu Surat Harus Diisi.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
    else
  {
    if(empty($tempat))
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Tempat Surat Harus Diisi.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
    else
  {
    if(empty($lampiran))
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Lampiran Surat Harus Diisi.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
    else
  {
    if(empty($keterangan))
    {
                    $not1 = "badge-warning";
                    $not2 = "Warning!";
                    $not3 = "Keterangan Surat Harus Diisi.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-warning";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
    }
      
        else
        {
                $q = "SELECT max(id) as maxId FROM surat_masuk";
                $hasil = mysqli_query($db, $q);
                $dat = mysqli_fetch_array($hasil);
                $id = $dat['maxId'];

                $id++;
         
                $query = "INSERT INTO surat_masuk (id,no_surat,t_diterima,t_surat,perihal,isi_surat,alamat_pengirim,waktu,tempat,lampiran,keterangan,user) VALUES ('$id','$no_surat','$t_diterima','$t_surat','$perihal','$isi_surat','$alamat_pengirim','$waktu','$tempat','$lampiran','$keterangan','$user')";
                $sql = mysqli_query($db, $query);
                if($sql)
                {
                    $not1 = "badge-success";
                    $not2 = "Selamat!";
                    $not3 = "Data berhasil ditambahkan.";
                    $not4 = "index.php?page=masuk-read";
                    $not5 = "";
                    $not6 = "Lihat Hasil";
                    $not7 = "alert-success";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
                }
                else
                {
                    $not1 = "badge-danger";
                    $not2 = "Gagal!";
                    $not3 = "Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                    $not4 = "index.php?page=masuk-tambah";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-danger";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
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
                    $not1 = "badge-danger";
                    $not2 = "Gagal!";
                    $not3 = "Maaf Anda Sebelumnya Harus Mengakses Halaman Ini Pada Form Tambah Surat Masuk.";
                    $not4 = "index.php";
                    $not5 = "";
                    $not6 = "Kembali";
                    $not7 = "alert-danger";
                    notif($not7,$not1,$not2,$not3,$not4,$not5,$not6);
}
