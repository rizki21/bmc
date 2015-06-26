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
		$queryselect = "SELECT * FROM transaksi INNER JOIN bus ON transaksi.kode=bus.kode INNER JOIN member ON transaksi.idmember=member.idmember";
		$result= mysqli_query($koneksi,$queryselect); 
		echo "<div class='container'>";
			echo "<table align='center' width='95%' class='table table-striped'>";
				echo "<thead>"; 
					echo "<tr>";
						echo "<td colspan='8'><center><h3>Data Transaksi BMC Ticketing</h3></center></td>";
					echo "</tr>";
				echo "</thead>"; 
				echo "<tbody>"; 
					echo "<tr class='warning'>";
						echo "<td><b>No. Tr</b></td>";
						echo "<td><b>Nama</b></td>";
						echo "<td><b>Alamat</b></td>";
						echo "<td><b>Nama P.O</b></td>";
						echo "<td><b>Jurusan</b></td>";
						echo "<td><b>Kelas</b></td>";
					echo "</tr>";
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					echo "<tr>";
						echo "<td>".$row['notransaksi']."</td>";
						echo "<td>".$row['nama']."</td>";
						echo "<td>".$row['alamat']."</td>";
						echo "<td>".$row['po']."</td>";
						echo "<td>".$row['jurusan']."</td>";
						echo "<td>".$row['kelas']."</td>";
					echo "</tr>	";			
				echo "</tbody>";
			}
			echo "</div>";
			echo "</table>";	
		?>
	</body>
</html>
<?php
	mysqli_close($koneksi);
?>