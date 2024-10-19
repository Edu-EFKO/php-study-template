<?php

declare(strict_types=1);

function getSelectedAttributeOnInputCondition(
    array $input,
    string $inputName,
    mixed $condition,
    bool $asInt = false
): string|null {
    if (isset($input[$inputName]) === false) {
        return null;
    }

    $condition = $asInt === true ? (int)$condition : (string)$condition;

    if ($input[$inputName] !== $condition) {
        return null;
    }

    return 'selected';
}
