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
$a = mysql_query("insert into dosen(nik, nama, jabatan, alamat, no_hp, email, username, password) values('$nik', '$nama', '$jabatan', '$alamat', '$no_hp', '$email', '$username', '$password')");
if($a){
	setcookie("berhasil", "berhasil melakukan registrasi<br />username : $username<br />password : $password", time()+2);
}else{
	setcookie("gagal", "gagal melakukan registrasi, ".mysql_error(), time()+2);
}
header("location:index.php?h=registrasi");
?>