<?php
include_once 'rectangle.php';

class square extends rectangle
{
    public function __construct($name, $width)
    {
        return parent::__construct($name, $width, $width, $width);
    }
}
