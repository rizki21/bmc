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

<div class="container">
			<table class="table table-striped">
				<thead>
					<tr>
						<th><h3><center>Input Trayek Bus Baru</center></h3></th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td>
						
						<form method="post" class="form-horizontal">
		<div class="control-group">
			<label class="control-label"><b>Kode</b></label>
			<div class="controls">
				<input type="text" name="kode"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label"><b>Nama P.O</b></label>
			<div class="controls">
				<input type="text" name="po"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label"><b>Jurusan</b></label>
			<div class="controls">
				<input type="text" name="jurusan"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label"><b>Kelas</b></label>
			<div class="controls">
				<input type="text" name="kelas"/>
			</div>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label"><b>Fasilitas</b></label>
			<div class="controls">
				<input type="text" name="fasilitas"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label"><b>Jam Berangkat</b></label>
			<div class="controls">
				<input type="text" name="jadwal"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label"><b>Harga Jual</b></label>
			<div class="controls">
				<input type="number" name="hargajual"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label"><b>Harga Beli</b></label>
			<div class="controls">
				<input type="number" name="hargabeli"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label"><b>Stock</b></label>
			<div class="controls">
				<input type="number" name="stock"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label"><b>Tambahan</b></label>
			<div class="controls">
				 <textarea rows="3" name="detail"></textarea>
			</div>
        </div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary btn-small" name="submit">Submit</button>
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
			$kode = $_POST['kode'];
			$po = $_POST['po'];
			$jurusan = $_POST['jurusan'];
			$kelas = $_POST['kelas'];
			$fasilitas = $_POST['fasilitas'];
			$jadwal = $_POST['jadwal'];
			$hargajual = $_POST['hargajual'];
			$hargabeli = $_POST['hargabeli'];
			$stock = $_POST['stock'];
			$detail = $_POST['detail'];
		
			$queryinsert="INSERT INTO bus VALUES('$kode','$po','$jurusan','$kelas','$jadwal','$fasilitas',$hargabeli,$hargajual,$stock,'$detail')";
			$queryinsert2="INSERT INTO pembelian (tglpembelian,kode,jumlah,harga,total) values (now(),'$kode',$stock,$hargabeli,($stock*$hargabeli))";
		
		if (mysqli_query($koneksi, $queryinsert) && mysqli_query($koneksi, $queryinsert2)){
			echo "<h4><center>data berhasil diinputkan</h4></center>";
			}else{
			echo "error: ". $queryinsert . "<br/>". mysqli_error($koneksi);
			}
			
			mysqli_close($koneksi);
			}
?>
</body>
</html>