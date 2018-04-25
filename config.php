<?php
spl_autoload_register(function ($class_name){
$filename ="class". DIRECTORY_SEPARATOR . $class_name . " .php";
    if (file_exists($filename)){
    require_once ($filename);
    }
});





// spl_autoload_register = função anonima que costuma ser usada pra registrar os eventos chamados. Um bom exemplo de uso seria para carregar uma classe de outro arquivo somente quando necessário. 