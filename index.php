<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login </title>
  <link rel="stylesheet" href="assets/css/main/app.css" />
  <link rel="stylesheet" href="assets/css/pages/auth.css" />
  <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png" />
</head>

<body>
  <div id="auth">
    <div class="row h-60">
      <div class="col-6 position-absolute top-50 start-50 translate-middle">
        <div id="auth-left">
          <h1 class="auth-title">Login .</h1>
          <p class="auth-subtitle mb-5">
            Login Page .
          </p>

          <form action="login-siswa.php" method="post">
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="number" class="form-control form-control-xl" name="nisn" placeholder="testing" />
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="number" name="nis" class="form-control form-control-xl" placeholder="testing" />
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
              Login
            </button>
          </form>
          <div class="text-center mt-5 text-lg fs-4">
            <p class="text-gray-600">
              Login Sebagai
              <a href="index2.php" class="font-bold">template</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right"></div>
      </div>
    </div>
  </div>
</body>

</html>