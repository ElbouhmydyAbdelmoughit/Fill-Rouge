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
  <title>Login</title>
</head>

<body id="body">
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
            <a class="nav-link" href="index.php" id="btn_login">Home</a>
          </li>
      </div>
    </div>
  </nav>
  <!------section Login page----->
  <div id="container_fluid" class="container-fluid pt-4">
    <div id="contant" class="contant  col-12 d-flex text-nowrap">
      <div class="col-lg-6 col-12 pe-3 ps-5 pt-4">
        <div>
          <h2 id="text_login">Login</h2>
        </div>
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" placeholder="Email" class="form-control" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" placeholder="Password" class="form-control" />
          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class=" d-flex justify-content-start">
              <!-- Checkbox -->
              <div class="form-check text-start">
                <input class="form-check-input" type="checkbox" value="" id="remember_me" checked />
                <label class="form-check-label" for="remember_me"> Remember me </label>
              </div>
            </div>
          </div>

          <!-- Submit button -->
          <button type="button" id="login" class="btn form-control  mb-4">Log in</button>

          <!-- Register buttons -->
          <div class="text-start">
            <p class="text-dark fst-italic"><small> If don't have accout <a href="#" class="text-primary">Sign in</a> to
                create account
                !</small></p>
          </div>
        </form>
      </div>
      <div class="col-lg-6 d-lg-block d-none">
        <img src="assets/img/img_body_login.jpg" class="img-responsive w-100" id="img_login"
          alt="Image Body Login Page">
      </div>
    </div>
  </div>

  <script src="assets/js/script.js"></script>
  <script src="assets/js/sweetalert2.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>