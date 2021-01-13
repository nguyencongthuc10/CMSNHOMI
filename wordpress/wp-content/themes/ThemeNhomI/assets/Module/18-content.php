
<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-18">
  <div class="container"> 
    <div class="countdow">
    	
    	<div class="col-md-12">
    		<div id="logo">
    			<img src="https://shtheme.com/demosd/travelguidewp/wp-content/themes/travelguide/img/logo.png" width="170" height="30" alt="" data-retina="true">
    		</div>
            <h1>We will be Back soon!</h1>
            <h2>Meanwhile, you can make leave your email. We will advice when we will be online!</h2>
        </div>
        <div id="countdown_wp">
                    <div class="container_count"><div id="days">-1017</div>days</div>
                    <div class="container_count"><div id="hours">00</div>hours</div>
                    <div class="container_count"><div id="minutes">00</div>minutes</div>
                    <div class="container_count last"><div id="seconds">00</div>seconds</div>
        </div>
    </div>
   <div class="row chanlamae">
        <div class="col-md-12">
            <div id="footerXbanner18">
                <form method="post" id="newsletter">
                    <div class="row">
                       	<div class="col-md-9">
                            <input name="email_newsletter" id="email_newsletter" type="email" placeholder="Your Email" class="form-control">
                        </div>
                        <div class="col-md-3 ">
                            <button type="submit" class="btn-check" id="submit-newsletter">Subscribe</button>
                        </div>
                    </div>
                        <div id="message-newsletter"></div>
                </form>                         
            </div>
        </div>  
    </div>
    <div class="fotter">
    	<ul>
    		<li>
    			<a href=""><i class="fa fa-facebook"> </i></a>
    		</li>
    		<li>
    			<a href=""><i class="fa fa-twitter"> </i></a>
    		</li>
    		<li>
    			<a href=""><i class="fa fa-google"> </i></a>
    		</li>
    		<li>
    			<a href=""><i class="fa fa-instagram"> </i></a>
    		</li>
    		<li>
    			<a href=""><i class="fa fa-pinterest"> </i></a>

    		</li>
    		<p>© travelguide 2017</p>
    	</ul>

    </div>
  </div>
</div>
