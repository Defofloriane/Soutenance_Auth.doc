<!doctype html>
<html lang="en">
<head>
  <title>Auth.Ddoc</title>
  <meta charset="utf-8">

  <link rel="apple-touch-icon-precomposed" href="assets/images/logo-sm.png">
  <link rel="icon" href="assets/images/logo-sm.png">
  <link rel="mask-icon" href="assets/images/logo-sm.png" color="rgb(36,38,58)">
  <link rel="shortcut icon" href="assets/images/logo-sm.png">
  <link rel="stylesheet" href="css/main.css">
</head>
<body class="page page-home preload">

  <header class="header-main dark">
    <nav>
      <a href="#" class="logo" rel="Auth.Doc">  <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm"><span>Auth.Doc</span></a>
      {{-- <div class="nav-toggle"></div> --}}
      <ul class="inline">
        <li><a href="#" class="active">Home</a></li>
        <!-- <li><a href="pricing.html">Pricing</a></li> -->
        <li><a href="{{route('about')}}">About</a></li>
      </ul>
      <ul class="inline right">
        <li><a href="{{route('login')}}">Log In</a></li>
        {{-- <li><a href="{{route('signup')}}" class="button button-secondary button-m full-width-tablet" role="button">Sign Up</a></li> --}}
      </ul>
    </nav>
  </header>

  <main>

    <section class="bg-image-hero center-tablet dark overlay-hero">
      <div class="full-screen -margin-bottom middle padding padding-top-tablet">
        <div class="row">
          <div class="col-one-half middle">
            <img src="media/content/documents.png" alt="doc Illustration" style="width: 50%; height: auto;">
          </div>
          <div class="col-one-half">
            <div>
              <h1 class="hero">Auth.Doc</h1>
              <p class="lead">Checks the integrity of the documents, in particular the transcripts or Report Card  of the university of yaounde 1.</p>
              <a href="{{route('login')}}" class="button button-primary space-top" role="button">Get Started</a>
            </div>
          </div>
        </div>
        
      </div>
      <div class="padding">
        <div class="row margin-bottom max-width-l">
          <div class="col-one-half middle">
            <h3>Report Card</h3>
            <p class="paragraph">Summarizes the results obtained by a student for a specific study period.</p>
          </div>
          <div class="col-one-half">
            <img class="rounded shadow-l" src="media/content/rel1.jpeg"  alt="rel">
          </div>
        </div>
        <div class="row max-width-l reverse-order">
          <div class="col-one-half">
            <img class="rounded shadow-l" src="media/content/serure.png"  alt="serure">
          </div>
          <div class="col-one-half middle">
            <h3>Security</h3>
            <p class="paragraph">To verify the veracity and completeness of the document.</p>
          </div>
        </div>
      </div>
    </section>


  </main>

  <footer class="footer-main bg-gradient-primary dark overlay-shape-06">
  
    <p class="copyright "><span>Auth.doc </span><a href="https://uiuxassets.com/" target="_blank">Kemgne Floriane</a><span> - © 2023, all acces.</span></p>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>