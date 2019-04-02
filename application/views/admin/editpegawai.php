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




