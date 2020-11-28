<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">
    <div class="container sidebar">
        <div class="row">
            <div class="col-md-9">
                <div class="one">
                    <a href="#">
                        <img src="images/2.jpg" alt="blog2" class="img-responsive">
                    </a>
            </div>
            <!--/END RIGHT CONTENTS HOME-->
        </div>
    </div>
</div>
