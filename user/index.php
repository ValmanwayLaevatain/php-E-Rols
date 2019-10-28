<?php
require_once "../ceklogin.php";
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-ROLS Electronic Recording of Letters</title>
    <meta name="description" content="E-rols">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    
    
 
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    
    
</head>
<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php?page=home"><img width="100px" height="100px" src="../images/loggoerols.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index.php?page=home"><img height="30px" src="../images/loggoerols.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php?page=home"> <i class="menu-icon fa fa-home" height="40%"></i>Dashboard </a>
                    </li>
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Rekap Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-tasks"></i><a href="index.php?page=masuk-read">Surat Masuk</a></li>
                            <li><i class="fa fa-tasks"></i><a href="index.php?page=keluar-read">Surat Keluar</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="../logout.php"> <i class="menu-icon fa fa-sign-out"></i>Logout</a>
                      </li>

                   

                
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <h3>Sistem Electronic Recording of Letters</h3>

                    </div>
                </div>
                         

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../images/user.png" alt="">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="index.php?page=user-profile"><i class="fa fa-power -off"></i>Profile</a>
                                <a class="nav-link" href="../logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    <div class="col-sm-5">
                    <?php 
                        echo $_SESSION['nama'] ;
                    ?>
                    </div>
                    </div>

                </div>
            </div>

        </header>

            <?php

             
            		if(isset($_GET['page'])){
            		$page = $_GET['page'];
            		switch ($page) {
            			case 'home':
            				include "home.php";
            				break;
                       
                        
                        case 'user-profile':
                            include "../user/profile/user-profile.php";
                            break;
                        case 'user-edit':
                            include "../user/profile/user-edit.php";
                            break;
                        case 'user-edit-notif':
                            include "../user/profile/notif/user-edit-notif.php";
                            break;
                        case 'user-password-notif':
                            include "../user/profile/notif/user-password-notif.php";
                            break;
                        
                        case 'keluar-read':
                            include "../user/surat_keluar/keluar-read.php";
                            break;
                        case 'keluar-tambah':
                            include "../user/surat_keluar/keluar-tambah.php";
                            break;
                        case 'keluar-tambah-notif':
                            include "../user/surat_keluar/notif/keluar-tambah-notif.php";
                            break;
                        case 'keluar-hapus':
                            include "../user/surat_keluar/keluar-hapus.php";
                            break;
                        case 'keluar-hapus-notif':
                            include "../user/surat_keluar/notif/keluar-hapus-notif.php";
                            break;
                        case 'keluar-edit':
                            include "../user/surat_keluar/keluar-edit.php";
                            break;
                        case 'keluar-edit-notif':
                            include "../user/surat_keluar/notif/keluar-edit-notif.php";
                            break;
                        case 'keluar-view':
                            include "../user/surat_keluar/keluar-view.php";
                            break;

                        case 'masuk-read':
                            include "../user/surat_masuk/masuk-read.php";
                            break;
                        case 'masuk-tambah':
                            include "../user/surat_masuk/masuk-tambah.php";
                            break;
                        case 'masuk-tambah-notif':
                            include "../user/surat_masuk/notif/masuk-tambah-notif.php";
                            break;
                        case 'masuk-hapus':
                            include "../user/surat_masuk/masuk-hapus.php";
                            break;
                        case 'masuk-hapus-notif':
                            include "../user/surat_masuk/notif/masuk-hapus-notif.php";
                            break;
                        case 'masuk-edit':
                            include "../user/surat_masuk/masuk-edit.php";
                            break;
                        case 'masuk-edit-notif':
                            include "../user/surat_masuk/notif/masuk-edit-notif.php";
                            break;
                        case 'masuk-view':
                            include "../user/surat_masuk/masuk-view.php";
                            break;

                        case 'depan-read':
                            include "admin/ruangan/depan/depan-read.php";
                            break;
                        case 'depan-tambah':
                            include "admin/ruangan/depan/depan-tambah.php";
                            break;
                        case 'depan-tambah-notif':
                            include "admin/ruangan/depan/notif/depan-tambah-notif.php";
                            break;
                        case 'depan-hapus':
                            include "admin/ruangan/depan/depan-hapus.php";
                            break;
                        case 'depan-hapus-notif':
                            include "admin/ruangan/depan/notif/depan-hapus-notif.php";
                            break;
                        case 'depan-edit':
                            include "admin/ruangan/depan/depan-edit.php";
                            break;
                        case 'depan-edit-notif':
                            include "admin/ruangan/depan/notif/depan-edit-notif.php";
                            break;

                        
                        
            			default:
            				include "404.php";
            				break;
            		}
            	}else{
            		include "home.php";
            	}
            ?>

    <!--/div-->

    <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="assets/js/bootbox.all.min.js"></script>
    <script src="assets/js/bootbox.min.js"></script>
    <script src="assets/js/bootbox.locales.min.js"></script>


    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

    <script>
        $(document).on("click", "#alertHapus", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            bootbox.confirm("Lanjutkan Menghapus?", function(confirmed){
                if (confirmed) {
                    window.location.href = link;
                };
            })
        })
    </script>


</body>
</html>
