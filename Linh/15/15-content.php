<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">
    <div class="container blog" style="transform: none;">
        <div class="row">
            <div class="col-md-9">
                <div class="one">
                    <a href="#">
                        <img src="images/1.jpg" alt="blog1" class="img-responsive">
                    </a>
                    <div class="one_info clearfix">
                        <div class="one_left">
                            <ul>
                                <li>
                                    <i class="fa fa-calendar-o"></i>December 20, 2020
                                    <em>
                                        <a href="#" title="admin" rel="author">admin</a>
                                    </em>
                                </li>
                                <li>
                                    <i class="fa fa-inbox"></i>
                                    <a href="#">Category</a>
                                </li>
                                <li>
                                    <i class="fa fa-tags"></i>
                                    <a href="#">Dolor</a>,
                                    <a href="#">Lorem ipsum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="one_right">
                            <i class="fa fa-comment-o"></i>
                            <a href="#">No Commnets</a>
                        </div>
                    </div>
                    <h2>Duis aute irure dolor in reprehenderit</h2>
                    <p>Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius,
                        hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri
                        quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium
                        duo…… Ludus albucius adversarium eam eu. Sit eu...</p>
                    <a href="#" class="button">Read more</a>
                </div>
                <div class="one">
                    <a href="#">
                        <img src="images/2.jpg" alt="blog2" class="img-responsive">
                    </a>
                    <div class="one_info clearfix">
                        <div class="one_left">
                            <ul>
                                <li>
                                    <i class="fa fa-calendar-o"></i>December 20, 2020
                                    <em><a href="#" title="admin" rel="author">admin</a></em>
                                </li>
                                <li>
                                    <i class="fa fa-inbox"></i>
                                    <a href="#">Category</a>
                                </li>
                                <li>
                                    <i class="fa fa-tags"></i>
                                    <a href="#">Dolor</a>,
                                    <a href="#">Lorem ipsum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="one_right">
                            <i class="fa fa-comment-o"></i>
                            <a href="#">No Commnets</a>
                        </div>
                    </div>
                    <h2>Duis aute irure dolor in reprehenderit</h2>
                    <p>Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius,
                        hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri
                        quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium
                        duo…… Ludus albucius adversarium eam eu. Sit eu...</p>
                    <a href="#" class="button">Read more</a>
                </div>
                <div class="one">
                    <a href="#">
                        <img src="images/3.jpg" alt="blog3" class="img-responsive">
                    </a>
                    <div class="one_info clearfix">
                        <div class="one_left">
                            <ul>
                                <li>
                                    <i class="fa fa-calendar-o"></i>December 20, 2020
                                    <em><a href="#" title="admin" rel="author">admin</a></em>
                                </li>
                                <li>
                                    <i class="fa fa-inbox"></i>
                                    <a href="#">Category</a>
                                </li>
                                <li>
                                    <i class="fa fa-tags"></i>
                                    <a href="#">Dolor</a>,
                                    <a href="#">Lorem ipsum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="one_right">
                            <i class="fa fa-comment-o"></i>
                            <a href="#">No Commnets</a>
                        </div>
                    </div>
                    <h2>Duis aute irure dolor in reprehenderit</h2>
                    <p>Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius,
                        hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri
                        quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium
                        duo…… Ludus albucius adversarium eam eu. Sit eu...</p>
                    <a href="#" class="button">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>