<?php


    class AuthClass extends Sessions
    {
        private $login = "root";
        private $password = "1234";

        public function checkValid($login, $password){
            if ($this->login == $login && $this->password == $password){
                $this->writeSession('isAuth', true);
                return true;
            }
            else{
                $this->writeSession('isAuth', false);
                return false;
            }
        }
//
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