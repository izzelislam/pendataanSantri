
<head>
	<style>
		.container{
			width:50%;
			display:flex;
			justify-content:center;
			position:absolute;
			position:absolute;left:50%;top:50px;
			transform:translateX(-50%);
			box-shadow:1px 1px 7px 2px black;
						
		}
		.satu{
			background:black;
			width:50%;
			background-image:url("https://images.unsplash.com/photo-1475666675596-cca2035b3d79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80");
			height:500px;
		}		
		.dua{
			width:50%;
			padding:20px;padding-top:130px;
			text-align:center;
			line-height:500px;
		}
		
		.dua input{
			width:80%;
			height:50px;
			margin:7px;
			border-radius:20px;
			border:1px #838584 solid;
			padding:10px;
		}
		.dua #sub{
			width:80%;
			height:50px;
			margin:7px;
			border-radius:20px;
			border:1px #838584 solid;
			padding:10px;
			background:black;color:white;font-size:14pt;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="satu">
			
		</div>
		<div class="dua">
			<form action="proseslogin.php" method="POST">
				<input type="email"  name="satu"  placeholder="Email.."><br>
				<input type="password" name="dua" placeholder="Pasword.."><br>
				<input id="sub" type="submit" value="masuk">
				
			</form>
		</div>
	</div>
</body>
