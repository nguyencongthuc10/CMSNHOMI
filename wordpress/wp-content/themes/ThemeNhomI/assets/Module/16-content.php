<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-16">
    <div class="container">
       
        <div class="row">
            <div class="col-md-9"> </div>
            <div class="col-md-3" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="theSidebar">
                    <div id="search-2" class="widget_search">
                        <form id="custom-search" action="" method="get">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control input-lg" placeholder="Search" value name="s" id="s">
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="submit">
                                        <i class="icon-search-1"></i>
                                    </button>
                                </span>
                            </div>
                            
                        </form>
                    </div>
                    <hr>
                    <div id="recent-posts-2" class="widget widget_news"><h4>Recent Posts</h4>
                        <ul class="recent_post">
                            <li>
                                <i class="icon-calendar-empty"></i> 21 Feb, 2017
                                <div><a href="https://shtheme.com/demosd/travelguidewp/?p=11">Duis aute irure dolor in reprehenderit</a></div>
                            </li>
                            <li>
                                <i class="icon-calendar-empty"></i> 21 Feb, 2017
                                <div><a href="https://shtheme.com/demosd/travelguidewp/?p=10">Duis aute irure dolor in reprehenderit</a></div>
                            </li>
                            <li>
                                <i class="icon-calendar-empty"></i> 21 Feb, 2017
                                <div><a href="https://shtheme.com/demosd/travelguidewp/?p=9">Duis aute irure dolor in reprehenderit</a></div>
                            </li>
                        </ul>
        
                    </div>
                    <hr>
                    <div id="recent-comments-2" class="widget widget_recent_comments">
                        <h4>Recent Comments</h4>
                            <ul id="recentcomments">
                                <li class="recentcomments">
                                        <span class="comment-author-link">admin</span> on 
                                        <a href="https://shtheme.com/demosd/travelguidewp/?product=product-6#comment-9">Product 6</a>
                                 </li>
                                 <li class="recentcomments">
                                    <span class="comment-author-link">admin</span> on 
                                    <a href="https://shtheme.com/demosd/travelguidewp/?product=product-5#comment-8">Product 5</a>
                                </li>
                                <li class="recentcomments">
                                        <span class="comment-author-link">admin</span> on 
                                        <a href="https://shtheme.com/demosd/travelguidewp/?product=product-4#comment-7">Product 4</a>
                                </li>
                                <li class="recentcomments">
                                        <span class="comment-author-link">admin</span> on 
                                        <a href="https://shtheme.com/demosd/travelguidewp/?product=product-3#comment-6">Product 3</a>
                                </li>
                                <li class="recentcomments">
                                        <span class="comment-author-link">admin</span> on 
                                        <a href="https://shtheme.com/demosd/travelguidewp/?product=product-2#comment-5">Product 2</a>
                                </li>
                            </ul>
                    </div>
                    <hr>
                    <div id="archives-2" class="widget widget_archive"><h4>Archives</h4>        
                        <ul>
                            <li>
                                <a href="https://shtheme.com/demosd/travelguidewp/?m=201702">February 2017</a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div id="categories-2" class="widget widget_categories"><h4>Categories</h4>
                        <ul>
                            <li class="cat-item cat-item-3">
                                <a href="https://shtheme.com/demosd/travelguidewp/?cat=3">Category</a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div id="meta-2" class="widget widget_meta"><h4>Meta</h4>           
                        <ul>
                            <li>
                                <a href="https://shtheme.com/demosd/travelguidewp/wp-login.php">Log in</a>
                            </li>
                            <li>
                                <a href="https://shtheme.com/demosd/travelguidewp/?feed=rss2">Entries 
                                    <abbr title="Really Simple Syndication">RSS</abbr></a>
                            </li>
                            <li>
                                <a href="https://shtheme.com/demosd/travelguidewp/?feed=comments-rss2">Comments 
                                    <abbr title="Really Simple Syndication">RSS</abbr></a>
                            </li>
                            <li>
                                <a href="https://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a>
                            </li>          
                        </ul>
                    </div>
                    <hr>
                    <div id="tag_cloud-2" class="widget widget_tag_cloud"><h4>Tags</h4> 
                        <div class="tagcloud">
                            <ul class="wp-tag-cloud">
                                <li>
                                    <a href="https://shtheme.com/demosd/travelguidewp/?tag=dolor" class="tag-link-7 tag-link-position-1" title="1 topic" style="font-size: 11px;">Dolor</a>
                                </li>
                                <li>
                                    <a href="https://shtheme.com/demosd/travelguidewp/?tag=latin-word" class="tag-link-9 tag-link-position-2" title="1 topic" style="font-size: 11px;">Latin word</a>
                                </li>
                                <li>
                                    <a href="https://shtheme.com/demosd/travelguidewp/?tag=lorem-ipsum" class="tag-link-6 tag-link-position-3" title="1 topic" style="font-size: 11px;">Lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="https://shtheme.com/demosd/travelguidewp/?tag=personal" class="tag-link-5 tag-link-position-4" title="1 topic" style="font-size: 11px;">Personal</a>
                                </li>
                                <li>
                                    <a href="https://shtheme.com/demosd/travelguidewp/?tag=sit-amet" class="tag-link-8 tag-link-position-5" title="1 topic" style="font-size: 11px;">Sit amet</a>
                                </li>
                                <li>
                                    <a href="https://shtheme.com/demosd/travelguidewp/?tag=works" class="tag-link-4 tag-link-position-6" title="1 topic" style="font-size: 11px;">Works</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                </div> 
            </div>
        </div>
    </div>
</div>


