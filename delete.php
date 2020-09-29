<?php
	require 'functions.php';  
	
	$id = $_GET["id"];

	if ( delUser($id) > 0 ) {
		echo "
			<script>
				alert('Succes Delete Data');
				document.location.href = 'index.php';
			</script>
		";
	}
	else {
		echo "
			<script>
				alert('Failed Delete Data');
				document.location.href = 'index.php';
			</script>
		";
	}

?>