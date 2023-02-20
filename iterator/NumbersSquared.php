<?php

class NumbersSquared implements Iterator
{
    private int $start;
    private int $end;
    private int $current;

    public function __construct(int $num1, int $num2)
    {
        $this->start = $num1;
        $this->end   = $num2;
    }
    public function rewind(): void
    {
        $this->current = $this->start;
    }
    public function valid(): bool
    {
        if ($this->current <= $this->end){
            return true;
        } else {
            return false;
        }
    }
    public function next(): void
    {
        $this->current++;
    }
    public function key(): int
    {
        return $this->current;
    }
    public function current(): int
    {
        return pow($this->current, 2);
    }
}

$obj = new NumbersSquared(1,10);

foreach ($obj as $key => $value) {
    echo '<pre>';
    print_r("Квадрат числа $key = $value\n");
    echo '</pre>';
}