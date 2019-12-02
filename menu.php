<?php
	session_start();
	if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['nama'])){
		header('location:login.php');
	}

?>
		<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
		body{
			font-size:13pt;
			font-family:sans-serif;
		}
		#header{
			position:fixed;
			top:0px;left:0px;right:0px;bottom:92%;
			background:#fcfcfc;
			z-index:2;
			box-shadow:2px 2px 10px black;
		}
		#menu{
			position:fixed;left:0px;
			background-color:#12131a;
			width:18%;
			height:100%;
			box-shadow:3px 5px 3px black;
		}
	
		#kon {
			 position:absolute;
			 top:10%;
			}
		#kon a{
			 display:block;
			 text-decoration:none;
			 color:white;
			 margin:10px;
			}
			
		#kon a:hover{
			 display:block;
			 text-decoration:none;
			 color:#39a2ed;
			 margin:10px;
			}
		
	
		#m{
			width:18%;
			height:8vh;
			background:#151826;
			position:absolute;z-index:2;
			box-shadow:1px 1px 2px 1px black;
			line-height:8vh;
			color:white;text-align:center;
		}
		i{
		margin-right:8px;
		}
		#log{
			font-size:18pt;
			float:right;
			margin-top:10px;
		}
	</style>
	</head>
	<body>
		<div id="header">
		<div id="m">
			ADMINISTRATOR
		</div>
		<div id="log">
			<a href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
		</div>
		</div>
		<div id="menu">
			<div id="kon">	
			<a href="../santri"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Data Santri</a>
			<a href="../matapelajaran"><i class="fa fa-id-card" aria-hidden="true"></i>Mata Pelajaran</a>
			<a href="../mapelsantri"><i class="fa fa-line-chart" aria-hidden="true"></i>Mapel Santri</a>			</div>
		</div>	
		
	</body>


