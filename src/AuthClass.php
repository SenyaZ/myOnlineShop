<?php

    interface authInterface{
        public function checkValid($login, $password);
        public function isAuth();
        public function exit();
    }
    class AuthClass implements authInterface
    {
        private $login = "root";
        private $password = "1234";

        public function checkValid($login, $password){
            if ($this->login == $login && $this->password == $password){
                $_SESSION["isAuth"] = true;
                return true;
            }
            else{
                $_SESSION["isAuth"] = false;
                return false;
            }
        }

        public function isAuth(){
            if(isset($_SESSION['isAuth'])){
                return $_SESSION['isAuth'];
            }
            else{
                return false;
            }
        }
        public function exit() {
            $_SESSION = [];
            session_destroy();
        }


    }