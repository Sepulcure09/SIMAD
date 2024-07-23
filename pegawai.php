<?php

session_start();
if ($_SESSION['status'] != "login") {
  header("location:login.php?peringatan=silahkanlogindulu");
}

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">
  <link rel="icon" type="image/png" sizes="16x16" href="images/logo_pemkab_bogor.png" />
  <title>Pegawai</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- cdnchartsjs -->
  <link href="plugins/chartist/dist/chartist.min.css" rel="stylesheet" />
  <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
  <link href="plugins/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
   <!-- Swiper CSS -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
		

</head>

<body id="top">

  <header>

    <nav class="navbar navbar-expand-lg navigation" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="images/logo_pemkab_bogor.png" width="75px" alt="" class="img-fluid">
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icofont-navigation-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarmain">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Halaman Utama</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pegawai.php">pegawai</a>
            </li>
            <!-- <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
			    <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li> -->

			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aset <i class="icofont-thin-down"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdown02">
                <li><a class="dropdown-item" href="kelolabarangaset.php">Kelola Barang Aset</a></li>
                <li><a class="dropdown-item" href="tampilkb.php">Kendaraan Bermotor</a></li>
                <li><a class="dropdown-item" href="tampilfurnitur.php">Furnitur</a></li>
                <li><a class="dropdown-item" href="tampilelektronik.php">Elektronik</a></li>
              </ul>
            </li>



            <!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul>
			  	</li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cetak Laporan<i class="icofont-thin-down"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdown02">

                <li><a class="dropdown-item" target="_blank" href="cetak_kendaraanbermotor.php">Cetak Kendaraan Bermotor</a></li>
                <li><a class="dropdown-item" target="_blank" href="cetak_furnitur.php">Cetak Furnitur</a></li>
                <li><a class="dropdown-item" target="_blank" href="cetak_elektronik.php">Cetak Elektronik</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" target="_blank" href="panduan.php">Panduan</a></li>
            <li class="nav-item"><a class="nav-link" href="tentang.php">Tentang</a></li>
            <li class="nav-item"><a class="nav-link" href="bantuan.php">Bantuan</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="header-top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <ul class="top-bar-info list-inline-item pl-0 mb-0">

              <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Desa Sasak Panjang</li>
            </ul>
          </div>
          <!-- <div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="" >
							<span>Desa Sasak Panjang </span>
							
						</a>
					</div>
				</div> -->
        </div>
      </div>
    </div>
  </header>
  <br></br>
  <h2 class="text-center">PERANGKAT DESA</h2>
  <br></br>
 <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="images/FOTO_PAK_BPD.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">DEDEN HENDRI GUNAWAN, S.Pd.I.</h5>
        <p class="card-text">BADAN PERMUSYAWARATAN DESA</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/Foto_Ibu_Kades_Original.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ANDY UMI YULAIKAH, M.Pd.	</h5>
        <p class="card-text">KEPALA DESA</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/SEKDES_IWAN.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">IWAN</h5>
        <p class="card-text">SEKRETARIS DESA</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/IPAY.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ENDANG ISKANDAR</h5>
        <p class="card-text">KEPALA SEKSI PEMERINTAHAN</p>
      </div>
    </div>
  </div>
</div>
<p>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="images/KASI_PELAYANAN_KAKAK.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ATHAYA ANNURU ROCHIIMAH</h5>
        <p class="card-text">KEPALA SEKSI PELAYANAN</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/KAUR_UMUM_SUPARTINI.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SUPARTINI</h5>
        <p class="card-text">KEPALA URUSAN TATA USAHA UMUM</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/KAUR_KEUANGAN_SISWANTO.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SISWANTO, S.Ag.e</h5>
        <p class="card-text">KEPALA URUSAN KEUANGAN</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/KAUR_PERENCANAAN_WIDIASTUTI.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">WIDIASTUTI, SE.</h5>
        <p class="card-text">KEPALA URUSAN PERENCANAAN PEMBANGUNAN</p>
      </div>
    </div>
  </div>
</div>
<p>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="images/KAUR_KESRA_RADI_2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RADI</h5>
        <p class="card-text">KEPALA SEKSI KESEJAHTERAAN RAKYAT</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/DUSUN_SURATMIN.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SURATMIN</h5>
        <p class="card-text">KEPALA DUSUN 1</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/DUSUN_JEJEN.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">JEJEN ZAENUDIN</h5>
        <p class="card-text">KEPALA DUSUN 2</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/DUSUN_ABDULLAH.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ABDULLAH</h5>
        <p class="card-text">KEPALA DUSUN 3</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/DUSUN_AKEW_ROJAT.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ROJAT</h5>
        <p class="card-text">KEPALA DUSUN 4</p>
      </div>
    </div>
  </div>
</div>
<p>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="images/Operator_1_Haris.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">HARIS</h5>
        <p class="card-text">OPERATOR 1</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/Operator_2_Amsari.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">AMSARI SURYANI SUIT</h5>
        <p class="card-text">OPERATOR 2</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/_DSC4037.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LUFTI SEPTIANTO</h5>
        <p class="card-text">OPERATOR 3</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/LINMAS_IMRON_SIMON_.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">IMRON</h5>
        <p class="card-text">DANRU LINMAS 1</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/SATGAS_ANDI.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">MAD ANDI</h5>
        <p class="card-text">DANRU LINMAS 2</p>
      </div>
    </div>
  </div>
</div>
<p>

  




  <!-- 
    Essential Scripts
    =====================================-->


  <!-- Main jQuery -->
  <script src="plugins/jquery/jquery.js"></script>
  <!-- Bootstrap 4.3.2 -->
  <script src="plugins/bootstrap/js/popper.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/counterup/jquery.easing.js"></script>
  <!-- Slick Slider -->
  <script src="plugins/slick-carousel/slick/slick.min.js"></script>
  <!-- Counterup -->
  <script src="plugins/counterup/jquery.waypoints.min.js"></script>

  <script src="plugins/shuffle/shuffle.min.js"></script>
  <script src="plugins/counterup/jquery.counterup.min.js"></script>
  <!-- Google Map -->
  <script src="plugins/google-map/map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

  <script src="js/script.js"></script>
  <script src="js/contact.js"></script>

</body>

</html>