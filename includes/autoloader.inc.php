<?php
    //This is trick of load all classes automatically when you call them.

    spl_autoload_register('myAutoLoader');
    function myAutoLoader($className){
        $path = "classes/";
        $extension = ".class.php";
        $fullpath = $path.$className.$extension;

        //Error Handler
        if (!file_exists($fullPath)){
            return false;
        }

        include_once $fullpath


?>