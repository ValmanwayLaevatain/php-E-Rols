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


        <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Selamat!</span> Data User berhasil diedit.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-lg-12">
            <div class="card">
             <div class="card-header">
                <strong>Proses</strong> Edit My Profile
    <div class="card-body card-block">

<form method="get">


<?php
include "../koneksi.php";


    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $id_role = '2';
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    



    $query = "SELECT * FROM pengguna WHERE username= '$username'";

    $cek = mysqli_query($db,$query);

    $num = mysqli_num_rows($cek);

    if($num > 0)
    {
        $query = "UPDATE pengguna SET
        nama='$nama',
        id_role = '$id_role',
        alamat='$alamat',
        no_hp='$no_hp',
        email='$email'
        WHERE username='$username'"; 
    }
    else
    {
          $query = "INSERT INTO pengguna (username,nama,id_role,alamat,no_hp,email) VALUES ('$username','$nama','$id_role','$alamat','$no_hp','$email')";
    }

   

    mysqli_query($db,$query);

?>

</form>

                <form action="index.php?page=user-profile" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-home"></i> Dashboard
                          </button>
                          </form>

</div>
</div>
</div>
