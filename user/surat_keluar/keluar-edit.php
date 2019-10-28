<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Surat Keluar</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        <li><a href="index.php?page=home">Dashboard</a></li>
                        <li><a href="index.php?page=keluar-read">Surat Keluar</a></li>
                            <li class="active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<?php


include "../koneksi.php";


$id = $_GET['id'];
$sql = "SELECT * FROM surat_keluar WHERE id= '$id'";
$q = mysqli_query($db,$sql);

$row = mysqli_fetch_array($q,MYSQLI_ASSOC);

?>

        <div class="content mt-3">

        <div class="col-lg-12">
                    
                      
                        <form action="index.php?page=keluar-edit-notif&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="card">
                            <div class="card-header">
                              <strong>Edit</strong> Surat Keluar
                            </div>
                          <div class="card-body card-block">
                          <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Surat </label></div>
                            <div class="col-12 col-md-5"><input type="text" id="no_surat" name="no_surat" placeholder="" class="form-control" value="<?php echo $row['no_surat']; ?>"></div>
                          </div>
                          

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Surat</label></div>
                            <div class="col-12 col-md-3"><input type="date" id="t_surat" name="t_surat" placeholder="YYYY-MM-DD" class="form-control" value="<?php echo $row['t_surat']; ?>"></div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Perihal </label></div>
                            <div class="col-12 col-md-5"><input type="text" id="perihal" name="perihal" placeholder="" class="form-control" value="<?php echo $row['perihal']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Isi Surat </label></div>
                            <div class="col-12 col-md-5"><input type="text" id="isi_surat" name="isi_surat" placeholder="" class="form-control" value="<?php echo $row['isi_surat']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Penerima </label></div>
                            <div class="col-12 col-md-5"><input type="text" id="alamat_tujuan" name="alamat_tujuan" placeholder="" class="form-control" value="<?php echo $row['alamat_tujuan']; ?>"></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Waktu </label></div>
                            <div class="col-12 col-md-5"><input type="text" id="waktu" name="waktu" placeholder="" class="form-control" value="<?php echo $row['waktu']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat </label></div>
                            <div class="col-12 col-md-5"><input type="text" id="tempat" name="tempat" placeholder="" class="form-control" value="<?php echo $row['tempat']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lampiran </label></div>
                            <div class="col-12 col-md-5"><input type="text" id="lampiran" name="lampiran" placeholder="" class="form-control" value="<?php echo $row['lampiran']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterangan </label></div>
                            <div class="col-12 col-md-9"><textarea name="keterangan" id="keterangan" rows="9" placeholder="..." class="form-control"><?php echo $row['keterangan']; ?></textarea></div>
                          </div>

                          </div>
                          
                          
                         



                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-save"></i> Simpan
                        </button>
                        </form>

                        <a role="button" class="btn btn-primary btn-sm" href="index.php?page=keluar-read">
                        <i class="fa fa-reply"></i>
                           <font color="white">Kembali</font> </a>

</div>
                                     