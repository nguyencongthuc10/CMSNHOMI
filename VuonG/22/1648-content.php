<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="box_style_general" style="padding-bottom: 20px">
            <div class="icons">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <h4>Use as reference</h4>
                  </div>
                  <div class="col-md-6 col-sm-6 text-right">
                     <label class="switch">
                        <input type="checkbox" onclick="toggleCodes(this.checked)"> Show codes
                     </label>
                  </div>
               </div> 
               <hr>  
               <div class="row">
                  <div title="Code: 0xe800" class="the-icons col-md-3 col-sm-3">
                     <i class="icon-spin3 animate-spin"></i>
                     <span class="i-name">icon-spin3</span>
                     <span class="i-code">0xe800</span>
                  </div>
                  <div title="Code: 0xef87" class="the-icons col-md-3 col-sm-3">
                     <i class="icon-youtube-4"></i>
                     <span class="i-name">icon-youtube-4</span>
                     <span class="i-code">0xef87</span>
                  </div>
                  <div title="Code: 0xe802" class="the-icons col-md-3 col-sm-3">
                     <i class="icon-spin5 animate-spin"></i>
                     <span class="i-name">icon-spin5</span>
                     <span class="i-code">0xe802</span>
                  </div>
                  <div title="Code: 0xe803" class="the-icons col-md-3 col-sm-3">
                     <i class="icon-spin6 animate-spin"></i>
                     <span class="i-name">icon-spin6</span>
                     <span class="i-code">0xe803</span>
                  </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
</div>