<?php 
require 'functions.php';

$id = $_GET["id"];

// $query = "SELECT * FROM mahasiswa WHERE id= $id";

$data = getData($id);

if (isset($_POST["submit"])) {

	if (update($_POST)>0) {
		echo "
			<script>
				alert('Succes Update Data');
				document.location.href = 'index.php';
			</script>
		";
	}
	else {
		echo "
			<script>
				alert('Failed Update Data');
				document.location.href = 'index.php';
			</script>
		";
	}
}	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>

	<h3>Update Data</h3>

	<form action = "" method = "post">
		<input type="hidden" name="id" value="<?= $data["id"] ?>">
		
		<ul>
			
			<li>
				<label for="nama">Name : </label>
				<input type="text" name="nama" id="nama" required
				value="<?= $data["nama"] ?>">
			</li>

			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" required
				value="<?= $data["nim"] ?>">
			</li>

			<li>
				<button type="submit" name="submit">Update Data</button>
			</li>

		</ul>
		

	</form>
</body>
</html>