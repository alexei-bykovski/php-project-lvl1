<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

const QUESTIONS_COUNT = 3;

function brainEven(): void
{
    $username = greeting();

    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $number = random_int(1, 20);
        line("Question: {$number}");
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
        $userAnswer = prompt('Your answer');

        if ($correctAnswer !== $userAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$username}!");
            return;
        }

        line('Correct!');
    }

    line("Congratulations, {$username}!");
}
