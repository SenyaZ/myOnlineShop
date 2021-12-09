<?php

class BasketController extends Controller
{
    public function actionIndex()
    {
        echo $this->view->render("basket", ['linkBasket' => "disabled", 'linkLogIn' => "",'linkMainPage' => "",'linkBoots' => ""], "header");
        echo $this->view->includeFile("common/footer");
    }
}
