<?php

declare(strict_types=1);

namespace App\Patterns\Behavioral\Strategy\Validator;

abstract class Rule
{
    public function __construct(protected string $name, protected mixed $value)
    {
    }

    abstract public function validate(): bool;
    abstract public function getErrorMessage(): string;
}
