<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body id = "page-top">

		<div id = "content-wrapper" >

			<div class = "container-fluid">

			<?php if ($this->session->flashdata('success')): ?>
			<div class = "alert alert-success" role = "alert">
				<?php echo $this->session->flashdata('success') ; ?>
			<div>
			<?php endif ; ?>

				<div class = "card-body">

				<form action = "<?php echo base_url(). 'guru/add'?>" method = "post" enctype = "multipart/form-data" >
						<div class = "form-group">
							<label for = "nip">nip*</label>
							<input class = "form-control"
							type = "text" name = "nip" placeholder = "nip baru" />			
							</div>

							<div class = "form-group">
							<label for = "nama">Nama*</label>
							<input class = "form-control"
							type = "text" name = "nama" placeholder = "Nama baru" />			
							</div>

							<div class = "form-group">
							<label for = "password">Password*</label>
							<input class = "form-control"
							type = "text" name = "password" placeholder = "Password baru" />			
							</div>

							<div class = "form-group">
							<label for = "gender">Gender*</label>
							<input class = "form-control"
							type = "text" name = "gender" placeholder = "Gender baru" />			
							</div>

							<div class="form-group">
            				<label for="Kelas">Status User:</label>
                			<select class="form-control" name="status_user">
                    		<option value="" disabled selected>Pilih User</option>
							<option value="1">Siswa</option>
							<option value="2">Guru</option>
							<option value="3">Pegawai</option>
							</select>
							</div>

							<!-- <div class = "form-group">
							<label for = "status_user">Status User*</label>
							<input class = "form-control"
							type = "text" name = "status_user" placeholder = "Status User baru" />			
							</div> -->
						
						<input class = "btn btn-success" type = "submit" name="btn" value="save" />
						</form>
					
					</div>

					


				</div>
			
			</div>

		</div>

</body>
</html>
