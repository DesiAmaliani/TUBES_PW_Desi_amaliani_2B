<?php
include "../koneksi.php";
//bagian home admin
if ($_GET['module']=='home') {
	echo "<center><h2>Halaman Home</h2></center>
	<hr>
	<p class=welcome align=\"center\">Selamat Datang <b>$_SESSION[namauser]</b> di halaman ini</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		";
		}
//bagian user
		elseif ($_GET['module']=='daftar') {
			include "modul/daftar.php";
		}
		elseif ($_GET['module']=='anggota') {
			include "modul/anggota.php";
		}
		else{
			echo "<p><b>BELUM ADA</b></p>";
		}
		?>