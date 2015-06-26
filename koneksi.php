<html>
	<head>
		<title>koneski</title>
	</head>
	<body>
	<?php
		$servername = "localhost";
		$username ="root";
		$password = "";
		$databasename = "tb";
		
		$koneksi = mysqli_connect($servername, $username, $password, $databasename);

	if (mysqli_connect_errno()){
		printf("error", mysqli_connect_error());
		exit();
	}
	?>
	</body>
</html>