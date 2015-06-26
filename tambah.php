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
						<th><h3><center>FORM TAMBAH STOCK</center></h3></th>
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
				<input type="text" name="jurusan" value="<?php echo $row['po']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Kelas : </label>
			<div class="controls">
				<input type="text" name="kelas" value="<?php echo $row['po']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Harga Beli : </label>
			<div class="controls">
				<input type="number" name="hargabeli" value="<?php echo $row['hargabeli']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Jumlah Beli : </label>
			<div class="controls">
				<input type="number" name="stock" size="50""/>
			</div>
        </div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-mini btn-primary" name="submit">Submit</button>
				<a href="jadwal2.php"><button type="button" class="btn btn-mini btn-danger" name="button">Kembali</button></a> <!-- kembali ke halaman matakuliah-->
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
			$hargabeli = $_POST['hargabeli'];
			$stock = $_POST['stock'];
		
			$queryupdate = "UPDATE bus SET hargabeli='$hargabeli',stock=(stock+$stock) WHERE kode='$kode'"; /* querry sql untuk mengupdate data sesuai dengan nim */
			$queryinsert =" insert into pembelian (tglpembelian,kode,jumlah,harga,total) values (now(),'$kode',$stock,$hargabeli,($stock*$hargabeli))";
			
			if (mysqli_query($koneksi, $queryupdate)&&mysqli_query($koneksi, $queryinsert)){
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