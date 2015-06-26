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
			$queryselectmh = "SELECT * FROM member";
			$resultmh = mysqli_query($koneksi, $queryselectmh);		 
			echo "<table class='table table-striped'>";
				echo "<thead>"; 
					echo "<tr>";
						echo "<td colspan='9'><center><h3>Daftar Member BMC Ticketing</h3></td>";
					echo "</tr>";
				echo "</thead>"; 
				echo "<tbody>"; 
					echo "<tr class='warning'>";
						echo "<td><b>ID</b></td>";
						echo "<td><b>NAMA</b></td>";
						echo "<td><b>ALAMAT</b></td>";
						echo "<td><b>JK</b></td>";
						echo "<td><b>NO.TELP</b></td>";
						echo "<td><b>EMAIL</b></td>";
						echo "<td colspan='2'><b>ACTION</b></td>";
					echo "</tr>";
			while($row = mysqli_fetch_array($resultmh, MYSQLI_ASSOC)) {
					echo "<tr>";
						echo "<td>".$row['idmember']."</td>";
						echo "<td>".$row['nama']."</td>";
						echo "<td>".$row['alamat']."</td>";
						echo "<td>".$row['jk']."</td>";
						echo "<td>".$row['nohp']."</td>";
						echo "<td>".$row['email']."</td>";					
						echo "<td><a href='editm.php?idmember=$row[idmember]'><button class='btn btn-mini btn-primary' type='button'>E</button></a></td>"; 
						echo "<td><a href='hapusm.php?idmember=$row[idmember]'><button class='btn btn-mini btn-danger' type='button'>X</button></a></td>"; 
					echo "</tr>	";			
				echo "</tbody>";
			}
			echo "</table>";		
		?>
	</body>
</html>
<?php
	mysqli_close($koneksi);
?>