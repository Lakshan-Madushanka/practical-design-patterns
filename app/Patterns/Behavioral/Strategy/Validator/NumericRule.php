<?php

declare(strict_types=1);

namespace App\Patterns\Behavioral\Strategy\Validator;

class NumericRule extends Rule
{
    public function validate(): bool
    {
        return is_numeric($this->value);
    }

    public function getErrorMessage(): string
    {
        return 'Invalid numeric';
    }
}
