<?php
/**
 * Superclass for controllers.
 */
abstract class Controller
{
    /**
     * All controllers must implement an <code>index()</code> method
     * in order to handle requests to /controller with no method parameters.
     */
    abstract public function index();
}

