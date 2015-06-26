<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Prak7</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	<script src="select.js"></script>
			<table class="table table-striped">
				<thead>
					<tr>
						<th colspan="2"><h3><center>Jadwal Keberangkatan Bus</center></h3></th>
					</tr>
				</thead>
				<tbody>
					<tr class="danger">
						<td><center><b>Pilih Jurusan Bus :
						<select name="jurusan" onChange="showDosen(this.value)">
						<option>--Pilih Jurusan--</option>
			<?php 
				$query="select distinct(jurusan) from bus";
				$result=mysqli_query($koneksi, $query);
				while($result_data = mysqli_fetch_array($result)){
					list($jurusan)=$result_data;
			?>
				<option value="<?php echo "$jurusan"?>"><?php echo"$jurusan"?></option>
			<?php 
			}
			?>
		</select></center></b>
						</td>
					</tr>
				</tbody>
			</table>
	<div id="txtHint"></div>
	</body>
</html>
<?php
	mysqli_close($koneksi);
?>