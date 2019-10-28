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
                            <li class="active">Tambah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

        <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Tambah</strong> User
                      </div>
                      <div class="card-body card-block">
                        <form action="index.php?page=user-tambah-notif" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="username" name="username" placeholder="Username" class="form-control"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-3"><input type="Password" id="password" name="password" placeholder="Password" class="form-control"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Konfirmasi Password</label></div>
                            <div class="col-12 col-md-3"><input type="Password" id="password" name="password_konfirmasi" placeholder="Password" class="form-control"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="nama" name="nama" placeholder="Nama" class="form-control"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. Telpon</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="no_hp" name="no_hp" placeholder="08xxx" class="form-control"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="email" name="email" placeholder="example@ex.com" class="form-control"><small class="form-text text-muted">*Wajib Diisi</small></div>
                          </div>

                          
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-save"></i> Simpan
                        </button>
                        </form>

                        <a role="button" class="btn btn-primary btn-sm" href="index.php?page=user-read">
                        <i class="fa fa-reply"></i>
                           <font color="white">Kembali</font> </a>