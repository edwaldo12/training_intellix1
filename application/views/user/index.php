<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Data Pengguna Ecentrix</h1>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo base_url('user/create') ?>">
					<button type="button" class="mb-3 btn btn-primary">Tambah User</button>
				</a>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Tabel User</h3>
					</div>
					<div class="card-body">
						<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
							<div class="row">
								<div class="col-sm-12">
									<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
										<thead>
											<tr role="row">
												<th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
												<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending">Username</th>
												<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($user as $key => $p) { ?>
												<tr>
													<td><?= $p['id'] ?></td>
													<td><?= $p['username'] ?></td>
													<td>
														<a href="<?php echo base_url('user/halamanEdit/' . $p['id']) ?>">
															<button class="btn btn-warning btn-sm text-white">
																<i class="fa fa-pen"></i>
															</button>
														</a>
														<a href="<?php echo base_url('user/deleteUser/' . $p['id']) ?>">
															<button class="btn btn-danger btn-sm text-white">
																<i class="fa fa-trash"></i>
															</button>
														</a>
													</td>
												</tr>
											<?php } ?>
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
</section>

<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
			"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	});
</script>

<?php if ($this->session->flashdata('tambah_user')) { ?>
	<?php unset($_SESSION['storeUser']) ?>
	<script>
		alert('Tambah User Berhasil!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('update_user')) { ?>
	<?php unset($_SESSION['updateUser']) ?>
	<script>
		alert('Update User Berhasil!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('hapus_user')) { ?>
	<?php unset($_SESSION['deleteUser']) ?>
	<script>
		alert('Hapus User Berhasil!');
	</script>
<?php } ?>