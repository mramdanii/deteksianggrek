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
	

	<style>
		.image-grid-cover {
			width: 100%;
			background-size: cover;
			min-height: 180px;
			position: relative;
			margin-bottom: 30px;
			text-shadow: rgba(0,0,0,.8) 0 1px 0;
			border-radius: 4px;
		}
		.image-grid-clickbox {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			display: block;
			width: 100%;
			height: 100%;
			z-index: 20;
			background: rgba(0,0,0,.45);
		}
		.cover-wrapper {
			font-size: 18px;
			text-align: center;
			display: block;
			color: #fff;
			text-shadow: rgba(0,0,0,.8) 0 1px 0;
			z-index: 21;
			position: relative;
			top: 80px;
		}
		a, a:focus, a:hover {
			text-decoration: none;
			outline: 0;
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
							<a class="nav-link" aria-current="page" href="../index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="#">About</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<main class="container">
			<div class="my-3 p-3 bg-body rounded shadow-sm">
				<div class="container">
					<div class="row">
						<h3>Leaf Disease</h3>
						<hr>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/Images of Anthracnose on Orchids/Image 1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="anthracnose.php" class="image-grid-clickbox"></a>
								<a href="anthracnose.php" class="cover-wrapper">Anthracnose</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/Images of Bacterial Brown Spot on Orchids/Image 1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="bacbrownspot.php" class="image-grid-clickbox"></a>
								<a href="bacbrownspot.php" class="cover-wrapper">Bacterial Brown Spot</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/Images of Bacterial Soft and Brown Rot on Orchids/Image 1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="bacsoftbrownrot.php" class="image-grid-clickbox"></a>
								<a href="bacsoftbrownrot.php" class="cover-wrapper">Bacterial Soft and Brown Rot</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/Images of Black Rot on Orchids/Image 1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="blackrot.php" class="image-grid-clickbox"></a>
								<a href="blackrot.php" class="cover-wrapper">Black Rot</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/Images of Edema on Orchids/Image 1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="edema.php" class="image-grid-clickbox"></a>
								<a href="edema.php" class="cover-wrapper">Edema</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/Images of Fusarium Wilt on Orchids/Image 1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="fusariumwilt.php" class="image-grid-clickbox"></a>
								<a href="fusariumwilt.php" class="cover-wrapper">Fusarium Wilt</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/Images of Leaf Spots on Orchids/F1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="leafspots.php" class="image-grid-clickbox"></a>
								<a href="leafspots.php" class="cover-wrapper">Leaf Spots</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/Images of Sunburn on Orchids/Image 1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="sunburn.php" class="image-grid-clickbox"></a>
								<a href="sunburn.php" class="cover-wrapper">Sunburn</a>
							</div>
						</div>
						<hr>
						<br>
					</div>
				</div>
			</div>
			<div class="my-3 p-3 bg-body rounded shadow-sm">
				<div class="container">
					<div class="row">
						<h3>Orchid Genus</h3>
						<hr>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/cattleya/C1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="cattleya.php" class="image-grid-clickbox"></a>
								<a href="cattleya.php" class="cover-wrapper">Cattleya</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/dendrobium/D1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="dendrobium.php" class="image-grid-clickbox"></a>
								<a href="dendrobium.php" class="cover-wrapper">Dendrobium</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/oncidium/O2.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="oncidium.php" class="image-grid-clickbox"></a>
								<a href="oncidium.php" class="cover-wrapper">Oncidium</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/phalaenopsis/P1.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="phalaenopsis.php" class="image-grid-clickbox"></a>
								<a href="phalaenopsis.php" class="cover-wrapper">Phalaenopsis</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url('gambar/vanda/V5.jpg');" class="entry-cover image-grid-cover has-image">
								<a href="vanda.php" class="image-grid-clickbox"></a>
								<a href="vanda.php" class="cover-wrapper">Vanda</a>
							</div>
						</div>
						<hr>
						<br>
					</div>
				</div>
			</div>
		</main>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
