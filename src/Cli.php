<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

class Cli
{
    private $name;

    public function __construct(string $name = '')
    {
        $this->name = $name;
    }

    public function sayWelcome()
    {
        line('Welcome to the Brain Games!');
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function askName(): string
    {
        return prompt('May I have your name?');
    }


    public function sayHello()
    {
        line('Hello, %s!', $this->name);
    }
}
