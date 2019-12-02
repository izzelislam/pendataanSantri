<?php
	include "../menu.php";
	include "../config/koneksi.php";
	session_start();
	
	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}
	
	$nama    =$_POST['nama'];
	$password=md5($_POST['password']);
	$email   =$_POST['email'];
	$ttl     =$_POST['ttl'];
	
	$quer="INSERT INTO user (nama, password, email,ttl) VALUES ('$nama','$password','$email','$ttl') ";
	$in=mysqli_query($koneksi,$quer);
	
	if ($in){
		header ('location:index.php');
	
		
	}else{
		echo "<script> alert(\" data gagal di tambah\")</script>";
	}

?>
