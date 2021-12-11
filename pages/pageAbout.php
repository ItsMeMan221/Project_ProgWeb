<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../img/icon1.ico" />
  <title>Document</title>
  <!-- Import Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <!-- End of Import Bootstrap -->

  <!-- Import css and javascript -->
  <link rel="stylesheet" href="../css/pageAbout.css" />
  <!-- End of Import css and javascript -->
</head>

<body>
  <!-- Start of Navbar -->
  <?php include 'navbar.php' ?>
  <!-- End of Navbar -->

  <!-- Start of gambar and deskripsi -->
  <section class="container">
    <h4 class="text-center dev-text">About Me</h4>
    <div class="row">
      <div class="col-md-6 text-center">
        <img src="../img/Foto-Profile.jpg" class="foto-prof">
      </div>
      <div class="col-md-6">
        <p class="deskrip">Hi,perkenalkan nama saya Santiago, saya adalah mahasiswa di Universitas Kristen Krida Wacana prodi Informatika dengan NIM 412020004.
          Saya membuat website ini untuk project akhir mata kuliah pemrograman web I.
          Saya menggunakan beberapa bahasa pemrograman dan framework serta library untuk merancang website ini antara lain : CSS, HTML, PHP, Javascript, JQuery dan Bootstrap.
        </p>
      </div>
    </div>
  </section>
  <!-- End of gambar and deskripsi -->
  <!-- Start of Feedback section -->
  <section class="container">
    <h4 class="text-center dev-text"> Give Me A Feedback!</h4>
    <div>
      <div class="alert alert-success alert-dismissible fade show alert-send d-none" role="alert">
        <strong>Feedback Berhasil Dikirim</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <form name="feedback-form">
        <input name="feedback" class="form-control feed" type="textarea" placeholder="Type Your Feedback in Here">
        <div class="text-center">
          <button type="submit" class="btn btn-primary btn-send col-md-4" style="margin-top: 30px;">Send</button>
          <button class="btn btn-primary btn-load d-none col-md-4" type="button" disabled style="margin-top: 30px;">
            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
            Loading...
          </button>
        </div>
      </form>
    </div>
  </section>
  <!-- End of Feedback -->
  <!-- Start of Footer -->
  <?php include 'footer.php' ?>
  <!-- End of Footer -->
  <script>
    const scriptURL =
      'https://script.google.com/macros/s/AKfycbymRrpx3_H3-U4yjbTk8WZpwTjh117ig5_Y1OVAOWoMBckDmCyi6WX9ondbPLRinpQMpQ/exec';
    const form = document.forms['feedback-form'];
    const btnSend = document.querySelector('.btn-send');
    const btnLoading = document.querySelector('.btn-load');
    const alertSend = document.querySelector('.alert-send');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      btnLoading.classList.toggle('d-none');
      btnSend.classList.toggle('d-none');
      fetch(scriptURL, {
          method: 'POST',
          body: new FormData(form)
        })
        .then((response) => {
          btnLoading.classList.toggle('d-none');
          btnSend.classList.toggle('d-none');
          alertSend.classList.toggle('d-none');
          form.reset();
        })
        .catch((error) => console.error('Error!', error.message));
    });
  </script>
</body>

</html>