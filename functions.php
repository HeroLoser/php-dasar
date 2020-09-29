<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// read data
function query($query) {
	global $conn;

	$result = mysqli_query($conn, $query);
	$List = [];

	while ($mData = mysqli_fetch_assoc($result)) {
		$List[] = $mData;
	}

	return $List;
}

//insert data
function insert($data) {
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);


	$insert = "INSERT INTO mahasiswa 
				VALUES ('', '$nama', '$nim')";

	mysqli_query($conn, $insert);

	return mysqli_affected_rows($conn);
}

// delete data
function delUser($id) {
	global $conn;
	$del = "DELETE FROM mahasiswa WHERE id = $id";
	
	mysqli_query($conn, $del);

	return mysqli_affected_rows($conn);
}

// select by id
function getData($id) {
	global $conn;

	$query = "SELECT * FROM mahasiswa WHERE id= $id";

	$result = mysqli_query($conn, $query);
	$mData = mysqli_fetch_assoc($result);

	return $mData;
}

//update data
function update($data) {
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$id = $data["id"];


	$insert = "UPDATE mahasiswa SET
				nama = '$nama', 
				nim = '$nim'
				WHERE id = $id";

	mysqli_query($conn, $insert);

	return mysqli_affected_rows($conn);
}

function searching($search) {
	global $conn;

	$query = "SELECT * FROM mahasiswa WHERE
				nama LIKE '%$search%' OR 
				nim LIKE '%$search%'";

	$result = mysqli_query($conn, $query);
	$List = [];

	while ($mData = mysqli_fetch_assoc($result)) {
		$List[] = $mData;
	}

	return $List;
}

?>