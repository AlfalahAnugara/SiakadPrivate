<<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("guru/_partials/head.php") ?>
</head>
<body id = "page-top">
	<?php $this->load->view("guru/_partials/navbar.php") ?>
	<div id = "wrapper">

		<?php $this->load->view("guru/_partials/sidebar.php") ?>

		<div id = "content-wrapper" >

			<div class = "container-fluid">

			<?php $this->load->view("guru/_partials/breadcrumb.php") ?>

			<?php if ($this->session->flashdata('success')): ?>
			<div class = "alert alert-success" role = "alert">
				<?php echo $this->session->flashdata('success') ; ?>
			<div>
			<?php endif ; ?>

			<div class = "card mb-3">
				<div class = "card-header">
					<a href = "<?php echo site_url('guru/guru_view/')?>"><i class = "fas fa-arrow-left"></i>Back</a>
				</div>
				<div class = "card-body">

					<form action = "<?php base_url('guru/guru_view/add')?>" method = "post" enctype = "multipart/form-data" >
						<div class = "form-group">
							<label for = "nig">NIG*</label>
							<input class = "form-control <?php echo form_error('nig') ? 'is-invalid':'' ?>"
							type = "text" name = "nig" placeholder = "NIG baru" />
							<div class = "invalid-feedback">
								<?php echo form_error('nig') ?>
							</div>
							</div>
						
						<input class = "btn btn-success" type = "submit" name="btn" value="save" />
						</form>
					
					</div>

					<div class = "card-footer small text-muted">
					</div>


				</div>

				<?php $this->load->view("guru/_partials/footer.php") ?>
			
			</div>

		</div>

		<?php $this->load->view("guru/_partials/scrolltop.php") ?>
		<?php $this->load->view("guru/_partials/js.php") ?>

</body>
</html>
