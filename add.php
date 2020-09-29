<?php 
require 'functions.php';

if (isset($_POST["submit"])) {

	if (insert($_POST)>0) {
		echo "
			<script>
				alert('Succes Insert Data');
				document.location.href = 'index.php';
			</script>
		";
	}
	else {
		echo "
			<script>
				alert('Failed Insert Data');
				document.location.href = 'add.php';
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

	<h3>New Data</h3>

	<form action = "" method = "post">
		
		<ul>
			
			<li>
				<label for="nama">Name : </label>
				<input type="text" name="nama" id="nama" required>
			</li>

			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" required>
			</li>

			<li>
				<button type="submit" name="submit">Add Data</button>
			</li>

		</ul>
		

	</form>
</body>
</html>