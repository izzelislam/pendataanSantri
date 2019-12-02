<?php
	include "../menu.php";
	include "../config/koneksi.php";
	session_start();
	
	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}
	
$id=$_GET['id'];
$quer="DELETE  FROM user WHERE id='$id'";
$oper=mysqli_query($koneksi,$quer);

if($oper){
	header("location:index.php");
}

?>
