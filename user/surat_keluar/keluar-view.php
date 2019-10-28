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
                            <li class="active">View</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

<?php

include "../koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM surat_keluar WHERE id= '$id'";
$q = mysqli_query($db,$sql);

$row = mysqli_fetch_array($q,MYSQLI_ASSOC);

?>

    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>View</strong>
        </div>
    <div class="card-body card-block">
                                                     

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Surat</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['no_surat']; ?></medium></div>
                          </div>
                    

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Surat</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['t_surat']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Perihal</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['perihal']; ?></medium></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Isi Surat</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['isi_surat']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Penerima</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['alamat_tujuan']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Waktu</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['waktu']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['tempat']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lampiran</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['lampiran']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterangan</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['keterangan']; ?></medium></div>
                          </div>

                           
    
    <form action="index.php?page=keluar-read" method="post" enctype="multipart/form-data" class="form-horizontal">                      
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" href= >
            <i class="fa fa-arrow-left"></i> Kembali
        </button>
    </div>  
    </form>
                          
      
     
      




