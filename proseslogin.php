<?php
	session_start();
	include "./config/koneksi.php";
	
	$nama=$_POST['satu'];
	$pass=md5($_POST['dua']);
	
	if(!empty($nama)){

		$quer="SELECT * FROM user WHERE email='$nama' and password='$pass'";
		$oper=mysqli_query($koneksi,$quer);
		
		if(mysqli_num_rows($oper)>0){
			$data=mysqli_fetch_assoc($oper);
				$_SESSION['email']=$data['email'];
				$_SESSION['pass'] =$pass;
				$_SESSION['nama'] =$data['nama'];
				header('location:./santri');
		}
		else{
			echo "pasword salah ..";
		}
	}
	else{
			echo "masukkan password";
		}
	
?>
