<?php
	include "../menu.php";
	include "../config/koneksi.php";
	include "../menu.php";
	session_start();
	
	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}
	

	$id		 =$_POST['id'];
	$nama    =$_POST['nama'];
	$password=md5($_POST['password']);
	$email   =$_POST['email'];
	$ttl     =$_POST['ttl'];
	
	$quer="UPDATE user SET nama='$nama' , password='$password' , email='$email' , ttl='$ttl' WHERE id='$id'";
	$oper=mysqli_query($koneksi,$quer);
	
	if ($oper){
		header("location:index.php");
	}else{
		echo "gagal edit";
	}


?>
