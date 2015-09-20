<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
  <head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Miriam Soto Romero - Visual Designer, Lead UX / UI Design</title>
    <meta name="description" content="Miriam Soto Romero - Visual Designer, Lead UX / UI Design">
    <meta name="keywords" content="web, design, webdesign, interface, designer, ux, ui, architecture, information architecture, direction, barcelona">
    <meta name="author" content="Miriam Soto, Nadal Soler">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');</script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">
  </head>
  <body>

    <!-- Hero -->
    <div class="hero" id="top">
      <video autoplay loop muted poster="img/hero/dancing.jpg">
        <source src="video/dancing.mp4" type="video/mp4">
        <source src="video/dancing.ogg" type="video/ogg">
        <source src="video/dancing.webm" type="video/webm">
      </video>
      <p class="hero__brand">
        <img src="img/hero/logo-cool-colors.png" alt="CoolColors logo">
      </p>
      <h1 class="hero__title text-uppercase">
        <span>
          <span>Visual</span>
          <span>Design</span>
        </span>
        <span>
          <span><abbr title="User Interface">UI</abbr>/<abbr title="User Experience">UX</abbr></span>
          <span>Design</span>
        </span>
        <span>
          <span>Information</span>
          <span>Architecture</span>
        </span>          
      </h1>
      <nav class="hero__contact">
        <ul>
          <li>
            <a href="mailto:coolcolors@gmail.com" class="text-uppercase">Contact me</a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/miriamsoto" target="_blank">
              <i class="fa fa-linkedin-square"></i>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- About me -->
    <div class="about-me">
      <div class="row">
        <div class="small-12 medium-8 medium-centered large-6 columns">
          <h2 class="about-me__title text-uppercase" lang="es-ES">¡Hola!</h2>
          <h3 class="about-me__subtitle" lang="es-ES">Me llamo Miriam, soy diseñadora visual, de experiencia de usuario y arquitecta de la información.</h3>
          <p>Ésta es una selección de mis trabajos, entra para ver el detalle.</p>
        </div>
      </div>
    </div>

    <!-- Portfolio -->
    <div class="portfolio">
      <div class="row">
        <ul>

          <?php for ($i=0; $i < 3; $i++) : ?>
          <li class="portfolio__work">
            <a href="#">
              <ul>
                <li><abbr title="Information Architecture">IA</abbr></li>
                <li><abbr title="User Experience">UX</abbr></li>
                <li><abbr title="Visual Design">VD</abbr></li>
              </ul>
              <img src="img/portfolio/placeholder.jpg" alt=" ">
            </a>
          </li>
          <?php endfor; ?>

          <li class="viewer">
            <div class="viewer__header">
              <a class="viewer__header__btn btn btn--close" href="#">&times;</a>
              <h2 class="viewer__header__title">Lorem ipsum dolor sit amet</h2>
            </div>
            <div class="viewer__body">
              <div class="viewer__body__desc">
                <p>Lorem ipsum Sit incididunt sit laboris cupidatat dolore fugiat veniam est ut eu velit cupidatat eiusmod laboris dolore tempor ullamco.</p>
              </div>
              <div class="viewer__body__slider">
                <img src="img/hero/dancing.jpg" alt=" ">
              </div>
            </div>
          </li>

          <?php for ($i=0; $i < 2; $i++) : ?>
          <li class="portfolio__work">
            <a href="#">
              <ul>
                <li><abbr title="Information Architecture">IA</abbr></li>
                <li><abbr title="User Experience">UX</abbr></li>
                <li><abbr title="Visual Design">VD</abbr></li>
              </ul>
              <img src="img/portfolio/placeholder.jpg" alt=" ">
            </a>
          </li>
          <?php endfor; ?>

          <li class="portfolio__work" id="portfolio-work-load-more">
            <a href="#">
              <img src="img/portfolio/load-more.png" alt="Load more works&hellip;">
            </a>
          </li>

        </ul>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer-main">
      <nav class="footer-main__contact">
        <ul>
          <li>© coolcolors 2015</li>
          <li>
            <a href="mailto:coolcolors@gmail.com" class="text-uppercase">Contact me</a>
          </li>
        </ul>
      </nav>
      <a class="footer-main__btn btn btn--top" href="#top">Up</a>
    </footer>

    <!-- Scripts (placed at the end of the document so the pages load faster) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/app.js"></script>

  </body>
</html>
