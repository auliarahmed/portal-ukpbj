<!-- PPE -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Kelola Akun Pengguna (PPE) | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
	<?php $this->load->view("nonpenyedia/non_partials/v_head.php") ?>
</head>

<body class="theme-red">
	<!-- BEGIN LOADING -->
	<!-- Page Loader -->
	<?php $this->load->view("nonpenyedia/non_partials/v_loading.php") ?>
	<!-- #END# Page Loader -->
	<!-- END LOADING -->

	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->

	<!-- Search Bar -->
	<?php $this->load->view("nonpenyedia/non_partials/v_search.php") ?>
	<!-- #END# Search Bar -->

	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="<?php echo base_url()."nonpenyedia/dashboard"?>">PORTAL - UKPBJ KAB. TANAH
					LAUT</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- Call Search -->
					<li>&nbsp;</li>
					<!-- #END# Call Search -->
					<!-- Notifications -->
					<iframe scrolling="no" frameborder="no" clocktype="html5"
						style="overflow:hidden;border:0;margin:0;padding:0;width:151px;height:50px;"
						src="https://www.clocklink.com/html5embed.php?clock=008&timezone=GMT0800&color=red&size=151&Title=&Message=&Target=&From=2019,1,1,0,0,0&Color=red"></iframe>
					<?php $this->load->view("nonpenyedia/non_partials/v_lonceng.php") ?>
					<!-- #END# Notifications -->
				</ul>
			</div>
		</div>
	</nav>
	<!-- #Top Bar -->

	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">

			<!-- User Info -->
			<?php $this->load->view("nonpenyedia/non_partials/v_userinfo.php") ?>
			<!-- #User Info -->

			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="header">MENU</li>
					<li>
						<a href="<?php echo base_url()."nonpenyedia/dashboard"?>">
							<i class="material-icons">home</i>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="material-icons">work</i>
							<span>Kelola Paket Pekerjaan</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="material-icons">speaker_notes</i>
							<span>Kelola Pusat Informasi</span>
						</a>
					</li>
					<li>
					<li class="active">
						<a href="<?php echo site_url("ppe/kelolaakun");?>">
							<i class="material-icons">account_box</i>
							<span>Kelola Akun Pengguna</span>
						</a>
					</li>

					<!-- FITUR -->
					<li class="header">FITUR</li>
					<li>
						<a href="<?php echo base_url()."nonpenyedia/apkisad"?>">
							<i class="material-icons">question_answer</i>
							<span>Kelola Kritik & Saran</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url()."nonpenyedia/ujianonline"?>">
							<i class="material-icons">spellcheck</i>
							<span>Kelola CAT - Ujian Online UKPBJ</span>
						</a>
					</li>

					<!-- AKUN -->
					<li class="header">PENGATURAN</li>
					<a href="<?php echo site_url("nonpenyedia/pengguna"); ?>">
						<i class="material-icons">account_box</i>
						<span>Profil Pengguna</span>
					</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">help</i>
							<span>Pusat Bantuan</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="<?php echo site_url()."nonpenyedia/manualbook"?>">Manual Book</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo site_url()."nonpenyedia/dashboard/logout"?>">
							<i class="material-icons">exit_to_app</i>
							<span>Log Out</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- #Menu -->

			<!-- Footer -->
			<?php $this->load->view("nonpenyedia/non_partials/v_footer.php") ?>
			<!-- #Footer -->
		</aside>
		<!-- #END# Left Sidebar -->

		<!-- Right Sidebar -->
		<?php $this->load->view("nonpenyedia/non_partials/v_rightmenu.php") ?>
		<!-- #END# Right Sidebar -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>Kelola Akun Pengguna</h2>
			</div>
			<!-- Horizontal Layout -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"> Tambah
								Data Akun</a>
						</div>
						<div class="body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<td>#</td>
											<td>Akun</td>
											<td>Password</td>
											<td>Level</td>
											<td>Nama</td>
											<td>HP</td>
											<td>Alamat</td>
											<td>Status</td>
											<td>Data Lengkap</td>
											<td>KTP</td>
											<td>QRCODE</td>
											<td>Photo</td>
											<td>Kebijakan</td>
											<td>Created</td>
											<td>Updated</td>
											<td>Aksi</td>
										</tr>
									</thead>
									<tbody>
										<?php 
                                        $no = 1;
                                            foreach($show_akun->result_array() as $i):
                                                $id_user=$i['id_user'];
                                                $user_email=$i['user_email'];
                                                $user_password=$i['user_password'];
                                                $user_level=$i['user_level'];
                                                $user_nama=$i['user_nama'];
                                                $user_hp=$i['user_hp'];
                                                $user_alamat=$i['user_alamat'];
                                                $user_status=$i['user_status'];
                                                $user_datalengkap=$i['user_datalengkap'];
                                                $user_card=$i['user_card'];
                                                $user_qrcode=$i['user_qrcode'];
                                                $user_photo=$i['user_photo'];
                                                $user_kebijakan=$i['user_kebijakan'];
                                                $created=$i['created'];
                                                $updated=$i['updated'];
                                        ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $user_email;?></td>
											<td><?php echo $user_password;?></td>
											<td><?php echo $user_level;?></td>
											<td><?php echo $user_nama;?></td>
											<td><?php echo $user_hp;?></td>
											<td><?php echo $user_alamat;?></td>
											<td><?php echo $user_status;?></td>
											<td><?php echo $user_datalengkap;?></td>
											<td><?php echo $user_card;?></td>
											<td><?php echo $user_qrcode;?></td>
											<td><?php echo $user_photo;?></td>
											<td><?php echo $user_kebijakan;?></td>
											<td><?php echo $created;?></td>
											<td><?php echo $updated;?></td>
											<td><a class="btn btn-xs btn-info" data-toggle="modal"
													data-target="#modal_edit<?php echo $id_user;?>"> Ubah</a></td>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>

							ID : <?php echo $this->session->userdata('id_user');?><br>
							EMAIL : <?php echo $this->session->userdata('email');?><br>
							LEVEL : <?php echo $this->session->userdata('level');?><br>
							NAMA : <?php echo $this->session->userdata('username');?><br>
							HP : <?php echo $this->session->userdata('hp');?><br>
							ALAMAT : <?php echo $this->session->userdata('alamat');?><br>
							STATUS : <?php echo $this->session->userdata('status');?><br>
							DATALENGKAP (Y/T) : <?php echo $this->session->userdata('datalengkap');?><br><br>
						</div>
					</div>
				</div>
			</div>
			<!-- #END# Horizontal Layout -->


		</div>
	</section>

	<!-- ============ MODAL ADD AKUN =============== -->
	<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Tambah Akun Baru</h3>
				</div>
				<!-- BEGIN FORM -->
				<form class="form-horizontal" method="post"
					action="<?php echo base_url().'ppe/kelolaakun/simpan_akun'?>">
					<div class="modal-body">
						<?php 
                    $uniq = uniqid('user_');
					// echo $uniq;
                    ?>
						<input name="id_user" type="text" value="<?php echo $uniq; ?>" class="form-control" />
						<div class="form-group">
							<label class="control-label col-xs-3">E-Mail</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<input name="user_email" type="email" class="form-control"
											placeholder="Masukkan E-Mail." />
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-3">Password</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<input name="user_password" type="text" class="form-control"
											placeholder="Masukkan Password." />
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-3">Level User</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<select name="user_level" class="form-control" required>
											<option value="">-PILIH-</option>
											<option value="PPE">PPE</option>
											<option value="PENYEDIA">PENYEDIA</option>
											<option value="NONPENYEDIA">NONPENYEDIA</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-3">Status Jabatan</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<select name="user_status" class="form-control" required>
											<option value="">-PILIH-</option>
											<option value="-">-</option>
											<option value="Helpdesk">Helpdesk</option>
											<option value="NONPENYEDIA">Peserta Ujian</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-3">Nama</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<input name="user_nama" type="text" class="form-control" placeholder="Masukkan Nama Pengguna." />
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						<button class="btn btn-info">Simpan</button>
					</div>
				</form>
				<!-- END FORM -->
			</div>
		</div>
	</div>
	<!--END MODAL ADD AKUN-->

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

	<!-- Jquery DataTable Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/jquery.dataTables.js"></script>
	<script
		src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js">
	</script>
	<script
		src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/buttons.flash.min.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/jszip.min.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/pdfmake.min.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/vfs_fonts.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/buttons.html5.min.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/buttons.print.min.js">
	</script>

	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>assets/tools/js/pages/tables/jquery-datatable.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/demo.js"></script>


</body>
