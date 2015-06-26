<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Laporan</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> <!-- menghubungkan css twitter bootstrap pada html-->
		<link href="css/bootstrap-responsive.css" rel="stylesheet"> <!-- berfungsi untuk membuat halaman web menjadi responsive-->
	</head>
	<body>
	<div class="container">
		<?php
			$queryselectmh = "SELECT * FROM member where akses='admin'";
			$resultmh = mysqli_query($koneksi, $queryselectmh);		 
			echo "<table class='table table-striped'>";
				echo "<thead>"; 
					echo "<tr>";
						echo "<td colspan='4'><center><h3>Daftar Contact Admin BMC Ticketing</h3></td>";
					echo "</tr>";
				echo "</thead>"; 
				echo "<tbody>"; 
					echo "<tr class='warning'>";
						echo "<td><b>Nama</b></td>";
						echo "<td><b>Alamat</b></td>";
						echo "<td><b>No Telp</b></td>";
					echo "</tr>";
			while($row = mysqli_fetch_array($resultmh, MYSQLI_ASSOC)) {
					echo "<tr>";
						echo "<td>".$row['nama']."</td>";
						echo "<td>".$row['alamat']."</td>";
						echo "<td>".$row['nohp']."</td>";
					echo "</tr>	";			
				echo "</tbody>";
			}
			echo "</table>";		
		?>
		</div>
	</body>
</html>
<?php
	mysqli_close($koneksi);
?>