<?php
session_start();
include "../koneksi.php";
if (empty($_SESSION['namauser']) )
{
	exit("<script>window.alert('Login Dulu');
		window.location='index.php';</script>");
}
session_destroy();
exit("<script>window.alert('Keluar');
	window.location='index.php';</script>");
	?>