<?php
	include "../config/koneksi.php";
	include "../menu.php";
	session_start();

	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}

	$idsantri   =$_POST['namasantri'];
	$mapel      =$_POST['namamapel'];
	$nilai_angka=$_POST['nilai_angka'];


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
				
	


	$quer="INSERT INTO mapelsantri (santri_id,matapelajaran_id,nilai_angka,nilai_huruf) VALUES ('$idsantri','$mapel',
		'$nilai_angka','$nilai_huruf')";
	$oper=mysqli_query($koneksi,$quer);

	if ($oper){

		header('location:index.php');
	}else{

	echo"data gagal di tambah";
	}

?>
