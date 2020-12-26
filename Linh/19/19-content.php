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
                        <span class="audio-offscreen">Audio Player</span>

                        <div id="audio_0" class="audio-container svg audio-audio" tabindex="0" role="application"
                            aria-label="Audio Player" style="width: 290px; height:30px;">
                            <div class="audio-inner">
                                <div class="audio-mediaelement">
                                    <audio id="audio_player1" src="media/ChasingCorporate.mp3" type="audio/mp3"></audio>
                                </div>
                                <div class="audio-players">
                                    <div class="audio-poster audio-player"
                                        style="display:none; width:290px; height:30px;"></div>
                                </div>
                                <div class="audio-controls">
                                    <div class="audio-button audio-playpause-button audio-play">
                                        <button type="button" aria-label="Play" aria-controls="audio_0"
                                            title="Play"></button>
                                    </div>
                                    <div class="audio-time audio-curenttime-container" role="timer" aria-live="off">
                                        <span class="audio-currenttime">00:00</span>

                                    </div>
                                    <div class="audio-time-rail" style="width:114px;">


                                        <span class="audio-time-total audio-time-slider" style="width: 104px;"
                                            aria-label="Time Slider" aria-valuemax="0" aria-valuemax="100"
                                            aria-valuenow="0" aria-valuetext="00:00" role="slider" tabindex="0">
                                            <span class="audio-time-buffering"></span>
                                            <span class="audio-time-current"></span>
                                            <span class="audio-time-handle"></span>
                                            <span class="audio-time-fload"></span>
                                            <span class="audio-time-fload-current">00:00</span>
                                            <span class="audio-time-fload-corner"></span>
                                        </span>
                                    </div>
                                    <div class="audio-time audio-duration-container">
                                        <span class="audio-duration">
                                            03:56
                                        </span>
                                    </div>
                                    <div class="audio-button audio-volime-button adio-mute">
                                        <button type="button" aria-controls="audio_0" title="Mute"
                                            aria-label="Mute"></button>
                                    </div>
                                    <a href="javascript:void(0);" class="audio-horizontal-volume-slider audio-mute"
                                        aria-label="Volume Slider" aria-valuemin="0" aria-valuemax="100"
                                        aria-valuenow="80" aria-valuetext="80%" role="slider" tabindex="0">
                                        <span class="audio-offscreen">Use Up/Down Arrow keys to increase or decrease
                                            volume.</span>
                                        <div class="audio-horizontal-volume-total"></div>
                                        <div class="audio-horizontal-volume-current"></div>
                                    </a>
                                    <div class="mejs-horizontal-volume-current" style="width: 40px;"></div>
                                    <div class="mejs-horizontal-volume-handle" style="left: 27px;"></div></a>
                                </div>
                                <div class="mejs-clear"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="general">
                    <img src="images/audio_2.jpg" alt="audio_1" width="900" height="300" class="img-responsive">
                    <div class="audio">
                        <h3>General info an history</h3>
                        <p>Mea primis sapientem aliquando cu, ubique vocibus euripidis eam te, usu ei soluta prodesset
                            conceptam. Ad nostrud appareat recteque usu. Vis id purto omittantur, vim cu ferri insolens
                            deserunt.</p>
                        <span class="audio-offscreen">Audio Player</span>

                        <div id="audio_0" class="audio-container svg audio-audio" tabindex="0" role="application"
                            aria-label="Audio Player" style="width: 290px; height:30px;">
                            <div class="audio-inner">
                                <div class="audio-mediaelement">
                                    <audio id="audio_player1" src="media/ChasingCorporate.mp3" type="audio/mp3"></audio>
                                </div>
                                <div class="audio-players">
                                    <div class="audio-poster audio-player"
                                        style="display:none; width:290px; height:30px;"></div>
                                </div>
                                <div class="audio-controls">
                                    <div class="audio-button audio-playpause-button audio-play">
                                        <button type="button" aria-label="Play" aria-controls="audio_0"
                                            title="Play"></button>
                                    </div>
                                    <div class="audio-time audio-curenttime-container" role="timer" aria-live="off">
                                        <span class="audio-currenttime">00:00</span>

                                    </div>
                                    <div class="audio-time-rail" style="width:114px;">


                                        <span class="audio-time-total audio-time-slider" style="width: 104px;"
                                            aria-label="Time Slider" aria-valuemax="0" aria-valuemax="100"
                                            aria-valuenow="0" aria-valuetext="00:00" role="slider" tabindex="0">
                                            <span class="audio-time-buffering"></span>
                                            <span class="audio-time-current"></span>
                                            <span class="audio-time-handle"></span>
                                            <span class="audio-time-fload"></span>
                                            <span class="audio-time-fload-current">00:00</span>
                                            <span class="audio-time-fload-corner"></span>
                                        </span>
                                    </div>
                                    <div class="audio-time audio-duration-container">
                                        <span class="audio-duration">
                                            03:56
                                        </span>
                                    </div>
                                    <div class="audio-button audio-volime-button adio-mute">
                                        <button type="button" aria-controls="audio_0" title="Mute"
                                            aria-label="Mute"></button>
                                    </div>
                                    <a href="javascript:void(0);" class="audio-horizontal-volume-slider audio-mute"
                                        aria-label="Volume Slider" aria-valuemin="0" aria-valuemax="100"
                                        aria-valuenow="80" aria-valuetext="80%" role="slider" tabindex="0">
                                        <span class="audio-offscreen">Use Up/Down Arrow keys to increase or decrease
                                            volume.</span>
                                        <div class="audio-horizontal-volume-total"></div>
                                        <div class="audio-horizontal-volume-current"></div>
                                    </a>
                                    <div class="mejs-horizontal-volume-current" style="width: 40px;"></div>
                                    <div class="mejs-horizontal-volume-handle" style="left: 27px;"></div></a>
                                </div>
                                <div class="mejs-clear"></div>
                            </div>
                        </div>
                       
                    </div>
                </div>


                <div class="general">
                    <img src="images/audio_3.jpg" alt="audio_1" width="900" height="300" class="img-responsive">
                    <div class="audio">
                        <h3>General info an history</h3>
                        <p>Mea primis sapientem aliquando cu, ubique vocibus euripidis eam te, usu ei soluta prodesset
                            conceptam. Ad nostrud appareat recteque usu. Vis id purto omittantur, vim cu ferri insolens
                            deserunt.</p>
                        <span class="audio-offscreen">Audio Player</span>

                        <div id="audio_0" class="audio-container svg audio-audio" tabindex="0" role="application"
                            aria-label="Audio Player" style="width: 290px; height:30px;">
                            <div class="audio-inner">
                                <div class="audio-mediaelement">
                                    <audio id="audio_player1" src="media/ChasingCorporate.mp3" type="audio/mp3"></audio>
                                </div>
                                <div class="audio-players">
                                    <div class="audio-poster audio-player"
                                        style="display:none; width:290px; height:30px;"></div>
                                </div>
                                <div class="audio-controls">
                                    <div class="audio-button audio-playpause-button audio-play">
                                        <button type="button" aria-label="Play" aria-controls="audio_0"
                                            title="Play"></button>
                                    </div>
                                    <div class="audio-time audio-curenttime-container" role="timer" aria-live="off">
                                        <span class="audio-currenttime">00:00</span>
                                    </div>
                                    <div class="audio-time-rail" style="width:114px;">
                                        <span class="audio-time-total audio-time-slider" style="width: 104px;"
                                            aria-label="Time Slider" aria-valuemax="0" aria-valuemax="100"
                                            aria-valuenow="0" aria-valuetext="00:00" role="slider" tabindex="0">
                                            <span class="audio-time-buffering"></span>
                                            <span class="audio-time-current"></span>
                                            <span class="audio-time-handle"></span>
                                            <span class="audio-time-fload"></span>
                                            <span class="audio-time-fload-current">00:00</span>
                                            <span class="audio-time-fload-corner"></span>
                                        </span>
                                    </div>
                                    <div class="audio-time audio-duration-container">
                                        <span class="audio-duration">
                                            03:56
                                        </span>
                                    </div>
                                    <div class="audio-button audio-volime-button adio-mute">
                                        <button type="button" aria-controls="audio_0" title="Mute"
                                            aria-label="Mute"></button>
                                    </div>
                                    <a href="javascript:void(0);" class="audio-horizontal-volume-slider audio-mute"
                                        aria-label="Volume Slider" aria-valuemin="0" aria-valuemax="100"
                                        aria-valuenow="80" aria-valuetext="80%" role="slider" tabindex="0">
                                        <span class="audio-offscreen">Use Up/Down Arrow keys to increase or decrease
                                            volume.</span>
                                        <div class="audio-horizontal-volume-total"></div>
                                        <div class="audio-horizontal-volume-current"></div>
                                    </a>
                                    <div class="mejs-horizontal-volume-current" style="width: 40px;"></div>
                                    <div class="mejs-horizontal-volume-handle" style="left: 27px;"></div></a>
                                </div>
                                <div class="mejs-clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>