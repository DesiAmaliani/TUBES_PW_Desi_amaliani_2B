<?php
$server="localhost";
$username="root";
$password="";
$database="tubes_1";

$con=mysqli_connect($server,$username,$password)or die("koneksi gagal");
mysqli_select_db($con,$database)or die("database tidak bisa di buka");
?>