<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>List User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        <li><a href="index.php?page=home">Dashboard</a></li>
                            <li class="active">List User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>List</strong> User
        </div>
    <div class="card-body card-block">

<form action="index.php?page=user-tambah" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-plus"></i> Tambah User </button>
</form>
<br />

<?php
require_once "koneksi.php";
$query = "SELECT * FROM pengguna WHERE id_role='2'";

$data = mysqli_query($db,$query);
echo "<table class='table table-striped'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th>Username</th>";
echo "<th>Nama Lengkap</th>";
echo "<th>alamat</th>";
echo "<th>No. Telp</th>";
echo "<th>Email</th>";
echo '<th colspan="2" align="center">Tindakan</th>';
echo "</tr>";
echo "</thead>";
while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))
{
    ?>
    <tr>
    <td> <?php echo $row['username'];?> </td>
    <td> <?php echo $row['nama'];?> </td>
    <td> <?php echo $row['alamat'];?> </td>
    <td> <?php echo $row['no_hp'];?> </td>
    <td> <?php echo $row['email'];?> </td>

    <td>
    <a class="btn btn-primary" href="index.php?page=user-edit&username=<?php echo $row['username'];?>"><i class="fa fa-edit"></i></a>
        
    <a class="btn btn-danger" href="index.php?page=user-hapus-notif&username=<?php echo $row['username']; ?>"><i class="fa fa-trash"></i></a></td>

     
    </td>
    

    </tr>
<?php
}

echo "</table>";
?>


</div>
</div>

<p>Total: <?php echo mysqli_num_rows($data) ?></p>

</div>
</div>

