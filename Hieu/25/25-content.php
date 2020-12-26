<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-25">
	  <div class="container">
	  			 <div class="col-md-10 col-md-offset-1">
			    <div class="fullduckxxx" >
			    	
			    	<div class="row">
			    			<div class="col-md-6">
			    				<img src="images/balo1.jpg"  class="img-rounded" width="250" height="250" class="img-responsive">
			    			</div>
			    			<div class="col-md-6">
			    				<div class="hieudeotrai">
			    					<h1 class="product_titl">Product 1</h1>

									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<a href="" style="text-decoration: none !important;color: #1aa79b;">(1 customer review)</a>

			    				</div>
			    				<div class="tien"><span style="color: #1aa79b;font-size: 32px;margin-bottom: 10px;">$20.00</span></div>
			    				<div itemprop="description"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
			    				<form class="cart" method="post" enctype="multipart/form-data">
				 	
				 	<div class="quantity"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text " size="4" pattern="[0-9]*"></div>

				 	<input type="hidden" name="add-to-cart" value="413">

				 	<button type="submit" class="button-cart">Add to cart</button>

						</form>
			    			</div>
			    	</div>
			    	
			    </div>

			</div>
		</div>

		<div class="container">
	    	<div class="panel with-nav-tabs panel-default mbot80 ">
	    		<div class="row">
	    			
	    				
						 <div class="container">
						    
							    <div class="group-tabs">
							      <!-- Nav tabs -->
							     

							      <ul class="nav nav-tabs">
							        <li  class="active"><a href="#home" aria-controls="home"  data-toggle="tab">Description</a></li>
							        <li><a href="#profile" aria-controls="profile"   data-toggle="tab">Review (1)</a></li>
							        
							      </ul>

							    <!-- Tab panes -->
							      <div class="tab-content">

							        <div role="tabpanel" class="tab-pane fade in active" id="home">
	                                <h2>Product Description</h2>

		                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam diam arcu, vel tempor ante laoreet placerat. Praesent ex turpis, tempus non facilisis ut, auctor at sem. Mauris rhoncus tempor ligula, sodales lobortis diam malesuada in. Sed ut erat non quam porttitor ornare. Nam ut pulvinar lacus. Integer lacinia tellus nunc, vitae tempus felis ullamcorper vitae. Nullam venenatis suscipit ultrices. Duis varius efficitur posuere. Aliquam bibendum tempus erat, sit amet dapibus orci volutpat quis.</p>
		                            <p>Sed suscipit magna nec mauris accumsan, porttitor pharetra sapien maximus. Sed commodo tempus dolor, in gravida arcu ullamcorper non. Donec feugiat non sapien quis laoreet. Vivamus eu justo facilisis, consectetur metus vel, cursus lorem. Aliquam vitae imperdiet dui. Aenean sed neque euismod, lacinia erat commodo, posuere risus. Ut suscipit gravida commodo. Aenean porttitor molestie facilisis. Curabitur faucibus id augue sed efficitur.</p>
		                            <p>Ut faucibus, sem sit amet commodo viverra, purus purus ornare felis, cursus porttitor dui turpis non felis. Cras maximus feugiat odio, ut fermentum sapien congue nec. Duis vitae lorem ac lectus tempus bibendum fringilla vel ex. Fusce pretium felis id mollis venenatis. Sed sollicitudin condimentum nisl, efficitur ornare magna iaculis eget. Suspendisse vulputate nibh a molestie condimentum. Mauris condimentum lobortis orci. Donec eleifend eleifend leo, et volutpat sapien commodo nec. Maecenas ex dolor, dignissim a faucibus sit amet, consectetur quis orci. Sed at tellus in ligula porta mollis mattis eget dui. Sed aliquam dui vitae turpis finibus sodales. In hac habitasse platea dictumst. Donec volutpat, nibh et fringilla fermentum, velit ex condimentum ante, sit amet pretium libero diam sit amet ante.</p>
		                            </div>
								        <div role="tabpanel" class="tab-pane" id="profile">
		                                <h2 class="woocommerce-Reviews-title">1 review for <span>Product 1</span></h2>
										<ol class="commentlist">
											

											<div id="comment-4" class="comment_container">

												<img alt="" src="https://secure.gravatar.com/avatar/8d7f8f96834d152aa4f1ab35a7e8ebd4?s=60&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/8d7f8f96834d152aa4f1ab35a7e8ebd4?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
												<div class="comment-text">

													
													<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" class="star-rating" title="Rated 5 out of 5">
														
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>

													</div>


													<p class="meta">
														<strong itemprop="author">admin</strong> – <time itemprop="datePublished" datetime="2019-04-25T09:33:30+00:00">April 25, 2019</time>:
													</p>

												<div itemprop="description" class="description"><p>Very Good</p>
												</div>
												</div>
											</div>
										
										</ol>


										<h3 id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
										<form class="form-comment" method="">
											<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
											<p class="comment-star_rating">
												<label for="rating">Your Rating</label>
											</p>
											<p class="comment-form-comment"><label for="comment" class="yourreview">Your Review <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea></p>
											<p class="comment-form-author">
												<label for="author">Name <span class="required">*</span></label> 
												<input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
											</p>
											<p class="comment-form-email">
												<label for="email">Email <span class="required">*</span></label> 
												<input id="email" name="email" type="email" value="" size="30" aria-required="true" required="">
											</p>
											<p class="form-submit">
												<input name="submit" type="submit" id="submit" class="submit" value="Submit">
												<input type="hidden" name="comment_post_ID" value="413" id="comment_post_ID">
												<input type="hidden" name="comment_parent" id="comment_parent" value="0">
											</p>
										</form>
		                            </div>
							        
							      </div>
							    </div>
						  </div>
					    			
	    		</div>
	    	
	    	</div>	
	    	
	  
	</div>
</div>

