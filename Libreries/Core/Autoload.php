<?php
spl_autoload_register(function ($class){
     if(file_exists('Libreries/'.'Core/'.$class.".php")){
         require_once ('Libreries/'.'Core/'.$class.".php");
     }});
?>

