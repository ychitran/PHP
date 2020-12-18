<?php
include_once "Dance.php";

class DanceFloor
{
    public $danceFloor;
    public $maleQueue;
    public $femaleQueue;

    public function __construct()
    {
        $this->danceFloor = [];
        $this->maleQueue = new SplQueue();
        $this->femaleQueue = new SplQueue();
    }

    public function addDancer($name, $gender)
    {
        $dancer = new Dance($name, $gender);
        array_push($this->danceFloor, $dancer);
        return $this->danceFloor;
    }

    public function divideIntoGroups()
    {
        for ($i = 0; $i < count($this->danceFloor); $i++) {
            switch ($this->danceFloor[$i]->gender) {
                case 'male':
                    $this->maleQueue->enqueue($this->danceFloor[$i]->name);
                    break;
                case 'female':
                    $this->femaleQueue->enqueue($this->danceFloor[$i]->name);
                    break;
                default:
                    return "Out of ability";
            }
        }
    }


    public function pair()
    {
        while (!$this->maleQueue->isEmpty() || !$this->femaleQueue->isEmpty()) {
            echo "<pre>";
            if ($this->maleQueue->isEmpty()) {
                return count($this->femaleQueue) . " ladies waiting!";
            } elseif ($this->femaleQueue->isEmpty()) {
                return count($this->maleQueue) . " man waiting!";
            }
            echo $this->maleQueue->dequeue() . ' and ' . $this->femaleQueue->dequeue() . ' are in pair';
        }
        return "No more pair";
    }
}
