<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Image Classifier using ML5 js</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/addons/p5.dom.min.js"></script>
	<script src="https://unpkg.com/ml5@latest/dist/ml5.min.js" type="text/javascript"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script src="https://www.marvinj.org/releases/marvinj-0.9.js"></script>

	<style>
	#myProgress {
		width: 100%;
		background-color: #ddd;
	}

	#myBar {
		width: 1%;
		height: 5px;
		background-color: #04AA6D;
	}
	.label {
		background-color: indigo;
		color: white;
		padding: 0.5rem;
		font-family: sans-serif;
		border-radius: 0.3rem;
		cursor: pointer;
		margin-top: 1rem;
	}
	
</style>
</head>
<body>
	<div class="container" style="   margin: auto;">	

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Orchid Leaf Disease Detection</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about">About</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<h1 style="color: green;" align="center">Orchid Leaf Disease Detection</h1>
		<div id='div_session_write'> </div>
		<br>
		<center>
			<img src="image.jpg" alt="" id="image"   class="img-fluid" align="center" width="220" height="277" />
			
		</center>

		<br><br>
		<div id="myProgress" style="width: 100%; ">
			<div id="myBar" ></div>
		</div><br>          
		<!-- <p><span id="modelStatus">Loading MobileNet</span></p><hr style="max-width:500px; border: 0;"> -->

		<script>

		</script>
		
		<input  type="file" class="custom-file-input" accept="image/*" onchange="loadFile(event)" name="image" id="file" /><br><br>

		<center><button onclick="predict()" type="button" class="btn btn-secondary" id="liveAlertBtn">Predict</button></center>
		
		<hr style="border: 0;">
		<div  style="" style="display: none;" id="div">
			<!-- <p id="result3" style="display: none;"></p> -->
			<div class="card" style="" style="display: none;" id="card">

				<div class="card-body " style="display: none; " id="card-body" > 
					<h5 class="card-title" style="display: none;" id="card-title">Jenis Anggrek</h5>
					<p id="result2" class="card-text" ></p>
					<p id="result"></p>
					
					<a onclick="redirectOrchid(result);" style="display: none;" id="Google" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
					</svg> Google</a>

					<a onclick="detailOrchid(result);" style="display: none;" id="Detail" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
						<path d="m10.277 5.433-4.031.505-.145.67.794.145c.516.123.619.309.505.824L6.101 13.68c-.34 1.578.186 2.32 1.423 2.32.959 0 2.072-.443 2.577-1.052l.155-.732c-.35.31-.866.434-1.206.434-.485 0-.66-.34-.536-.939l1.763-8.278zm.122-3.673a1.76 1.76 0 1 1-3.52 0 1.76 1.76 0 0 1 3.52 0z"/>
					</svg> Detail</a>
				</div>
			</div>
			<br>

			<div class="card" style="" style="display: none;" id="card1">
				
				<div class="card-body"  id="card-body1" style="display: none;">
					<h5 class="card-title" style="display: none;" id="card-title1">Kondisi Daun Anggrek</h5><br>
					<p id="result3" class="card-text" ></p>
					<p id="result"></p>

					<a onclick="redirectDisease(result);" href="about/" style="display: none;" id="Google1" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
					</svg> Google</a>

					<a onclick="detailDisease(result);" style="display: none;" id="Detail1" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
						<path d="m10.277 5.433-4.031.505-.145.67.794.145c.516.123.619.309.505.824L6.101 13.68c-.34 1.578.186 2.32 1.423 2.32.959 0 2.072-.443 2.577-1.052l.155-.732c-.35.31-.866.434-1.206.434-.485 0-.66-.34-.536-.939l1.763-8.278zm.122-3.673a1.76 1.76 0 1 1-3.52 0 1.76 1.76 0 0 1 3.52 0z"/>
					</svg> Detail</a>
				</div>
			</div>
		</div>
		<br>
		<div class="container">	
			<center><button onclick="removeRow()" style="display: none;" type="button" class="btn btn-secondary" id="clearRes">Clear Result</button></center>
			<br>
			<table id="myTable" class="table">
				<table class="table">			
					<tr>
						<th id="label" style="display:none;"></th>
						<th id="confidence" style="display:none;"></th>
					</tr>		
				</table>

				<table id="myTable1" class="table">
					<tr>
						<th id="label1" style="display:none;"></th>
						<th id="confidence1" style="display:none;"></th>
					</tr>
				</table>

			</div>
			<br>
		</div>
		<script type="text/javascript">


			$(function () {
				$("#liveAlertBtn").on('click', function () {
					$("#card-body").delay(1000).show(0);
					$("#img1").delay(1000).show(0);
					$("#card-title").delay(1000).show(0);
					$("#Google").delay(1000).show(0);
					$("#Detail").delay(1000).show(0);

					$("#card-body1").delay(1000).show(0);
					$("#card-title1").delay(1000).show(0);
					$("#Google1").delay(1000).show(0);
					$("#Detail1").delay(1000).show(0);

					$("#label").delay(1000).show(0);
					$("#confidence").delay(1000).show(0);
					$("#label1").delay(1000).show(0);
					$("#confidence1").delay(1000).show(0);
					$("#clearRes").delay(1000).show(0);
				});


			});
		</script>
		<script>
			function removeRow() {
			// var myTable = document.getElementById("myTable");
			// var myTable1 = document.getElementById("myTable1");

			// myTable.remove();
			// myTable1.remove();


			document.getElementById('myTable').innerHTML='';
			document.getElementById('myTable1').innerHTML='';
			// document.getElementById('label1').innerHTML='';
			// document.getElementById('confidence1').innerHTML='';
			// window.location.reload();
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
