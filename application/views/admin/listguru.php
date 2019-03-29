<!DOCTYPE html>
<html>
<head>
	
</head>
<body id = "page-top">
				<table width="100%">
					<br><h2 align="center">Daftar Guru</h2>
						<thead>
						<tr align="center">
							<th><font face ="Calibri">NIG</font></th>
							<th><font face ="Calibri">Nama</font></th>
							<th><font face ="Calibri">Tanggal Lahir</font></th>
							<th><font face ="Calibri">Kota Asal</font></th>
							<th><font face ="Calibri">Jenis Kelamin</font></th>
							<th><font face ="Calibri">Alamat</font></th>
							<th><font face ="Calibri">No Telepon</font></th>
							<th><font face ="Calibri">Password</font></th>
							<th><font face ="Calibri">Id Pelajaran</font></th>
							<th><font face ="Calibri">Status User</font></th>

							</tr>
						<tbody>
									<?php
									foreach($guru as $dosen) :
									?>
							<tr>
										<td><p><?= $dosen->nig?></p></td>
										<td><p><?= $dosen->nama?></p></td>
										<td><p><?= $dosen->tgl_lahir?></p></td>
										<td><p><?= $dosen->kota_asl?></p></td>
										<td><p><?= $dosen->gender?></p></td>
										<td><p><?= $dosen->alamat?></p></td>
										<td><p><?= $dosen->no_telp?></p></td>
										<td><p><?= $dosen->password?></p></td>
										<td><p><?= $dosen->id_pelajaran?></p></td>
										<td><p><?= $dosen->status_user?></p></td>
										<?php echo anchor('guru/edit/'.$dosen->id,'Edit'); ?>
											<?php echo anchor('guru/delete/'.$dosen->id,'Hapus'); ?>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>


							
</body>
</html>
