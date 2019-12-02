<?php
	include "../config/koneksi.php";
	include "../menu.php";
	session_start();
	
	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}
	
	$matapelajaran=$_POST['matapelajaran'];
	
	$quer="INSERT INTO matapelajaran (matapelajaran) VALUES ('$matapelajaran')";
	$oper=mysqli_query($koneksi,$quer);
	
	if($oper){
		header('location:index.php');
	}

?>
