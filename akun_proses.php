<?php
session_start();
require_once("koneksi.php");
$nik = escape($_POST['nik']);
$nama = escape($_POST['nama']);
$jabatan = escape($_POST['jabatan']);
$alamat = escape($_POST['alamat']);
$no_hp = escape($_POST['no_hp']);
$email = escape($_POST['email']);
$username = escape($_POST['username']);
$password = escape($_POST['password']);
$kode_lama = escape($_POST['kode_lama']);
$a = mysql_query("update dosen set nama='$nama', jabatan='$jabatan', alamat='$alamat', no_hp='$no_hp', email='$email', username='$username', password='$password' where nik='$nik'");
if($a){
	$_SESSION['nm_mbr'] = $nama;
	setcookie("berhasil", "berhasil mengedit akun", time()+2);
}else{
	setcookie("gagal", "gagal mengedit akun, ".mysql_error(), time()+2);
}
header("location:index.php?h=akun");
?>