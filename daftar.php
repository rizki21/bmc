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
						<th><h3><center>Sign Up Member BMC Ticketing</center></h3></th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td>
						
						<form method="post" class="form-horizontal">
		<div class="control-group">
			<label class="control-label">Nama</label>
			<div class="controls">
				<input type="text" name="nama"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Alamat</label>
			<div class="controls">
				<input type="text" name="alamat"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Jenis Kelamin</label>
			<div class="controls">
				<select name="jk" width="50">
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">No Telpon</label>
			<div class="controls">
				<input type="number" name="nohp"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Email</label>
			<div class="controls">
				<input type="text" name="email"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Password</label>
			<div class="controls">
				<input type="password" name="password"/>
			</div>
        </div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary btn-small" name="submit">Simpan</button>
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
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$jk = $_POST['jk'];
			$nohp = $_POST['nohp'];
			$email = $_POST['email'];
			$password =$_POST['password'];
		
			$queryinsert="INSERT INTO member(nama,alamat,jk,nohp,email,password) VALUES('$nama','$alamat','$jk','$nohp','$email','$password')";
		
		if (mysqli_query($koneksi, $queryinsert)){
			echo "<center><h4>Selamat, Anda terdaftar di BMC-Ticketing</center></h4>";
			}else{
			echo "error: ". $queryinsert . "<br/>". mysqli_error($koneksi);
			}
			
			mysqli_close($koneksi);
			}
?>
</body>
</html>