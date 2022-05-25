<?php

class Data implements IteratorAggregate
{
    var string $first = "First data";
    public string $second = "Second Data";
    private string $third = "Third Data";
    protected string $forth = "Forth Data";

    public function getIterator()
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];

        return new ArrayIterator($array);
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
