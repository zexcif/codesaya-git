<!doctype html>
<html>
	<head>
		<title>Tambah data</title>
	</head>
	<body>
		<?php
			include 'page.php';
			$page = new page;

			$act = $_GET['act'];
			$new = "page_".$act;

			$page->$new();
		?>
	</body>
</html>