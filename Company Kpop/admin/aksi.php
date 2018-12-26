<?php
include "../koneksi.php";
$module=$_GET['module'];
$act=$_GET['act'];

if ($module=='daftar' and $act=='update')
{
	$set = true;
	$msg = "";
//tentukan variabel file yg diupload dan tipe file
	$tipe_file = $_FILES['foto']['type'];
	$lokasi_file = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];
	$save_file =move_uploaded_file($lokasi_file,"../img/$nama_file");
	if(empty($lokasi_file))
	{
		isset($set);
	}
	else
	{
//tentukan tipe file harus image
		if ($tipe_file != "image/gif" and
			$tipe_file != "image/jpeg" and
			$tipe_file != "image/jpg" and
			$tipe_file != "image/pjpeg" and
			$tipe_file != "image/png")
		{
			$set=false;
			$msg= $msg. 'Upload gagal, tipe file harus image..';
		}
		else
		{
			$unlink=mysqli_query($koneksi,"select * from daftar where
				id='$_POST[id]'");
			$CekLink=mysqli_fetch_array($unlink);
			if(!empty($CekLink[foto]))
			{
				unlink("../img/$CekLink[foto]");
			}
			isset($save_file);
		}
//replace di server
		if($save_file)
		{
			chmod("../img/$nama_file", 0777);
		}
		else{
			$msg = $msg.'Upload Image gagal..';
			$set = false;
		}
	}
	if($set)
	{
		$id=$_POST['id'];
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$no_hp=$_POST['no_hp'];
		$nama_fans=$_POST['nama_fans'];
		$alasan=$_POST['alasan'];
		if(empty($lokasi_file))
		{
			mysqli_query($con,"update daftar set nama='$nama',
				nama_fans='$nama_fans',alamat='$alamat', alasan='$alasan', no_hp='$no_hp'
				where id='$id'");
		}else{
			mysqli_query($con,"update daftar set nama='$nama',
				nama_fans='$nama_fans', alamat='$alamat',
				foto='$nama_file', alasan='$alasan', no_hp='$no_hp'
				where id='$id'");
		}
		$msg= $msg.'Update Daftar Sukses..';
		print "<meta http-equiv=\"refresh\"
		content=\"1;URL=home.php?module=daftar&act=view\">";
	}
	echo "$msg";
}
elseif ($module=='daftar' AND $act=='hapus') {
	$unlink=mysqli_query($con,"select * from daftar where
		id='$_GET[id]'");
	$CekLink=mysqli_fetch_array($unlink);
	if(!empty($CekLink[foto]))
	{
		unlink("../img/$CekLink[foto]");
	}
	mysqli_query($con,"delete from daftar where id='$_GET[id]'");
	header('location:home.php?module=daftar&act=view'.$module);
}
elseif ($module=='anggota' and $act=='input')
{
	$set = true;
	$msg = "";
//tentukan variabel file yg diupload dan tipe file
	$tipe_file = $_FILES['foto']['type'];
	$lokasi_file = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];
	$save_file =move_uploaded_file($lokasi_file,"../img/$nama_file");
	if(empty($lokasi_file))
	{
		$set=false;
		$msg= $msg. 'Upload gagal, Anda Lupa Memasang foto..';
	}
	else
	{
 //tentukan tipe file harus image
		if ($tipe_file != "image/gif" and
			$tipe_file != "image/jpeg" and
			$tipe_file != "image/jpg" and
			$tipe_file != "image/pjpeg" and
			$tipe_file != "image/png")
		{
			$set=false;
			$msg= $msg. 'Upload gagal, tipe file harus image..';
		}
		else
		{
			isset($save_file);
		}
//replace di server
		if($save_file)
		{
			chmod("../img/$nama_file", 0777);
		}
		else
		{
			$msg = $msg.'Upload foto gagal..';
			$set = false;
		}
	}
	if($set)
	{
		$anggota=$_POST['anggota'];
		$nama=$_POST['nama'];
		$posisi=$_POST['posisi'];
		$sql=mysqli_query($con,"insert into
			anggota(anggota,nama,posisi,foto)values('$anggota','$nama'
			,'$posisi','$nama_file')");
		$msg= $msg.'Upload Daftar Sukses..';
		print "<meta http-equiv=\"refresh\"
		content=\"1;URL=home.php?module=anggota&act=view\">";
	}
	echo "$msg";
}
elseif ($module=='anggota' and $act=='update')
{
	$set = true;
	$msg = "";
//tentukan variabel file yg diupload dan tipe file
	$tipe_file = $_FILES['foto']['type'];
	$lokasi_file = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];
	$save_file =move_uploaded_file($lokasi_file,"../img/$nama_file");
	if(empty($lokasi_file))
	{
		isset($set);
	}
	else
	{
//tentukan tipe file harus image
		if ($tipe_file != "image/gif" and
			$tipe_file != "image/jpeg" and
			$tipe_file != "image/jpg" and
			$tipe_file != "image/pjpeg" and
			$tipe_file != "image/png")
		{
			$set=false;
			$msg= $msg. 'Upload gagal, tipe file harus image..';
		}
		else
		{
			$unlink=mysqli_query($con,"select * from anggota where
				kd_member='$_POST[kd_member]'");
			$CekLink=mysqli_fetch_array($unlink);
			if(!empty($CekLink[foto]))
			{
				unlink("../img/$CekLink[foto]");
			}
			isset($save_file);
		}
//replace di server
		if($save_file)
		{
			chmod("../img/$nama_file", 0777);
		}
		else{
			$msg = $msg.'Upload Image gagal..';
			$set = false;
		}
	}
	if($set)
	{
		$id=$_POST['kd_member'];
		$anggota=$_POST['anggota'];
		$nama=$_POST['nama'];
		$posisi=$_POST['posisi'];
		if(empty($lokasi_file))
		{
			mysqli_query($con,"update anggota set nama='$nama',
				anggota='$anggota',posisi='$posisi'
				where kd_member='$id'");
		}else{
			mysqli_query($con,"update anggota set nama='$nama',
				anggota='$anggota', posisi='$posisi',
				foto='$nama_file'
				where kd_member='$id'");
		}
		$msg= $msg.'Update anggota Sukses..';
		print "<meta http-equiv=\"refresh\"
		content=\"1;URL=home.php?module=anggota&act=view\">";
	}
	echo "$msg";
}
//hapus record anggota
elseif ($module=='anggota' and $act=='hapus')
{
	$unlink=mysqli_query($con,"select * from anggota where
		kd_member='$_GET[id]'");
	$CekLink=mysqli_fetch_array($unlink);
	if(!empty($CekLink[foto]))
	{
		unlink("../img/$CekLink[foto]");
	}
	mysqli_query($con,"delete from anggota where kd_member='$_GET[id]'");
	header('location:home.php?module=anggota&act=view'.$module);
}
?>