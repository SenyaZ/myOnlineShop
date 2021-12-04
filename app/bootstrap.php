<?php

    require_once "core/Model.php";
    require_once "core/Controller.php";
    require_once "core/View.php";
    require_once "core/Route.php";

    spl_autoload_register(function ($class_name) {
        require __DIR__ . "/../src/{$class_name}.php";
    });

    Route::buildRoute(); // запускаем маршрутизатор