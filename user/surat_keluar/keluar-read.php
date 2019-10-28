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
                            <li class="active">Surat Keluar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Rekap</strong> Surat Keluar
        </div>
    <div class="card-body card-block">

 

<form action="index.php?page=keluar-tambah" method="post" enctype="multipart/form-data" class="form-horizontal">    
                
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-plus"></i> Tambah Data </button>
<a href="../user/pdf_surat-keluar.php" class="btn btn-warning btn-sm">
                          <i class="fa fa-print"></i> Download </button></a>
</form>
                
                       
<br />

<?php
require_once "../koneksi.php";
$query = "SELECT * FROM surat_keluar";
$nomor=0;

$data = mysqli_query($db,$query);
echo "<table class='table table-striped'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th>No.</th>";
echo "<th>Tanggal Surat</th>";
echo "<th>Nomor Surat</th>";
echo "<th>Isi Surat</th>";
echo "<th>Penerima</th>";
echo "<th>Waktu</th>";
echo "<th>Tempat</th>";
echo "<th colspan='3' align='center'>Action</th>";
echo "</tr>";
echo "</thead>";
while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))
{
    $nomor++;
    echo "<tr>";
    echo "<td>".$nomor."</td>";
    echo "<td>".$row['t_surat']."</td>";
    echo "<td>".$row['no_surat']."</td>";
    echo "<td>".$row['isi_surat']."</td>";
    echo "<td>".$row['alamat_tujuan']."</td>";
    echo "<td>".$row['waktu']."</td>";
    echo "<td>".$row['tempat']."</td>";

    
    $href = "index.php?page=keluar-edit&id=".$row['id'];
    $btn = "<a class='btn btn-primary' href='$href'><i class='fa fa-edit'></i></a>";
    echo "<td>".$btn;

    $href1 = "index.php?page=keluar-hapus-notif&id=".$row['id'];
    $btn1 = "<a class='btn btn-danger' href='$href1'><i class='fa fa-trash'></i></a>";
    echo $btn1;

    $href2 = "index.php?page=keluar-view&id=".$row['id'];
    $btn2 = "<a class='btn btn-success' href='$href2'><i class='fa fa-eye'></i></a>";
    echo $btn2."</td>";
    echo "</tr>";
    
}
echo "</table>";
?>


</div>
</div>

<p>Total: <?php echo mysqli_num_rows($data) ?></p>

</div>
</div>

