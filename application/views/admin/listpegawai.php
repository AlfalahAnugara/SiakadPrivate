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

							<td><p><?= $admin->nip?></p></td>
							<td><p><?= $admin->nama?></p></td>
							<td><p><?= $admin->password?></p></td>
							<td><p><?= $admin->gender?></p></td>
							<td><p><?= $admin->status_user?></p></td>
							<?php echo anchor('pegawai/edit/'.$admin->id,'Edit'); ?>
							 <?php echo anchor('pegawai/delete/'.$admin->id,'Hapus'); ?>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
	
</body>
</html>
