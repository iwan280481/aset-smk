<?php  

// Lampirkan dbconfig  
require_once "dbconfig.php";  

// Cek status login user  
if (!$user->isLoggedIn()) {  
    header("location: login.php"); //Redirect ke halaman login  
}  

// Ambil data user saat ini  
$currentUser = $user->getUser();  
?>  
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>ASET SMKN 1 SUKALARANG</title>
	  <link rel="icon" href="img/favicon.png">
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="font-awesome.css">

    <link rel="stylesheet" href="templatemo-training-studio.css">

    </head>
    
    <body>
 
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Aset<em> negla</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">BOS-BOPD</a></li>
                            <li class="scroll-to-section"><a href="#frofile">KIB</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">KIR</a></li>
                            <li class="scroll-to-section"><a href="#schedule">GUDANG</a></li>
                            <li class="scroll-to-section"><a href="upload_file.php">KIRIM FILE </a></li> 
                            <li class="main-button"><a href="logout.php">LOGOUT</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
 
	
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/Profil Video SMKN 1 Sukalarang.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6><i>Membangun Kinerja Yang Lebih baik</i></h6>
                <p>Aset SMKN 1<em>Sukalarang</em></p>
                
            </div>
        </div>
    </div>
  
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2024 Aset Negla
                    
                    <a rel="nofollow" href="" class="tm-text-link" target="_parent">Smkn 1 Sukalarang</a><br>

                Unit Kerja <a rel="nofollow" href="https://themewagon.com" class="tm-text-link" target="_blank">Bidang Aset</a>
                
                </p>
                    
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="scrollreveal.min.js"></script>
    <script src="waypoints.min.js"></script>
    <script src="jquery.counterup.min.js"></script>
    <script src="imgfix.min.js"></script> 
    <script src="mixitup.js"></script> 
    <script src="accordions.js"></script>
    
    <!-- Global Init -->
    <script src="custom.js"></script>

  </body>
</html>
