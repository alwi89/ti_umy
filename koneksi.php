<?php
/*
mysql_connect($host, $usr, $pwd) or die('gagal koneksi server');
mysql_select_db($db) or die('database error');
*/
function mysql_connect(){
	$host = 'localhost';
	$usr = "root";
	$pwd = '';
	$db = "umy";
	$con = mysqli_connect($host, $usr, $pwd, $db);
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
  	return $con;
}
function mysql_query($query){
	$con = mysql_connect();
	return mysqli_query($con, $query);
}
function mysql_fetch_array($result){
	return mysqli_fetch_array($result);
}
function mysql_num_rows($result){
	return mysqli_num_rows($result);
}
function escape($string){
	$con = mysql_connect();
	return mysqli_real_escape_string($con, $string);
}
function toIdr($number){
	return number_format($number);	
}
function must_login(){
	if(!isset($_SESSION['mbr'])) {
		echo '<script>window.location="index.php?h=terlarang"</script>';
	}
}
?>