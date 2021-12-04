<?php
//    session_start();
//    $linkMainPage = "";
//    $linkBoots = "";
//    $linkBasket = "";
//    $linkLogIn = "disabled";
//    require_once __DIR__ . "/../public/view/common/header.php";
//
//
//    $auth = new AuthClass();
//
//
//    if($auth->isHave("isAuth") && !isset($_POST['out'])){
//        $message = "You are logged in";
//        echo render('logInPage', ["logMenu" => false, "message" => $message]);
//
//    }
//    else{
//        if (!empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['login'])) {
//            if($auth->checkValid($_POST['username'], $_POST['password'])){
//                $_SESSION['isAuth'] = true;
//                $_SESSION['login'] = $_POST['username'];
//                $message = "Correct data, you are logged in";
//                echo render('logInPage', ["logMenu" => false, "message" => $message]);
//
//            }
//            else{
//                $message = "Data is not correct";
//                echo render('logInPage', ["logMenu" => true, "message" => $message]);
//            }
//        }
//        else{
//            echo render('logInPage', ["logMenu" => true]);
//        }
//
//
//    }
//
//    if (isset($_POST['out'])){
//        $auth->destroySessionAll();
//    }
//
//
//
//    require_once __DIR__ . "/../public/view/common/footer.php";
//
//
