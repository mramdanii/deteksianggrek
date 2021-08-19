<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vanda</title>

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
						<h3>Vanda</h3>
						<hr>
						<section id="golf">
							<div class="fluid-container">
								<div class="row no-gutters">
									<div class="col-md-5">
										<div class="menu-image h-100 d-flex align-items-start">
											<img src="gambar/vanda/V5.jpg" width="500px" height="500px" class="img-fluid" alt="menu image">
										</div>
									</div>
									<div class="col-md">
										<div class="menu-text flex-grow-1">
											<p>Vanda merupakan jenis anggrek dari keluarga Orchidaceae yang sering diperjualbelikan dikalangan para pecinta tanaman hias. Tampilannya yang memukau, warna bunganya yang begitu beragam, memilki aroma yang harum, serta mampu mekar tahan lama menjadi keunggulan tersendiri bagi anggrek vanda. Diperkirakan saat ini ada lebih dari 80 spesies vanda yang telah dikenali dan ditanam banyak orang secara luas.

Asal kata “vanda” berasal dari bahasa Sansekerta yang memiliki makna indah. Pertama kalinya spesies vanda ditemukan pada tahun 1795 oleh William Roxburgh sehingga dinamai oleh Sir W. Jones dengan nama Vanda tessellata Roxb.
</p>
<p>
Penyebaran anggrek vanda ini meliputi Asia Timur, Asia Selatan, Asia Tenggara dan juga sebagian tempat di Australia. Negara yang menjadi habitat utama anggrek ini antara lain India, Indonesia, Philiphina, Papua New Geuinea, China, Sri Lanka, Myanmar, Thailand, Filipina, Malaysia, dan Australia Utara. Karena vanda adalah anggrek yang cukup bisa beradaptasi dengan baik diberbagai tempat, maka bisa dibudidayakan di berbagai belahan dunia.
											</p>
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
						<?php $handle = opendir(dirname(realpath(__FILE__)).'/gambar/vanda/');
						while($file = readdir($handle)){
							if($file !== '.' && $file !== '..'){?>
								<div class="col-12 col-sm-6 col-md-4 image-grid-item">
									<div style="background-image: url('gambar/vanda/<?php echo $file;?>');" class="entry-cover image-grid-cover has-image">
										<a href="gambar/vanda/<?php echo $file;?>" target="_blank" class="image-grid-clickbox"></a>
										<a class="cover-wrapper">Vanda</a>
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
