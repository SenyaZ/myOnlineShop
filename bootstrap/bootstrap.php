<?php
echo __DIR__;
    require_once __DIR__ . "/../frame/core/Model.php";
    require_once __DIR__ . "/../frame/core/Controller.php";
    require_once __DIR__ . "/../frame/core/View.php";
    require_once __DIR__ . "/../frame/core/Route.php";

    spl_autoload_register(function ($class_name) {
        require __DIR__ . "/../frame/{$class_name}.php";
    });

    Route::buildRoute();