<?php
/**
 * Responsible for rendering templates.
 */
class View
{
    protected $name; // view name
    protected $file; // view file

    /**
     * @param string $name view name (.php is automatically appended)
     */
    public function __construct($name)
    {
        $this->file = APP_ROOT . "/views/{$name}.php";
    }

    public function render()
    {
        if (!file_exists($this->file))
        {
            $e = new NotFoundError("View unavailable.");
            $e->serve();
        }

        // make any object vars available as globals to the view
        extract(get_object_vars($this));
        include $this->file;
    }
}

