<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
  <div class="container">
  	<div class="type-2-header">
  		<h3><span class="type-2-span0">Explore</span> what's interesting</h3>
	  	<p>Ne his postulant posidonium adversarium. Ius tollit tamquam indoctum ea, cu quo equidem perfecto adipiscing. Eu mel aliquid delenit. Recteque laboramus ea est, te qui eirmod similique.</p>
		
		<span class="type-2-span2">
			<em></em>
		</span>
  	</div>
  	<div class="type-2-banner">
  		<div class="container">
  			<div class="row mt-5">
  			<div class="col-md-3 col-sm-6 ">
  				<div class="type-2-bao">
  					<span class="type-2-so">24</span>
	  				<i class="icon_set_1_icon-1"></i>
	  				<h3>Must see</h3>
	  				<p>Pri melius fuisset at, pro legimus corpora no</p>
  				</div>
  				

  			</div>
  			<div class="col-md-3  col-sm-6">
  				<div class="type-2-bao">
	  				<span class="type-2-so">24</span>
	  				<i class="icon_set_1_icon-41"></i>
	  				<h3>Events</h3>
	  				<p>Pri melius fuisset at, pro legimus corpora no</p>
  				</div>
  				

  			</div>
			<div class="col-md-3 col-sm-6">
				<div class="type-2-bao">
					<span class="type-2-so">24</span>
	  				<i class="icon_set_1_icon-41"></i>
	  				<h3>Hotels</h3>
	  				<p>Pri melius fuisset at, pro legimus corpora no</p>

				</div>
  				
  			</div>
  			<div class="col-md-3 col-sm-6">
  				<div class="type-2-bao">
					<span class="type-2-so">24</span>
	  				<i class="icon_set_1_icon-41"></i>
	  				<h3>Restaurants</h3>
	  				<p>Pri melius fuisset at, pro legimus corpora no</p>
				</div>
  			</div>

  			<div class="col-md-3 col-sm-6">
  				<div class="type-2-bao">
					<span class="type-2-so">24</span>
	  				<i class="icon_set_1_icon-41"></i>
	  				<h3>Cocktail Bars</h3>
	  				<p>Pri melius fuisset at, pro legimus corpora no</p>
				</div>
  			</div>

  			<div class="col-md-3 col-sm-6">
  				<div class="type-2-bao">
					<span class="type-2-so">24</span>
	  				<i class="fal fa-shopping-bag"></i>
	  				<h3>Shops</h3>
	  				<p>Pri melius fuisset at, pro legimus corpora no</p>
				</div>
  			</div>

			<div class="col-md-3 col-sm-6">
  				<div class="type-2-bao">
					<span class="type-2-so">24</span>
	  				<i class="icon_set_1_icon-41"></i>
	  				<h3>Transport</h3>
	  				<p>Pri melius fuisset at, pro legimus corpora no</p>
				</div>
  			</div>

  			<div class="col-md-3 col-sm-6">
  				<div class="type-2-bao">
					<span class="type-2-so">24</span>
	  				<i class="icon_set_1_icon-41"></i>
	  				<h3>Info&Faqs</h3>
	  				<p>Pri melius fuisset at, pro legimus corpora no</p>
				</div>
  			</div>

  		</div>
  		</div>

  	</div>
   </div>
</div>

