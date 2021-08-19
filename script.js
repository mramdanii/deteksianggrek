		
		//init
		var i=0;
		var x= 0;
		var y= 0;
		var resultorchid = "";
		var detailorchid = "";
		var resultdisease = "";
		var detaildisease = "";
		var src="";
		let leafDiseaseModelURL = 'https://teachablemachine.withgoogle.com/models/Gkf6sTvC9/';
		let orchidModelUrl = 'https://teachablemachine.withgoogle.com/models/JJTmG-Pbq/';
		const leafDiseaseclassifier = ml5.imageClassifier(leafDiseaseModelURL + 'model.json', modelLoaded);
		const orchidClassifier = ml5.imageClassifier(orchidModelUrl + 'model.json', modelLoaded);
		// const objectModel = ml5.imageClassifier('MobileNet', modelLoaded);


		//loadfile function
		var loadFile = function (event) {
			
			var image = document.getElementById("image");
			image.src = URL.createObjectURL(event.target.files[0]);
			console.log("Sukses Load File");	
			return src;
		};

		

		// When the model is loaded
		function modelLoaded() {
			move();
			console.log("Model Berhasil Di Load!");
			// let label = document.getElementById("modelStatus").textContent = "Model Loaded!";
		}

		


		// input -> preprocess (methode memperkecil file metode chain, haog)  -> proses (metode imageprocces) -> output 

		function predictOrhid() {
			orchidClassifier.classify(document.getElementById("image"),
				function (err, results) {

					if (err) 
					{
						console.error(err);
					}
					if (results && results[0].label) 
					{
						let label = document.getElementById("result2").textContent = ('This Orchid Genus is '+results[0].label +' with confidence : ' + results[0].confidence.toFixed(2)*100)+'%';
						var a = results;
						var index = 0;
						var found;
						var entry= a[index];;
						//search the value
						for (index = 0; index < a.length; ++index) {
							entry  = a[index];

							if ((entry.confidence.toFixed(2)*100) > 0) {
								found = entry;
								// console.log((found.confidence.toFixed(4)*100));
								// break;
								
								console.log(JSON.stringify(found.label + " " + (found.confidence.toFixed(4)*100)+ "%"));
								var row = $('<tr><td>' + '<b>'+"Nama : "+'</b>' + found.label+ '</td><td>' + '<b>'+"Akurasi : "+'</b>' +found.confidence.toFixed(2)*100+ "%" + '</td><td>' );
								$('#myTable').append(row);	

							}

						}

						
						// let text = found.label+" "+(found.confidence.toFixed(4)*100)+"%";
						
						return resultorchid = results[0].label;

					}
				});
			
		}


		function predictLeafDisease() {

			leafDiseaseclassifier.classify(document.getElementById("image"),
				function (err, results) 
				{
					if (err) 
					{
						console.error(err);
					}
					if (results && results[0].label) 
					{
						move();
						let label = document.getElementById("result3").textContent = ('The Disease is '+results[0].label +' with confidence : ' + results[0].confidence.toFixed(2)*100)+'%';
						// return results;
						var a = results;
						var index = 0;
						var found;
						var entry= a[index];;
						//search the value dari 0, 
						for (index = 0; index < a.length; ++index) {
							entry  = a[index];
							if ((entry.confidence.toFixed(2)*100) > 0) {
								found = entry;
								if ((entry.confidence.toFixed(2)*100) > 0) {
									found = entry;							
									console.log(JSON.stringify(found.label + " " + (found.confidence.toFixed(4)*100)+ "%"));
									var row = $('<tr><td>' + '<b>'+"Penyakit : "+'</b>' +found.label+ '</td><td>' + '<b>'+"Akurasi : "+'</b>' + found.confidence.toFixed(2)*100+ "%" + '</td><td>' );
									$('#myTable1').append(row);	
									console.log(entry);

								}


							}

						}

						return resultdisease = results[0].label;
					}
				});
		}

		
		function redirectOrchid(result){
			var parameter = resultorchid; 
			window.open('http://google.com/search?tbm=isch&q='+parameter);
		      	// window.location.replace="http://google.com/search?tbm=isch&q="+parameter1;
		      }


		      function redirectDisease(result){
		      	var parameter = resultdisease; 
		      	window.open('http://google.com/search?tbm=isch&q='+parameter+" Orchid Leaf");
		    // window.location.replace="http://google.com/search?tbm=isch&q="+parameter1+" Orchid Leaf";
		}

		function detailOrchid(result){
			var parameter = resultorchid; 
			if (parameter == "Cattleya") {
				window.open('about/cattleya.php');
			}
			else if(parameter == "Dendrobium"){
				window.open('about/dendrobium.php');
			}
			else if(parameter == "Oncidium"){
				window.open('about/oncidium.php');
			}
			else if(parameter == "Phalaenopsis"){
				window.open('about/phalaenopsis.php');
			}
			else if(parameter == "Vanda"){
				window.open('about/vanda.php');
			}
			

			
		}

		function detailDisease(result){
			var parameter = resultdisease; 
			if (parameter == "Anthracnose ") {
				window.location.replace('about/anthracnose.php');
			}
			else if(parameter == "Bacterial Brown Spot"){
				window.open('about/bacbrownspot.php');
			}
			else if(parameter == "Bacterial Soft and Brown Rot"){
				window.open('about/bacsoftbrownrot.php');
			}
			else if(parameter == "Black Rot"){
				window.open('about/blackrot.php');
			}
			else if(parameter == "Edema"){
				window.open('about/edema.php');
			}
			else if(parameter == "Fusarium Wilt"){
				window.open('about/fusariumwilt.php');
			}
			else if(parameter == "Leaf Spots"){
				window.open('about/leafspots.php');
			}
			else if(parameter == "Sunburn"){
				window.open('about/sunburn.php');
			}
			else{
				alert("Your Orchid Is Healty");
			}

			
		}



		
		function predict(){

			predictOrhid();
			predictLeafDisease();

		}


		//loading bar
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






