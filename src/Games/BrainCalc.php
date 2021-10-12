<?php

namespace Brain\Games;

use function Brain\generateRandomNumber;

function brainCalc(): array
{
    $rule = 'What is the result of the expression?';

    $step = function () {
        $possibleOperators = ['+', '-', '*'];
        $operator = $possibleOperators[array_rand($possibleOperators)];
        $number1 = generateRandomNumber();
        $number2 = generateRandomNumber();
        $question = "{$number1} {$operator} {$number2}";
        $correctAnswer = match ($operator) {
            '+' => $number1 + $number2,
            '-' => $number1 - $number2,
            '*' => $number1 * $number2
        };

        return compact('question', 'correctAnswer');
    };

    return compact('rule', 'step');
}
