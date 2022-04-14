<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>My Portfolio Site</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}"/>
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="#page-top"><img src="{{asset('assets/img/navbar-logo.svg')}}" alt="..."/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars ms-1"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">My Recent Project</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Masthead-->
<header class="masthead">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <h1 class="font-monospace text-lg-start">My name is Nâm !</h1>
      <h1 class="font-monospace text-lg-start">It's Nice To Meet You.</h1>
      <h4 class="font-monospace text-lg-start mt-4">I'm a newbie developer and this is my first project. </h4>
      <h4 class="font-monospace text-lg-start">Welcome to my site :")</h4>
      <div class="mt-4">
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
      </div>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <div>
        <img id="img-start" src="{{asset('images/main/lisa.jpg')}}" alt="avt">
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</header>

@include('partialsFE.service')

@include('partialsFE.portfolio')

@include('partialsFE.about')

@include('partialsFE.contact')

@include('partialsFE.footer')

@include('partialsFE.portfolio-modal')

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
