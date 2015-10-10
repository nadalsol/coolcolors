<!-- Portfolio -->
<div class="portfolio">
  <div class="row">
    <ul>
    <?php
      $xml = simplexml_load_file('projects.xml') or die('Error: Cannot create object');
      foreach($xml->children() as $projects) :
    ?>
      <li class="portfolio__project">
        <a href="/portfolio/<?php echo $projects->url; ?>">
          <ul>
          <?php
            foreach($projects->tags->tag as $tag) {
            echo '<li>' . $tag .'</li>';
            }
          ?>
          </ul>
          <img src="/img/portfolio/<?php echo $projects->url; ?>/<?php echo $projects->image_thumb; ?>" alt="<?php echo $projects->title; ?>">
        </a>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>
</div>
