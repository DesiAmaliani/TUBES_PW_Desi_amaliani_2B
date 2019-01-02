<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$nama_fans = $_POST['nama_fans'];
	$alasan = $_POST['alasan'];

	$nama_file = $_FILES['foto']['name'];
	$tmp=$_FILES['foto']['tmp_name'];
	$fotobaru=date('dmYHis').$nama_file;
	$path="admin/img/".$fotobaru;

	if (move_uploaded_file($tmp, $path)) {
		# code...
		$sql='insert into daftar(nama,alamat, no_hp, nama_fans, alasan, foto) values("'.$nama.'","'.$alamat.'","'.$no_hp.'","'.$nama_fans.'","'.$alasan.'","'.$fotobaru.'")';
		$query= mysqli_query($con,$sql);
		if($query){
			print "<script>
			alert(\"pengisian Berhasil, selamat anda menjadi anggota fansclub Resmi\");
			location.href = \"index.php\";
			</script>";
		}else{
			print "<script>
			alert(\"pengisian Gagal silahkan cek kemnbali\");
			location.href = \"index.php\";
			</script>";
		}
	}
}
?>