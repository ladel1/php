<?php 

function autoload_classes($class_name){
    $class_name = str_replace("App","src",$class_name);
    $filename = "$class_name.php";
    if(file_exists($filename)) require_once $filename;
}

spl_autoload_register("autoload_classes");