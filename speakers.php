<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css'>
	
	<link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="./css/navbar.css" rel="stylesheet"/>
	<link href="./css/about.css" rel="stylesheet"/>
	<link href="./css/general.css" rel="stylesheet"/>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="./js/navbar.js"></script>
	<?php
		include_once('./include/analytics.php');
	?>
	<link rel="SHORTCUT ICON" href="./imgs/qcop.png"/>
	<style>
		.speakerName{
			font-size: 18px;
			color: white;
			font-family: 'Allerta', sans-serif;
		}
	</style>
	<title>Speakers | QCOP</title>
	<style>
		body{
			background-image: url(./imgs/LANDING.jpg);
		}
	</style>
</head>
<body>

<?php
	include_once('./include/navbar.php');
?>


<div class="outter_wrapper">
	<div class="container">
		<div class="row" style="margin-top:5%;">
			<div class="col-sm-12 text-center">
				<h1 style="color:white;font-size:42px;">QCOP 2015 Speakers</h1>
			</div>
		</div>
		<!--
		<div class="row" style="margin-top:10px;">
			<div class="col-sm-12 white_row">
				<div class="about_wrapper " style="">
					<div class="about_buffer">

						<p class="about_text">
							<img src="./imgs/me.jpg" style="width:100%;height:100%;">
						</p>
					</div>
				</div>
			</div>
		</div>
		-->

		<div class="row" style="margin-top:2%;">
			<div class="col-sm-3 text-center">
				<a href="./speaker?name=Jeff&Kyle">
					<img src="./imgs/speakers/gallant.jpg" style="width:100%;border-radius:50%;">
					<p class="speakerName">Jeff Gallant</p>
				</a>
			</div>
			<div class="col-sm-3 text-center">
				<a href="./speaker?name=Jeff&Kyle">
					<img src="./imgs/speakers/macdonald.jpg" style="width:100%;border-radius:50%;">
					<p class="speakerName">Kyle Macdonald</p>
				</a>
			</div>
			<div class="col-sm-3 text-center">
				<a href="./speaker?name=Jim">
					<img src="./imgs/speakers/leech1.jpg" style="width:100%;border-radius:50%;">
					<p class="speakerName">Jim Leech</p>
				</a>
			</div>
			<div class="col-sm-3 text-center">
				<a href="./speaker?name=Ene">
					<img src="./imgs/speakers/underwood.jpg" style="width:100%;border-radius:50%;">
					<p class="speakerName">Ene Underwood</p>
				</a>
			</div>

			
		</div>
		<div class="row" style="margin-top:2%;">
			<div class="col-sm-3 col-sm-offset-2 text-center">
				<a href="./speaker?name=Dave">
					<img src="./imgs/speakers/dryden.jpg" style="width:100%;border-radius:50%;">
					<p class="speakerName">Dave Dryden</p>
				</a>
			</div>
			<div class="col-sm-3 col-sm-offset-2 text-center">
				<a href="./speaker?name=Andrea">
					<img src="./imgs/speakers/zeelie-varga.jpg" style="width:100%;border-radius:50%;">
					<p class="speakerName">Andrea Zeelie-Varga</p>
				</a>
			</div>
			
			
		</div>
		<div class="row" style="margin-top:10%;">
			<div class="col-sm-12 text-center">
				<h1 style="color:white;font-size:42px;">QCOP 2015 Workshop</h1>
			</div>
		</div>
		<div class="row" style="margin-top:2%;">
			<div class="col-sm-3 text-center">
				<a href="./workshop?name=Joyce">
					<img src="./imgs/speakers/hsu.jpg" style="width:100%;border-radius:50%;">
					<p class="speakerName">Joyce Hsu</p>
				</a>
			</div>
			<div class="col-sm-3 text-center">
				<a href="./workshop?name=Denny">
					<img src="./imgs/speakers/dy.jpg" style="width:100%;border-radius:50%;">
					<p class="speakerName">Denny Young</p>
				</a>
			</div>
			<div class="col-sm-3 text-center">
				<a href="./workshop?name=Jessica">
					<img src="./imgs/speakers/green.jpg" style="width:100%;border-radius:50%;">
					<p class="speakerName">Jessice Green</p>
				</a>
			</div>
			<div class="col-sm-3 text-center">
				<a href="./workshop?name=Canfar">
					<img src="./imgs/speakers/canfar.png" style="width:100%;border-radius:50%;">
					<p class="speakerName">Canfar</p>
				</a>
			</div>
			
		</div>
		
		<div class="row">
			<div style="height:40px;width:100%;position:relative;"></div>
		</div>
	</div>
</div>
<div style="height:40px;width:100%;"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>