<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1">
	<div class="header">
		<nav class="navbar navbar-expand-sm navbar-dark">
			<!-- Brand -->
			<a class="navbar-brand" href="#">
				<img src="https://shtheme.com/demosd/travelguidewp/wp-content/themes/travelguide/img/logo.png" width="170" height="30" alt="" data-retina="true">
			</a>
			
			<!-- Links -->
			<ul class="navbar-nav">
				<!-- Dropdown -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Home
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Link 1</a>
						<a class="dropdown-item" href="#">Link 2</a>
						<a class="dropdown-item" href="#">Link 3</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Florence Travel Guide
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Link 1</a>
						<a class="dropdown-item" href="#">Link 2</a>
						<a class="dropdown-item" href="#">Link 3</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Pages & elements
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Link 1</a>
						<a class="dropdown-item" href="#">Link 2</a>
						<a class="dropdown-item" href="#">Link 3</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Shop
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Link 1</a>
						<a class="dropdown-item" href="#">Link 2</a>
						<a class="dropdown-item" href="#">Link 3</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Login</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
						<i class="fa fa-search" aria-hidden="true"></i>
					</a>
					<div class="dropdown-menu" style="left: -220px; padding: 5px;">
						<form class="form-inline" action="/action_page.php">
							<input class="form-control mr-sm-2" type="text" placeholder="Search..">
							<button class="btn btn-success" type="submit" style="color: #000; background-color: #fff; border-color: #fff"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					</div>
				</li>
				
			</ul>
			
		</nav>
	</div>
	<section class="header-video" style="width: 1263px; height: 623px;">

		<div id="hero_video">

			<div id="sub_content_in">

				<h1>The most important info<br>
				on your Mobile during a visit</h1>

				<p>

					Museum Guides / Directions / Tips&amp;info
				</p>



			</div>

			<!-- End sub_content -->

		</div>

		<img src="https://shtheme.com/demosd/travelguidewp/wp-content/uploads/2017/02/video_fix.png" alt="" class="header-video--media" data-video-src="https://shtheme.com/demosd/travelguidewp/wp-content/themes/travelguide/video/intro" data-teaser-source="https://shtheme.com/demosd/travelguidewp/wp-content/themes/travelguide/video/intro" data-provider="" data-video-width="1920" data-video-height="960" style="display: none;">

		<video autoplay="true" loop="loop" muted="" id="teaser-video" class="teaser-video"><source src="https://shtheme.com/demosd/travelguidewp/wp-content/themes/travelguide/video/intro.mp4" type="video/mp4"><source src="https://shtheme.com/demosd/travelguidewp/wp-content/themes/travelguide/video/intro.ogv" type="video/ogg"></video></section>
</div>
<script>
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".navbar").css("background-color", "#222222"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".navbar").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });
</script>