<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/28.less', 'css/28.css');
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>module 28</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet"  />
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
         <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link href="css/28.css" rel="stylesheet" type="text/css" />  
          <style>
    html,
    body {
      position: relative;
     
    }

    body {
      background: #eee;
      
    }

    .swiper-container {
      width: 100%;
      height: 400px;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>  
         <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/28.less', 'css/28.css');
        ?>
    </head>
    <body>
         <?php  $dir_block.include'28-content.php'; ?>
          <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
         <!-- javascrip swiper -->
          <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
    </body>
</html>

<!-- Slideshow container -->
                     <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="images/testimonial_1.jpg" alt="" class="img-circle">
                                        </figure>
                                        <h4>Roberta<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                                    </div>
                                </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="images/testimonial_1.jpg" alt="" class="img-circle">
                                        </figure>
                                        <h4>Roberta<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                                    </div>
                                </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="images/testimonial_1.jpg" alt="" class="img-circle">
                                        </figure>
                                        <h4>Roberta<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                                    </div>
                                </div>
                          </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                      </div>