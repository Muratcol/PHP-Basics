<?php
    //This is trick of load all classes automatically when you call them.

    spl_autoload_register('myAutoLoader');
    function myAutoLoader($className){
      
        include 'classes/' . str_replace('\\', "/", $className) . '.class.php';
    }


?>