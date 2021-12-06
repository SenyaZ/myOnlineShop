<?php

class MainController extends Controller
{
    public function actionIndex()
    {
        echo $this->view->render("main", ['linkMainPage' => "disabled"], "header");
        echo $this->view->includeFile("common/footer");
    }
}
