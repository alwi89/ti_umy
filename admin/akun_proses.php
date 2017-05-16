<?php
session_start();
require_once("../koneksi.php");
$kode_lama = escape($_POST['kode_lama']);
$id_admin = escape($_POST['id_admin']);
$nama_admin = escape($_POST['nama_admin']);
$username = escape($_POST['username']);
$password = escape($_POST['password']);
$a = mysql_query("update admin set id_admin='$id_admin', nama_admin='$nama_admin', username='$username', password='$password' where id_admin='$kode_lama'");
if($a){
	$_SESSION['nm_adm'] = $nama_admin;
	setcookie("berhasil", "berhasil megedit akun", time()+2);
}else{
	setcookie("gagal", "gagal mengedit akun, ".mysql_error(), time()+2);
}
header("location:index.php?h=akun");
?>