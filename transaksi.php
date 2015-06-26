<?php
include("koneksi.php");
$kode =$_GET['kode'];
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
		$queryselect= "SELECT * FROM bus WHERE kode='$kode'";
		$result= mysqli_query($koneksi, $queryselect);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		session_start();
	?>
	<div class="container">
			<table class="table table-striped">
				<thead>
					<tr>
						<th><h3><center>FORM TRANSAKSI</center></h3></th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td>
					<form method="post" class="form-horizontal">
        <div class="control-group">
			<label class="control-label">Nama : </label>
			<div class="controls">
				<input type="text" name="nama" value="<?php echo $_SESSION['nama']; ?>"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Alamat : </label>
			<div class="controls">
				<input type="text" name="alamat" value="<?php echo $_SESSION['alamat']; ?>"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">No Telp. : </label>
			<div class="controls">
				<input type="text" name="nohp" value="<?php echo $_SESSION['nohp']; ?>"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Kode : </label>
			<div class="controls">
				<input type="text" name="kode"value="<?php echo $row['kode'];?>"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Nama P.O : </label>
			<div class="controls">
				<input type="text" name="po" value="<?php echo $row['po']; ?>"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Jurusan : </label>
			<div class="controls">
				<input type="text" name="jurusan" value="<?php echo $row['jurusan'];?>"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Kelas : </label>
			<div class="controls">
				<input type="text" name="kelas" value="<?php echo $row['kelas'];?>"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Jam Berangkat : </label>
			<div class="controls">
				<input type="text" name="jadwal" value="<?php echo $row['jadwal'];?>"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Fasilitas : </label>
			<div class="controls">
				<input type="text" name="fasilitas" value="<?php echo $row['fasilitas'];?>"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Harga Tiket : </label>
			<div class="controls">
				<input type="text" name="hargajual" value="<?php echo $row['hargajual'];?>"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Jumlah : </label>
			<div class="controls">
				<input type="number" name="jumlah" height="80"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Tgl Berangkat : </label>
			<div class="controls">
				<input type="date" name="tglberangkat"/>
			</div>
        </div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary btn-small" name="submit">Submit</button>
				<a href="jadwal2.php"><button type="button" class="btn btn-danger btn-small" name="button">Kembali</button></a>
			</div> 
        </div>
        </form>	
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	    
		
		<?php
		if(isset($_POST['submit'])){
			$idmember = $_SESSION['idmember'];
			$kode = $_POST['kode'];
			$jumlah = $_POST['jumlah'];
			$tglberangkat = $_POST['tglberangkat'];
			$hargajual = $_POST['hargajual'];
			$harga = $hargajual * $jumlah;
			$ppn = (0.1 * $harga);
			$asuransi = (5000 * $jumlah);
			$total = ($harga + $ppn + $asuransi);
		
			$queryinsert="INSERT INTO transaksi(tgltransaksi,tglberangkat,idmember,kode,jumlah,harga,ppn,asuransi,total) VALUES(now(),'$tglberangkat','$idmember','$kode',$jumlah,$harga,$ppn,$asuransi,$total)";
			$queryupdate="UPDATE bus SET stock=stock-$jumlah";
		
		if (mysqli_query($koneksi, $queryinsert) && mysqli_query($koneksi, $queryupdate)){
			header("Location: konfirmasi.php");
			}else{
			echo "error: ". $queryinsert . "<br/>". mysqli_error($koneksi);
			}
			
			mysqli_close($koneksi);
			}
?>
	
	
</body>
</html>