<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
      @yield('diventa_sviluppatore')
      @yield('assunti_da')
      </div>

    </header>
  </body>
</html>
