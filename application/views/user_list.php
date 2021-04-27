<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Pengolahan Data Sistem Informasi</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/shared/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" />
</head>
<body>


<div class="container-scroller">
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="<?php echo base_url().'index.php/users'; ?>">
            <h1>SisKaVeGa</h1> </a>
          	<a class="navbar-brand brand-logo-mini" href="<?php echo base_url().'index.php/users'; ?>">
           <h1>S</h1> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : (0341) 562411</li>
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-id"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">Indonesia</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
                
              </div>
            </li>
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
         
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Tambah Data</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Dosen [Beta]</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/users/addnew">Mahasiswa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Mata Kuliah [Beta]</a>
                  </li>
                </ul>
              </div>
            </li>
           
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  
                </div>
              </div>

            </div>
           
         
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h3 class="card-title mb-0">List Mahasiswa</h3>
                          <a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                        </div>
                        <br>
                        <div class="table-responsive">
                          
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>NIM</th>
			<th>JURUSAN</th>
			<th>ALAMAT</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($users as $user) {
			?>
			<tr>
				<td><?php echo $user->id; ?></td>
				<td><?php echo $user->nama; ?></td>
				<td><?php echo $user->nim; ?></td>
				<td><?php echo $user->jurusan; ?></td>
				<td><?php echo $user->alamat; ?></td>
				<td><a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->id;?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> &nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->id;?>" class="btn btn-danger" onClick="return konfirmasi()" ><span class="glyphicon glyphicon-edit"></span> Delete</a></td>
			</tr>
		<?php
		}?>
	</tbody>
</table>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
              </div>
            
            </div>
            
          </div>
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Ahmad Dewa Fitrah</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
        </div>
      </div>
    </div>






<script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/shared/off-canvas.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/shared/misc.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo_1/dashboard.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
<script type='text/javascript' language='JavaScript'>

 function konfirmasi(nama)
 {
 tanya = confirm('Anda yakin menghapus data ini?');
 if (tanya == true) return true;
return false;
 }</script>

</body>
</html>