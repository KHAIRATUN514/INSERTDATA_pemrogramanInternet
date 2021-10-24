<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOO17+AMvyTG2x" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<h3>Tambah Data Jurusan</h3>
	<form action="tambah_jurusan.php" method="post">
		Nama Jurusan :
		<input type="text" name="nama_jurusan" value="" class="form-control">
		Angkatan :
		<input type="text" name="angkatan" value="" class="form-control"><br>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//E1J19smozuHV6z3Iehds+3U1b9Bn9P1x0x4" crossorigin="anonymous"></script>
</body>
</html>