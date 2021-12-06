<?php

class BasketController extends Controller
{
    public function actionIndex()
    {
        echo $this->view->render("basket", ['linkBasket' => "disabled"], "header");
        echo $this->view->includeFile("common/footer");
    }
}
