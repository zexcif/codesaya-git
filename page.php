<?php
	class page{
		function page_add(){
			echo '
				<form method="post" action="process.php?act=add">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" placeholder="username" maxlength="16"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password" placeholder="password" maxlength="16"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama_user" placeholder="nama" maxlength="16"></td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td><button type="submit">Tambah Data</button>
				</tr>
			</table>
		</form>
			';
		}

		function
	}
?>