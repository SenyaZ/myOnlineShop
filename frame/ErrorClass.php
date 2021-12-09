<?php

    namespace app;
    class ErrorClass
    {
        public function startError(){
            set_error_handler([$this, 'errorHandler']);
            register_shutdown_function([$this, 'fatalHandler']);
            set_exception_handler([$this, 'exceptionHandler']);
        }

        public function errorHandler($errno, $errorstr, $file, $line){

                $this->writingInLog($errno, $errorstr, $file, $line);
                return true;
        }
        public function fatalHandler(){
            if(!empty($err = error_get_last())){
                ob_get_clean();
                $this->writingInLog($err['type'], $err['message'], $err['file'], $err['line']);
            }
            return true;
        }
        public function exceptionHandler(\Exception $exc){
            $this->writingInLog(get_class($exc), $exc->getMessage(), $exc->getFile(), $exc->getLine());
            return true;
        }
        protected function writingInLog($errno, $errorstr, $file, $line, $status = 500){
            $logs = "HTTP/1.1 {$status}" . "\n" . $errno . "\n" . $errorstr . "\n" . $file . "\n" . $line . "\n" . date(DATE_RFC822) . "\n\n";
               file_put_contents(__DIR__ . "/../logs/logs.txt", $logs, FILE_APPEND);

        }
    }