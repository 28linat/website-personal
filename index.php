<?php 
error_reporting(0);
include 'admin/library/koneksi.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Website Informasi TKI</title>
<link href="images/icon.png" rel="shortcut icon" type="image/x-icon">
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap.css?v=2.0" rel="stylesheet" type="text/css"/>
<link href="fonts/fontawesome/css/all.min.css?v=2.0" type="text/css" rel="stylesheet">
<link href="css/ui.css?v=2.0" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css?v=2.0" rel="stylesheet" type="text/css" />
<script src="js/script.js?v=2.0" type="text/javascript"></script>
</head>
<body>

<header class="section-header">
    <div class="container">
        <section class="header-main border-bottom">
        <div class="row row-sm">
            <div class="col-12">
                <a href="#" class="brand-wrap" style="font-size:18px;"><img src="images/icon.png" width="25"> <strong>WEBSITE INFORMASI TENAGA KERJA INDONESIA</strong></a>
            </div>
        </div>
        </section>
        <nav class="navbar navbar-main navbar-expand pl-0">
              <ul class="navbar-nav flex-wrap">
                <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="?pages=alur">Alur Menjadi TKI</a></li>
                <li class="nav-item"><a class="nav-link" href="?pages=syarat">Persyaratan</a></li>
                <li class="nav-item"><a class="nav-link" href="?pages=informasi">Informasi Umum</a></li>
                <li class="nav-item"><a class="nav-link" href="?pages=kuesioner">Form Kuesioner</a></li>
              </ul>
        </nav>
    </div>
</header>

	<?php 
	if($_GET['pages']=="alur")
	include "pages/alur.php";
	else if($_GET['pages']=="syarat")
	include "pages/syarat.php";
	else if($_GET['pages']=="informasi")
	include "pages/informasi.php";	
	else if($_GET['pages']=="kuesioner")
	include "pages/kuesioner.php";
	else if($_GET['pages']=="kuesionerhasil")
	include "pages/kuesioner_hasil.php";
	else include "pages/home.php";
	?>
        
<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-secondary text-white">
	<div class="container">
	<section class="footer-bottom text-center">
	</section>
	</div>
</footer>
</body>
</html>