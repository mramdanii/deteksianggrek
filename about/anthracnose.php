<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anthracnose - Colletotrichum and Glomerella</title>

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
							<a class="nav-link active" href="index.php">About</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<main class="container">
			<div class="my-3 p-3 bg-body rounded shadow-sm">
				<div class="container">
					<div class="row">
						<h3>Anthracnose - Colletotrichum and Glomerella</h3>
						<hr>
						<section id="golf">
							<div class="fluid-container">
								<div class="row no-gutters">
									<div class="col-md-5">
										<div class="menu-image h-100 d-flex align-items-start">
											<img src="gambar/Images of Anthracnose on Orchids/Image 1.jpg" width="500px" height="500px" class="img-fluid" alt="menu image">
										</div>
									</div>
									<div class="col-md">
										<div class="menu-text flex-grow-1">
											<p><b>Gejala</b>: Penyakit jamur ini menginfeksi bagian atas tanaman. Daun paling sering diserang. Ujung daun berubah menjadi coklat mulai dari puncak dan berlanjut ke arah pangkal. Bercak coklat tua atau abu-abu muda berkembang, kadang-kadang sebagai cincin konsentris atau banyak pita gelap di daun. Daerah yang terkena biasanya berbatas tegas dan agak cekung, sedangkan sisa daun tampak normal. Badan spora berkembang di daerah yang terinfeksi.
												Bunga mengembangkan pustula berair, hitam atau coklat yang biasanya muncul dan muncul di bagian bawah sepal dan kelopak yang lebih tua. Bintik-bintik dapat bergabung dan menutupi seluruh bunga.
												Patogen yang biasanya terkait dengan Antraknosa adalah Colletotrichum gloeosporioides (tahap aseksual, tahap seksual dikenal sebagai Glomerella cingulata). Patogen lain adalah Colletotrichum theobromicola, belum pernah dilaporkan sebagai patogen anggrek. Patogen ini menyebabkan bintik-bintik klorosis di permukaan atas daun, dengan bercak-bercak kecil yang sesuai di bagian bawah daun. Kadang-kadang ada tempat cekung atau nekrotik.
											</p>
											<p>
												<b>Perawatan</b>: Semprot dengan fungisida yang sesuai yang mengandung tembaga, Daconil, Cleary's 3336, atau Pagaent jika Anda memilikinya, dengan mengikuti petunjuk label.
											</p>
											<p>
												<b>Pencegahan</b>: Sanitasi normal, pergerakan udara yang baik, suhu yang lebih rendah (jika mungkin) dan peningkatan cahaya dapat membantu mengurangi penyebaran penyakit ini. Patogen paling aktif dalam cuaca hangat ketika cahaya rendah dan kelembaban tinggi. </p>
											</div>
										</div>
									</div>
								</div>
							</section>
							<br>
						</div>
					</div>
				</div>
				<div class="my-3 p-3 bg-body rounded shadow-sm">
					<div class="container">
						<div class="row">
							<h3>Image</h3>
							<hr>
							<?php $handle = opendir(dirname(realpath(__FILE__)).'/gambar/Images of Anthracnose on Orchids/');
							while($file = readdir($handle)){
								if($file !== '.' && $file !== '..'){?>
									<div class="col-12 col-sm-6 col-md-4 image-grid-item">
										<div style="background-image: url('gambar/Images of Anthracnose on Orchids/<?php echo $file;?>');" class="entry-cover image-grid-cover has-image">
											<a href="gambar/Images of Anthracnose on Orchids/<?php echo $file;?>" target="_blank" class="image-grid-clickbox"></a>
											<a class="cover-wrapper">Anthracnose</a>
										</div>
									</div>
									<?php 
								}
							}?>
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
