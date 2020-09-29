<?php

require 'fsignup.php';

if (isset($_POST["login"])) {

	if (login($_POST) === 1) {
		echo "
			<script>
				alert('Sign Up Success');
				document.location.href = 'index.php';
			</script>
		";
	}
	
	elseif (login($_POST) === 100) {
		echo "
			<script>
				alert('Username Not Found');
			</script>
			";
	}

	elseif (login($_POST) === 101) {
		echo "
			<script>
				alert('Wrong Password');
			</script>
		";	
	}
}	

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<h1>Login</h1>

	<form action="" method="post"> 
		
		<ul>
			<li>
				<label for="username">Username <br></label>
				<input style="margin-bottom: 5px" type="text" name="username" id="username" required>
			</li>
			
			<li>
				<label for="password">Password <br></label>
				<input style="margin-bottom: 24px" type="password" name="password" id="password" required>
			</li>

			<button type="submit" name="login" style=" width: 180px">Login</button>

			<br><br>
			<a href="signup.php">Sign Up</a>
			
		</ul>

	</form>

</body>
</html>