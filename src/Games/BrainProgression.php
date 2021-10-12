<?php

namespace Brain\Games;

use function Brain\generateRandomNumber;

function brainProgression(): array
{
    $rule = 'What number is missing in the progression?';

    $step = function () {
        $startNumber = generateRandomNumber();
        $increment = generateRandomNumber();
        $progression = [];

        for ($i = 0; $i < 10; $i++) {
            $progression[] = $startNumber + ($i * $increment);
        }

        $randIndex = array_rand($progression);
        $questionProgression = $progression;
        $questionProgression[$randIndex] = '..';
        $question = implode(' ', $questionProgression);
        $correctAnswer = $progression[$randIndex];

        return compact('question', 'correctAnswer');
    };

    return compact('rule', 'step');
}
