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
