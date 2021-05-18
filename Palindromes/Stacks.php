<?php


class Stacks
{
    protected array $stack;
    private int $limit;

    public function __construct()
    {
        $this->stack = [];
    }

    public function limit(): int
    {
        return count($this->stack);
    }

    public function add($element)
    {
        array_unshift($this->stack, $element);
    }

    public function showStack():array
    {
        return $this->stack;
    }
}