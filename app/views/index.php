<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/Normalize.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/sass/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
  <!-- <link rel="stylesheet" href="assets/css/animate.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <title>Rantel Cars</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white shadow" id="NAVBAR">
    <div class="container">
      <a class="navbar-brand" href="#">
        <span class="fw-bold fs-2 d-flex">YOU <span id="text_logo">CAR</span></span>
      </a>
      <button class="navbar-toggler" id="icons_menu" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbar_menu" aria-controls="navbar_menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar_menu">
        <ul class="navbar-nav mx-auto me-0 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">All Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="btn_sigin">Sigin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" id="btn_login">Login</a>
          </li>
      </div>
    </div>
  </nav>
  <!-----------section landing page----------------->
  <div class="container-fliud bg-white my-4">
    <div class="d-flex col-12">
      <!-----------section1 landing page text and button----------------->
      <div class="col-12 col-lg-6 " id="section1_landing">
        <div class="contact_section1">
          <h1 class="text-wrap" id="text_primary_landing">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
          <button type="button" class="btn" id="btn_section1"> Continue</button>
        </div>
      </div>
      <!-----------section2 landing page image----------------->
      <div class="col" id="section2_landing">
        <img src="assets/img/img-body.png" class="img-responsive d-md-block d-none" id="img_body_landing_page"
          alt="image landing page">
      </div>
    </div>
  </div>


  <script src="assets/js/script.js"></script>
  <script src="assets/js/sweetalert2.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>