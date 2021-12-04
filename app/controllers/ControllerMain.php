<?php

    class ControllerMain extends Controller
    {


        function action_index()
        {

           echo $this->view->render("main", ['linkMainPage' => "disabled"], "header");
           echo $this->view->includeFile( "common/footer");
        }

    }