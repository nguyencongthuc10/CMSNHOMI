<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-19">
    <div class="container audio">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="general">
                    <img src="images/audio_1.jpg" alt="audio_1" width="900" height="300" class="img-responsive">
                    <div class="audio">
                        <h3>General info an history</h3>
                        <p>Mea primis sapientem aliquando cu, ubique vocibus euripidis eam te, usu ei soluta prodesset
                            conceptam. Ad nostrud appareat recteque usu. Vis id purto omittantur, vim cu ferri insolens
                            deserunt.</p>
                        <audio controls>
                            <source src="images/ChasingCorporate.mp3" type="audio/mpeg">
                        </audio>
                        <a href="#">Dowload MP3</a>
                    </div>
                    <hr>
                    <img src="images/audio_2.jpg" alt="audio_1" width="900" height="300" class="img-responsive">
                    <div class="audio">
                        <h3>General info an history</h3>
                        <p>Mea primis sapientem aliquando cu, ubique vocibus euripidis eam te, usu ei soluta prodesset
                            conceptam. Ad nostrud appareat recteque usu. Vis id purto omittantur, vim cu ferri insolens
                            deserunt.</p>
                        <audio controls>
                            <source src="images/ChasingCorporate.mp3" type="audio/mpeg">
                        </audio>
                        <a href="#">DowloadMP3</a>

                    </div>
                    <hr>
                    <img src="images/audio_3.jpg" alt="audio_1" width="900" height="300" class="img-responsive">
                    <div class="audio">
                        <h3>General info an history</h3>
                        <p>Mea primis sapientem aliquando cu, ubique vocibus euripidis eam te, usu ei soluta prodesset
                            conceptam. Ad nostrud appareat recteque usu. Vis id purto omittantur, vim cu ferri insolens
                            deserunt.</p>
                        <audio controls autoplay>
                            <source src="images/ChasingCorporate.mp3" type="audio/mpeg">
                        </audio>
                        <a href="#">Dowload MP3</a>
                    </div>
                </div>
            </div>
        </div>