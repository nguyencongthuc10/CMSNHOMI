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
  		</h3>
  		<p>Id tale utinam ius, an mei omnium recusabo iracundia.</p>
  		<div class="container">
  			<div class="row">
  				<div class="col-md-8 col-md-offset-2 col-sm-12">
  					

				<!-- Slideshow container -->
					 <div class="swiper-container">
					    <div class="swiper-wrapper">
					      <div class="swiper-slide">
						      	<div class="box_overlay">
						            <div class="pic">
						                <figure><img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonial_1.jpg?>" alt="" class="img-circle">
						                </figure>
						                <h4>Roberta<small>12 October 2015</small></h4>
						            </div>
						            <div class="comment">
						                "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
						            </div>
						        </div>
					      </div>
					      <div class="swiper-slide">
					      	<div class="box_overlay">
						            <div class="pic">
						                <figure><img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonial_1.jpg?>" alt="" class="img-circle">
						                </figure>
						                <h4>Roberta<small>12 October 2015</small></h4>
						            </div>
						            <div class="comment">
						                "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
						            </div>
						        </div>
					      </div>
					      <div class="swiper-slide">
					      	<div class="box_overlay">
						            <div class="pic">
						                <figure><img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonial_1.jpg?>" alt="" class="img-circle">
						                </figure>
						                <h4>Roberta<small>12 October 2015</small></h4>
						            </div>
						            <div class="comment">
						                "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
						            </div>
						        </div>
					      </div>
					    </div>
					    <!-- Add Pagination -->
					   
					  </div>
					   <div class="swiper-pagination"></div>
  			</div>
  		</div>
  	</div> 
</div>
</div>

