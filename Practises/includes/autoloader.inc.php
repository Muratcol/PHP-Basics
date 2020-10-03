<?php
    //This is trick of load all classes automatically when you call them.

    // Vers01 simpler way to auto-load classes to project
    spl_autoload_register('myAutoLoader');
    function myAutoLoader($className){
      
        include 'classes/' . str_replace('\\', "/", $className) . '.class.php';
    }


    //vers02 advanced way to auto-load classes to project
    spl_autoload_register('myAutoLoader2');
    function myAutoLoader2($className){
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if(strpos($url, 'includes') !== false){
            $path = '../classes/';
        }
        else{
            $path = './classes/';
        }
        $extension = '.class.php';
        require_once $path.$className.$extension;
    }
?>