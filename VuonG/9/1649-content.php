 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
 </section>
 <section class="margin_60" id="subscribe_plan">
     <div class="container">
         <div class="row">
             <div class="col-sm-6">
                 <h3>Get More Features<span>with a Premium plan</span></h3>
                 <ul>
                     <li><i class="icon_headphones"></i><strong>Listen or Download Audio Guides</strong>Directly from
                         your Smartphone/Tablet, Online or Offline.</li>

                     <li><i class="icon_documents_alt"></i><strong>Read or Download Pdf Travel Guides</strong>Directly
                         from your Smartphone/Tablet, Online or Offline.</li>

                     <li><i class="icon_like"></i><strong>Special Prices</strong>For Restaurants, Hotels, Bars and
                         Cocktail bars....</li>

                     <li><i class="icon_lifesaver"></i><strong>Premium H24 Support</strong>Contact us via email, phone
                         or chat!</li>

                 </ul>
             </div>

             <div class="col-md-5 col-md-offset-1">

                 <div id="box_subscribe">

                     <ul>

                         <li><a href="#0" class="active">6 Months<span>39<sup>$</sup></span><em>Save
                                     -40{84dc446bf0c5d5ea928df1a6bd3ca6adf711b738ebf630c28a0bdcc2ee8da092}</em></a>

                         </li>

                         <li><a href="">3 Months<span>15<sup>$</sup></span></a>

                         </li>

                         <li><a href="">1 Months<span>10<sup>$</sup></span></a>

                         </li>

                     </ul>

                     <div class="text-center">

                         <a href="#" class="button_plan">Select plan</a>

                     </div>

                 </div>

                 <div class="shadow">
                 </div>
             </div>
         </div>
     </div>
 </section>