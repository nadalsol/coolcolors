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

  <ol class="carousel-indicators">
    <?php for ($i=0; $i < count($images_array); $i++) : ?>
    <li data-target="#carousel" data-slide-to="<?php echo $i; ?>" <?php if($i==0) {echo 'class="active"';} ?>></li>
    <?php endfor; ?>
  </ol>

  <div class="carousel-inner" role="listbox">
    <?php for ($i=0; $i < count($images_array); $i++) : ?>
    <div class="item <?php if($i==0) {echo 'active';} ?>">
      <img src="/img<?php echo $projects_url; ?><?php echo $images_array[$i]; ?>" alt=" ">
    </div>
    <?php endfor; ?>
  </div>

  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="btn btn--arrow-left">‹</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="btn btn--arrow-right">›</span>
  </a>

</div>
