<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to create StackNode with data and next
 */
class StackNode
{
    public int $data;
    public $next;
    public function __construct()
    {
        $this->data=0;
        $this->next=null;
    }
}