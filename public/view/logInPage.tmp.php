<?php
    echo render("startLogInPage", ['message' => $message]);
    if ($logMenu == true){
        echo render('loginArea');
    }
    echo render("endLogInPage");

