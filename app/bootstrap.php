<?php
/**
 * Tries to autoload classes in models, controllers, and classes directories.
 */
function __autoload($class)
{
    foreach (array('models', 'controllers', 'classes') as $dir)
    {
        $fname = APP_ROOT . "/$dir/$class.php";
        if (file_exists($fname))
            return require $fname;
    }
}

