
<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-5">
  <div class="container"> 
  	<div class="title-banner">
  		<h3>Other <span>Popular</span>  from TravelGuide</h3>
  		<p>Ne his postulant posidonium adversarium. Ius tollit tamquam indoctum ea, cu quo equidem perfecto adipiscing. Eu mel aliquid delenit. Recteque laboramus ea est, te qui eirmod similique.</p>
  		<div class="redbanner"><em></em></div>
  	</div>
  	<div class="tab-banner">

			<div class="w3-bar">
			  <button id="tab1" class="w3-bar-item w3-button tablink " style="border-radius: 16px;" onclick="openCity('London')" >Lastest</button>
			  <button id="tab2" class="w3-bar-item w3-button tablink" style="border-radius: 16px;" onclick="openCity('Paris')">Top Viewed</button>

			</div>


			<div id="London" class="w3-container w3-display-container city">
			  <div class="row tab-bannerimg">
			  	<div class="col-md-4 col-sm-4">
			  		<h2>Must see</h2>
			  		<ul>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/immd1.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/imgmd2.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/imgmd3.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                  <img src="images/imgmd4.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  		</ul>
			  	</div>
			  	<div class="col-md-4 col-sm-4">
			  		<h2>Cocktails Bars</h2>
			  		<ul>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                   <img src="images/imgmd2.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/imgmd5.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                     <img src="images/imgmd7.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                     <img src="images/imgmd6.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  		</ul>

			  	</div>
			  	<div class="col-md-4 col-sm-4">
			  		<h2>Shops</h2>
			  		<ul>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                     <img src="images/immd1.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/imgmd4.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                     <img src="images/imgmd9.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/imgmd10.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  		</ul>
			  	</div>
			  </div>
			</div>

			<div id="Paris" class="w3-container w3-display-container city" style="display:none">
			  
			  <div class="row tab-bannerimg">
			  	<div class="col-md-4 col-sm-4">
			  		<h2>Must see</h2>
			  		<ul>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="https://shtheme.com/demosd/travelguidewp/wp-content/uploads/2017/02/shop_list_6.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="https://shtheme.com/demosd/travelguidewp/wp-content/uploads/2017/02/shop_list_6.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="https://shtheme.com/demosd/travelguidewp/wp-content/uploads/2017/02/shop_list_6.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="https://shtheme.com/demosd/travelguidewp/wp-content/uploads/2017/02/shop_list_6.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  		</ul>
			  	</div>
			  	<div class="col-md-4 col-sm-4">
			  		<h2>Cocktails Bars</h2>
			  		<ul>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                     <img src="images/immd1.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/imgmd4.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                     <img src="images/imgmd9.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/imgmd10.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  		</ul>
			  	</div>
			  	<div class="col-md-4 col-sm-4">
			  		<h2>Shops</h2>
			  		<ul>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/immd1.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/imgmd2.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                    <img src="images/imgmd3.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  			<li>
			  				<div class="sa1">
			  					<a href="">
                                    <figure>
                                  <img src="images/imgmd4.jpg"  class="img-rounded" width="60" height="60">
                                	</figure>
                                        <h3>Florence Boutique</h3>
                                        <small>Men - Chidren</small>
                                </a>
			  				</div>
			  			</li>
			  		</ul>
			  	</div>
			  </div>
			</div>

  	</div>
  </div>
</div>
