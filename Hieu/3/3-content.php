
<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-3">
  <div class="container"> 
  	<div class="row">
  		<div class="col-md-8">
  			<div class="img_wrapper_grid">
  				<div class="itemsub ">
  					<div class="inveters"><span>Top rated</span></div>
  					
  				</div>
  				<div class="tool">
  					<a href=""><a href=""><i class="fa fa-compass" style=""> </i>
  						
  					
  				</a>
  				</div>
  				<div class="imgXbanner8">
  					<a href=""><img src="images/shop_list_6.jpg"  class="img-rounded" width="800" height="480" class="img-responsive">

  					<div class="short007">
		  					<h3>Florence Boutique</h3>
		  					<em>Men - Chidren</em>
		  					<p>Read More</p>
  					</div>
  					</a>
  					
  				</div>

  			</div>
  		</div>
  		<div class="col-md-4">
  			<div class="img_wrapper_grid">
  				<div class="itemsub">
  					<span>Top rated</span>
  				</div>
  				<div class="tool">
  					<a href=""><a href=""><i class="fa fa-compass" style=""> </i></a></a>
  				</div>
  				<div class="imgXbanner8">
  					<a href=""><img src="images/img2.jpg"  class="img-rounded" width="100%" height="240" class="img-responsive">

  					<div class="short007">
		  					<h3>Florence Boutique</h3>
		  					<em>Men - Chidren</em>
		  					<p>Read More</p>
  					</div>
  					</a>
  					
  				</div>

  			</div>
  			<div class="img_wrapper_grid">
  				<div class="itemsub">
  					<span>Top rated</span>
  				</div>
  				<div class="tool">
  					<a href=""><a href=""><i class="fa fa-compass" style=""> </i></a></a>
  				</div>
  				<div class="imgXbanner8">
  					<a href=""><img src="images/img3.jpg"  class="img-rounded" width="100%" height="240">

  					<div class="short007">
		  					<h3>Florence Boutique</h3>
		  					<em>Men - Chidren</em>
		  					<p>Read More</p>
  					</div>
  					</a>
  					
  				</div>

  			</div>
  		</div>
  		<div class="col-md-4">
  			<div class="img_wrapper_grid">
  				<div class="itemsub">
  					<span>Top rated</span>
  				</div>
  				<div class="tool">
  					<a href=""><a href=""><i class="fa fa-compass" style=""> </i></a></a>
  				</div>
  				<div class="imgXbanner8">
  					<a href=""><img src="images/img4.jpg"  class="img-rounded" width="100%" height="240" class="img-responsive">

  					<div class="short007">
		  					<h3>Florence Boutique</h3>
		  					<em>Men - Chidren</em>
		  					<p>Read More</p>
  					</div>
  					</a>
  					
  				</div>

  			</div>
  		</div>
  		<div class="col-md-4">
  			<div class="img_wrapper_grid">
  				<div class="itemsub">
  					<span>Top rated</span>
  				</div>
  				<div class="tool">
  					<a href=""><a href=""><i class="fa fa-compass" style=""> </i></a></a>
  				</div>
  				<div class="imgXbanner8">
  					<a href=""><img src="images/img5.jpg"  class="img-rounded" width="100%" height="240" class="img-responsive">

  					<div class="short007">
		  					<h3>Florence Boutique</h3>
		  					<em>Men - Chidren</em>
		  					<p>Read More</p>
  					</div>
  					</a>
  					
  				</div>

  			</div>
  		</div>
  		<div class="col-md-4">
  			<div class="img_wrapper_grid">
  				<div class="itemsub">
  					<div class="itemsub ">
  					<div class="inveters"><span>Top rated</span></div>
  					
  				</div>
  				</div>
  				<div class="tool">
  					<a href=""><a href=""><i class="fa fa-compass" style=""> </i></a></a>
  				</div>
  				<div class="imgXbanner8">
  					<a href=""><img src="images/img6.jpg"  class="img-rounded" width="100%" height="240"class="img-responsive">

  					<div class="short007">
		  					<h3>Florence Boutique</h3>
		  					<em>Men - Chidren</em>
		  					<p>Read More</p>
  					</div>
  					</a>
  					
  				</div>

  			</div>
  		</div>
  		<div class="col-md-4">
  			
  		</div>
  	</div>
    
  </div>
</div>
