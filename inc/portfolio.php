<!-- Portfolio -->
<div class="portfolio">
  <div class="row">
    <ul>
    <?php
      $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/projects.xml') or die('Error: Cannot create object');
      foreach($xml->children() as $projects) :
    ?>
      <li class="portfolio__project">
        <a href="<?php echo $projects->url; ?>">
          <div>
            <h5>
              <?php echo $projects->category; ?>
              <span><?php echo $projects->title; ?></span>
            </h5>
            <ul>
            <?php
              foreach($projects->tags->tag as $tag) {
              echo '<li>' . $tag .'</li>';
              }
            ?>
            </ul>
          </div>
          <img src="/img<?php echo $projects->url; ?><?php echo $projects->image_thumb; ?>" alt="<?php echo $projects->title; ?>">
        </a>
      </li>
    <?php endforeach; ?>
    <?php for ($i=0; $i < 1; $i++) : ?>
      <li class="portfolio__project portfolio__project--soon">
        <a href="#">
          <div>
            <ul>
              <li>Coming soon&hellip;</li>
            </ul>
          </div>
          <span>
            <img src="/img/portfolio/rocket.svg" alt="Coming soon&hellip;">
          </span>
        </a>
      </li>
    <?php endfor; ?>
    </ul>
  </div>
</div>
