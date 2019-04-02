<!DOCTYPE html>
<html>
<head>
	
</head>
<body id = "page-top">
				<table width="100%">
					<br><h2 align="center">Daftar Pegawai</h2>
						<thead>
						<tr align="center">
							<th><font face ="Calibri">NIP</font></th>
							<th><font face ="Calibri">Nama</font></th>
							<th><font face ="Calibri">Password</font></th>
							<th><font face ="Calibri">Jenis Kelamin</font></th>
							<th><font face ="Calibri">Status User</font></th>

							</tr>
						<tbody>
									<?php
									foreach($pegawai as $admin) :
									?>
							<tr>

							<td><p><?= $dosen->nig?></p></td>
							<td><p><?= $dosen->nama?></p></td>
							<td><p><?= $dosen->tgl_lahir?></p></td>
										<td><p><?= $dosen->kota_asl?></p></td>
										<td><p><?= $dosen->gender?></p></td>
	
</body>
</html>
