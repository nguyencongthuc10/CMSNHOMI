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
    $less->compileFile('less/11.less', 'css/11.css');
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>module 11</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet"  />
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/11.css" rel="stylesheet" type="text/css" />  
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/> 
        <link rel='stylesheet' id='ls-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' /> 

         <?php

        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');

        }
        $less = new lessc;
        $less->compileFile('less/11.less', 'css/11.css');
        ?>
    </head>
    <body>

         <?php  $dir_block.include'11-content.php'; ?>
         <!-- javascrip swiper -->
    </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/switchery.min.js"></script>
     <script>

        let dem = 1;
        let dem1 = 1;
        let dem2 = 1;
        let dem3 = 1;
        let dem4 = 1;
        let dem5 = 1;
        let dem6 = 1;
        let dem7 = 1;
        let dem8 = 1;

        const btnClick = document.querySelector('#switchery-type-11');
        
        const btnClick1 = document.querySelector('#switchery-type-111');
        const btnClick2 = document.querySelector('#switchery-type-112');
        const btnClick3 = document.querySelector('#switchery-type-113');
        const btnClick4 = document.querySelector('#switchery-type-114');
        const btnClick5 = document.querySelector('#switchery-type-115');
        const btnClick6 = document.querySelector('#switchery-type-116');
        const btnClick7 = document.querySelector('#switchery-type-117');
        const btnClick8 = document.querySelector('#switchery-type-118');

        btnClick.addEventListener('click', function () {
            click();
        });
        btnClick1.addEventListener('click', function () {
            click1();
        });
        btnClick2.addEventListener('click', function () {
            click2();
        });
        btnClick3.addEventListener('click', function () {
            click3();
        });
        btnClick4.addEventListener('click', function () {
            click4();
        });
        btnClick5.addEventListener('click', function () {
            click5();
        });
        btnClick6.addEventListener('click', function () {
            click6();
        });
        btnClick7.addEventListener('click', function () {
            click7();
        });
        btnClick8.addEventListener('click', function () {
            click8();
        });
            
          function click() {
                if (dem ==1) {
                    document.getElementById("small").style.left = '13px';
                    document.getElementById("switchery-type-11").style.background = 'rgb(172, 211, 115)'; 
                    dem++;
                }
                else{
                    dem = 1;
                    document.getElementById("small").style.left = '0px';
                    document.getElementById("switchery-type-11").style.background = 'white'; 
                }
               
            };
 
        
        function click1() {
                if (dem1 ==1) {
                    document.getElementById("small1").style.left = '13px';
                    document.getElementById("switchery-type-111").style.background = 'rgb(172, 211, 115)'; 
                    dem1++;
                }
                else{
                    dem1 = 1;
                    document.getElementById("small1").style.left = '0px';
                    document.getElementById("switchery-type-111").style.background = 'white'; 
                }
               
            };
 
 function click2() {
                if (dem2 ==1) {
                    document.getElementById("small2").style.left = '13px';
                    document.getElementById("switchery-type-112").style.background = 'rgb(172, 211, 115)'; 
                    dem2++;
                }
                else{
                    dem2 = 1;
                    document.getElementById("small2").style.left = '0px';
                    document.getElementById("switchery-type-112").style.background = 'white'; 
                }
               
            };
 
 function click3() {
                if (dem3 ==1) {
                    document.getElementById("small3").style.left = '13px';
                    document.getElementById("switchery-type-113").style.background = 'rgb(172, 211, 115)'; 
                    dem3++;
                }
                else{
                    dem3 = 1;
                    document.getElementById("small3").style.left = '0px';
                    document.getElementById("switchery-type-113").style.background = 'white'; 
                }
               
            };
 
 function click4() {
                if (dem4 ==1) {
                    document.getElementById("small4").style.left = '13px';
                    document.getElementById("switchery-type-114").style.background = 'rgb(172, 211, 115)'; 
                    dem4++;
                }
                else{
                    dem4 = 1;
                    document.getElementById("small4").style.left = '0px';
                    document.getElementById("switchery-type-114").style.background = 'white'; 
                }
               
            };
 
 function click5() {
                if (dem5 ==1) {
                    document.getElementById("small5").style.left = '13px';
                    document.getElementById("switchery-type-115").style.background = 'rgb(172, 211, 115)'; 
                    dem5++;
                }
                else{
                    dem5 = 1;
                    document.getElementById("small5").style.left = '0px';
                    document.getElementById("switchery-type-115").style.background = 'white'; 
                }
               
            };
 
 function click6() {
                if (dem6 ==1) {
                    document.getElementById("small6").style.left = '13px';
                    document.getElementById("switchery-type-116").style.background = 'rgb(172, 211, 115)'; 
                    dem6++;
                }
                else{
                    dem6 = 1;
                    document.getElementById("small6").style.left = '0px';
                    document.getElementById("switchery-type-116").style.background = 'white'; 
                }
               
            };
 
 function click7() {
                if (dem7 ==1) {
                    document.getElementById("small7").style.left = '13px';
                    document.getElementById("switchery-type-117").style.background = 'rgb(172, 211, 115)'; 
                    dem7++;
                }
                else{
                    dem7 = 1;
                    document.getElementById("small7").style.left = '0px';
                    document.getElementById("switchery-type-117").style.background = 'white'; 
                }
               
            };
 
 function click8() {
                if (dem8 ==1) {
                    document.getElementById("small8").style.left = '13px';
                    document.getElementById("switchery-type-118").style.background = 'rgb(172, 211, 115)'; 
                    dem8++;
                }
                else{
                    dem8 = 1;
                    document.getElementById("small8").style.left = '0px';
                    document.getElementById("switchery-type-118").style.background = 'white'; 
                }
               
            };
 
        
    </script>
</html>