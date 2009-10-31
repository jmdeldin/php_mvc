<?php
/**
 * Controller for the homepage.
 */
class IndexController extends Controller
{
    /**
     * Executed on the homepage (example.com/)
     */
    public function index()
    {
        $model = new IndexModel();
        $view = new View('home'); // use views/home.php

        /*
         * The View class does not define the following properties -- they are
         * dynamically added and available for use within the view ("home" in
         * this case).
         */
        $view->title = "Home";
        $view->content = $model->getAll();

        // display our view
        $view->render();
    }
}

