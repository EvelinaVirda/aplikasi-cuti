<!DOCTYPE html>
<html> 
  <head>
    <title>Aplikasi Cuti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="<?php echo base_url() ?>assets/bootstrap/css/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>assets/assets/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="#">Aplikasi Cuti</a></h1>
                </div>
             </div>
              <div class="col-md-5">
                <div class="row">
                  <div class="col-lg-12">
                  <form id="form1" name="form1" method="post" action="cari.php">
                      <div class="input-group form">
                        <input name="cari" class="form-control" type="text" id="cari" size="50" placeholder="Search..."/>
                        <span class="input-group-btn">
                        <input class="btn btn-primary" type="submit" name="Submit" value="Search" />
                        </span>
                      </div>
                  </form>
                  </div>
                </div>
             </div>
             <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
                      </ul>
                    </nav>
                </div>
             </div>
          </div>
       </div>
  </div>
  <!--<h2>Hai, <?php echo $this->session->set_userdata("ses_nama"); ?></h2>-->
      <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="submenu">
                         <a href="table.php">
                            <i class="glyphicon glyphicon-list"></i> Data User
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="<?php echo base_url('admin/data_admin') ?>">Data Admin</a></li>
                         </ul>
                         <ul>
                            <li><a href="<?php echo base_url('admin/data_pimpinan') ?>">Data Pimpinan</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url('admin/data_karyawan') ?>">Data Karyawan</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('admin/tambah_data_user') ?>"><i class="glyphicon glyphicon-thumbs-up"></i>Tambah User</a></li>
                    <li><a href="<?php echo base_url('admin/pengajuan_cuti') ?>"><i class="glyphicon glyphicon-thumbs-up"></i> Pengajuan Cuti</a></li>
                    
             </div>
      </div>
 