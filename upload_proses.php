<?php
session_start();
require_once("koneksi.php");
$nik = escape($_SESSION['mbr']);
$judul = escape($_POST['judul']);
$isi = escape($_POST['isi']);
$lokasi = escape($_POST['lokasi']);
$file_hasil = str_replace(" ", "_", $_FILES['file_hasil']['name']);
$source = $_FILES['file_hasil']['tmp_name'];
$dest = "hasil_penelitian/$file_hasil";
if(strlen($file_hasil)!=0){
	$a = mysql_query("insert into hasil_penelitian(nik, judul, tanggal, lokasi, file, isi_hasil_penelitian) values('$nik', '$judul', date(now()), '$lokasi', '$file_hasil', '$isi')");
	if($a){
		@copy($source, $dest);
	}
}else{
	$a = mysql_query("insert into hasil_penelitian(nik, judul, tanggal, lokasi, isi_hasil_penelitian) values('$nik', '$judul', date(now()), '$lokasi', '$isi')");
}
$id_penelitian = mysql_insert_id();
mysql_query("insert into history(nik, tanggal, id_hasil_penelitian) values('$nik', date(now()), '$id_penelitian')");
if($a){
	setcookie("berhasil", "berhasil mengupload hasil penelitian", time()+2);
}else{
		setcookie("gagal", "gagal mengupload hasil penelitian, ".mysql_error(), time()+2);
}
header("location:index.php?h=upload");
?>