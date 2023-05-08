<?php

declare(strict_types=1);

namespace App\Patterns\Behavioral\Strategy\Validator;

class EmailRule extends Rule
{
    public function validate(): bool
    {
        return (bool) filter_var($this->value, FILTER_VALIDATE_EMAIL);
    }

    public function getErrorMessage(): string
    {
        return "Invalid valid email address";
    }
}
