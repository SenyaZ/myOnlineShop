<?php

    class View
    {


        public function render($template, $parrams = [], $layout)
        {
            if(!empty($parrams)){
                extract($parrams);
            }
            if(!empty($layout)){
                include 'app/views/common/' . $layout . '.php';
            }

            if ( file_exists( __DIR__ . "/../../app/views/" .$template .".tmp.php")) {
                ob_start();
                include __DIR__ . "/../../app/views/" .$template .".tmp.php";
                return ob_get_clean();
            }
        }

        public function includeFile($file){
            include 'app/views/' . $file . '.php';
        }

        public function rendLogIn($message, $logMenu){
            echo $this->render("startLogInPage", ['message' => $message], null);
            if ($logMenu == true){
                echo $this->render('loginArea', null, null);
            }
            echo $this->render("endLogInPage", null, null);
        }


    }
