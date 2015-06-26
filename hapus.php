<?php
include("koneksi.php");
$kode=$_GET['kode'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"><!-- menghubungkan css twitter bootstrap pada html-->
	<link href="css/bootstrap-responsive.css" rel="stylesheet"><!-- berfungsi untuk membuat halaman web menjadi responsive-->
</head>
<body>
	<form method="post">
	<?php
		$queryselectmh= "SELECT * FROM bus WHERE kode='$kode'"; /* querry sql untuk menampilkan data sesuai dengan nim */
		$resultmh= mysqli_query($koneksi, $queryselectmh);
		$row = mysqli_fetch_array($resultmh, MYSQLI_ASSOC);

		if (mysqli_num_rows($resultmh)==0){
			echo '<center><h2><font color="red">data buku tidak ditemukan.</center></h2></font>';
		}else{
	?>
	
	<h4>Apakah anda yakin akan menghapus data ini?</h4>
		<form method="post" class="form-horizontal">
        <div class="control-group">
			<label class="control-label">NAMA P.O : </label>
			<div class="controls">
				<input type="text" name="po" disabled value="<?php echo $row['po']; ?>" size="50"/> <!-- menampilkan nama sesuai dengan nim & nama akan disabled-->
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">JURUSAN : </label>
			<div class="controls">
				<input type="text" name="jurusan" disabled value="<?php echo $row['jurusan']; ?>" size="50"/> <!-- menampilkan nama sesuai dengan nim & nama akan disabled-->
			</div>
        </div>
		<div class="control-group">
			<div class="controls">
				<input type="submit" name="submit"/>
				<input type="button" value="cancel" onclick="window.location='jadwalbus.php'"> <!-- kembali ke halaman mahasiswa-->
			</div>
        </div>
        </form>
	
	<?php
		}
		if(isset($_POST['submit'])){
			$querydelete="DELETE FROM bus WHERE kode='$kode'"; /* menghapus data sesuai dengan nim */
			$querydelete2="DELETE FROM pembelian WHERE kode='$kode'";
			
			if (mysqli_query($koneksi, $querydelete) && mysqli_query($koneksi, $querydelete2)){
				echo "data has been deleted successfully";
				header("Location: jadwalbus.php");
			}else{
				echo "error: " . $querydelete . "<br>" . mysqli_error($koneksi);
			}
			
			mysqli_close($koneksi);
		}
	?>
</body>
</html>