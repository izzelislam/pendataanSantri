<?php
	include "../config/koneksi.php";
	include "../menu.php";

	session_start();

	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}

	
	$id				=$_POST['id'];
	$namasantri	 	=$_POST['namasantri'];
	$namamapel		=$_POST['namamapel'];
	$nilai_angka	=$_POST['nilai_angka'];
	
		if($nilai_angka >=90 && $nilai_angka<=100){
					$nilai_huruf= 'A';
				}
			else if($nilai_angka >=80 && $nilai_angka<=89){
					$nilai_huruf= 'B+';
				}
			else if($nilai_angka >=60 && $nilai_angka<=79){
					$nilai_huruf='B';
				}
			else if ($nilai_angka>=40 && $nilai_angka<=59){
					$nilai_huruf='C+';
				}
			else if ($nilai_angka>=30 && $nilai_angka<=39){
					$nilai_huruf='C';
				}
			else if($nilai_angka>=20 && $nilai_angka<=29){
					$nilai_huruf='D';
				}
			else if($nilai_angka>=0 && $nilai_angka<=19){
					$nilai_huruf='D-';
				}
	
	$quer="UPDATE mapelsantri SET id='$id',santri_id='$namasantri', matapelajaran_id='$namamapel', 
		   nilai_angka='$nilai_angka', nilai_huruf='$nilai_huruf' WHERE id='$id'";
	$oper=mysqli_query($koneksi,$quer);
	
	if($oper){
		header('location:index.php');
	}


?>












