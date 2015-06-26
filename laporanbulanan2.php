<?php
include("koneksi.php");
$no =$_GET['no'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"><!-- menghubungkan css twitter bootstrap pada html-->
	<link href="css/bootstrap-responsive.css" rel="stylesheet"><!-- berfungsi untuk membuat halaman web menjadi responsive-->
</head>
<body>
	<?php
		$queryselect= "SELECT date_format(bulanlaporan,'%M,%Y') as bulan FROM laporan WHERE no='$no'";
		$result= mysqli_query($koneksi, $queryselect);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		if (mysqli_num_rows($result)==0){
			echo '<center><h2><font color="red">data tidak ditemukan.</center></h2></font>';
		}else{
			echo "<center><h3> Laporan bulanan BMC Ticketing bulan ".$row['bulan']."</h3></center>";
		}
		
		
		$queryselect= "SELECT * FROM laporan WHERE no='$no'";
		$result= mysqli_query($koneksi, $queryselect);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		if (mysqli_num_rows($result)==0){
			echo '<center><h2><font color="red">data tidak ditemukan.</center></h2></font>';
		}else{
	?>
		<div>
		<table border="0" width="90%" align="center">
			<tr>
				<td></td>
				<td width="5%"></td>
				<td width="10%"></td>
				<td width="5%"></td>
				<td width="5%"></td>
				<td width="10%"></td>
			</tr>
			<tr>
				<td>Total Pemasukan</td>
				<td></td>
				<td></td>
				<td></td>
				<td>Rp.</td>
				<td align="right"><?php echo $row['pemasukan'] ?></td>
			</tr>
			<tr>
				<td>Pajak Pertambahan Nilai 10%</td>
				<td>Rp.</td>
				<td align="right"><?php echo $row['ppn'] ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Beban Asuransi</td>
				<td>Rp.</td>
				<td align="right"><u><?php echo $row['asuransi'] ?></u></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>Rp.</td>
				<td align="right"><u>(<?php $beban=($row['asuransi'] + $row['ppn']);  echo $beban  ?>)</u></td>
			</tr>
			<tr>
				<td>Total Penjualan</td>
				<td></td>
				<td></td>
				<td></td>
				<td>Rp.</td>
				<td align="right"><?php echo $row['penjualan']  ?></td>
			</tr>
			<tr>
				<td><br/></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Total Pembelian</td>
				<td></td>
				<td></td>
				<td></td>
				<td>Rp.</td>
				<td align="right"><u>(<?php echo $row['pembelian'] ?>)</u></td>
			</tr>
			<tr>
				<td>Laba Kotor</td>
				<td></td>
				<td></td>
				<td></td>
				<td>Rp.</td>
				<td align="right"><?php echo $row['labakotor'] ?></td>
			</tr>
			<tr>
				<td><br/></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Beban gaji karyawan</td>
				<td>Rp.</td>
				<td align="right"><?php echo $row['gaji'] ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Beban listrik & internet</td>
				<td>Rp.</td>
				<td align="right"><u><?php echo $row['listrik'] ?></u></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><br/></td>
				<td></td>
				<td></td>
				<td></td>
				<td>Rp.</td>
				<td align="right"><?php $beban2=($row['gaji'] + $row['listrik']); echo $beban2 ?></td>
			</tr>
			<tr>
				<td>Laba Bersih</td>
				<td></td>
				<td></td>
				<td></td>
				<td>Rp.</td>
				<td align="right"><b><?php echo $row['lababersih'] ?></b></td>
			</tr>
		</table>
		
		</div>
		<center>
		<a href="laporan.php"><button type="button" class="btn-mini btn btn-danger" name="button">Kembali</button></a>
		</center>
	<?php } ?>
	</body>
</html>