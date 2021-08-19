<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fusarium Wilt</title>

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
						<h3>Fusarium Wilt</h3>
						<hr>
						<section id="golf">
							<div class="fluid-container">
								<div class="row no-gutters">
									<div class="col-md-5">
										<div class="menu-image h-100 d-flex align-items-start">
											<img src="gambar/Images of Fusarium Wilt on Orchids/Image 1.jpg" width="500px" height="500px" class="img-fluid" alt="menu image">
										</div>
									</div>
									<div class="col-md">
										<div class="menu-text flex-grow-1">
											<p><b>Gejala</b>: Fusarium menghalangi aliran uap air melalui sistem vaskular tanaman.
												Aliansi Cattleya. Fusarium dapat menginfeksi tanaman melalui akar anggrek atau dengan menyerang rimpang tanaman yang baru saja dibelah. Patogen sering menyebar melalui kebersihan yang tidak tepat, umumnya sebagai akibat dari penggunaan alat pemotong yang tidak steril, yang memindahkan jamur dari tanaman ke tanaman. Daun yang terinfeksi berwarna kuning, tipis, mengkerut, keriput atau layu dan akhirnya mati. Tanaman yang terinfeksi parah dapat mati dalam 3-9 minggu, sementara tanaman yang terinfeksi ringan secara bertahap menurun selama satu tahun atau lebih. Gejala diagnostik pada tanaman cattleya adalah adanya lingkaran atau pita warna ungu atau merah muda-ungu pada lapisan luar rimpang yang terlihat saat rimpang dipotong. Jika penyakitnya luas, seluruh rimpang dapat berubah menjadi ungu, dan perubahan warna dapat meluas ke pseudobulbs.
												Phalaenopsis dan Paphiopedilum. Menurut Hark Orchideen, infestasi dapat disebabkan oleh konsentrasi garam yang terlalu tinggi, suhu substrat yang rendah, dan substrat yang terlalu basah atau mengandung terlalu banyak gambut. Akar mulai membusuk dan pangkal tanaman mengembangkan busuk kering punggung. Bintik-bintik cekung pada daun membesar dan membentuk garis-garis kuning, daun yang lebih tua menjadi kasar dan daun yang lebih muda mungkin menjadi kemerahan. Tangkai bunga dapat mengembangkan bintik-bintik cekung dan busuk dengan penurunan kuncup prematur.
											</p>
											<p>
												<b>Perawatan</b>: Pada cattleyas, buang bagian rimpang dan pseudobulb yang terinfeksi jika terlihat pita ungu. Repot hanya bagian tanaman yang tidak menunjukkan perubahan warna ungu. Basahi tanaman yang disanitasi dalam fungisida yang sesuai seperti Cleary's 3336 atau Medallion mengikuti petunjuk label. Rajinlah dalam mendisinfeksi area tumbuh dan alat pemotong. Setiap kali alat pemotong menyentuh jaringan yang terinfeksi, alat tersebut harus disterilkan sebelum membuat pemotongan kedua. Dalam phalaenopsis dan paphiopedilums, buang tanaman yang terinfeksi parah, buang jaringan yang rusak parah dan semua akar yang terinfeksi dan obati dengan fungisida yang sesuai seperti Daconil, Heritage (perendaman) atau Switch (semprotan) mengikuti semua instruksi label.
											</p>
											<p>
												<b>Pencegahan</b>: Pada ternak, pencegahan umumnya adalah mengikuti kebersihan yang tepat. Sterilkan alat pemotong setelah digunakan, sebaiknya melalui sterilisasi api. Dalam phalaenopsis, suhu yang tepat, kebasahan substrat, dan pemupukan akan membantu mencegah terjadinya. </p>
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
							<?php $handle = opendir(dirname(realpath(__FILE__)).'/gambar/Images of Fusarium Wilt on Orchids/');
							while($file = readdir($handle)){
								if($file !== '.' && $file !== '..'){?>
									<div class="col-12 col-sm-6 col-md-4 image-grid-item">
										<div style="background-image: url('gambar/Images of Fusarium Wilt on Orchids/<?php echo $file;?>');" class="entry-cover image-grid-cover has-image">
											<a href="gambar/Images of Fusarium Wilt on Orchids/<?php echo $file;?>" target="_blank" class="image-grid-clickbox"></a>
											<a class="cover-wrapper">Fusarium Wilt</a>
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
