<!-- Portfolio -->
<div class="portfolio">
  <div class="row">
    <ul>
    <?php
      $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/projects.xml') or die('Error: Cannot create object');
      foreach($xml->children() as $projects) :
        if($projects->visibility == 'true') :
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
    <?php
        endif;
      endforeach;
    ?>
    </ul>
  </div>
</div>
