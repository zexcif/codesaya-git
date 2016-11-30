<?php
	class database {
		//membuat variabel $mysqli untuk fungsi $this->mysqli
		var $mysqli;
		//mendefinisikan informasi database
		private $host = "localhost"; //nama host
		private $uname = "root"; //username host
		private $pass = ""; //password host
		private $dbname = "dbcrud"; //nama database

		public function database() {
			//koneksi ke database
			$this->mysqli = new mysqli($this->host, $this->uname, $this->pass, $this->dbname) or die ('Database failed '.$this->mysqli->errno().' - '.$this->mysqli->error());
		}

		//menampilkan data
		function display($table){
			return $this->mysqli->query("SELECT * FROM ".$table);
		}

		//masukan data
		function insert($table, $data){
			//memasukan nilai kedalam array menggunakan pengulangan
			foreach ($data as $row_str => $value_str) {
				$row_arr[] = $row_str;
				$value_arr[] = $value_str;
			}

			//konversi array kedalam string
			$row = implode(", ", $row_arr);
			$value = implode("', '", $value_arr);

			//masukan data kedalam table
			$this->mysqli->query("INSERT INTO ".$table." (".$row.") VALUES ('".$value."')");
			header('location: index.php');
		}

		//hapus data
		function data_delete($table, $where){
			$this->mysqli->query("DELETE FROM ".$table." WHERE ".$where);
			header('location: index.php');
		}

		//update data
		function data_update($table, $data, $where){
			//memasukan nilai kedalam array
			foreach ($data as $row => $value) {
				$set_arr[] = $row."='".$value."'";
			}

			//konversi array kedalam string
			$set = implode(", ", $set_arr);

			//update data dalam database
			echo ("UPDATE ".$table." SET ".$set." WHERE ".$WHERE);
			//header('location: index.php');
		}
	}
?>