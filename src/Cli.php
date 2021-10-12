<?php

namespace Brain;

use function cli\line;
use function cli\prompt;

function greeting(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function generateRandomNumber(): int
{
    return random_int(1, 20);
}
