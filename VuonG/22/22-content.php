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
                   <i class="fa fa-refresh fa-spin"></i>
                     <span class="i-name">icon-spin3</span>
                     <span class="i-code">0xe800</span>
                  </div>
                  <div title="Code: 0xef87" class="the-icons col-md-3 col-sm-3">
                    <i class="fa fa-youtube-square"></i>
                     <span class="i-name">icon-youtube-4</span>
                     <span class="i-code">0xef87</span>
                  </div>
                  <div title="Code: 0xe802" class="the-icons col-md-3 col-sm-3">
                    <!--  <i class="k-icon my-custom-icon-class"></i> -->
                     <i class="fa fa-spinner fa-pulse"></i>
                     <span class="i-name">icon-spin5</span>
                     <span class="i-code">0xe802</span>
                  </div>
                  <div title="Code: 0xe803" class="the-icons col-md-3 col-sm-3">
                           <i class="fa fa-circle-o-notch fa-pulse"></i>
                    <!--  <i class="icon-spin6 animate-spin"></i> -->
                     <span class="i-name">icon-spin6</span>
                     <span class="i-code">0xe803</span>
                  </div>
               </div>
               <div class="row">
                        <div title="Code: 0xe804" class="the-icons col-md-3 col-sm-3"><i class="fa fa-glass"></i> <span class="i-name">icon-glass</span><span class="i-code">0xe804</span></div>
                        <div title="Code: 0xe805" class="the-icons col-md-3 col-sm-3"><i class="fa fa-music"></i> <span class="i-name">icon-music</span><span class="i-code">0xe805</span></div>
                        <div title="Code: 0xe806" class="the-icons col-md-3 col-sm-3"><i class="fa fa-search"></i> <span class="i-name">icon-search</span><span class="i-code">0xe806</span></div>
                        <div title="Code: 0xe807" class="the-icons col-md-3 col-sm-3"><i class="fa fa-envelope-o"></i> <span class="i-name">icon-mail</span><span class="i-code">0xe807</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe808" class="the-icons col-md-3 col-sm-3"><i class="fa fa-envelope"></i> <span class="i-name">icon-mail-alt</span><span class="i-code">0xe808</span></div>
                        <div title="Code: 0xe809" class="the-icons col-md-3 col-sm-3"><i class="fa fa-heart"></i> <span class="i-name">icon-heart</span><span class="i-code">0xe809</span></div>
                        <div title="Code: 0xe80a" class="the-icons col-md-3 col-sm-3"><i class="fa fa-heart-o"></i> <span class="i-name">icon-heart-empty</span><span class="i-code">0xe80a</span></div>
                        <div title="Code: 0xe80b" class="the-icons col-md-3 col-sm-3"><i class="fa fa-star"></i> <span class="i-name">icon-star</span><span class="i-code">0xe80b</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe80c" class="the-icons col-md-3 col-sm-3"><i class="fa fa-star-o"></i> <span class="i-name">icon-star-empty</span><span class="i-code">0xe80c</span></div>
                        <div title="Code: 0xe80d" class="the-icons col-md-3 col-sm-3"><i class="fa fa-star-half"></i> <span class="i-name">icon-star-half</span><span class="i-code">0xe80d</span></div>
                        <div title="Code: 0xe80e" class="the-icons col-md-3 col-sm-3"><i class="fa fa-star-half-o"></i> <span class="i-name">icon-star-half-alt</span><span class="i-code">0xe80e</span></div>
                        <div title="Code: 0xe80f" class="the-icons col-md-3 col-sm-3"><i class="fa fa-user"></i> <span class="i-name">icon-user</span><span class="i-code">0xe80f</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe827" class="the-icons col-md-3 col-sm-3"><i class="fa fa-users"></i> <span class="i-name">icon-users</span><span class="i-code">0xe827</span></div>
                        <div title="Code: 0xe810" class="the-icons col-md-3 col-sm-3"><i class="fa fa-male"></i> <span class="i-name">icon-male</span><span class="i-code">0xe810</span></div>
                        <div title="Code: 0xe811" class="the-icons col-md-3 col-sm-3"><i class="fa fa-female"></i> <span class="i-name">icon-female</span><span class="i-code">0xe811</span></div>
                        <div title="Code: 0xe812" class="the-icons col-md-3 col-sm-3"><i class="fa fa-file-video-o"></i> <span class="i-name">icon-video</span><span class="i-code">0xe812</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe813" class="the-icons col-md-3 col-sm-3"><i class="fa fa-video-camera"></i> <span class="i-name">icon-videocam</span><span class="i-code">0xe813</span></div>
                        <div title="Code: 0xe814" class="the-icons col-md-3 col-sm-3"><i class="fa fa-picture-o"></i> <span class="i-name">icon-picture</span><span class="i-code">0xe814</span></div>
                        <div title="Code: 0xe815" class="the-icons col-md-3 col-sm-3"><i class="fa fa-camera"></i> <span class="i-name">icon-camera</span><span class="i-code">0xe815</span></div>
                        <div title="Code: 0xe816" class="the-icons col-md-3 col-sm-3"><i class="fa fa-camera-retro"></i> <span class="i-name">icon-camera-alt</span><span class="i-code">0xe816</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe817" class="the-icons col-md-3 col-sm-3"><i class="fa fa-th-large"></i> <span class="i-name">icon-th-large</span><span class="i-code">0xe817</span></div>
                        <div title="Code: 0xe818" class="the-icons col-md-3 col-sm-3"><i class="fa fa-th"></i> <span class="i-name">icon-th</span><span class="i-code">0xe818</span></div>
                        <div title="Code: 0xe819" class="the-icons col-md-3 col-sm-3"><i class="fa fa-th-list"></i> <span class="i-name">icon-th-list</span><span class="i-code">0xe819</span></div>
                        <div title="Code: 0xe81a" class="the-icons col-md-3 col-sm-3"><i class="fa fa-check"></i> <span class="i-name">icon-ok</span><span class="i-code">0xe81a</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe81b" class="the-icons col-md-3 col-sm-3"><i class="fa fa-check-circle"></i> <span class="i-name">icon-ok-circled</span><span class="i-code">0xe81b</span></div>
                        <div title="Code: 0xe81c" class="the-icons col-md-3 col-sm-3"><i class="fa fa-check-circle-o"></i> <span class="i-name">icon-ok-circled2</span><span class="i-code">0xe81c</span></div>
                        <div title="Code: 0xe81d" class="the-icons col-md-3 col-sm-3"><i class="fa fa-check-square"></i> <span class="i-name">icon-ok-squared</span><span class="i-code">0xe81d</span></div>
                        <div title="Code: 0xe81e" class="the-icons col-md-3 col-sm-3"><i class="fa fa-times"></i> <span class="i-name">icon-cancel</span><span class="i-code">0xe81e</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe81f" class="the-icons col-md-3 col-sm-3"><i class="fa fa-times-circle"></i> <span class="i-name">icon-cancel-circled</span><span class="i-code">0xe81f</span></div>
                        <div title="Code: 0xe820" class="the-icons col-md-3 col-sm-3"><i class="fa fa-times-circle-o"></i> <span class="i-name">icon-cancel-circled2</span><span class="i-code">0xe820</span></div>
                        <div title="Code: 0xe821" class="the-icons col-md-3 col-sm-3"><i class="fa fa-plus"></i> <span class="i-name">icon-plus</span><span class="i-code">0xe821</span></div>
                        <div title="Code: 0xe822" class="the-icons col-md-3 col-sm-3"><i class="fa fa-plus-circle"></i> <span class="i-name">icon-plus-circled</span><span class="i-code">0xe822</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe823" class="the-icons col-md-3 col-sm-3"><i class="fa fa-plus-square"></i> <span class="i-name">icon-plus-squared</span><span class="i-code">0xe823</span></div>
                        <div title="Code: 0xe824" class="the-icons col-md-3 col-sm-3"><i class="fa fa-plus-square-o"></i> <span class="i-name">icon-plus-squared-small</span><span class="i-code">0xe824</span></div>
                        <div title="Code: 0xe825" class="the-icons col-md-3 col-sm-3"><i class="fa fa-minus"></i> <span class="i-name">icon-minus</span><span class="i-code">0xe825</span></div>
                        <div title="Code: 0xe826" class="the-icons col-md-3 col-sm-3"><i class="fa fa-minus-circle"></i> <span class="i-name">icon-minus-circled</span><span class="i-code">0xe826</span></div>
               </div>
                      <div class="row">
                        <div title="Code: 0xe828" class="the-icons col-md-3 col-sm-3"><i class="fa fa-minus-square"></i> <span class="i-name">icon-minus-squared</span><span class="i-code">0xe828</span></div>
                        <div title="Code: 0xe829" class="the-icons col-md-3 col-sm-3"><i class="fa fa-minus-square-o"></i> <span class="i-name">icon-minus-squared-alt</span><span class="i-code">0xe829</span></div>
                        <div title="Code: 0xe82a" class="the-icons col-md-3 col-sm-3"><i class="fa fa-minus-square-o"></i> <span class="i-name">icon-minus-squared-small</span><span class="i-code">0xe82a</span></div>
                        <div title="Code: 0xe82b" class="the-icons col-md-3 col-sm-3"><i class="fa fa-question"></i> <span class="i-name">icon-help</span><span class="i-code">0xe82b</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe82c" class="the-icons col-md-3 col-sm-3"><i class="fa fa-question-circle"></i> <span class="i-name">icon-help-circled</span><span class="i-code">0xe82c</span></div>
                        <div title="Code: 0xe82d" class="the-icons col-md-3 col-sm-3"><i class="fa fa-info-circle"></i> <span class="i-name">icon-info-circled</span><span class="i-code">0xe82d</span></div>
                        <div title="Code: 0xe82e" class="the-icons col-md-3 col-sm-3"><i class="fa fa-info"></i> <span class="i-name">icon-info</span><span class="i-code">0xe82e</span></div>
                        <div title="Code: 0xe82f" class="the-icons col-md-3 col-sm-3"><i class="fa fa-home"></i> <span class="i-name">icon-home</span><span class="i-code">0xe82f</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe830" class="the-icons col-md-3 col-sm-3"><i class="fa fa-link"></i> <span class="i-name">icon-link</span><span class="i-code">0xe830</span></div>
                        <div title="Code: 0xe831" class="the-icons col-md-3 col-sm-3"><i class="fa fa-unlink"></i> <span class="i-name">icon-unlink</span><span class="i-code">0xe831</span></div>
                        <div title="Code: 0xe832" class="the-icons col-md-3 col-sm-3"><i class="fa fa-external-link"></i> <span class="i-name">icon-link-ext</span><span class="i-code">0xe832</span></div>
                        <div title="Code: 0xe833" class="the-icons col-md-3 col-sm-3"><i class="fa fa-external-link-square"></i> <span class="i-name">icon-link-ext-alt</span><span class="i-code">0xe833</span></div>
               </div>
               <div class="row">
                        <div title="Code: 0xe834" class="the-icons col-md-3 col-sm-3"><i class="fa fa-paperclip"></i> <span class="i-name">icon-attach</span><span class="i-code">0xe834</span></div>
                        <div title="Code: 0xe835" class="the-icons col-md-3 col-sm-3"><i class="fa fa-lock"></i> <span class="i-name">icon-lock</span><span class="i-code">0xe835</span></div>
                        <div title="Code: 0xe836" class="the-icons col-md-3 col-sm-3"><i class="fa fa-unlock"></i> <span class="i-name">icon-lock-open</span><span class="i-code">0xe836</span></div>
                        <div title="Code: 0xe837" class="the-icons col-md-3 col-sm-3"><i class="fa fa-unlock-alt"></i> <span class="i-name">icon-lock-open-alt</span><span class="i-code">0xe837</span></div>
               </div>


            </div>
         </div>
      </div>
   </div>
</div>