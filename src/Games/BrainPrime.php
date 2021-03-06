<?php

namespace Brain\Games;

use function Brain\generateRandomNumber;

function brainPrime(): array
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $isPrime = function ($n): bool {
        $result = true;

        if ($n < 2) {
            return false;
        }

        for ($i = 2; $i < $n; $i++) {
            if ($n % $i === 0) {
                $result = false;
                break;
            }
        }

        return $result;
    };

    $step = function () use ($isPrime): array {
        $number = generateRandomNumber();
        $question = $number;
        $correctAnswer = $isPrime($number) ? 'yes' : 'no';

        return compact('question', 'correctAnswer');
    };

    return compact('rule', 'step');
}
