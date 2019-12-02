<?php
	include "../config/koneksi.php";
	include "../menu.php";
	
	session_start();
	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}
?>
<head>
	<style>
		
		body{
			font-family:sans-serif;
			background:#fcfcfc;
		}
		input,select,option{
			width:100%;
			height:40px;border-radius:4px;color:#3d3d3d;
			
		}
		#konten{
			width:30%;
			position:absolute; right:24%;top:150px;
			background:#fcfcfc;border-radius:10px;padding:15px;
			box-shadow:1px 1px 1px 1px #a6a6a6;color:#3d3d3d;
		}
		#sub{
			background:#0b9bbf;
			color:white;font-size:14pt;
			border-radius:4px;
		}
	</style>
</head>
<body>
	<div id="konten">
	<form method="POST" action="prosesedit.php">
	
		<?php
				
				include "../config/koneksi.php";
				$id=$_GET['id'];
				
				$quer2="SELECT * FROM mapelsantri WHERE id='$id'";
				$oper2=mysqli_query($koneksi,$quer2); 
				$data1=mysqli_fetch_assoc($oper2);
		?>

	
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<select name="namasantri">
				<?php 
					$quer="SELECT id,nama FROM user";
					$oper=mysqli_query($koneksi,$quer); 
				
					while($data2=mysqli_fetch_assoc($oper)){
				
				?>
				<option   value="<?php echo $data2['id'];?>"><?php echo $data2['nama'];?></option>
				<?php
						
					}
				?>
			</select><br><br>
		<select name="namamapel">
				<?php

					$quer1="SELECT * FROM matapelajaran";
					$oper1=mysqli_query($koneksi,$quer1); 
	
					while($data=mysqli_fetch_assoc($oper1)){
				?>
			<option  value="<?php echo $data['id'];?>"><?php echo $data['matapelajaran'];?></option>
				<?php
				}
				?>
		</select>
			
		<br><br>
		Nilai Angka:
		<input type="number" name="nilai_angka" value="<?php echo $data1['nilai_angka'];?>"><br><br>
		<input id="sub" type="submit" value="simpan">			
	</form>
</div>
</body>	


