<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"><!-- menghubungkan css twitter bootstrap pada html-->
	<link href="css/bootstrap-responsive.css" rel="stylesheet"><!-- berfungsi untuk membuat halaman web menjadi responsive-->
</head>
<body>
	<?php
		session_start(); 
		$max = "select max(notransaksi) as n from transaksi";
		$max2= mysqli_query($koneksi,$max);
		$max3 = mysqli_fetch_array($max2, MYSQLI_ASSOC);
		$max4 = $max3['n'];
		
		$queryselect = "SELECT * FROM transaksi INNER JOIN bus ON transaksi.kode=bus.kode INNER JOIN member ON transaksi.idmember=member.idmember WHERE notransaksi=$max4";
		$result= mysqli_query($koneksi,$queryselect);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		if (mysqli_num_rows($result)==0){
			echo '<center><h2><font color="red">data tidak ditemukan.</center></h2></font>';
		}else{
	?>
		<div>
			<center><h2>KONFIRMASI PEMESANAN TIKET</h2></center>
		</div>
		<div>
		<table border="0" align="center" width="97%" background="gambar/tiket.jpg">
			<tr>
				<td rowspan="13">&nbsp</td>
				<td colspan="6" height="80"><center><b><h2>BISMANIA COMMUNITY</h2><BR/>Jl. Gajah Mada No. 118 Kaliwates Jember<br/>
				Melayani Pemesanan Tiket Bus Jember ke Kota2 Besar di Indonesia</center></b></td>
				<td rowspan="13">&nbsp</td>
			</tr>
			<tr>
				<td colspan="6" height="50"><h4><center><u>P.O <?php echo $row['po']; ?></u><br/><?php echo $row['jurusan']; ?></h4></center></td>
			</tr>
			<tr>
				<td colspan="6" height="10"></td>
			</tr>
			<tr>
				<td width="25%">NAMA</td>
				<td colspan="4"><?php echo $row['nama']; ?></td>
				<td width="10%"><b><center><?php echo $row['kode']; ?></b></center></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td colspan="4"><?php echo $row['alamat']; ?></td>
				<td><b><center><?php echo $row['kelas']; ?></b></center></td>
			</tr>
			<tr>
				<td>JAM BERANGKAT</td>
				<td colspan="4"><?php echo $row['jadwal']; ?></td>
				<td></td>
			</tr>
			<tr>
				<td>TGL BERANGKAT</td>
				<td colspan="4"><?php echo $row['tglberangkat']; ?></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="4"></td>
				<td align="right">Harga Rp.</td>
				<td align="right"><?php echo $row['harga']; ?></td>
			</tr>
			<tr>
				<td colspan="4" width="70%">- Sudah termasuk iuran wajib penumpan sesuai UU No. 33/1964</td>
				<td align="right">PPN 10% Rp.</td>
				<td align="right"><?php echo $row['ppn']; ?></td>
			</tr>
			<tr>
				<td colspan="4">- Barang hilang/rusak resiko penumpang</td>
				<td align="right">Asuransi Rp.</td>
				<td align="right"><b><?php echo $row['asuransi']; ?></b></td>
			</tr>
			<tr>
				<td colspan="4">- Terima kasih atas kepercayaan anda, Semoga selamat sampai tujuan</td>
				<td align="right"><b>Total Rp.</b></td>
				<td align="right"><b><?php echo $row['total']; ?></b></td>
			</tr>
			<tr>
				<td colspan="6" height="10"></td>
			</tr>
			<tr>
				<td colspan="6" height="10"><center><a href="jadwalbus.php"><button type="button" class="btn btn-info btn-small" name="button">Transaksi Sukses !, Kembali</button></center></a></td>
			</tr>
		</table>
		
		</div>
		<?php } ?>
</body>
</html>