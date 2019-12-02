<?php
    session_start();
	
	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}
	include "../config/koneksi.php";
	include "../menu.php";
	
?>
<head>
	<style>
		body{
			font-family:sans-serif;
			background:#fcfcfc;
		}
		input{
			width:100%;
			height:40px;border-radius:4px;color:#3d3d3d;
			
		}
		#teng{
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
<div id="teng">
	<a href="index.php">Kembali</a><br><br>
	<form method="post" action="prosestambah.php">
		nama :<br><input type="text" name="nama"><br>
		pass :<br><input type="password" name="password"><br>
		email :<br><input type="email" name="email"><br>
		ttl :<br><input type="date" name="ttl"><br>
		<br><input id="sub" type="submit" value="tambah" name="kirim"><br>
	</form>
</div>
</body>
