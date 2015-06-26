<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Selamat Datang Di BMC Jember</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/theme.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container theme-showcase" role="main">
					<table border="0" width="100%" height="70">
						<tr>
							<td width="280" height="70"><img src="gambar/logo-bmc.jpg" width="96%" class="img-rounded" height="72"></td>
							<td valign="bottom"><h3>Official Web Site</h3></td>
							<td valign="bottom" width="500" align="right">
								<h5>
									<?php
										session_start();	
										echo "<div class='alert-succes' role='alert'>".$_SESSION['nama']."</div>";
									?>
								</h5><a href="signout.php"><u><h6>Sign Out</u></h6></a></td>
						</tr>
					</table>
		<?php
		
			include("koneksi.php");
			
			if (isset($_POST['signin'])){
			
				SESSION_START();
				$email=$_POST['email'];
				$password=$_POST['password'];
				
			$select= "select * from member where email='$email' and password='$password';";
			$result=mysqli_query($koneksi,$select);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			$_SESSION['idmember']=$row['idmember'];
			$_SESSION['nama']=$row['nama'];
			$_SESSION['alamat']=$row['alamat'];
			$_SESSION['nohp']=$row['nohp'];
			
			$select2= "select * from member where email='$email' and password='$password' and akses='admin';";
			$result2=mysqli_query($koneksi,$select2);
			$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
			
			if (mysqli_num_rows($result) == 1 && mysqli_num_rows($result2) == 1){
				echo '<meta http-equiv="refresh" content="0; url=menuadmin.php">';
				}else{
				if (mysqli_num_rows($result) == 1 && mysqli_num_rows($result2) == 0){
				echo '<meta http-equiv="refresh" content="0; url=menumember.php">';
				}else{
				echo "<div class='alert alert-danger' role='alert'>Login Gagal! periksa kembali akun anda</div>";
				}
			}
			}
		?>
					
					
    <!-- Fixed navbar -->
	
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BMC - Ticketing</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php" target="go">Home</a></li>
			<li><a href="jadwal2.php" target="go">Jadwal</a></li>
			<li><a href="jadwalbus.php" target="go">Tiket</a></li>
			<li><a href="inputbus.php" target="go" >Input Bus</a></li>
			<li><a href="stock.php" target="go">Stock</a></li>
			<li><a href="member.php" target="go">Data member</a></li>
            <li><a href="contact.php" target="go">Contact</a></li>
			
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="laporantransaksi.php" target="go">Laporan harian</a></li>
                <li><a href="laporan.php" target="go">Laporan bulanan</a></li>
              </ul>
            </li>
          </ul>
		   <ul class="nav navbar-nav pull-right">
            <li><a href="#"><?php $tanggal= mktime(date("m"),date("d"),date("Y")); echo "<b>".date("d-M-Y", $tanggal)."</b>"; date_default_timezone_set('Asia/Jakarta'); ?></a></li>
          </ul>
        </div>
    </nav>
		<div><img src="gambar/hr.jpg" class="img-rounded" width="100%"/></div><br/>
		<div class="row-fluid">
				<div class="span2">
					<table border="0" width="100%">
						<tr><td width="100%" height="80"><img src="gambar/x8.jpg" width="100%" height="60"></td></tr>
						<tr><td width="100%" height="80"><img src="gambar/x12.jpg" width="100%" height="60"></td></tr>
						<tr><td width="100%" height="80"><img src="gambar/x1.jpg" width="100%" height="60"></td></tr>
						<tr><td width="100%" height="80"><img src="gambar/x2.jpg" width="100%" height="60"></td></tr>
						<tr><td width="100%" height="80"><img src="gambar/x3.jpg" width="100%" height="60"></td></tr>
						<tr><td width="100%" height="80"><img src="gambar/x4.jpg" width="100%" height="60"></td></tr>
						<tr><td width="100%" height="80"><img src="gambar/x5.jpg" width="100%" height="60"></td></tr>
						<tr><td width="100%" height="80"><img src="gambar/x8.jpg" width="100%" height="60"></td></tr>
						<tr><td width="100%" height="80"><img src="gambar/x6.jpg" width="100%" height="60"></td></tr>
					</table>
				</div>	
			<div class="span10"><iframe name="go" width="100%" height="840" src="home.php"></iframe></div>
		</div>
		<div><table border="0" width="100%" background="gambar/retno.jpg"><tr><td><center><font size="1" color="#ffffff">
		Tugas besar pemrograman web: Website pemesanan tiket bus online<br/>
		Oleh Muhammad Ali, Rizki Dwi Putranto, Saka Indra Permana<br/>
		Teknik Informatika Universitas Muhammadiyah Jember<br/>
		2015</center></td></font></tr></table></div>
</div>
</body>
</html>
