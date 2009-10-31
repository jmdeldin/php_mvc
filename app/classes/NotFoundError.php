<?php
/**
 * Represents an HTTP 404 Not Found error.
 */
class NotFoundError
{
    protected $status = '404 Not Found'; // HTTP status code
    protected $msg; // message to display to user

    public function __construct($msg='')
    {
        $this->msg = $msg;
    }

    /**
     * Sends the HTTP status code and calls the "error" view.
     */
    public function serve()
    {
        // set the header
        header($_SERVER['SERVER_PROTOCOL'] . " $this->status");
        $view = new View('error'); // call the "views/error.php" view
        $view->status = $this->status;
        $view->req = $_SERVER['REQUEST_URI'];
        $view->msg = $this->msg;
        exit($view->render());
    }
}

