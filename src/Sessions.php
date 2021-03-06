<?php

    interface SessionsInterface{
        public function isHave($name);
        public function destroySessionAll();
        public function destroy($name);
        public function writeSession($name, $data);
        }

    class Sessions implements SessionsInterface
    {
        public function isHave($name){
            if(isset($_SESSION[$name])){
                return $_SESSION[$name];
            }
        }
        public function destroySessionAll(){
            $_SESSION = [];
            session_destroy();
        }
        public function destroy($name){
            unset($_SESSION[$name]);
        }
        public function writeSession($name, $data){
            $_SESSION[$name] = $data;
        }

    }