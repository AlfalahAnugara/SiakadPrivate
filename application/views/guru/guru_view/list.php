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

									<td>
										
									

</body>
</html>
