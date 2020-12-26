
<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-17">
  <div class="container"> 
    <div class="row">
    	<div class="col-md-8">
    		<div class="boxUScontact">
    			<div class="contacusname">
                    <div class="indent_title_in" style="    position: relative;
    padding-left: 80px;
    margin-bottom: 20px;">
    				<i class="icon_pencil-edit"></i>
    				<h3>Contact us</h3>
    				<p>Mussum ipsum cacilds, vidis litro abertis.</p>
                    </div>
    			</div>
    			<form action="" method="post" style="padding-left: 80px;">
    				<div class="row">
    					<div class="col-md-6 ">
    						<div class="form-group">
                                <label>First name</label><br>
                                    <span>
                                        <input type="text"  name="your-name" value="" size="30" placeholder="First name">
                                    </span>
                            </div>
                            <div class="form-group">
                                <label>Email</label><br>
                                    <span ><input type="email" name="your-email" value="" size="30" placeholder="Enter Email"></span>
                            </div>
    					</div>
    					<div class="col-md-6 ">
    						<div class="form-group">
                                <label>Last name</label><br>
                                    <span>
                                        <input type="text" name="your-name" value="" size="33" placeholder="Last name">
                                    </span>
                            </div>
                            <div class="form-group">
                                <label>Phone number</label><br>
                                    <span><input type="email" name="your-email" value="" size="33" placeholder="Phone number"></span>
                            </div>
    					</div>
    				</div>
    				<div class="row" >
    					<div class="col-md-12 ">
    						<div class="form-group">
                                <label>Your message</label><br>
                                    <span>
                                    	<textarea name="your-message" cols="40" rows="5" class="form-control" placeholder="Your message"></textarea>
                                    </span>
                            </div>
    					</div>
    				</div>
    				<div class="row" style=" padding-bottom: 25px;">
    					<div class="col-md-12 "> 
    						<div class="form-group">
                                        <label>Are you human? </label><br>
                                        <span ><span >3 + 1 =</span>&nbsp;
                                        <input type="text" name="" size="40" class="form-control ">
                                        <input type="hidden"></span>
                                    </div>
    					</div>
    					<input type="submit" value="Submit" class="add_bottom">
    				</div>
    			</form>
    			
    		</div>
    	</div>
    	<div class="col-md-4">
    		<h4>Contacts info</h4>
    		<p>11 Fifth Ave - New York, US
    			<br>
				+ 61 (2) 8093 3400 / + 61 (2) 8093 3402
				<br>
				Site:info@domain.com
        	</p>
        	<h5>Get directions</h5>
        	<form action="" method="post">
        		<div class="form-group">

                <input type="text" name="" placeholder="Enter your location" class="form-control">

                <input type="hidden" name="" value="">
                
                 
            </div>
            	 <input type="submit" value="Get directions" class="thucngu">
        	</form>
        	<hr class="styled">
        	<div class="infomationss">
        	<h4>Departmens</h4>
        	<strong>Administration</strong>
        	<p style="font-size: small;">Phone : 0038 23932342 - Site : admin@atena.comn</p>
            <p style="font-size: small;">Monday to Friday 9am - 7pm</p>
        	<strong>General questions</strong>
        	<p style="font-size: small;">Phone : 0038 23932342 - Site : admin@atena.comn</p>
            <p style="font-size: small;">Monday to Friday 9am - 7pm</p>
        	</div>
    	</div>
    </div>
  </div>
</div>
