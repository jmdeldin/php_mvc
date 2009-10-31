<?php
/**
 * Controller for the "Foo" section (?route=foo)
 */
class FooController extends Controller
{
    protected $model;
    protected $view;

    public function __construct()
    {
        $this->model = new FooModel();
        $this->view = new View('foo');
    }

    public function index()
    {
        $model = new FooModel();
        $view = new View('foo');
        $view->title = __CLASS__;
        $view->content = __METHOD__;
        $view->render();
    }

    public function bar($args='')
    {
        if ($args)
            $this->view->arr = $this->model->getResults($args);
        $this->view->title = __CLASS__ . '->bar()';
        $this->view->content = $this->model->getRand();
        $this->view->render();
    }
}

