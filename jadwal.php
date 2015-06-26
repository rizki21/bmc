<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Prak7</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class="container">
			<table class="table table-striped">
				<thead>
					<tr>
						<th colspan="2"><h2><center>JADWAL KEBERANGKATAN BUS JEMBER</center></h2></th>
					</tr>
				</thead>
				<tbody>
					<tr class="danger">
						<td>
						
						<?php
							$queryselectbus = "SELECT * FROM bus";
							$resultbus = mysqli_query($koneksi, $queryselectbus);
							while($row = mysqli_fetch_array($resultbus, MYSQLI_ASSOC)) {
								echo "<table border='1' width='100%'>";
								echo "<tr>";
									echo "<td rowspan='6' width='15%'> <center>".$row['kode']."</center></td>";
									echo "<td colspan='2'><center><b> ".$row['po']."</center></b></td>";
									echo "<td rowspan='6' width='15%' ><center><button class='btn btn-mini' type='button'>Beli Tiket</button></center></td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td> Jurusan</td>";
									echo "<td>".$row['jurusan']."</td>";
								echo "</tr>";
								echo "<tr>";
										echo "<td> Kelas</td>";
										echo "<td>".$row['kelas']."</td>";
								echo "</tr>";
								echo "<tr>";
										echo "<td> Mesin</td>";
										echo "<td>".$row['mesin']."</td>";
								echo "</tr>";
								echo "<tr>";
										echo "<td> Fasilitas</td>";
										echo "<td>".$row['fasilitas']."</td>";
								echo "</tr>";
								echo "<tr>";
										echo "<td> Harga Tiket</td>";
										echo "<td>".$row['harga']."</td>";
								echo "</tr><br/>";
							}
								echo "</table>";
					?>
						
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		
	</body>
</html>
<?php
	mysqli_close($koneksi);
?>