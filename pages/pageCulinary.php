<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../img/icon1.ico"/>
    <title>Culinary</title>
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <!-- End of Import Bootstrap -->
    <!-- Import Css -->
    <link rel="stylesheet" href="../css/pageCulinary.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- End of Import -->
</head>

<body>
    <!-- Start of Navbar -->
    <?php include 'navbar.php' ?>
    <!-- End of Navbar -->

    <!-- Start of Content -->
    <section class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100" data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="200">
                    <img src="../img/gambar-bakso.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Basko</h5>
                        <hr>
                        <p class="card-text">Bakso tersedia sangat banyak di seluruh penjuru Indonesia. Rasa asin dan gurihnya membuat orang Indonesia sangat suka dengan makanan satu ini.</p>
                        <a class="btn btn btn-outline-dark col-md-12 col-sm-12 col-xs-12 bounce-animate" href="detailBakso.php" role="button"> Baca Selengkapnya -></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="300">
                    <img src="../img/rawon.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Rawon</h5>
                        <hr>
                        <p class="card-text"> Rawon merupakan salah satu makanan khas di Jawa Timur. Masakan ini memliki daya tarik yaitu warna kuah yang hitam pekat. Sup bewarna hitam ini biasanya dimakan dengan tempe, kecambah dan sambal beserta nasi panas.</p>
                        <a class="btn btn btn-outline-dark col-md-12 col-sm-12 col-xs-12 bounce-animate" href="detailRawon.php" role="button"> Baca Selengkapnya -></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="400">
                    <img src="../img/soto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Soto Kraksaan</h5>
                        <hr>
                        <p class="card-text">Olahan soto memang tak dapat ditahan kenikmatannya. Sepeti soto kraksan, makanan khas Probolinggo 
                            ini berasal dari kraksaan. Yang membedakan soto ini dari soto lainnya ialah daging yang digunakan, soto kraksaan ini menggunakan daging ayam jantan.
                        </p>
                        <a class="btn btn btn-outline-dark col-md-12 col-sm-12 col-xs-12 bounce-animate" href="detailSoto.php" role="button"> Baca Selengkapnya -></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="200">
                    <img src="../img/ketan-kratok.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Ketan Kratok</h5>
                        <hr>
                        <p class="card-text">Dilihat sekilas makanan khas Probolinggo, Ketan Kratok mirip dengan ketan biasa. Yang istimewa dari makanan ringan khas Probolinggo ini yaitu campuran kratok atau kacang koronya.
                        Ketan Kratok disajikan dengan taburan kratok dan cairan gula merah atau juruh.
                        </p>
                        <a class="btn btn btn-outline-dark col-md-12 col-sm-12 col-xs-12 bounce-animate" href="detailKetan.php" role="button"> Baca Selengkapnya -></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="300">
                    <img src="../img/prol-tape.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Prol Tape</h5>
                        <hr>
                        <p class="card-text">Berkunjung ke Kota Bayuangga tak akan lengkap jika melewatkan makanan ringan khas Probolinggonya. Prol Tape adalah makanan khas Probolinggo yang cocok dijadikan buah tangan.</p>
                        <a class="btn btn btn-outline-dark col-md-12 col-sm-12 col-xs-12 bounce-animate" href="detailProl.php" role="button"> Baca Selengkapnya -></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="400">
                    <img src="../img/kepiting-olok.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kepiting Olok</h5>
                        <hr>
                        <p class="card-text">Salah satu makanan khas Probolinggo Jawa Timur yang terkenal adalah Kepiting Olok. Nama Olok dipakai oleh masyarakat Probolinggo untuk menyebut kepiting muda yang terdampar di pantai.</p>
                        <a class="btn btn btn-outline-dark col-md-12 col-sm-12 col-xs-12 bounce-animate" href="detailKepiting.php" role="button"> Baca Selengkapnya -></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Content  -->

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