<!DOCTYPE html>
<html lang = "en">
<head>
	<?php $this->load->view("guru/_partials/head.php") ?>
</head>
<body id="page-top">
	<?php $this->load->view("guru/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id = "content-wrapper">

			<div class = "container-fluid">

				<?php $this->load->view("guru/_partials/breadcrumb.php") ?>

				<div class = "card mb-3">
					<div class = "card-header">
						<a href = "<?php echo site_url('guru/guru_view/add')?>"><i class = "fas fa-plus"></i> Add new</a>
						</div>
					
					<div class = "card-body">

						<div class = "table-responsive">
							<table class = "table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<th>NIG</th>
									<th>Nama</th>
									<th>Tanggal Lahir</th>
									<th>Kota asal</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>No Telp</th>
									<th>Password</th>
									<th>Status User</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($gurus as $guru): ?>
								<tr>
									<td width = "150" >
										<?php echo $guru->NIG ?>
									</td>

									<td>
										<?php echo $guru->Nama ?>
									</td>

									<td class = "small">
										<?php echo substr($guru->status_user , 0 , 120) ?>...</td>
									<td width = "250" >
										<a href = "<?php echo site_url('guru/guru_view/edit/'.$guru->id)?>"
										class = "btn btn-small"><i class = "fas fa-edit"></i> Edit </a>
										<a onclick = "deleteConfirm('<?php echo site_url('guru/guru_view/delete/'.$guru->id)?>')"
										href = "#!" class = "btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
									</td>
								</tr>
								<?php endforeach ; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>


			<?php $this->load->view("guru/_partials/footer.php") ?>

			</div>
		</div>

		<?php $this->load->view("guru/_partials/scrolltop.php") ?>
		<?php $this->load->view("guru/_partials/modal.php") ?>
		<?php $this->load->view("guru/_partials/js.php") ?>							
									

</body>
</html>
