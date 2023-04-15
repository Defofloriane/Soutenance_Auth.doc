<!doctype html>
<html lang="en">
<head>
  <title>Auth.Doc - Log In</title>
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
          <h5>Welcome back.</h5>
          <p class="paragraph">Enter your details below.</p>
          <form>
            <div class="form-group">
              <label for="email">Email:</label>
              <input id="email" type="email" name="email">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input id="password" type="password" name="login-password">
              <a href="forgot-password.html" class="form-help">Forgot password?</a>
            </div>
            <div class="form-group">
              <input id="remember-me" type="checkbox" name="remember-me">
              <label for="remember-me" class="checkbox">Remember Me</label>
            </div>
            <a href="{{route('auth_doc')}}" class="button button-primary full-width" role="button">Log In</a>
          </form>
        </div>
        <div class="center max-width-s space-top">
          <span class="muted">Don't have an account? </span><a href="{{route('signup')}}">Sign Up</a>
        </div>
      </div>
      <div class="col-one-half middle ">
        <img src="media/content/log.JPG" alt="login" style="width: 90%;">

      </div>
    </section>
   
  </main>

  <script src="js/main.js"></script>
</body>
</html>