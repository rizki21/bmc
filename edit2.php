<?php
include("koneksi.php");
$kode =$_GET['kode'];
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
		$queryselect= "SELECT * FROM bus WHERE kode='$kode'";
		$result= mysqli_query($koneksi, $queryselect);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		if (mysqli_num_rows($result)==0){
			echo '<center><h2><font color="red">data tidak ditemukan.</center></h2></font>';
		}else{
	?>
	<div class="container">
			<table class="table table-striped">
				<thead>
					<tr>
						<th><h3><center>Edit Data Bus</center></h3></th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td>
	    <form method="post" class="form-horizontal">
        <div class="control-group">
			<label class="control-label">Kode : </label>
			<div class="controls">
				<input type="text" name="kode" value="<?php echo $row['kode']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Nama P.O : </label>
			<div class="controls">
				<input type="text" name="po" value="<?php echo $row['po']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Jurusan : </label>
			<div class="controls">
				<input type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Kelas : </label>
			<div class="controls">
				<input type="text" name="kelas" value="<?php echo $row['kelas']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Jam Berangkat : </label>
			<div class="controls">
				<input type="text" name="jadwal" value="<?php echo $row['jadwal']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Fasilitas : </label>
			<div class="controls">
				<input type="text" name="fasilitas" value="<?php echo $row['fasilitas']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Harga Jual : </label>
			<div class="controls">
				<input type="text" name="hargajual" value="<?php echo $row['hargajual']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary btn-mini" name="submit">Submit</button>
				<a href="jadwalbus.php"><button type="button" class="btn btn-danger btn-mini" name="button">Kembali</button></a> <!-- kembali ke halaman matakuliah-->
			</div> 
        </div>
        </form>
	
	</td>
					</tr>
				</tbody>
			</table>
		</div>
	<?php
		}
		if(isset($_POST['submit'])){
			$kode = $_POST['kode'];
			$po = $_POST['po'];
			$jurusan = $_POST['jurusan'];
			$kelas = $_POST['kelas'];
			$jadwal = $_POST['jadwal'];
			$fasilitas = $_POST['fasilitas'];
			$hargajual = $_POST['hargajual'];
		
			$queryupdate = "UPDATE bus SET po='$po', jurusan='$jurusan',kelas='$kelas', jadwal='$jadwal', fasilitas='$fasilitas', hargajual='$hargajual' WHERE kode='$kode'"; /* querry sql untuk mengupdate data sesuai dengan nim */
			
			if (mysqli_query($koneksi, $queryupdate)){
				echo "data has been updated succesfully";
				header("Location: jadwalbus.php");
			}else{
				echo "error: ". $queryupdate . "<br/>". mysqli_error($koneksi);
			}
			
			mysqli_close($koneksi);
		}
?>
</body>
</html>