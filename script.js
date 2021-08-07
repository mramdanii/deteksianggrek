		var loadFile = function (event) {
			var image = document.getElementById("image");
			image.src = URL.createObjectURL(event.target.files[0]);
		};

		let leafDiseaseModelURL = 'https://teachablemachine.withgoogle.com/models/Gkf6sTvC9/';
		let orchidModelUrl = 'https://teachablemachine.withgoogle.com/models/SgbvD_jhk/';
		const leafDiseaseclassifier = ml5.imageClassifier(leafDiseaseModelURL + 'model.json', modelLoaded);
		const orchidClassifier = ml5.imageClassifier(orchidModelUrl + 'model.json', modelLoaded);


		
		// When the model is loaded
		function modelLoaded() {
			
			console.log("Model Loaded!");
		}


		function predict() {
			leafDiseaseclassifier.predict(document.getElementById("image"),
				function (err, results) {

					if (results[0].label) {}
						alert('results = '+results[0].label+' Confidence = ' + results[0].confidence.toFixed(2) * 100 +'%');
				});
		}