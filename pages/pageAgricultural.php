<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../img/icon1.ico"/>
    <title>Agricultural</title>
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <!-- End of Import Bootstrap -->

    <!-- Import css and javascript -->
    <link rel="stylesheet" href="../css/pageAgricultural.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- End of Import css and javascript -->
</head>
</head>

<body>
    <!-- Start of Navbar -->
    <?php include 'navbar.php' ?>
    <!-- End of Navbar -->

    <!-- Start of Content -->
    <section class="container">
        <div class="card mb-3" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200" >
            <img src="../img/stroberi.jfif" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Strawberry Bromo</h5>
                <hr>
                <p class="card-text">Bromo memang dikenal dengan panoramanya yang indah, terutama bagi para pemburu matahari terbit. Namun, jangan sampai terlewat lokasi wisata satu ini, Agrowisata Stroberi yang berada di Desa Jetak, Kecamatan Sukapura, Kabupaten Probolinggo.
                Suasana sejuk Pegunungan Tengger membuat kebun stroberi ini layak dikunjungi selepas menikmati keindahan Bromo.
                </p>
                <a href="detailStrawberry.php" class="float-end link-card">Baca Selengkapnya</a>                 
            </div>
        </div>
        <div class="card mb-3" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300">
            <img src="../img/mangga.jfif" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Mangga Probolinggo</h5>
                <hr>
                <p class="card-text">Siapa tak kenal buah mangga (”Mangifera indica L”) yang daging buahnya terasa manis dan segar itu. Buah mangga ini boleh dibilang memiliki posisi penting dalam dunia buah Indonesia. Bukan hanya biasa menjadi tanaman perindang halaman bagi sebagian anggota masyarakat, dan sekadar dinikmati buahnya. Namun, bagi mereka yang jeli, mangga adalah buah yang sangat menguntungkan</p>
                <a href="detailMagga.php" class="float-end link-card">Baca Selengkapnya</a> 
            </div>
        </div>
        <div class="card mb-3"data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400">
            <img src="../img/anggur.jfif" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Anggur Probolinggo</h5>
                <hr>
                <p class="card-text">Ada rasa yang berbeda ketika kita menggigit buah Anggur. Memang ada banyak jenis buah Anggur di pasaran. Salah satunya varietas Anggur andalan Indonesia yang ada di Kabupaten Probolinggo. Buahnya besar dan manis, yakni Anggur Prabu Bestari. Tidak sedikit penelitian yang menyebutkan bahwa anggur jenis ini memiliki banyak manfaat terutama bagi kesehatan.</p>
                <a href="detailAnggur.php" class="float-end link-card">Baca Selengkapnya</a> 
            </div>
        </div>
    </section>
    <!-- End Of Content -->



    <!-- Start Of Footer -->
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