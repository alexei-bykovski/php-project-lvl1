<?php

namespace Brain\Games;

use function Brain\generateRandomNumber;

function brainEven(): array
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';

    $step = function () {
        $number = generateRandomNumber();
        $question = $number;
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';

        return compact('question', 'correctAnswer');
    };

    return compact('rule', 'step');
}
