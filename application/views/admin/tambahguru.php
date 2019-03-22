<!-- <div class="container">
<section class="content">
<h1> Tambah Siswa</h1> 
<form>
<div class="form-group">
			<label for="nip">NIP :</label>
			<input type="text" class="form-control" id="nip">
		</div>
		<div class="form-group">
			<label for="nama">Nama :</label>
			<input type="text" class="form-control" id="nama">
		</div>
		<div class="form-group">
			<label for="alamat">Tanggal lahir:</label>
			<input type="date" class="form-control" id="tanggallahir">
		</div>	
 <div class="custom-control custom-radio">
 <label for="jeniskelamin">jenis kelamin :</label>
<input type="radio" class="custom-control-input" id="laki-laki" name="disabledGroupExample">
    <label class="custom-control-label" for="defaultUncheckedDisabled2">laki-laki</label>
    <input type="radio" class="custom-control-input" id="laki-laki" name="disabledGroupExample" >
    <label class="custom-control-label" for="defaultUncheckedDisabled2">perempuan</label>
    </div>
        <div class="form-group">
			<label for="alamat">Alamat:</label>
			<input type="text" class="form-control" id="alamat">
            <div class="form-group">
			<label for="kotaasal">Kota :</label>
			<input type="text" class="form-control" id="kotaasal">
		</div>
		</div>		
		<button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-danger">Reset</button>
	</form>
   </div>
</div>
</section> -->

<<!DOCTYPE html>
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

					<form action = "<?php base_url('guru/guru_view/add')?>" method = "post" enctype = "multipart/form-data" >
						<div class = "form-group">
							<label for = "nig">NIG*</label>
							<input class = "form-control"
							type = "text" name = "nig" placeholder = "NIG baru" />			
							</div>

							<div class = "form-group">
							<label for = "nig">Nama*</label>
							<input class = "form-control"
							type = "text" name = "nig" placeholder = "NIG baru" />			
							</div>

							<div class = "form-group">
							<label for = "nig">NIG*</label>
							<input class = "form-control"
							type = "text" name = "nig" placeholder = "NIG baru" />			
							</div>

							<div class = "form-group">
							<label for = "nig">NIG*</label>
							<input class = "form-control"
							type = "text" name = "nig" placeholder = "NIG baru" />			
							</div>

							<div class = "form-group">
							<label for = "nig">NIG*</label>
							<input class = "form-control"
							type = "text" name = "nig" placeholder = "NIG baru" />			
							</div>
						
						<input class = "btn btn-success" type = "submit" name="btn" value="save" />
						</form>
					
					</div>

					


				</div>
			
			</div>

		</div>

</body>
</html>
