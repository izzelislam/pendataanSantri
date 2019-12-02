<?php
	include "../menu.php";
	include "../config/koneksi.php";
	
	session_start();
	
	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:../login.php');
	}
?>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
			body{
				font-family:sans-serif;
			}
			#tbl{
				width:75%;
				position:absolute;left:21.5%;top:35%;
				border-collapse:collapse;border:1px solid #c2c0c0;
				text-align:left;border-radius:1px;
				box-shadow:0px 3px 2px #a6a6a6;color:#3d3d3d;
			}
			#tbl tr td,th{
				padding:10px;
			}
			#tbl th{
				box-shadow:0px 3px 2px #a6a6a6;
			}
			
			#action{
				text-align:center;
			}
		
			#kon1 {
				background:#0b9bbf;
				height:100px;width:20%;
				position:absolute;top:12%;
				left:25%;border-radius:10px;
				text-align:center;color:white;padding:10px;
				box-shadow:0px 3px 2px #a6a6a6;line-height:100%;
			}
			#kon2{
				background:#fad900;
				height:100px;width:20%;
				position:absolute;top:12%;
				left:49.5%;border-radius:10px;text-align:center;color:white;padding:10px;
				box-shadow:0px 3px 2px #a6a6a6;
			}
			#kon3{
				background:#151826;
				height:100px;width:20%;
				position:absolute;top:12%;
				left:73.5%;border-radius:10px;text-align:center;color:white;padding:10px;
				box-shadow:0px 3px 2px #a6a6a6;
		}
		
		#tbl a{
			text-decoration:none;
			background:black;color:white;
			padding:7px;margin:4px;
			border-radius:4px;
		}
	
	</style>
</head>
<body>
	<?php			
			$quer="SELECT * FROM user";
			$quer1="SELECT * FROM matapelajaran";
			$quer2="SELECT * FROM mapelsantri";
			$oper=mysqli_query($koneksi,$quer);
			$oper1=mysqli_query($koneksi,$quer1);
			$oper2=mysqli_query($koneksi,$quer2);
			$jum=mysqli_num_rows($oper);
			$jum1=mysqli_num_rows($oper1);
			$jum2=mysqli_num_rows($oper2);
	?>
	<div id="kon1">
		<table>
			<tr>
				<td><i style="font-size:55pt;position:relative;color:white;" class="fa fa-graduation-cap" aria-hidden="true"></i>
			</td>
			
			<td>
				<b>JUMLAH SANTRI</b><br><b style="font-size:28pt;"><?=$jum;?></b>
			</td>
			</tr>
		</table>
	</div>
	<div id="kon2">
		<b>JUMLAH MAPEL</b><hr><b style="font-size:28pt;"><?=$jum1;?></b>
	</div>
	<div id="kon3">
		<b>TELAH DINILAI</b><hr><b style="font-size:28pt;"><?=$jum2;?></b>
	</div>
	<table id="tbl" border="1" cellpadding="5">
		<tr id="tm">
			<td style="height:80px;" colspan="6"><a style="padding:10px;" href="tambahdata.php"><i class="fa fa-user-plus" aria-hidden="true"></i>tambah user</a></td>
		</tr>
		<tr>
			<th>No</th>
			<th>Nama</h>
			<th>Password</th>
			<th>email</th>
			<th>ttl</th>
			<th>Action</th>
		</tr>
		<?php
			$i=1;
			while($data=mysqli_fetch_assoc($oper)){
		?>
		<tr>
			<td><?= $i++ ;?></td>
			<td><?=  $data['nama'];?></d>
			<td><?= $data['password'] ;?></td>
			<td><?=  $data['email'] ;?></td>
			<td><?=  $data['ttl'] ;?></td>
			<td id="action">
				<a style="background:#d92e2e;" href="hapus.php?id=<?= $data['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i>hapus</a> 
				<a style="background:#2896b5;" href="edit.php?id=<?= $data['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i>edit</a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>



