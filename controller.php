<?php 
error_reporting(0);
include 'inc/Aoutoloader.php';
$url = $_GET['halaman'];
if ($url == 'home'){
	include 'header.php';
	include 'home.php';
	include 'footer.php';
} elseif ($url == 'add-anggota'){
	include 'header.php';
	include 'tambahanggota.php';
	include 'footer.php';
}else{
	echo "home";
}
?>