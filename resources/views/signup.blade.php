<!doctype html>
<html lang="en">
<head>
  <title>Auth.Doc - Sign Up</title>
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
          <h5>Welcome!</h5>
          <p class="paragraph">Enter your details to create an account.</p>
          <form>
            <div class="form-group">
              <label for="name">Name:</label>
              <input id="name" type="text" name="name">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input id="email" type="email" name="email">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input id="password" type="password" name="signup-password">
            </div>
            <a href="#" class="button button-primary full-width space-top" role="button">Create Account</a>
          </form>
        </div>
        <div class="center max-width-s space-top">
          <span class="muted">By creating an account, you agree to our </span><a href="#">Terms</a><span class="muted">.</span>
        </div>
        <div class="center max-width-s">
          <span class="muted">Already have an account? </span><a href="{{route('login')}}">Log In</a>
        </div>
      </div>
      <div class="col-one-half middle">
        <img src="media/content/regis.JPG" alt="login" style="width: 90%;">

      </div>
    </section>

  </main>

  <script src="js/main.js"></script>
</body>
</html>