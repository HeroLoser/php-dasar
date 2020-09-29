<?php  

require 'functions.php';
$getData = query("SELECT * FROM mahasiswa");

if (isset($_POST["search"])) {

	$getData = searching($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<h3>Daftar Mahasiswa</h3><br>

	<form action="" method="post">
		<input type="text" name="keyword" placeholder="Search Data" autofocus autocomplete="off">
		<button type="submit" name="search">Search</button>
	</form>

	<table cellspacing="0" cellpadding="10">
		
		<tr style="text-align: left;">
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
		</tr>


		<?php $i = 1 ?>
		<?php foreach ($getData as $list) : ?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $list["nama"] ?></td>
			<td><?= $list["nim"] ?></td>
			<td>
				<a href="update.php?id=<?= $list["id"] ?>">
					<button>Update</button>
				</a>

				<a href="delete.php?id=<?= $list["id"]  ?>">
					<button>Delete</button>
				</a>	

			</td>
		</tr>
		<?php $i++ ?>
		<?php endforeach; ?>
	
	</table>
	<a href="add.php">
	<button style="margin-top: 30px">Add</button>
	</a>
	
</body>
</html>