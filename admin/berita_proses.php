<?php
session_start();
require_once("../koneksi.php");
if(!isset($_POST['aksi'])){
	$id_berita = urldecode($_GET['id']);
	$a = mysql_query("delete from berita where id_berita='$id_berita'");
	if($a){
		setcookie("berhasil", "berhasil menghapus berita", time()+2);
	}else{
		setcookie("gagal", "gagal menghapus berita", time()+2);
	}
	header("location:index.php?h=berita");
}else if($_POST['aksi']=='tambah'){
	$id_berita = escape($_POST['id_berita']);
	$judul = escape($_POST['judul']);
	$isi = $_POST['isi'];
	$gambar = str_replace(" ", "_", $_FILES['gambar']['name']);
	$source = $_FILES['gambar']['tmp_name'];
	$dest = "../berita/$gambar";
	if(strlen($source)!=0){
		$a = mysql_query("insert into berita(judul, tanggal, isi_berita, gambar_berita) values('$judul', date(now()), '$isi', '$gambar')");
		if($a){
			@copy($source, $dest);
		}
	}else{
		$a = mysql_query("insert into berita(judul, tanggal, isi_berita) values('$judul', date(now()), '$isi')");
	}
	if($a){
		setcookie("berhasil", "berhasil menambah berita", time()+2);
	}else{
		setcookie("gagal", "gagal menambah berita", time()+2);
	}
	header("location:index.php?h=berita");
}else if($_POST['aksi']=='edit'){
	$kode_lama = escape($_POST['kode_lama']);
	$judul = escape($_POST['judul']);
	$isi = $_POST['isi'];
	$gambar = str_replace(" ", "_", $_FILES['gambar']['name']);
	$source = $_FILES['gambar']['tmp_name'];
	$dest = "../berita/$gambar";
	$a = mysql_query("update berita set judul='$judul', tanggal=date(now()), isi_berita='$isi' where id_berita='$kode_lama'");
	if(strlen($source)!=0){
		$a = mysql_query("update berita set gambar_berita='$gambar' where id_berita='$kode_lama'");
		if($a){
			@copy($source, $dest);
		}
	}
	if($a){
		setcookie("berhasil", "berhasil mengedit berita", time()+2);
	}else{
		setcookie("gagal", "gagal mengedit berita", time()+2);
	}
	header("location:index.php?h=berita");
}
?>