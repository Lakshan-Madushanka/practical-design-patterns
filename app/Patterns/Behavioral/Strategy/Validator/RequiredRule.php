<?php

declare(strict_types=1);

namespace App\Patterns\Behavioral\Strategy\Validator;

class RequiredRule extends Rule
{
    public function validate(): bool
    {
        return $this->value !== "" && ! (is_array($this->value) && count($this->value) === 0);
    }

    public function getErrorMessage(): string
    {
        return "{$this->name} is required";
    }
}
