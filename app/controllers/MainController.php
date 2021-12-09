<?php


class MainController extends Controller
{
    public function actionIndex()
    {

        echo $this->view->render("main", ['linkBasket' => "", 'linkLogIn' => "",'linkMainPage' => "disabled",'linkBoots' => ""], "header");
        echo $this->view->includeFile("common/footer");

    }
}
