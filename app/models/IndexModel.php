<?php
/**
 * Model used for the homepage.
 */
class IndexModel extends Model
{
    /**
     * Returns something.
     * TODO: In your app, make this do _something_ useful.
     */
    public function getSomething($arg)
    {
        return strtoupper($arg);
    }

    /**
     * Returns "all" of the content (which is a fixed str at the moment). In
     * your app, methods like these would likely return result sets.
     */
    public function getAll()
    {
        return <<<EOF
<ul>
    <li><a href="/foo">Call "FooController->index()"</a></li>
    <li><a href="/foo/bar">Call "FooController->bar()"</a></li>
    <li><a href="/foo/bar/baz/qux/quux/corge">Call
        "FooController->bar('baz', 'qux', 'quux', 'corge')"</a></li>
    <li><a href="/does/not/exist">Call a non-existent controller</a></li>
</ul>
EOF;
    }
}

