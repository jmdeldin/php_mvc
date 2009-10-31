<?php
class FooModel extends Model
{
    /**
     * Returns a modified array.
     *
     * @param array $arr
     */
    public function getResults($arr)
    {
        return array_map('str_rot13', $arr);
    }

    /**
     * Returns a pseudo-random number.
     */
    public function getRand()
    {
        return mt_rand();
    }
}

