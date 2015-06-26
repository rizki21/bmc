<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Prak7</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
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
								echo "<h6><div class='container'>";
								echo "<table class='table table-striped' width='80%'>";
								echo "<tr class='success'>";
									echo "<td colspan='4'><center><b> ".$row['po']."</center></b></td>";
									echo "</tr>";
								echo "<tr>";
									echo "<td rowspan='8' width='15%'> <center>".$row['kode']."</center></td>";
									echo "<td width='20%'> Jurusan</td>";
									echo "<td>".$row['jurusan']."</td>";
									echo "<td rowspan='8' width='15%'><center> 
									<button class='btn btn-small btn-primary' type='button'>&nbsp&nbsp&nbspBeli Tiket&nbsp&nbsp</button><br/><br/>
									Stock Tiket<br/>".$row['stock']."</center></td>";
								
								echo "</tr>";
								echo "<tr>";
										echo "<td width='20%'> Kelas</td>";
										echo "<td>".$row['kelas']."</td>";
								echo "</tr>";
								echo "<tr>";
										echo "<td width='20%'> Jam Berangkat</td>";
										echo "<td>".$row['jadwal']."</td>";
								echo "</tr>";
								echo "<tr>";
										echo "<td width='20%'> Fasilitas</td>";
										echo "<td>".$row['fasilitas']."</td>";
								echo "</tr>";
								echo "<tr>";
										echo "<td width='20%'> Harga Tiket</td>";
										echo "<td>Rp. ".$row['hargajual']."</td>";
								echo "</tr><br/>";
							}
								echo "</table>";
								echo "</div></h6>";
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