<?php

namespace Brain;

use function cli\line;
use function cli\prompt;

const QUESTIONS_COUNT = 3;

function engine(callable $game)
{
    $username = greeting();
    ['rule' => $rule, 'step' => $step] = $game();

    line($rule);

    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $step();
        line("Question: {$question}");
        $userAnswer = prompt('Your answer');

        if ($correctAnswer != $userAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$username}!");
            return;
        }

        line('Correct!');
    }

    line("Congratulations, {$username}!");
}
