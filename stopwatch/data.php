<?php
class stopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = microtime(true);
    }
    function getStart()
    {
        return $this->startTime;
    }
    function getEnd()
    {
        return $this->endTime;
    }
    function start()
    {
        return $this->startTime = microtime(true);
    }
    function stop()
    {
        return $this->endTime = microtime(true);
    }
    function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}
