
<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-21">
  <div class="container hihi"> 
  	<div class="col-md-8 col-md-offset-2">
  		<div class="box_style_general">
  			<div class="form_title">
                <h3>
                	<strong>1 </strong>Your Details</h3>
                        <p>
                            Mussum ipsum cacilds, vidis litro abertis.
                        </p>
           	</div>
           	<div class="titleFormInx">
           		<div class="step">
           		<div class="row">
           			<div class="col-md-6 col-sm-6">
           				<div class="form-group">
                                <label>First name</label><br>
                                    <span>
                                        <input type="text" class="form-control" id="firstname" name="firstname">
                                    </span>
                        </div>
                         <div class="form-group">
                                <label>Email</label><br>
                                    <input type="text" class="form-control" id="firstname" name="firstname">
                            </div>
           			</div>
           			<div class="col-md-6">
           				<div class="form-group">
                                <label>Last name</label><br>
                                    <span>
                                        <input type="text" class="form-control" id="firstname" name="firstname">

                                    </span>
                            </div>
                            <div class="form-group">
                                <label>TelePhone</label><br>
                                    <span><input type="text" class="form-control" id="firstname" name="firstname"></span>
                            </div>
           			</div>
           		</div>
           		</div>
           		<hr>
           		<div class="form_title">
           			<h3><strong>2 </strong>Choose a plan</h3>
           			<p>
                            Mussum ipsum cacilds, vidis litro abertis.
                        </p>
           		</div>
           		<div class="step">
                        <div class="styled-select-2">
                            <select class="form-control" >

                            	<option value="">Select</option>
                                <option value="6 Months pla">6 Months plan $39</option>
                                <option value="3 Months plan">3 Months plan $15</option>
                                <option value="1 Month plan">1 Month plan $10</option>
                            </select>
                            
                        </div>
                    </div>
                    <hr>
                <div class="form_title">
           			<h3><strong>3 </strong>Payment info</h3>
           			<p>
                            Mussum ipsum cacilds, vidis litro abertis.
                        </p>
           		</div>
           		<div class="step">
                      <div class="styled-select-2">
                            <select class="form-control" name="" id="">
                            	<option value="">Select</option>
                                <option value="credit_card">Credit card</option>
                                <option value="paypal">Paypal</option>
                                <option value="cash">Cash</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                <div class="form_title">
                        <h3><strong>4 </strong>Security question</h3>
                        <p>
                            Mussum ipsum cacilds, vidis litro abertis.
                        </p>
                    </div>
                    <div class="step add_bottom_30">
                    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                           <label>Are you human? 3 + 1 =</label>
                           <input type="text" id="verify_plan" name="verify_plan" class="form-control" >
                      </div>
                      </div>
                      </div>
                      <div id="message-subscribe"></div>
                    </div>
           	</div>
  		</div>
  		<p class="text-center">
                   <input type="submit" value="Subscribe plan" class="add_bottom">
                </p>
  		
  	</div>
    
  </div>
</div>
