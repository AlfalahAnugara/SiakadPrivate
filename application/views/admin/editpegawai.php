<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">List Pegawai</li>
			</ol>
		</div>


<form action = "<?php echo base_url("pegawai/edit/pegawai->id")?>" method = "post" enctype="multipart/form-data" >

<input type = "hidden" name = "id" value = "<?php echo pegawai->id?>" />

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


