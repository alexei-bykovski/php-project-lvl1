<?php

namespace Brain\Games;

use function Brain\generateRandomNumber;

function brainGcd(): array
{
    $rule = 'Find the greatest common divisor of given numbers.';
    $gcd = function ($a, $b) use (&$gcd) {
        return $b ? $gcd($b, $a % $b) : $a;
    };

    $step = function () use ($gcd) {
        $number1 = generateRandomNumber();
        $number2 = generateRandomNumber();
        $question = "{$number1} {$number2}";
        $correctAnswer = $gcd($number1, $number2);

        return compact('question', 'correctAnswer');
    };

    return compact('rule', 'step');
}
