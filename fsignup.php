<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// Sign Up
function sign($data) {
	global $conn;

	$username = stripslashes($data["username"]);
	$email = $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);

	$return = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");

	if (mysqli_fetch_assoc($return)) {
		echo "
			<script>
				alert('Usename taken');
			</script>
		";
		return false;
		
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$email', '$password')");

	return mysqli_affected_rows($conn);

}

// Login
function login($data) {
	global $conn;

	$eror1 = 101;
	$eror0 = 100;
	$succes = 1;

	$username = $data["username"];
	$password = $data["password"];

	$return = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");

	if (mysqli_num_rows($return) === 1) {

		$mData = mysqli_fetch_assoc($return);
		if ( password_verify($password, $mData["password"]) ) {
			return 1;
		}
		else 
			return 101;
		
	}

	else 
		return 100;
		
}

?>