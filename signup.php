<?php

require 'fsignup.php';

if (isset($_POST["signup"]) > 0) {

	if (sign($_POST) > 0) {
		echo "
			<script>
				alert('Sign Up Success');
				document.location.href = 'login.php';
			</script>
		";
	}
}	

?>

<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
</head>
<body>
	<h1>Sign Up</h1>

	<form action="" method="post"> 
		
		<ul>
			<li>
				<label for="username">Username <br></label>
				<input style="margin-bottom: 5px" type="text" name="username" id="username" required>
			</li>

			<li>
				<label for="email">E-Mail <br></label>
				<input style="margin-bottom: 5px" type="text" name="email" id="email" required>
			</li>
			
			<li>
				<label for="password">Password <br></label>
				<input style="margin-bottom: 24px" type="password" name="password" id="password" required>
			</li>

			<button type="submit" name="signup" style=" width: 180px">Sign Up</button>

			<br><br>
			<a href="login.php">login</a>
			
		</ul>

	</form>

</body>
</html>