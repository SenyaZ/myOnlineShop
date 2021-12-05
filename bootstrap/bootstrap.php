<?php
echo __DIR__;
    require_once __DIR__ . "/../app/core/Model.php";
    require_once __DIR__ . "/../app/core/Controller.php";
    require_once __DIR__ . "/../app/core/View.php";
    require_once __DIR__ . "/../app/core/Route.php";

    spl_autoload_register(function ($class_name) {
        require __DIR__ . "/../app/frame/{$class_name}.php";
    });

    Route::buildRoute();