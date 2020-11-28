<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-14">
  	<div class="type-14-bao">
  		<h3>What Clients say
  			<span>Id tale utinam ius, an mei omnium recusabo iracundia.</span>
  		</h3>
  		<div class="container">
  			<div class="row">
  				<div class="col-md-8 col-md-offset-2"></div>
  			</div>
  		</div>
  	</div> 
</div>

