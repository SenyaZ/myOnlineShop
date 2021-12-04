<?php

    class ControllerBasket extends Controller
    {
//        function __construct()
//        {
//            //$this->model = new ModelBasket();
//            $this->view = new View();
//        }

        function action_index()
        {
//            $data = $this->model->get_data();
            echo $this->view->render("basket", ['linkBasket' => "disabled"], "header");
            echo $this->view->includeFile( "common/footer");
        }
    }