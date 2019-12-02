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
			}
			table{
				width:70%;
				position:absolute;left:25%;top:12%;
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

	<a href="tambahmapelsantri.php">Tambah mapel santri </a>
	<table border="1" cellpadding="5px">
	<tr><td colspan="6"><a href="tambahmapelsantri.php"><i style="background:#039938;padding:5px;color:white;border-radius:4px;" class="material-icons">add_box</i></a></td></tr>
		<tr>
			<th>No</th>
			<th>Id santri</th>
			<th>Mapel</th>
			<th>Nilai Huruf</th>
			<th>Ninali Anggka</th>
			<th>Action</th>
		</tr>
			<?php
				function santri($id,$koneksi){
					$quer="SELECT * FROM user WHERE id='$id'";
					$oper=mysqli_query($koneksi,$quer);
					$data=mysqli_fetch_assoc($oper);
					
					return $data['nama'];
					exit;
				
				}
				
				function mapel($id_mapel,$koneksi){
					$quer="SELECT * FROM matapelajaran WHERE id='$id_mapel'";
					$oper=mysqli_query($koneksi,$quer);
					$data=mysqli_fetch_assoc($oper);
					
					return $data['matapelajaran'];
					exit;
				
				}
				
				$quer="SELECT * FROM mapelsantri";
				$oper=mysqli_query($koneksi,$quer);
				
				$no=1;
				while($data=mysqli_fetch_assoc($oper)){
			?>
		<tr>
			<td><?= $no++ ; ?></td>
			<td><?= santri($data['santri_id'],$koneksi);?></td>
			<td><?= mapel($data['matapelajaran_id'],$koneksi);?></td>
			<td><?= $data['nilai_angka'];?></td>
			<td><?= $data['nilai_huruf'];?></td>
			<td>
			<a href="delete.php?id=<?= $data['id'];?>"><i style="background:#f23535;padding:5px;color:white;border-radius:4px;" class="material-icons">delete</i></a>
			<a href="edit.php?id=<?= $data['id'];?>"><i style="background:#0b9bbf;padding:5px;color:white;border-radius:4px;" class="material-icons">build</i></a>
			</td>
			
		</tr>
		<?php
			}
		?>
	</table>

</body>
