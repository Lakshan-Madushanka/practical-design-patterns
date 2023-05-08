<?php

declare(strict_types=1);

namespace App\Patterns\Behavioral\Strategy\Validator;

use Exception;
use RuntimeException;

class Validator
{
    /**
     * @var array<string, string[]>
     */
    private array $errors = [];

    /**
     * @param array<int, array{name: string, value: mixed, rules: string[]}> $data
     */
    public function __construct(private array $data)
    {
    }

    /**
     * @throws Exception
     *
     * @return array<string, string[]>
     */
    public function validate(): array
    {
        foreach ($this->data as $key => $data) {
            $this->validateData($data);

            $this->errors[$data['name']] = [];

            foreach ($data['rules'] as $rule) {
                $ruleInstance = $this->getRuleInstance($rule, $data['name'], $data['value']);

                if ( ! $ruleInstance->validate()) {
                    echo $ruleInstance->getErrorMessage();
                    $this->errors[$data['name']][] = $ruleInstance->getErrorMessage();
                }
            }
        }

        return $this->errors;
    }

    /**
     * @throws RuntimeException
     */
    public function validateData(mixed $data): void
    {
        if ( ! is_array($data)) {
            throw new RuntimeException('Data should be an array');
        }

        if (count($data) === 0) {
            throw new RuntimeException('Data can not be empty');
        }

        if ( ! isset($data['value'])) {
            throw new RuntimeException('Value is required');
        }

        if ( ! isset($data['name'])) {
            throw new RuntimeException('field name is required');
        }

        if ( ! isset($data['rules']) || ! is_array($data['rules'])) {
            throw new RuntimeException('Rules haven\'t set or rule type is not an array');
        }
    }

    /**
     * @throws Exception
     */
    public function getRuleInstance(string $ruleName, string $name, mixed $value): Rule
    {
        return match ($ruleName) {
            'required' => new RequiredRule($name, $value),
            'numeric' => new NumericRule($name, $value),
            'email' => new EmailRule($name, $value),
            default => throw new Exception('Invalid validation rule available rules are required, numeric and email')
        };
    }
}
