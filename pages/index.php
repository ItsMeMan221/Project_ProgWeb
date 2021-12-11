<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../img/icon1.ico" />
  <title>Home</title>

  <!-- Import Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <!-- End of Import Bootstrap -->

  <!-- Import css and javascript -->
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../javascript/scroll.js"></script>
  <!-- End of Import css and javascript -->
</head>

<body>
  <?php include 'navbar.php' ?>

  <!-- Parallax Image Start -->
  <section>
    <div class="bg-light parallax" id="img">
      <h1>Magnificent</h1>
      <h2>Probolinggo</h2>
      <div class="btn-explr text-center">
        <button type="button" class="btn btn-light col-md-2 col-sm-4 col right-swipe" id="explore-more">
          Explore More
          <span><i class="bi bi-arrow-right-circle-fill"></i></span>
        </button>
      </div>
    </div>
  </section>
  <!-- End of Parallax Image -->

  <!-- Start of Wisata -->
  <section>
    <div class="wisata container">
      <h4>
        <i class="bi bi-award">
          <span class="left">Best Place to Go! </span>
        </i>
      </h4>
      <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="fade-up" data-aos-duration="3500">
        <div class="col">
          <div class="card h-100 top-hang ">
            <a href="detailBromo.php">
              <img src="../img/gambar-bromo.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Gunung Bromo</h5>
                <hr>
                <p class="card-text">Gunung bromo adalah ikon wisata Probolinggo. Gunung yang masih aktif ini menyuguhkan sebuah pemandangan yang fantastis.
                  Anda bisa menikmati kecantikan Gunung Bromo di view point yang telah disediakan.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 top-hang ">
            <a href="detailKetapang.php">
              <img src="../img/gambar-gili-ketapang.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Gili Ketapang</h5>
                <hr>
                <p class="card-text"> Untuk pergi ke gili ketapang anda dapat menaiki sebuah kapal.
                  Turis yang biasanya pergi ke pulau ini datang untuk snorkling. Pemandangan pasir putih dan laut biru di pulau ini sungguh cantik, apalagi pemandangan bawah lautnya.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 top-hang ">
            <a href="../pages/detailMadakaripura.php">
              <img src="../img/gambar-madakaripura.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Air Terjun Madakaripura</h5>
                <hr>
                <p class="card-text">Air terjun yang satu ini berdektan dengan lokasi wisata gunung bromo. Bukit nan-hijau yang menjulang tinggi menjadi alas bagi aliran air jernih yang berjatuhan. </p>
              </div>
            </a>
          </div>
        </div>
      </div>
  </section>
  <!-- End of Wisata -->

  <!-- Start of Culinary -->
  <section class="container culinary">
    <div>
      <h4>
        <i class="bi bi-hand-thumbs-up">
          <span class="left"> Best Food in Town! </span>
        </i>
      </h4>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card h-100 top-hang" data-aos="flip-right" data-aos-duration="1500" data-aos-delay="200">
            <a href="detailRawon.php">
              <img src="../img/rawon.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title  text-center">Rawon</h5>
                <hr>
                <p class="card-text"> Rawon merupakan salah satu makanan khas di Jawa Timur. Masakan ini memliki daya tarik yaitu warna kuah yang hitam pekat. Sup bewarna hitam ini biasanya dimakan dengan tempe, kecambah dan sambal beserta nasi panas. </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 top-hang" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="300">
            <a href="detailBakso.php">
              <img src="../img/gambar-bakso.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Bakso</h5>
                <hr>
                <p class="card-text">Bakso tersedia sangat banyak di seluruh penjuru Indonesia. Rasa asin dan gurihnya membuat orang Indonesia sangat suka dengan makanan satu ini. </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 top-hang" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="400">
            <a href="detailSoto.php">
              <img src="../img/soto.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Soto Kraksaan </h5>
                <hr>
                <p class="card-text">Olahan soto memang tak dapat ditahan kenikmatannya. Sepeti soto kraksan, makanan khas Probolinggo
                  ini berasal dari kraksaan. Yang membedakan soto ini dari soto lainnya ialah daging yang digunakan, soto kraksaan ini menggunakan daging ayam jantan.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 top-hang" data-aos="flip-right" data-aos-duration="1500" data-aos-delay="500">
            <a href="detailKetan.php">
              <img src="../img/ketan-kratok.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Ketan Kratok</h5>
                <hr>
                <p class="card-text">Dilihat sekilas makanan khas Probolinggo, Ketan Kratok mirip dengan ketan biasa. Yang istimewa dari makanan ringan khas Probolinggo ini yaitu campuran kratok atau kacang koronya.
                  Ketan Kratok disajikan dengan taburan kratok dan cairan gula merah atau juruh.</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End of Culinary -->
  <!-- Start of Footer -->
  <?php
  include 'footer.php'
  ?>
  <!-- End of footer -->
  <!-- AOS Innit -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- End of AOS Innit -->
  <!-- JS for button -->
  <script>
    document.getElementById('explore-more').onclick = function () {
      location.href = "pageWisata.php";
    }
  </script>
  <!-- End of JS -->
</body>

</html>