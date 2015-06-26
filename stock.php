<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mahasiswa</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> <!-- menghubungkan css twitter bootstrap pada html-->
		<link href="css/bootstrap-responsive.css" rel="stylesheet"> <!-- berfungsi untuk membuat halaman web menjadi responsive-->
	</head>
	<body>
		<?php
			$queryselectmh = "SELECT * FROM bus";
			$resultmh = mysqli_query($koneksi, $queryselectmh);		 
			echo "<div class='container'>";
			echo "<table class='table table-striped'>";
			echo "<thead>"; 
					echo "<tr>";
						echo "<td colspan='5'><center><h3>Stock Tiket BMC Ticketing</h3></td>";
					echo "</tr>";
				echo "</thead>"; 
				echo "<tbody>"; 
					echo "<tr class='warning'>";
						echo "<td><b>KODE</b></td>";
						echo "<td><b>NAMA P.O</b></td>";
						echo "<td><b>JURUSAN</b></td>";
						echo "<td><b>KELAS</b></td>";
						echo "<td><b>STOCK</b></td>";
						echo "<td><b>TAMBAH</b></td>";
					echo "</tr>";
			while($row = mysqli_fetch_array($resultmh, MYSQLI_ASSOC)) {
					echo "<tr>";
						echo "<td>".$row['kode']."</td>";
						echo "<td>".$row['po']."</td>";
						echo "<td>".$row['jurusan']."</td>";
						echo "<td>".$row['kelas']."</td>";
						echo "<td>".$row['stock']."</td>";
						echo "<td><a href='tambah.php?kode=$row[kode]'><button class='btn btn-mini btn-primary' type='button'>+ Stock</button></a></td>"; 
					echo "</tr>	";			
				echo "</tbody>";
			}
			echo "</table>";		
		echo "</div>";
		?>
	</body>
</html>
<?php
	mysqli_close($koneksi);
?>