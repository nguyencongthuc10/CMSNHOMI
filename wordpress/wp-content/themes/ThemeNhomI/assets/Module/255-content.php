
<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-255">
  <div class="container"> 
    <div class="type-255-bao">
          <p class="emty">
      Your cart is currently empty.</p>
  <p class="return-to-shop">
        <a class="button wc-backward" href="https://shtheme.com/demosd/travelguidewp/?page_id=408">
          Return To Shop    </a>
      </p>
    </div>
  </div>
  </div>