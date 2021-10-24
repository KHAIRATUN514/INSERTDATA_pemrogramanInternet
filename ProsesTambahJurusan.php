<?php
if ($_POST) {
	$nama_jurusan=$_POST['jurusan'];
	$angkatan=$_POST['angkatan'];
	if (empty($jurusan)) {
		echo "<script>alert('Nama Jurusan Tidak Boleh Kosong');location.href='tambah_jurusan.php';</script>";
	}elseif (empty($angkatan)) {
		echo "<script>alert('Angkatan Tidak Boleh Kososng');location.href='tambah_jurusan.php;</script>";
	}else {
		include "dataprodi.php";
		$insert=mysql_query($conn,"insert into jurusan (jurusan, angkatan) value ('".$nama_jurusan."','".$angkatan."')");
		if($insert){
			echo "<script>alert('Gagal menambahkan data jurusan');location.href='tambah_jurusan.php';</script>";
		}else {
			echo "<script>alert('Gagal menambahkan data jurusan');location.href='tambah_jurusan.php';</script>";
		}
	}
}