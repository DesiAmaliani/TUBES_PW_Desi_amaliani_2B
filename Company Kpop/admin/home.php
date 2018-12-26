<?php
session_start();
//error_reporting(0);

//pabiila user yang mengakses tidak sah
if (empty ($_SESSION['namauser']) and empty ($_SESSION['passuser'])) {
	echo "<center>Untuk megakses halaman ini, anda harus login terlebih dahulu <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center";
}

//apabila user yang mengakses sah
else {
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>admin</title>
		<script type="text/javascript" src="../tinymce/tiny_mce.js"></script>
		<script type="text/javascript">
			tinymce.init({
				mode:"textareas",
				theme:"advanced",
			});
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<link href="../include/style_admin.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>
	<body style="background-color: #FFEFD5;">

		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td colspan="2" align="left" valign="top">

					<nav class="navbar navbar-dark fixed-top nav-pills nav-justified" style="background-color: #A9A9A9;">
						<!-- Navbar content -->
						<a class="navbar-brand"><img src="" height="40" width="40"></a>
						<ul class="nav justify-content-end nav-tabs">
							<li class="nav-item">
								<a class="nav-link" href="home.php?module=home" style="color: white;">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="home.php?module=daftar&act=view" style="color: white;"> Tabel Fans</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="home.php?module=anggota&act=view" style="color: white;"> Tabel Anggota</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="logout.php" style="color: white;">Logout</a>
							</li>
						</ul>
					</nav><br><br><br>				
				</td>
			</tr><br>
			<tr>
				<td align="left" valign="top" bgcolor="#FEFDF7" class="text"
				id="content"style="background-color: #FFEFD5;">
				<?php include "tampilan.php"; ?></td>
			</tr>
		</table>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
	</html>
	<?php
}
?>