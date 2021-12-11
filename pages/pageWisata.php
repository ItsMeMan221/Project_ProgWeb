<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <!-- End of Import Bootstrap -->

    <!-- Import Css -->
    <link rel="stylesheet" href="../css/pageWisata.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- End of Import -->
    <link rel="shortcut icon" href="../img/icon1.ico"/>
    <title>Excursion</title>
</head>

<body>
    <!-- Start of Navbar -->
    <?php include 'navbar.php' ?>
    <!-- End of Navbar -->

    <!-- Start of Content -->
    <section class="wisataContent">
        <div class="container">
            <div class="card mb-3 h-100" style="max-width: 1400px;" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-delay="200">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="../img/gambarBromo.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center">Gunung Bromo</h5>
                            <hr>
                            <p class="card-text"> Gunung bromo adalah ikon wisata Probolinggo. Gunung yang masih aktif ini menyuguhkan sebuah pemandangan yang fantastis.
                                Anda bisa menikmati kecantikan Gunung Bromo di view point yang telah disediakan</p>
                            <a href="detailBromo.php" class="no-underline center-under">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 h-100" style="max-width: 1400px;"data-aos="zoom-out-left" data-aos-duration="1500" data-aos-delay="300">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="../img/air-terjun.jfif" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center">Air Terjun Madakaripura</h5>
                            <hr>
                            <p class="card-text">Air terjun yang satu ini berdektan dengan lokasi wisata gunung bromo. Bukit nan-hijau yang menjulang tinggi menjadi alas bagi aliran air jernih yang berjatuhan.</p>
                            <a href="detailMadakaripura.php" class="no-underline center-under">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 h-100" style="max-width: 1400px;" data-aos="zoom-out-right" data-aos-duration="1500" data-aos-delay="400">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="../img/gambar-gili-ketapang.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center">Gili Ketapang</h5>
                            <hr>
                            <p class="card-text">Untuk pergi ke gili ketapang anda dapat menaiki sebuah kapal.
                                Turis yang biasanya pergi ke pulau ini datang untuk snorkling. Pemandangan pasir putih dan laut biru di pulau ini sungguh cantik, apalagi pemandangan bawah lautnya.</p>
                                <a href="detailKetapang.php" class="no-underline center-under">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 h-100" style="max-width: 1400px;" data-aos="zoom-out" data-aos-duration="1500" data-aos-delay="400">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="../img/arung-jeram.jfif" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center">Arung Jeram Sungai Pekalen</h5>
                            <hr>
                            <p class="card-text">Bila anda ingin menguji keberanian, wisata ini mungkin cocok dengan anda, arung jeram sungai pekalen ini menawarkan keseruan dan adrenalin yang tiada duanya. </p>
                            <a href="detailArung.php" class="no-underline center-under">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 h-100" style="max-width: 1400px;" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-delay="500">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="../img/danau-agung.jfif" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center">Danau Agung</h5>
                            <hr>
                            <p class="card-text">Danau Ranu Agung atau yang sering disapa danau agung ini menawarkan sebuah pemandangan yang menawan. Keindahan tempat ini akan memukau anda dan keheningannya menjadi tempat terbaik untuk melepaskan penat perkotaan.</p>
                            <a href="detailDanau.php" class="no-underline center-under">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Content -->





    <!-- Start of Footer -->
    <?php include 'footer.php' ?>
    <!-- End of Footer -->
      <!-- AOS Innit -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- End of AOS Innit -->
</body>

</html>