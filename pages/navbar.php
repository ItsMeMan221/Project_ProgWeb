<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- Import Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <!-- End of Import Bootstrap -->

  <!-- Import css and javascript -->
  <link rel="stylesheet" href="../css/navstly.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../javascript/scroll.js"></script>
  <!-- End of Import css and javascript -->
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-lg-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="../img/navbar1.svg" alt="" width="50" class="d-inline-block align-text-top ">
        <p style="display: inline;">MAGNIFICENT PROBOLINGGO </p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active hover-animate" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active hover-animate" href="pageWisata.php">Excursion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active hover-animate" href="pageCulinary.php">Culinary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active hover-animate" href="pageAgricultural.php">Agricultural</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active hover-animate" href="pageAbout.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Nabvar -->
</body>

</html>