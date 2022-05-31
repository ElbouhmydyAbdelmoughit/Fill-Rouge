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
    <div id="contant" class="contant p-2  col-10 d-flex">
      <div class="col-6 p-5">
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div>
            </div>

            <div class="col">
              <!-- Simple link -->
              <a href="#!">Forgot password?</a>
            </div>
          </div>

          <!-- Submit button -->
          <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

          <!-- Register buttons -->
          <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-github"></i>
            </button>
          </div>
        </form>
      </div>
      <!-- <div class="col-6 border border-1 border-prmary" id="img_body_login_page">
        <img src="assets/img/img_body_login.jpg" class="img-responsive w-100" id="img_login"
          alt="Image Body Login Page">
      </div> -->
    </div>
  </div>

  <script src="assets/js/script.js"></script>
  <script src="assets/js/sweetalert2.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>