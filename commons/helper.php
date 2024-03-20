<?php  
if(!function_exists('require_file') ){
    function require_file($pathFolder){
        $files = scandir($pathFolder);
        debug($files);

    }
}
if(!function_exists('debug') ){
    function debug($data){
        echo "<pre>";
        print_r($data);
        die;

    }
}
?>