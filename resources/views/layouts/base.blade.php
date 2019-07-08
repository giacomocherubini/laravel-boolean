<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  </head>
  <body>
    <header>
      <img class="logo"src="https://www.boolean.careers/images/common/logo.png" alt="Boolean logo">
      <nav>
        <a class="btn" href="#">Home</a>
        <a class="btn" href="#">Corso</a>
        <a class="btn" href="#">Metodo</a>
        <a class="btn" href="#">Dopo il corso</a>
        <a class="btn" href="#">Lezione gratuita</a>
        <a class="btn" href="#">Iscriviti</a>
      </nav>

      <div id="main_content">
      @yield('content')
      </div>
    </header>
    <footer class="fixed-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-auto col-12">
            <a href="/" title="Home Boolean"><img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean logo"> </a>
          </div>
          <div class="col-lg-auto col-12" id="footer_recapiti">
            <a href="mailtoo:ciao@boolean.careers">ciao@boolean.careers</a>
            <a href="tel:02-40031288">02-40031288</a>
            <a href="tel:+39 327-9578239">+39 327-9578239</a>
          </div>
          <div class="col-lg-auto col-12" id="footer_menu">
            <a href="#">Domande Frequenti</a>
            <a href="#">Lezione Gratuita</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Lavora con noi!</a>
          </div>
          <div class="col-lg-auto col-12" id="footer_social">
            <a href="#"><i class="fab fa-facebook-square black fa-2x"></i></a>
            <a href="#"><i class="fab fa-linkedin black fa-2x"></i></a>
            <a href="#"><i class="fab fa-youtube black fa-2x"></i></a>
            <a href="#"><i class="fab fa-whatsapp black fa-2x"></i></a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
