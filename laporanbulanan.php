<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Laporan Bulanan</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> <!-- menghubungkan css twitter bootstrap pada html-->
		<link href="css/bootstrap-responsive.css" rel="stylesheet"> <!-- berfungsi untuk membuat halaman web menjadi responsive-->
	</head>
	<body>
	<center><h3>Proses Laporan</h3>
	<form method="post">
	<div class="control-group">
			<label class="control-label"><b>Beban Gaji Karyawan</b></label>
			<div class="controls">
				<input type="number" name="gaji"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label"><b>Beban Listrik & Internet</b></label>
			<div class="controls">
				<input type="number" name="listrik"/>
			</div>
        </div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary btn-small" name="submit">Proses</button>
				<a href="laporan.php"><button type="button" class="btn btn-danger btn-small" name="button">Kembali</button></a>
			</div> 
        </div>
	</div>
	</form>
	
		<?php
			$queryselectmh = "SELECT * FROM transaksi";
			$resultmh = mysqli_query($koneksi, $queryselectmh);		 
			$penjualan=0;
			$ppn=0;
			$asuransi=0;
			$pemasukan=0;
			while($row = mysqli_fetch_array($resultmh, MYSQLI_ASSOC)) {
				$penjualan=($penjualan + $row['harga']);
				$ppn=($ppn + $row['ppn']);
				$asuransi=($asuransi + $row['asuransi']);
				$pemasukan=($pemasukan + $row['total']);
			}
			
			$queryselectme = "SELECT * FROM pembelian";
			$resultme = mysqli_query($koneksi, $queryselectme);
			$pembelian=0;
			while($row = mysqli_fetch_array($resultme, MYSQLI_ASSOC)) {
				$pembelian=($pembelian + $row['total']);
			}
			$labakotor = ($penjualan - $pembelian);
	
		if(isset($_POST['submit'])){
			$gaji = $_POST['gaji'];
			$listrik = $_POST['listrik'];
			$lababersih = ($labakotor-($gaji+$listrik));
			
			$queryinsert="INSERT INTO laporan (bulanlaporan,pemasukan,ppn,asuransi,penjualan,pembelian,labakotor,gaji,listrik,lababersih)
			VALUES(now(),$pemasukan,$ppn,$asuransi,$penjualan,$pembelian,$labakotor,$gaji,$listrik,$lababersih);";
		
		if (mysqli_query($koneksi, $queryinsert)){
			echo "data berhasil diinputkan";
			}else{
			echo "error: ". $queryinsert . "<br/>". mysqli_error($koneksi);
			}
			
			mysqli_close($koneksi);
			}
		?>
		
	</body>
</html>