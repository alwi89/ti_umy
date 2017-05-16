<?php
session_start();
require_once("koneksi.php");
$id_hasil = escape($_POST['id_hasil']);
$nik = escape($_SESSION['mbr']);
$komentar = escape($_POST['komentar']);
$a = mysql_query("insert into komentar(nik, tanggal, id_hasil_penelitian, komentar) values('$nik', date(now()), '$id_hasil', '$komentar')");
if($a){
	setcookie("berhasil", "berhasil mengirim komentar", time()+2);
}else{
	setcookie("gagal", "gagal mengirim komentar, ".mysql_error(), time()+2);
}
header("location:index.php?h=upload_detail&id=$id_hasil");
?>