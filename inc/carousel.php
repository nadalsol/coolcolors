<?php
  $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/projects.xml') or die('Error: Cannot create object');
  foreach($xml->children() as $projects) :
    if ($projects->url == $_SERVER['REQUEST_URI']) {
      $projects_url = $projects->url;
      $images_array = array();
      foreach($projects->images->image as $image) {
        array_push($images_array, $image);
      }
    }
  endforeach;
?>

<!-- Carousel -->
<div class="carousel carousel--offset slide" id="carousel" data-ride="carousel">
  <div class="row">
    <div class="small-12 columns">
      
      <div class="carousel-inner" role="listbox">
        <?php for ($i=0; $i < count($images_array); $i++) : ?>
        <div class="item <?php if($i==0) {echo 'active';} ?>">
          <img src="/img<?php echo $projects_url; ?><?php echo $images_array[$i]; ?>" alt=" ">
        </div>
        <?php endfor; ?>
      </div>

      <a class="carousel-control left" href="#carousel" role="button" data-slide="prev">
        <img src="/img/arrow.png" width="24" height="82" alt="Left">
        <!-- <img src="/img/arrow.svg" width="24" height="82" alt="Left"> -->
      </a>
      <a class="carousel-control right" href="#carousel" role="button" data-slide="next">
        <img src="/img/arrow.png" width="24" height="82" alt="Right">
        <!-- <img src="/img/arrow.svg" width="24" height="82" alt="Right"> -->
      </a>

    </div>
  </div>
</div>
