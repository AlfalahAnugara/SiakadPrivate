<!DOCTYPE html>
<html>
<head>
	
</head>
<body id = "page-top">

	<?php $this->load->view("guru/_partials/navbar.php") ?>
	<div id = "wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>
		<div id = "content-wrapper">

			<div class = "container-fluid">

			<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

			<div class = "card mb-3">
				<div class = "card-header">
					<a href = "<?php echo site_url(). 'guru/add'?>"><i class = "fas fa-plus"></i>Add New</a>
				</div>
				<div class = "card-body">

				<table width="100%">
					<br><h2 align="center">Daftar Guru</h2>
						<thead>
						<tr align="center">
							<th><font face ="Calibri"> NIS </font></th>

	
</body>
</html>
