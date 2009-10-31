<?php
/**
 * Routes requests to the appropriate controller's methods.
 */
class Router {
    protected $route;
    protected $controller;
    protected $action;
    protected $args;

    public function __construct()
    {
        // if the route isn't specified, use the index controller
        $this->route = isset($_GET['route']) ?
                       htmlspecialchars($_GET['route']) : 'index';
        $this->route = trim($this->route, '/'); // remove trailing slashes
    }

    /**
     * Instantiates the appropriate controller.
     */
    public function delegate()
    {
        // route => /controller/method/args/args/
        $fragments = explode('/', $this->route);
        $numFrags = count($fragments);

        // 'index' => 'IndexController'
        $controller = ucfirst($fragments[0]) . 'Controller';

        // the default action is 'index()'
        $action = ($numFrags > 1) ? $fragments[1] : 'index';

        // if args are specified, then they'll be from n=2 to n-1
        $args = ($numFrags > 2) ? array_slice($fragments, 2, $numFrags-1) : '';

        // send a 404 error if the controller and/or method is invalid
        if (!is_callable(array($controller, $action)))
        {
            $e = new NotFoundError("$controller->$action() not found.");
            $e->serve();
        }

        // instantiate class and call method
        $class = new $controller();
        $class->$action($args);
    }
}

