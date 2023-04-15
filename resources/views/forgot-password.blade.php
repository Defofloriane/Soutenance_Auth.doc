<!doctype html>
<html lang="en">
<head>
  <title>Auth.Doc - Forgot Password</title>
  <meta charset="utf-8">
  <link rel="apple-touch-icon-precomposed" href="assets/images/logo-sm.png">
  <link rel="icon" href="assets/images/logo-sm.png">
  <link rel="mask-icon" href="assets/images/logo-sm.png" color="rgb(36,38,58)">
  <link rel="shortcut icon" href="assets/images/logo-sm.png">
  <link rel="stylesheet" href="css/main.css">
</head>
<body class="page page-onboarding preload">

  <main>

    <a href="{{route('index')}}" class="button button-close" role="button"></a>

    <section class="row no-gutter reverse-order">
      <div class="col-one-half middle padding">
        <div class="max-width-s">
          <h5>Forgot password?</h5>
          <p class="paragraph">We'll send you an email with instructions to reset it.</p>
          <form>
            <div class="form-group">
              <label for="email">Email:</label>
              <input id="email" type="email" name="email">
            </div>
            <a href="#" class="button button-primary full-width space-top" role="button">Forgot Password</a>
          </form>
        </div>
        <div class="center max-width-s space-top">
          <span class="muted">Already have an account? </span><a href="login.html">Log In</a>
        </div>
      </div>
      <div class="col-one-half bg-image-06 featured-image"></div>
    </section>

  </main>

  <script src="js/main.js"></script>
</body>
</html>