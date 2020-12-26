<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="container margin_60">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box_style_general">
          

    <div class="box_transport">

        <i class="icon_set_1_icon-25"></i>

        <h3>Trains</h3>

        <p>Lorem ipsum dolor sit amet, his facer accusam te, blandit mediocrem mei an, eu vim numquam accusamus. Utamur accumsan indoctum ut eum, an pro nominavi inimicus. Mei et mucius commodo moderatius, his in ullum veritus. At fugit cetero patrioque sed. Ex labitur feugiat petentium vis, te sed assueverit vituperatoribus.
        </p>

        <p><strong>Italo Train</strong>: <a href="http://www.italotreno.it" target="_blank">www.italotreno.it</a></p>

    </div>
    <hr>
    <div class="box_transport">
        <i class="icon_set_1_icon-26"></i>
        <h3>Public transport</h3>
        <p>Lorem ipsum dolor sit amet, his facer accusam te, blandit mediocrem mei an, eu vim numquam accusamus. Utamur accumsan indoctum ut eum, an pro nominavi inimicus. Mei et mucius commodo moderatius, his in ullum veritus. At fugit cetero patrioque sed. Ex labitur feugiat petentium vis, te sed assueverit vituperatoribus.
        </p>
        <p><strong>ATAF</strong>: <a href="http://www.ataf.net" target="_blank">www.ataf.net</a></p>
    </div>
    <hr>
    <div class="box_transport">

        <i class="icon_set_1_icon-21"></i>

        <h3>Taxi and cabs</h3>



        <p>Lorem ipsum dolor sit amet, his facer accusam te, blandit mediocrem mei an, eu vim numquam accusamus. Utamur accumsan indoctum ut eum, an pro nominavi inimicus. Mei et mucius commodo moderatius, his in ullum veritus. At fugit cetero patrioque sed. Ex labitur feugiat petentium vis, te sed assueverit vituperatoribus.
        </p>

        <p><strong>Taxi Florence</strong>: <a href="http://www.4242.it" target="_blank">www.4242.it</a> - <strong>Phone</strong>: <a href="tel://0554242">0554242</a></p>

    </div>
    <hr>
    <div class="box_transport">

        <i class="icon_set_1_icon-5"></i>

        <h3>Tram</h3>
        <p>Lorem ipsum dolor sit amet, his facer accusam te, blandit mediocrem mei an, eu vim numquam accusamus. Utamur accumsan indoctum ut eum, an pro nominavi inimicus. Mei et mucius commodo moderatius, his in ullum veritus. At fugit cetero patrioque sed. Ex labitur feugiat petentium vis, te sed assueverit vituperatoribus.
        </p>
        <p><strong>GEST</strong>: <a href="http://www.gestramvia.it" target="_blank">www.gestramvia.it</a></p>

    </div>
    <hr>
</div>
</div>
</div>
</div>
