<?php
include("koneksi.php");
$idmember =$_GET['idmember'];
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
		$queryselect= "SELECT * FROM member WHERE idmember='$idmember'";
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
						<th><h3><center>Edit Data Member</center></h3></th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td>
					<form method="post" class="form-horizontal">
        <div class="control-group">
			<label class="control-label">Id Member : </label>
			<div class="controls">
				<input type="text" name="idmember" value="<?php echo $row['idmember']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Nama Member : </label>
			<div class="controls">
				<input type="text" name="nama" value="<?php echo $row['nama']; ?>" size="50"/>
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
			<label class="control-label">Alamat : </label>
			<div class="controls">
				<input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">No Hp : </label>
			<div class="controls">
				<input type="number" name="nohp" value="<?php echo $row['nohp']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Email : </label>
			<div class="controls">
				<input type="text" name="email" value="<?php echo $row['email']; ?>" size="50"/>
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Password</label>
			<div class="controls">
				<input type="password" name="password" value="<?php echo $row['email']; ?>"/>
			</div>
        </div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-mini btn-primary" name="submit">Submit</button>
				<a href="member.php"><button type="button" class="btn-mini btn btn-danger" name="button">Kembali</button></a> <!-- kembali ke halaman matakuliah-->
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
			$idmember = $_POST['idmember'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$nohp = $_POST['nohp'];
			$email = $_POST['email'];
		
			$queryupdate = "UPDATE member SET nama='$nama', alamat='$alamat',nohp='$nohp', email='$email' WHERE idmember='$idmember'"; /* querry sql untuk mengupdate data sesuai dengan nim */
			
			if (mysqli_query($koneksi, $queryupdate)){
				echo "data has been updated succesfully";
				header("Location: member.php");
			}else{
				echo "error: ". $queryupdate . "<br/>". mysqli_error($koneksi);
			}
			
			mysqli_close($koneksi);
		}
?>
</body>
</html>