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
	#konten{
		position:absolute;left:28%;top:160px;
		width:40%;
		
	}
	table{
				width:100%;
				position:absolute;left:25%;top:35%;
				border-collapse:collapse;border:1px solid #c2c0c0;
				text-align:left;border-radius:1px;
				box-shadow:0px 3px 2px #a6a6a6;color:#3d3d3d;
			}
			table tr td,th{
				padding:10px;
			}
			table th{
				box-shadow:0px 3px 2px #a6a6a6;
			}
</style>
</head>
<body>
<div id="konten">
<table border="1" cellpadding="5px">
	<tr><td colspan="3"><a href="tambahmapel.php"><i style="background:#039938;padding:5px;color:white;border-radius:4px;" class="material-icons">add_box</i></a></td></tr>
	<tr>
		<th>No</th>
		<th>mapel</th>
		<th>Aksi</th>
	</tr>
<?php
	
	
	$quer="SELECT * FROM matapelajaran";
	$oper=mysqli_query($koneksi,$quer);
	$no=1;
	while($data=mysqli_fetch_assoc($oper)){
?>
	<tr>
		<td><?= $no++;?></td>
		<td><?= $data['matapelajaran']?></td>
		<td>
			<a href="hapusmapel.php?id=<?=$data['id'];?>"><i style="background:#f23535;padding:5px;color:white;border-radius:4px;" class="material-icons">delete</i></a>
			<a href="editmapel.php?id=<?=$data['id'];?>"><i style="background:#0b9bbf;padding:5px;color:white;border-radius:4px;" class="material-icons">build</i></a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
</div>
</body>



