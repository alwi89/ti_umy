<?php
require_once("koneksi.php");
$username = escape($_POST['username']);
$pwd = escape($_POST['password']);
$a = mysql_query("select * from dosen where username='$username' and password='$pwd'");
$cek = mysql_num_rows($a);
if($cek==0){
	setcookie("msg", "username atau password salah", time()+10);
	header("location:index.php");
}else{
	$b = mysql_fetch_array($a);
	session_start();
	$_SESSION['mbr'] = $b['nik'];
	$_SESSION['nm_mbr'] = $b['nama'];
	header("location:index.php");
}
?>