<?php
	include "../config/koneksi.php";
	include "../menu.php";
	session_start();
	
	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}

	$id            =$_POST['id'];
	$matapelajaran =$_POST['matapelajaran'];
	
	$quer="UPDATE matapelajaran SET matapelajaran='$matapelajaran' WHERE id='$id'";
	$oper=mysqli_query($koneksi,$quer);
	
	if($oper){
		header("location:index.php");
	}
	
?>
