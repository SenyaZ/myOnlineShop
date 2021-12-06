<?php


    //myOnlineShop/product/
    //myOnlineShop/product/about?id=
    //myOnlineShop/basket
    //myOnlineShop/login
    //myOnlineShop
    class Route
    {

        static function buildRoute()
        {
            $controllerName = 'Main';
            $actionName = 'index';
            $modelName = '';

            $route = explode('/', $_SERVER['REQUEST_URI']);


            if (!empty($route[1]) )
            {
                $controllerName =  ucfirst($route[1]);
            }

            if (!empty($route[2]) )
            {
                $actionName = $route[2];

            }

            $modelName = 'Model'.ucfirst($controllerName);



            $modelFile = $modelName.'.php';
            $modelPath = "app/models/".$modelFile;
            if(file_exists($modelPath))
            {
                echo "111";
                include "application/models/".$modelPath;
            }


            $controllerName = $controllerName . 'Controller';
            $actionName = 'action'.ucfirst($actionName);


//            require $newPath = $_SERVER['DOCUMENT_ROOT'] . $controllerName . ".php";
            $controllerFile = $controllerName.'.php';
            $controllerPath =   $_SERVER['DOCUMENT_ROOT'] . "/app/controllers/".$controllerFile;


            if(file_exists($controllerPath))
            {
                require $controllerPath;
            }


            $controller = new $controllerName;
            $action = $actionName;
            if(method_exists($controller, $action))
            {
                $controller->$action();
            }

        }

    }