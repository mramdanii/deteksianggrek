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

	<script>
		

		//loadfile function
		var loadFile = function (event) {
			var image = document.getElementById("image");
			image.src = URL.createObjectURL(event.target.files[0]);
		};

		//init
		let leafDiseaseModelURL = 'https://teachablemachine.withgoogle.com/models/Gkf6sTvC9/';
		let orchidModelUrl = 'https://teachablemachine.withgoogle.com/models/SgbvD_jhk/';
		const leafDiseaseclassifier = ml5.imageClassifier(leafDiseaseModelURL + 'model.json', modelLoaded);
		const orchidClassifier = ml5.imageClassifier(orchidModelUrl + 'model.json', modelLoaded);
		// const objectModel = ml5.imageClassifier('MobileNet', modelLoaded);



		// When the model is loaded
		function modelLoaded() {
			move();
			console.log("Model Loaded!");
			let label = document.getElementById("modelStatus").textContent = "Model Loaded!";
		}


		// function predictObject() {
		// 	objectModel.predict(document.getElementById("image"),
		// 		function (err, results) {

		// 			if (err) {
		// 				console.error(err);
		// 			}
		// 			if (results && results[0].label) {
		// 				let label = document.getElementById("result1").textContent = (results[0].label +' | Confidence : ' + results[0].confidence.toFixed(2)*100);
		// 				// alert('results = '+results[0].label+' Confidence = ' + results[0].confidence.toFixed(2) * 100 +'%');
		// 			}

		// 		});
		// }

		function predictOrhid() {
			orchidClassifier.predict(document.getElementById("image"),
				function (err, results) {

					if (err) {
						console.error(err);
					}
					if (results && results[0].label) {
						let label = document.getElementById("result2").textContent = (results[0].label +' | Confidence : ' + results[0].confidence.toFixed(2)*100);
						// alert('results = '+results[0].label+' Confidence = ' + results[0].confidence.toFixed(2) * 100 +'%');
					}
						// alert('results = '+results[0].label+' Confidence = ' + results[0].confidence.toFixed(2) * 100 +'%');
					});
		}


		function predictLeafDisease() {
			leafDiseaseclassifier.predict(document.getElementById("image"),
				function (err, results) {

					if (err) {
						console.error(err);
					}
					if (results && results[0].label) {
						let label = document.getElementById("result3").textContent = (results[0].label +' | Confidence : ' + results[0].confidence.toFixed(2)*100);
						// alert('results = '+results[0].label+' Confidence = ' + results[0].confidence.toFixed(2) * 100 +'%');
					}
						// alert('results = '+results[0].label+' Confidence = ' + results[0].confidence.toFixed(2) * 100 +'%');
					});
		}

		function predict(){
			// predictObject();
			predictOrhid();
			predictLeafDisease();
		}
		
		var i = 0;
		function move() {
			if (i == 0) {
				i = 1;
				var elem = document.getElementById("myBar");
				var width = 1;
				var id = setInterval(frame, 10);
				function frame() {
					if (width >= 100) {
						clearInterval(id);
						i = 0;
					} else {
						width++;
						elem.style.width = width + "%";
					}
				}
			}
		}

	</script>
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
	
</style>
</head>
<body>
	<div class="container-fluid" 
	style="  
	max-width:500px;
	margin: auto;">	

	<nav class="navbar navbar-dark bg-dark" style="background-color: #e3f2fd;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
					<a class="nav-link" href="#">Features</a>
					<a class="nav-link" href="#">About Orchid</a>

				</div>
			</div>
		</div>
	</nav>	

	<h1 style="color: green;" align="center">Orchid Leaf Disease Detection</h1>
	<br>
	<center><img src="image.jpg" alt="" id="image"   class="img-fluid" align="center" /></center>

	<br><br>
	<div id="myProgress" style="width: 100%; ">
		<div id="myBar" ></div>
	</div><br>
	<!-- <p><span id="modelStatus">Loading MobileNet</span></p><hr style="max-width:500px; border: 0;"> -->

	<input type="file" class="custom-file-input" accept="image/*"onchange="loadFile(event)" name="image" id="file" />
	<button onclick="predict()" type="button" class="btn btn-secondary" id="liveAlertBtn">Predict</button>
	<hr style="max-width:500px; border: 0;">
	<div class="alert alert-success" role="alert" id="myDiv" style="max-width: 500px; ">
		<h4 class="alert-heading">Well done!</h4>
		<p>Orchid Genus : <p id="result2"></p>
		<hr>
		<p>Disease : <p id="result3"></p>
	</div>
</div>

<div data-alerts="alerts"  data-ids="myid" data-fade="3000"></div>
<button id="alert-demo-success" class="btn">Display success alert</button>

</body>
</html>
