<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bacterial Brown Spot</title>

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
						<h3>Bacterial Brown Spot - Acidovorax (syn. Pseudomonas)</h3>
						<hr>
						<section id="golf">
							<div class="fluid-container">
								<div class="row no-gutters">
									<div class="col-md-5">
										<div class="menu-image h-100 d-flex align-items-start">
											<img src="gambar/Images of Bacterial Brown Spot on Orchids/Image 1.jpg" width="500px" height="500px" class="img-fluid" alt="menu image">
										</div>
									</div>
									<div class="col-md">
										<div class="menu-text flex-grow-1">
											<p><b>Gejala</b>: Bintik coklat bakteri adalah penyakit phalaenopsis yang paling umum dan parah. Gejalanya bisa muncul di mana saja pada daun sebagai lepuh kecil, lunak, dan basah kuyup. Awalnya berwarna hijau kotor, tempat yang terinfeksi membesar, menyatu dan akhirnya menjadi coklat atau hitam, mengering dan cekung. Ini mengeluarkan cairan yang mengandung bakteri, terutama ketika penyakit mencapai ujung daun. Ini paling umum selama cuaca hangat.
												Phalaenopsis. Bintik-bintik seperti lepuh dapat dikelilingi dengan lingkaran hijau kekuningan atau pucat. Bintik-bintik menyatu, dan infeksi menyebar dengan cepat. Jika area yang sakit menyerang mahkota, tanaman akan mati.
												Cattleya. Infeksi masuk melalui luka pada tanaman yang lebih tua dan biasanya menyerang daun yang lebih tua. Tampak sebagai bintik hitam cekung yang dibatasi dengan jelas. Ini berkembang perlahan dan jarang berakibat fatal. Infeksi pada tanaman muda dengan daun lunak menyebar lebih cepat.
											</p>
											<p>
												<b>Perawatan</b>: Segera singkirkan jaringan yang terinfeksi menggunakan instrumen steril, semprotkan bakterisida yang mengandung produk amonium kuaterner seperti Physan atau senyawa tembaga pada tanaman yang terinfeksi dan tanaman yang berdekatan dengan mengikuti petunjuk label (tembaga tidak boleh digunakan pada dendrobium atau tanaman berbunga), atau gunakan pengobatan rumahan hidrogen peroksida. Desinfeksi area tumbuh dengan larutan pemutih 10%. Rawat tanaman terdekat serta tanaman yang sakit.
											</p>
											<p>
												<b>Pencegahan</b>: Pseudomonas cattleya adalah patogen yang terbawa air yang lebih menyukai kondisi hangat dan lembab. Kurangi kelembaban dan suhu (jika mungkin), hilangkan penyiraman di atas kepala dan tingkatkan sirkulasi udara.  </p>
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
							<?php $handle = opendir(dirname(realpath(__FILE__)).'/gambar/Images of Bacterial Brown Spot on Orchids/');
							while($file = readdir($handle)){
								if($file !== '.' && $file !== '..'){?>
									<div class="col-12 col-sm-6 col-md-4 image-grid-item">
										<div style="background-image: url('gambar/Images of Bacterial Brown Spot on Orchids/<?php echo $file;?>');" class="entry-cover image-grid-cover has-image">
											<a href="gambar/Images of Bacterial Brown Spot on Orchids/<?php echo $file;?>" target="_blank" class="image-grid-clickbox"></a>
											<a class="cover-wrapper">Bacterial Brown Spot</a>
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
