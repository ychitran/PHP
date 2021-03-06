<?php
class Node
{
    /* Node data */
    public $data;

    /* Link to next node */
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}
