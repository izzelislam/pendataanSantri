<?php
	include "../config/koneksi.php";
	include "../menu.php";
	
	session_start();
	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}

	$id=$_GET['id'];
	
	$quer="DELETE FROM matapelajaran WHERE id='$id'";
	$oper=mysqli_query($koneksi,$quer);
	
	if($oper){
		header('location:index.php');
	}
?>
