<?php

switch(@$_GET['act']){
	//tampil user
	default:
	echo "<center><h2>Daftar Anggota FansClub</h2></center>
	<hr>
	<br>
	<div class=\"row\">
	<div class=\"col-lg-12\">	
	<table class=\"table\">
	<thead class=\"thead-dark\">
	<tr>
	<th scope=\"col\">No</th>
	<th scope=\"col\">Kode Anggota</th>
	<th scope=\"col\">Foto</th>
	<th scope=\"col\">Nama</th>
	<th scope=\"col\">Alamat</th>
	<th scope=\"col\">No HP</th>
	<th scope=\"col\">Nama Fans</th>
	<th scope=\"col\">Alasan</th>
	<th scope=\"col\">Aksi</th>
	</tr>
	</thead>
	<tbody>";
	$tampil=mysqli_query($con, "select * from daftar");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)) {
		echo "
		<tr>
		<th scope=\"row\">$no</th>
		<td>$r[id]</td>
		<td><img src='../img/".$r['foto']."' width='50'></td>
		<td>$r[nama]</td>
		<td>$r[alamat]</td>
		<td>$r[no_hp]</td>
		<td>$r[nama_fans]</td>
		<td>$r[alasan]</td>
		<td><a button type=\"submit\" class=\"btn btn-primary\" href=?module=daftar&act=editdaftar&id=$r[id]>Edit</a>
		<a button type=\"submit\" class=\"btn btn-danger\" href=\"aksi.php?module=daftar&act=hapus&id=$r[id]\"onClick=\"return confirm('apakah anda benar akan menghapus daftar $r[id]?')\">Hapus</a></td>
		</tr>
		</tbody>
		</div>
		</div>";
		$no++;
	}
	echo "</table>";

	break;
	//edit user
	case "editdaftar":
	$edit=mysqli_query($con,"select * from daftar where id='$_GET[id]'");
	$r=mysqli_fetch_array($edit);
	echo "<center><h2>Edit Daftar</h2></center>
	<form method=post action='aksi.php?module=daftar&act=update' enctype='multipart/form-data'>
	<div class=\"form-group\">
	<input type=hidden name=id value='$r[id]'>
	<label for=\"exampleInputEmail1\">Nama</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=nama value='$r[nama]' >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Alamat</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=alamat value='$r[alamat]' >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">No HP</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=no_hp value='$r[no_hp]' >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Nama Fans</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=nama_fans value='$r[nama_fans]' >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Foto</label>
	<img src='../img/$r[foto]' width='50'><br>
	<input name='foto' type='file' size='30' />
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Alasan</label>
	<textarea  name=\"alasan\" class=\"form-control\" value='$r[alasan]'>$r[alasan]</textarea>
	</div>
	<button type=\"submit\" class=\"btn btn-primary\" value=Update>Update</button>
	<button type=\"submit\" class=\"btn btn-primary\" value=Batal onClick=self.history.back()>Batal</button>
	</form>";
	break;}


	?> 