<?php

interface HelloWord
{
    public function sayHello(): void;
}

$hello = new class("say") implements HelloWord
{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo 'Hello ' . $this->name;
    }
};

$hello->sayHello();
