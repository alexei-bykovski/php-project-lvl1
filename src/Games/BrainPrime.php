<?php

namespace Brain\Games;

use function Brain\generateRandomNumber;

function brainPrime(): array
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $isPrime = function ($n) {
        $result = true;

        for ($i = 2; $i < $n; $i++) {
            if ($n % $i === 0) {
                $result = false;
                break;
            }
        }

        return $result;
    };

    $step = function () use ($isPrime) {
        $number = generateRandomNumber();
        $question = $number;
        $correctAnswer = $isPrime($number) ? 'yes' : 'no';

        return compact('question', 'correctAnswer');
    };

    return compact('rule', 'step');
}