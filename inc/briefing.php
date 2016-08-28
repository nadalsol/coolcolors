<?php
  $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/projects.xml') or die('Error: Cannot create object');
  foreach($xml->children() as $projects) :
    if ($projects->url == $_SERVER['REQUEST_URI']) {
      $projects_title = $projects->title;
      $projects_category = $projects->category;
      $tags_array = array();
      foreach($projects->tags->tag as $tag) {
        array_push($tags_array, $tag);
      }
      $projects_desc = $projects->desc;
    }
  endforeach;
?>

<!-- Briefing -->
<div class="briefing">

  <div class="row">
    <div class="small-12 medium-8 medium-centered columns">
      <div class="row">
        <div class="small-12 columns">
          <h1 class="briefing__title text-uppercase"><?php echo $projects_title; ?></h1>
          <h2 class="briefing__subtitle text-uppercase">
          <?php
            echo '<span class="briefing__subtitle__category">' . $projects_category . '</span>';
            for ($i=0; $i < count($tags_array); $i++) {
              echo '<span class="briefing__subtitle__tag">' . $tags_array[$i] . '</span>';
            }
          ?>
          </h2>
        </div>
        <div class="small-12 columns" lang="es-ES">
          <div class="briefing__desc"><?php echo $projects_desc; ?></div>
        </div>
      </div>
    </div>
  </div>

</div>
