<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-11">
	<div class="container">
		<div class="row">
			<div class="col-md-9"></div>
			<div class="col-md-3">
				<div class="type-11-stickysidebar">
					<div class="type-11-filter">
						<ul>
							<li>
								<a href="#" id="map_icon">
									<i class="fal fa-map-marker-alt"></i>Map view
									
								</a>
								
							</li>
							<li>
								<a href="#" id="map_icon"><i class="fal fa-table"></i>Grid view
									
								</a>
							</li>
							<li>
								<a href="#" id="map_icon"><i class="fal fa-list"></i>List view
									
								</a>
							</li>
						</ul>
					</div>

					<div class="type-11-filter-banner">
						 <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" class="a-filter">
						 Filters<i class="far fa-sliders-h"></i> </a>

						
						<div class="type-11-banner-child">
							<form action="#" method="post">
									<div class="filter_type">
									  <h6>Duration</h6>
									 <span class="type-11-irs">
									 	<span class="type-11-irs-line">
									 		<span class="type-11-irs-line-left"></span>
									 		<span class="type-11-irs-line-mid"></span>
									 		<span class="type-11-irs-line-right"></span>
									 	</span>
									 	<span class="type-11-irs-min" style="display: none; visibility: visible;">0</span>
									 	<span class="type-11-irs-max" style="display: none; visibility: visible;">1</span>


									 	<span class="type-11-irs-from" style="visibility: visible; left: 12.4434%;">Min. 60</span>
									 	<span class="type-11-irs-to" style="visibility: visible; left: 60%;">Min. 130</span>
									 </span>

									 <span class="type-11-irs-bar" style="left: 22.1719%; width: 43.2881%;"></span>
									 <span class="type-11-irs-slider from" style="left: 19.552%;"></span>
									 <span class="type-11-irs-slider to type_last" style="left: 62.8401%;"></span>

									  <input type="text" id="range" name="duration_range" value="" class="type-11-input">
									</div>
									<button type="submit" class="btn btn-default btn-search">Search</button>
									</form>
						</div> 


						<div class="type-11-banner-child child1">
							  <h6>Review score</h6>
							  <ul>
							    <li>
							      <label>Superb: 9+ (4)</label>
							     
							      <span class="type-11-switchery type-11-switchery-small" id="switchery-type-11">
							      	<small id="small" ></small>
							      </span>
							    </li>
							    <li>
							      <label>Very good: 8+ (3)</label>  
							      <span class="type-11-switchery type-11-switchery-small" id="switchery-type-111">
							      	<small id="small1" ></small>
							      </span>
							    </li>
							    <li>
							      <label>Good: 7+ (3)</label>
							     <span class="type-11-switchery type-11-switchery-small" id="switchery-type-112">
							      	<small id="small2" ></small>
							      </span>
							    </li>
							    <li>
							      <label>Pleasant: 6+ (0)</label> 
							      <span class="type-11-switchery type-11-switchery-small" id="switchery-type-113">
							      	<small id="small3" ></small>
							      </span>
							    </li>
							    <li>
							      <label>No rating (0)</label> 
							      <span class="type-11-switchery type-11-switchery-small" id="switchery-type-114">
							      	<small id="small4" ></small>
							      </span>
							    </li>
							  </ul>
						</div>


						<div class="type-11-banner-child child2">
						  <h6>Type</h6>
						  <ul>
						    <li>
						      <label>Historic (3)</label>
						     <span class="type-11-switchery type-11-switchery-small" id="switchery-type-115">
							      	<small id="small5" ></small>
							      </span>
						    </li>
						    <li>
						      <label>Monumets (2)</label>  
						      <span class="type-11-switchery type-11-switchery-small" id="switchery-type-116">
							      	<small id="small6" ></small>
							      </span>
						    </li>
						    <li>
						      <label>Interesting (4)</label>	
						     <span class="type-11-switchery type-11-switchery-small" id="switchery-type-117">
							      	<small id="small7" ></small>
							      </span>					     
						    </li>
						    <li>
						      <label>Architectural (1)</label>
						      <span class="type-11-switchery type-11-switchery-small" id="switchery-type-118">
							      	<small id="small8" ></small>
							      </span>
						    </li>
						  </ul>
						</div>


					</div>

				</div>
			</div>
		</div>
	   </div>
   </div>
</div>

