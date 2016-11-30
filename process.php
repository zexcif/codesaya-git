<?php
	include 'dbcrud.php';
	$db = new database();

	$act = $_GET['act'];

	if($act == "delete"){
		$id = $_GET['id'];
		
		$db->data_delete("user", "id_user='".$id."'");
		header('location: index.php');
	}

	if($act == "add"){
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$data['nama_user'] = $_POST['nama_user'];

		$db->insert("user", $data);
	}

?>