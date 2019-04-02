<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">List Guru</li>
			</ol>
		</div>


<form action = "<?php echo base_url("guru/edit/$guru->id")?>" method = "post" enctype="multipart/form-data" >

	<input type = "hidden" name = "id" value = "<?php echo $guru->id?>" />

							<div class = "form-group">
							<label for = "nig">NIG*</label>
							<input class = "form-control"
							type = "text" name = "nig" placeholder = "NIG baru" />			
							</div>

							<div class = "form-group">
							<label for = "nama">Nama*</label>
							<input class = "form-control"
							type = "text" name = "nama" placeholder = "Nama baru" />			
							</div>

							<div class = "form-group">
							<label for = "tgl_lahir">Tanggal Lahir*</label>
							<input class = "form-control"
							type = "text" name = "tgl_lahir" placeholder = "Tanggal Lahir baru" />			
							</div>

							<div class = "form-group">
							<label for = "kota_asl">Kota asal*</label>
							<input class = "form-control"
							type = "text" name = "kota_asl" placeholder = "Kota Asal baru" />			
							</div>

							<div class = "form-group">
							<label for = "gender">Jenis Kelamin*</label>
							<input type="radio" name="gender" value="L">Laki-Laki
        					<input type="radio" name="gender" value="P">Perempuann
        					</div>

							<div class = "form-group">
							<label for = "alamat">Alamat*</label>
							<input class = "form-control"
							type = "text" name = "alamat" placeholder = "Alamat baru" />			
							</div>

							<div class = "form-group">
							<label for = "no_telp">Nomor Telepon*</label>
							<input class = "form-control"
							type = "text" name = "no_telp" placeholder = "Nomor Telepon baru" />			
							</div>

							<div class = "form-group">
							<label for = "password">Password*</label>
							<input class = "form-control"
							type = "text" name = "password" placeholder = "Password baru" />			
							</div>

							<div class = "form-group">
							<label for = "id_pelajaran">ID pelajaran*</label>
							<input class = "form-control"
							type = "text" name = "id_pelajaran" placeholder = "ID Pelajaran baru" />			
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

					<button type = "submit" class = "btn btn-primary">Simpan</button>
					<button type = "submit" class = "btn btn-danger">Danger</button>
					</form>

					</div>

