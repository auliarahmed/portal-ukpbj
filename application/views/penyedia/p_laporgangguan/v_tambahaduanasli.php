<!-- PENYEDIA -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Kirim Aduan | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
	<?php $this->load->view("penyedia/p_partials/v_head.php") ?>
</head>


<body class="theme-red">

	<!-- BEGIN LOADING -->
	<!-- Page Loader -->
	<?php $this->load->view("penyedia/p_partials/v_loading.php") ?>
	<!-- #END# Page Loader -->
	<!-- END LOADING -->

	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->

	<!-- Search Bar -->
	<?php $this->load->view("penyedia/p_partials/v_search.php") ?>
	<!-- #END# Search Bar -->

	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="<?php echo base_url()."penyedia/dashboard"?>">PORTAL - UKPBJ KAB. TANAH
					LAUT</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">

					<!-- Call Search -->
					<li><a href="javascript:void(0);" class="js-search" data-close="true"><i
								class="material-icons">search</i></a></li>
					<!-- #END# Call Search -->

					<!-- Notifications -->
					<?php $this->load->view("penyedia/p_partials/v_lonceng.php") ?>
					<!-- #END# Notifications -->

					<!-- Tasks -->
					<?php $this->load->view("penyedia/p_partials/v_bendera.php") ?>
					<!-- #END# Tasks -->

					<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
								class="material-icons">more_vert</i></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- #Top Bar -->

	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">

			<!-- User Info -->
			<?php $this->load->view("penyedia/p_partials/v_userinfo.php") ?>
			<!-- #User Info -->

			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?php echo base_url()."penyedia/dashboard"?>">
							<i class="material-icons">home</i>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">work</i>
							<span>Paket Pekerjaan</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="<?php echo base_url()."penyedia/dashboard"?>">Tender</a>
							</li>
							<li>
								<a href="<?php echo base_url()."penyedia/dashboard"?>">Non Tender</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">speaker_notes</i>
							<span>Media Informasi</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="<?php echo base_url()."penyedia/dashboard"?>">Berita</a>
							</li>
							<li>
								<a href="<?php echo base_url()."penyedia/dashboard"?>">Pengumuman</a>
							</li>
						</ul>
					</li>
					<li class="active">
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">help</i>
							<span>Pusat Bantuan</span>
						</a>
						<ul class="ml-menu">
							<li class="active">
								<a href="<?php echo base_url()."penyedia/aduan"?>">Aduan</a>
							</li>
							<li>
								<a href="<?php echo base_url()."penyedia/kisar"?>">Kritik & Saran</a>
							</li>
						</ul>
					</li>
					<li class="header">SETTINGS</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">settings</i>
							<span>Pengaturan</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="<?php echo base_url()."penyedia/pengguna"?>">Pengguna</a>
							</li>
							<li>
								<a href="<?php echo base_url()."penyedia/dashboard/logout"?>">Log Out</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- #Menu -->

			<!-- Footer -->
			<?php $this->load->view("penyedia/p_partials/v_footer.php") ?>
			<!-- #Footer -->
		</aside>
		<!-- #END# Left Sidebar -->

		<!-- Right Sidebar -->
		<?php $this->load->view("penyedia/p_partials/v_rightmenu.php") ?>
		<!-- #END# Right Sidebar -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<ol class="breadcrumb">
					<li>
						<a href="javascript:void(0);">
							<i class="material-icons">help</i> Pusat Bantuan
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="material-icons"></i> Aduan
						</a>
                    </li>
                    <li class="active">
						<a href="javascript:void(0);">
							<i class="material-icons"></i> Kirim Aduan
						</a>
					</li>
				</ol>
			</div>

            <?php if ($this->session->flashdata('success')): ?>
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('success'); ?>
							</div>
                            <?php endif; ?>
                            
			<!-- Vertical Layout | With Floating Label -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								KIRIMKAN ADUAN
								<small>Kirim aduan kepada kami, apabila anda mengalami kendala pada aplikasi SPSE
									V.4.3.</small>
							</h2>
							
							<ul class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
										role="button" aria-haspopup="true" aria-expanded="false">
										<i class="material-icons">more_vert</i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="javascript:void(0);">Action</a></li>
										<li><a href="javascript:void(0);">Another action</a></li>
										<li><a href="javascript:void(0);">Something else here</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="body">
						<div style="margin-bottom:25px;"><a href="<?php echo base_url()."penyedia/aduan"?>"
									type="button" class="btn bg-red btn-sm waves-effect">
									<i class="material-icons">arrow_back</i>
									<span><b>KEMBALI</b></span>
								</a></div>
							<form action="<?php base_url('penyedia/aduan/add') ?>" method="post"
								enctype="multipart/form-data">
								<div class="row clearfix">
									<div class="col-sm-4">
										<h2 class="card-inside-title">Kategori Aduan*</h2>
										<select class="form-control show-tick" name="kategori">
											<option value="">-- Please select --</option>
											<option value="Application">Application</option>
											<option value="E-Mail">E-Mail</option>
											<option value="ePurchasing">ePurchasing</option>
											<option value="FAQ">FAQ</option>
											<option value="Infrastructure">Infrastructure</option>
											<option value="Jadwal">Jadwal</option>
											<option value="Katalog Elektronik">Katalog Elektronik</option>
											<option value="Password">Password</option>
											<option value="Regulation">Regulation</option>
										</select>
									</div>
									<div class="col-sm-4">
										<h2 class="card-inside-title">Tipe Aduan*</h2>
										<select class="form-control show-tick" name="tipe">
											<option value="">-- Please select --</option>
											<option value="Keluhan Pengguna">Keluhan Pengguna</option>
											<option value="Pemeriksaan">Pemeriksaan</option>
											<option value="Keberatan/Penyangkalan">Keberatan/Penyangkalan</option>
											<option value="Permintaan">Permintaan</option>
										</select>
									</div>
									<div class="col-sm-4">
										<h2 class="card-inside-title">Versi Aplikasi*</h2>
										<select class="form-control show-tick" name="versi">
											<option value="">-- Please select --</option>
											<option value="LPSE Support">LPSE Support</option>
											<option value="SPSE V.4.3">SPSE V.4.3</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<h2 class="card-inside-title">Judul Aduan*</h2>
									<div class="form-line">
										<input placeholder="Masukkan Judul" type="text" id="judul" name="judul"
											class="form-control" required>
									</div>
								</div>

								<div class="form-group">
									<h2 class="card-inside-title">Deskripsi Aduan*</h2>
									</h2>
									<div class="form-line">
										<input placeholder="Masukkan Keterangan" type="text" id="judul" name="deskripsi"
											class="form-control" required>
									</div>
								</div>

								<div class="form-group">
									<h2 class="card-inside-title">File Pendukung</h2>
									<div class="form-line">
										<input type="file" accept=".jpg,.png,.bmp,.jpeg" class="form-control"
											placeholder="File Pendukung" name="file_pendukung" />
									</div>
								</div>
								<input type="submit" class="btn bg-red btn-block btn-lg waves-effect" value="KIRIM">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Vertical Layout | With Floating Label -->
		</div>
	</section>

	<!-- Jquery Core Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Select Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/node-waves/waves.js"></script>

	<!-- Autosize Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/autosize/autosize.js"></script>

	<!-- Moment Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/momentjs/moment.js"></script>

	<!-- Bootstrap Material Datetime Picker Plugin Js -->
	<script
		src="<?php echo base_url(); ?>assets/tools/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
	</script>

	<!-- Bootstrap Datepicker Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js">
	</script>

	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>assets/tools/js/pages/examples/sign-in.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/demo.js"></script>
</body>
