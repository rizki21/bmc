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
			$queryselectmh = "SELECT no, date_format(bulanlaporan,'%M,%Y') as bulanlaporan,lababersih FROM laporan";
			$resultmh = mysqli_query($koneksi, $queryselectmh);		 
			echo "<table class='table table-striped'>";
				echo "<thead>"; 
					echo "<tr>";
						echo "<td colspan='4'><center><h3>Laporan Bulanan</h3></td>";
					echo "</tr>";
				echo "</thead>"; 
				echo "<tbody>"; 
					echo "<tr>";
						echo "<td colspan='4'><center><a href='laporanbulanan.php'><button class='btn btn-mini btn-info' type='button'>Proses Laporan Bulan ini</button></a></center></td>"; 
					echo "</tr>";
					echo "<tr class='warning'>";
						echo "<td><b>NO</b></td>";
						echo "<td><b>BULAN</b></td>";
						echo "<td><b>LABA</b></td>";
						echo "<td><b>DETAIL</b></td>";
					echo "</tr>";
			while($row = mysqli_fetch_array($resultmh, MYSQLI_ASSOC)) {
					echo "<tr>";
						echo "<td>".$row['no']."</td>";
						echo "<td>".$row['bulanlaporan']."</td>";
						echo "<td>".$row['lababersih']."</td>";
						echo "<td><a href='laporanbulanan2.php?no=$row[no]'><button class='btn btn-mini btn-primary' type='button'>Detail</button></a></td>"; 
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