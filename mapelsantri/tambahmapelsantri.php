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
	<form method="POST" action="prosestmps.php">
		<select name="namasantri">
		<?php
			include "../config/koneksi.php";
			
			$quer="SELECT id,nama FROM user";
			$oper=mysqli_query($koneksi,$quer); 
			
			$no=1;
			while($data=mysqli_fetch_assoc($oper)){
		?>
			<option   value="<?php echo $data['id'];?>"><?php echo $data['nama'];?></option>
		<?php
		}
		?>
		</select><br><br>
		<select name="namamapel">
		<?php
			include "../config/koneksi.php";
			
			$quer1="SELECT * FROM matapelajaran";
			$oper1=mysqli_query($koneksi,$quer1); 
			
			$no=1;
			while($data=mysqli_fetch_assoc($oper1)){
		?>
			<option  value="<?php echo $data['id'];?>"><?php echo $data['matapelajaran'];?></option>
			<?php
			}
			?>
		</select>
		
		<br><br>
		Nilai Angka:
		<input type="number" name="nilai_angka"><br><br>
		<input id="sub" type="submit" value="tambah">			
	</form>
</div>
</body>	

