<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-7">
        <footer>
        <div class="container">
            <div class="row">
                            <div class="textwidget"><div class="col-md-4 col-sm-12">
                    <h3>About us</h3>
                    <p>Dolorem nusquam molestie ut mei, ut sit dico omnis. Cu quod congue has, at sumo esse viderer mea. Id assum saperet definitiones qui.</p>
                    <p><img src="http://shtheme.com/demosd/travelguidewp/wp-content/uploads/2017/02/logo_2.png" alt="img" class="hidden-xs" width="170" height="30" data-retina="true">
                    </p>
                </div></div>
                                    <div class="textwidget"><div class="col-md-3 col-sm-4">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#0">About us</a>
                        </li>
                        <li><a href="#0">Faq</a>
                        </li>
                        <li><a href="#0">Contacts</a>
                        </li>
                        <li><a href="#0">Login</a>
                        </li>
                        <li><a href="#0">Register</a>
                        </li>
                        <li><a href="#0">Terms and conditions</a>
                        </li>
                    </ul>
                </div></div>
                                    <div class="textwidget"><div class="col-md-3 col-sm-4" id="newsletter">
                    <h3>Newsletter</h3>
                    <p>
                        Join our newsletter to keep be informed about offers and news.
                    </p>
                    <div id="message-newsletter_2">
                    </div>
                    <form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2" type="email" value="" placeholder="Your mail" class="form-control">
                        </div>
                        <p>
                            <input type="submit" value="Subscribe" class="button" id="submit-newsletter_2">
                        </p>
                    </form>
                </div></div>
                                    <div class="textwidget"><div class="col-md-2 col-sm-4">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
                            <option value="English" selected="">English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                </div></div>
                    </div>
            <!-- End row -->
            <hr>
            <div class="row">
                <div class="col-sm-6">
                                            © TravelGuide 2019 - All Rights Reserved                                        </div>
                <!-- <div class="col-sm-6">
                    <div id="social_footer">
                        <ul>
                                                    <li><a href="#"><i class="icon-facebook"></i></a>
                            </li>                                                        <li><a href="#"><i class="icon-twitter"></i></a>
                            </li>                                                        <li><a href="#"><i class="icon-google"></i></a>
                            </li>                                                        <li><a href="#"><i class="icon-instagram"></i></a>
                            </li>                                                        <li><a href="#"><i class="icon-pinterest"></i></a>
                            </li>                        </ul>

                    </div>
                </div> -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </footer>
    </div>