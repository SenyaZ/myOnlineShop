<?php

    class ControllerLogin extends Controller
    {
        function action_index()
        {

            echo $this->view->render(null, ['linkLogIn' => "disabled"], "header");
            session_start();

            $auth = new AuthClass();

            $logMenu = true;

            if($auth->isHave("isAuth") && !isset($_POST['out'])){
                $message = "You are logged in";
                $logMenu = false;
                echo $this->view->rendLogIn($message, $logMenu);
                //echo $this->view->render('logInPage', ["message" => $message], null);
            }
            else{
                if (!empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['login'])) {
                    if($auth->checkValid($_POST['username'], $_POST['password'])){
                        $_SESSION['isAuth'] = true;
                        $_SESSION['login'] = $_POST['username'];
                        $message = "Correct data, you are logged in";
                        $logMenu = false;
                        echo $this->view->rendLogIn($message, $logMenu);
                        //echo $this->view->render('logInPage', [ "message" => $message], null);

                    }
                    else{
                        $message = "Data is not correct";
                        $logMenu = true;
                        echo $this->view->rendLogIn($message, $logMenu);
                       // echo $this->view->render('logInPage', [ "message" => $message], null);
                    }
                }
                else{
                    echo $this->view->rendLogIn($message, $logMenu);

                }


            }

            if (isset($_POST['out'])){
                $auth->destroySessionAll();
            }

            echo $this->view->includeFile( "common/footer");
        }



    }