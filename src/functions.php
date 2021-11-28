<?php
    /////
    spl_autoload_register(function ($class_name) {
        require __DIR__ . "/../src/{$class_name}.php";
    });
    /////

    function render($template, $parrams = []){

        if(file_exists( __DIR__ . "\..\\templates\\" . $template . ".tmp.php")){
            ob_start();
            extract($parrams);
            require __DIR__ . "\..\\templates\\" . $template . ".tmp.php";
            return ob_get_clean();
        }
    }