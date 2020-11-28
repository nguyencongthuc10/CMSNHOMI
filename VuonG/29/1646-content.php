<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-245">
   <div class="container">
      <div class="box">
         <div class="box-trans">
            <div class="row">
               <div class="col-md-2">
                  <i class="far fa-rv"></i>
               </div>
               <div class="col-md-10">
                
            <h3>Trains</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Modi corporis veniam et nihil debitis, ratione culpa, eligendi, dolores quisquam vel fuga adipisci perferendis, iure repellendus. Porro quo pariatur qui dolorem.</p>
            <p>
               <strong>Italo Train</strong>
               :
               <a href="http://www.italotreno.it" target="_blank">www.italotreno.it</a>
            </p>
               </div>
            </div>   
         </div>
         <hr>
         
       <div class="box-trans">
            <div class="row">
               <div class="col-md-2">
                  <i class="far fa-rv"></i>
               </div>
               <div class="col-md-10">
               
            <h3>Trains</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Modi corporis veniam et nihil debitis, ratione culpa, eligendi, dolores quisquam vel fuga adipisci perferendis, iure repellendus. Porro quo pariatur qui dolorem.</p>
            <p>
               <strong>ATAF</strong>
               :
               <a href="http://www.ataf.net" target="_blank">www.ataf.net</a>
            </p>
               </div>
            </div>
           
         </div>
         <hr>
       
        <div class="box-trans">
            <div class="row">
               <div class="col-md-2">
                  <i class="far fa-rv"></i>
               </div>
               <div class="col-md-10">
                   
            <h3>Trains</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Modi corporis veniam et nihil debitis, ratione culpa, eligendi, dolores quisquam vel fuga adipisci perferendis, iure repellendus. Porro quo pariatur qui dolorem.</p>
            <p>
               <strong>Taxi Florence</strong>
               :
               <a href="http://www.4242.it" target="_blank">www.4242.it</a>
            </p>
               </div>
            </div>
           
         </div>

         <hr>
        <div class="box-trans">
            <div class="row">
               <div class="col-md-2">
                  <i class="far fa-rv"></i>
               </div>
               <div class="col-md-10">
                 
            <h3>Trains</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Modi corporis veniam et nihil debitis, ratione culpa, eligendi, dolores quisquam vel fuga adipisci perferendis, iure repellendus. Porro quo pariatur qui dolorem.</p>
            <p>
               <strong>GET</strong>
               :
               <a href="http://www.getramvia.it" target="_blank">www.getramvia.it</a>
            </p>
               </div>
            </div>
           
         </div>
      </div>
   </div>
  
</div>