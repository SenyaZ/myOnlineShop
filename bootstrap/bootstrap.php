<?php

    require_once __DIR__ . "/../frame/core/Model.php";
    require_once __DIR__ . "/../frame/core/Controller.php";
    require_once __DIR__ . "/../frame/core/View.php";
    require_once __DIR__ . "/../frame/core/Route.php";

    spl_autoload_register(function ($class_name) {
        if (file_exists(__DIR__ . "/../frame/{$class_name}.php")) {
            require __DIR__ . "/../frame/{$class_name}.php";
        }
        if (file_exists(__DIR__ . "/../app/models/{$class_name}.php")) {
            require __DIR__ . "/../app/models/{$class_name}.php";
        }
    });

    Route::buildRoute();
