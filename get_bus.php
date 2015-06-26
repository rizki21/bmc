<?php
	$q=$_GET["q"];
	include("koneksi.php");
?>
			<table class="table table-striped">
				<tbody>
					<tr class="danger">
						<td>
						<?php
							$queryselectbus = "SELECT * FROM bus where jurusan ='".$q."'";
							$resultbus = mysqli_query($koneksi, $queryselectbus);
							while($row = mysqli_fetch_array($resultbus, MYSQLI_ASSOC)) {
								echo "<table class='table table-striped' width='80%'>";
								echo "<tr class='success'>";
									echo "<td colspan='4'><center><b> ".$row['po']."</center></b></td>";
									echo "</tr>";
								echo "<tr>";
									echo "<td rowspan='8' width='15%'> <center>".$row['kode']."</center></td>";
									echo "<td width='20%'> Jurusan</td>";
									echo "<td>".$row['jurusan']."</td>";
									echo "<td rowspan='8' width='15%'><center> <a href='transaksi.php?kode=$row[kode]'><button class='btn btn-small btn-primary' type='button'>&nbsp&nbsp&nbspBeli Tiket&nbsp&nbsp</button></a><br/><br/>
																				<a href='edit2.php?kode=$row[kode]'><button class='btn btn-small btn-info' type='button'>&nbsp&nbsp&nbspEdit Data&nbsp&nbsp</button></a><br/><br/>
																				<a href='hapus.php?kode=$row[kode]'><button class='btn btn-small btn-danger' type='button'>&nbspHapus Data&nbsp</button></a>
																				</center></td>";
								
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
										echo "<td width='20%'> Harga Beli</td>";
										echo "<td>Rp. ".$row['hargabeli']."</td>";
								echo "</tr>";
								echo "<tr>";
										echo "<td width='20%'> Harga Jual</td>";
										echo "<td>Rp. ".$row['hargajual']."</td>";
								echo "</tr>";
								echo "<tr>";
										echo "<td width='20%'> Stock Tiket</td>";
										echo "<td>".$row['stock']."</td>";
								echo "</tr><br/>";
							}
								echo "</table>";
					?>
						
						</td>
					</tr>
				</tbody>
			</table>
		