<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4">
	  <div class="container">
	    <div class="col-md-8 col-md-offset-2">
	    	<div class="type-4-bao">
	    		<div class="row">
	    			<div class="col-md-12">
	    				
						 <div class="container">
						    <h1 class="title-page">Html Tabs</h1>
							    <div class="group-tabs">
							      <!-- Nav tabs -->
							     

							      <ul class="nav nav-tabs">
							        <li  class="active"><a href="#home" aria-controls="home"  role="tab" data-toggle="tab">Home</a></li>
							        <li><a href="#profile" aria-controls="profile"  role="tab" data-toggle="tab">Profile</a></li>
							        <li><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
							        <li><a href="#settings" aria-controls="settings"  role="tab" data-toggle="tab">Settings</a></li>
							      </ul>

							    <!-- Tab panes -->
							      <div class="tab-content">

							        <div role="tabpanel" class="tab-pane fade in active" id="home">
	                                Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
	                            </div>
							        <div role="tabpanel" class="tab-pane" id="profile">
	                                Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
	                            </div>
							        <div role="tabpanel" class="tab-pane" id="messages">
	                                Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
	                            </div>
							        <div role="tabpanel" class="tab-pane" id="settings">
	                                 Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
	                            </div>
							      </div>
							    </div>
						  </div>
					</div>	    			
	    		</div>
	    		<hr>
	    		<div class="row">
	    			<div class="col-md-12">
	    				<div class="container">
	    					<h1 class="title-page">Tables</h1>
	    					<p>Tables are automatically styled with only a few borders to ensure readability and maintain structure. With 2.0, the class="table" class is required.</p>	
	    					<!-- Table  :nth-child -->
	    					<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">First Name</th>
							      <th scope="col">Last Name</th>
							      <th scope="col">Username</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>Mark</td>
							      <td>Otto</td>
							      <td>@mdo</td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Jacob</td>
							      <td>Thornton</td>
							      <td>@fat</td>
							    </tr>
							    <tr>
							      <th scope="row">3</th>
							      <td>Larry</td>
							      <td>the Bird</td>
							      <td>@twitter</td>
							    </tr>
							  </tbody>
							</table>
							<!-- End -->
							<p>Get a little fancy with your tables by adding zebra-striping—just add the 
								<code>class="table table-striped"</code> class.
								<br>
								<strong>Note:</strong>  Striped tables use the <code>":nth-child"</code>
								 CSS selector and is not available in IE7-IE8.

							</p>
							<!-- Table Striped row -->
							<table class="table table-striped">
							  <thead>
							    <tr>
							     <th scope="col">#</th>
							      <th scope="col">First Name</th>
							      <th scope="col">Last Name</th>
							      <th scope="col">Username</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>Mark</td>
							      <td>Otto</td>
							      <td>@mdo</td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Jacob</td>
							      <td>Thornton</td>
							      <td>@fat</td>
							    </tr>
							    <tr>
							      <th scope="row">3</th>
							      <td>Larry</td>
							      <td>the Bird</td>
							      <td>@twitter</td>
							    </tr>
							  </tbody>
							</table>
							<!-- End -->
							<p>Add borders around the entire table and rounded corners for aesthetic purposes  <code>class="table table-bordere"</code> .</p>
							<!-- Table bordered -->
							<table class="table table-bordered">
								  <thead>
								    <tr>
								      <th scope="col">#</th>
								      <th scope="col">First Name</th>
								      <th scope="col">Last Name</th>
								      <th scope="col">Username</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th rowspan="2">1</th>
								      <td>Mark</td>
								      <td>Otto</td>
								      <td>@mdo</td>

								    </tr>
								    <tr>
								      
								      <td>Jacob</td>
								      <td>Thornton</td>
								      <td>@TwBootstrap</td>
								    </tr>
								    <tr>
								      <th scope="row">2</th>
								      <td>Jacob</td>
								      <td>Thornton</td>
								      <td>@fat</td>
								    </tr>
								    <tr>
								      <th scope="row">3</th>
								      <td colspan="2">Larry the Bird</td>
								      <td>@twitter</td>
								    </tr>
								  </tbody>
								</table>
								<!-- End -->
								<p>Make your tables more compact by adding the <code>class="table table-condensed"</code> class to cut table cell padding in half.</p>
								<!-- Table condensed -->
								<table class="table table-condensed">
							  <thead>
							    <tr>
							     <th scope="col">#</th>
							      <th scope="col">First Name</th>
							      <th scope="col">Last Name</th>
							      <th scope="col">Username</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>Mark</td>
							      <td>Otto</td>
							      <td>@mdo</td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Jacob</td>
							      <td>Thornton</td>
							      <td>@fat</td>
							    </tr>
							    <tr>
							      <th scope="row">3</th>
							      <td>Larry</td>
							      <td>the Bird</td>
							      <td>@twitter</td>
							    </tr>
							  </tbody>
							</table>
								
								<!-- End -->
								<p>Create responsive tables by wrapping any <code>.table in .table-responsive</code> to make them scroll horizontally up to small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>
								<!-- Table Striped row -->
								<div class="table-responsive">
								  <table class="table">
								    ...
								  </table>
								</div>
								<!-- End -->
								<!-- Table Striped row -->
								<!-- End -->
	    				</div>

	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
</div>

