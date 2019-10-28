<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>My Profile</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php?page=home">Dashboard</a></li>
                            <li class="active">My Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

<?php

include "../koneksi.php";

$username = $_SESSION['username'];
$sql = "SELECT * FROM pengguna WHERE username= '$username'";
$q = mysqli_query($db,$sql);

$row = mysqli_fetch_array($q,MYSQLI_ASSOC);

?>

    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>My profile</strong>
        </div>
    <div class="card-body card-block">
                                                     

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['username']; ?></medium></div>
                          </div>
                    

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['nama']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['alamat']; ?></medium></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">No Telpon</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['no_hp']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['email']; ?></medium></div>
                          </div>

                           
    
    <form action="index.php?page=user-edit" method="post" enctype="multipart/form-data" class="form-horizontal">                      
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" href= >
            <i class="fa fa-edit"></i> Edit
        </button>
    </div>  
    </form>
                          
      
     
      




