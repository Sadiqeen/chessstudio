<?php

function matchingStrings($strings, $queries)
{
    $answer = [];

    for ($queryIndex = 0; $queryIndex < count($queries); $queryIndex++) {
        $answer[$queryIndex] = 0;
        for ($stringIndex = 0; $stringIndex < count($strings); $stringIndex++) {
            if ($strings[$stringIndex] == $queries[$queryIndex]) {
                $answer[$queryIndex] ++;
            }
        }
    }

    return $answer;
}

$strings = ['a1', 'a1', 'b23'];
$queries = ['b23', 'cx', 'a1'];
$result = matchingStrings($strings, $queries);
print_r($result);