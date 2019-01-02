<?php

switch(@$_GET['act']){
	//tampil user
	default:
	echo "<center><h2>Daftar Anggota</h2></center>
	<hr>
	<br>
	<form method=post action='?module=anggota&act=tambahanggota'>
	<input type=submit class=\"btn btn-primary\" value='Tambah'>
	</form>
	<br>
	<br><div class=\"row\">
	<div class=\"col-lg-12\">	
	<table class=\"table\">
	<thead class=\"thead-dark\">
	<tr>
	<th scope=\"col\">No</th>
	<th scope=\"col\">Kode Member</th>
	<th scope=\"col\">Anggota Member</th>
	<th scope=\"col\">Foto</th>
	<th scope=\"col\">Nama</th>
	<th scope=\"col\">Posisi</th>
	<th scope=\"col\">Aksi</th>
	</tr>
	</thead>
	<tbody>";
	$tampil=mysqli_query($con, "select * from anggota");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)) {
		echo "
		<tr>
		<th scope=\"row\">$no</th>
		<td>$r[kd_member]</td>
		<td>$r[anggota]</td>
		<td><img src='img/".$r['foto']."' width='50'></td>
		<td>$r[nama]</td>
		<td>$r[posisi]</td>
		<td><a button type=\"submit\" class=\"btn btn-primary\" href=?module=anggota&act=editanggota&id=$r[kd_member]>Edit</a>
		<a button type=\"submit\" class=\"btn btn-danger\" href=\"aksi.php?module=anggota&act=hapus&id=$r[kd_member]\"onClick=\"return confirm('apakah anda benar akan menghapus anggota $r[kd_member]?')\">Hapus</a></td>
		</tr>
		</tbody>
		</div>
		</div>";
		$no++;
	}
	echo "</table>";

	break;
	case "tambahanggota": 
	echo "<h2>Tambah Anggota</h2>
	<form method=post action='aksi.php?module=anggota&act=input' enctype='multipart/form-data'>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Nama</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"  name=nama >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Anggota dari</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"  name=anggota  >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Posisi</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" name=posisi  >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Foto</label>
	<input name='foto' type='file' size='30' />
	</div>
	<button type=\"submit\" class=\"btn btn-primary\" value=Simpan>Simpan</button>
	<button type=\"submit\" class=\"btn btn-primary\" value=Batal onClick=self.history.back()>Batal</button>
	</form>";
	break;
	//edit user
	case "editanggota":
	$edit=mysqli_query($con,"select * from anggota where kd_member='$_GET[id]'");
	$r=mysqli_fetch_array($edit);
	echo "<center><h2>Edit Anggota</h2></center>
	<form method=post action='aksi.php?module=anggota&act=update' enctype='multipart/form-data'>
	<div class=\"form-group\">
	<input type=hidden name=kd_member value='$r[kd_member]'>
	<label for=\"exampleInputEmail1\">Nama</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=nama value='$r[nama]' >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Anggota dari</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=anggota value='$r[anggota]' >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Posisi</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=posisi value='$r[posisi]' >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Foto</label>
	<img src='img/$r[foto]' width='50'><br>
	<input name='foto' type='file' size='30' />
	</div>
	<button type=\"submit\" class=\"btn btn-primary\" value=Update>Update</button>
	<button type=\"submit\" class=\"btn btn-primary\" value=Batal onClick=self.history.back()>Batal</button>
	</form>";
	break;}


	?> 