<?php
	include 'dbcrud.php';
	$db = new database;
?>

<!doctype html>
<html>
	<head>
		<title>Basic CRUD with OOP</title>
	</head>
	<body>
		<table>
			<thead>
				<td>No</td>
				<td>Username</td>
				<td>Nama</td>
				<td>Opsi</td>
			</thead>

			<tr>
				<?php
					$no=1;
					foreach ($db->display("user") as $x) {
				?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $x['username'] ?></td>
							<td><?php echo $x['nama_user'] ?></td>
							<td>
								<a href="process.php?act=edit&id=<?php echo $x['id_user'] ?>">Edit</a>
								<a href="process.php?act=delete&id=<?php echo $x['id_user'] ?>">Hapus</a>
							</td>
						</tr>
				<?php
					$no++;
					}
				?>
			</tr>
		</table>
		<br>
		<a href="query.php?act=add">Tambah data</a>
	</body>
</html>