<!doctype html>
<html lang="en">
<head>
  <title>Auth.Doc</title>
  <meta charset="utf-8">
  <meta name="description" content="A minimal and responsive HTML5 landing page built on lightweight, clean and customizable code.">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon-precomposed" href="media/favicon.png">
  <link rel="icon" href="media/favicon.png">
  <link rel="mask-icon" href="media/favicon.svg" color="rgb(36,38,58)">
  <link rel="shortcut icon" href="media/favicon.png">
  <link rel="stylesheet" href="css/main.css">
</head>
<body class="page page-home preload">

  <header class="header-main dark">
    <nav>
      <a href="#" class="logo" rel="Auth.Doc"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><path d="M7.335 1.023l2.462.434a1 1 0 0 1 .811 1.159L8.004 17.388a2 2 0 0 1-2.317 1.622l-3.94-.694a1 1 0 0 1-.81-1.159L3.28 3.862a3.5 3.5 0 0 1 4.054-2.839zm7.039 3.272l7.878 1.39a1 1 0 0 1 .812 1.158l-1.997 11.325a5.5 5.5 0 0 1-6.372 4.461l-4.431-.78a1 1 0 0 1-.812-1.16l2.605-14.771a2 2 0 0 1 2.317-1.623z" fill="currentColor"/></svg><span>Auth.Doc</span></a>
      <div class="nav-toggle"></div>
      <ul class="inline">
        <li><a href="#" class="active">Home</a></li>
        <!-- <li><a href="pricing.html">Pricing</a></li> -->
        <li><a href="{{route('about')}}">About</a></li>
      </ul>
      <ul class="inline right">
        <li><a href="{{route('login')}}">Log In</a></li>
        <li><a href="{{route('signup')}}" class="button button-secondary button-m full-width-tablet" role="button">Sign Up</a></li>
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