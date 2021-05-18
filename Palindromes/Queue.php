<?php


class Queue
{
    private array $queue;

    public function __construct()
    {
        $this->queue = [];
    }

    public function isEmpty():bool
    {
        return empty($this->queue);
    }

    public function enqueue($value)
    {
       array_push($this->queue, $value);
    }

    public function showQueue(): array
    {
        return $this->queue;
    }

}