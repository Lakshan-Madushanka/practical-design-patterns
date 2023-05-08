<?php

declare(strict_types=1);

namespace App\Patterns\Creational\Factory\DataTransferObjects;

class UserData implements Data
{
    public function __construct(
        public ?int $id,
        public string $name,
        public string $email,
    ) {
    }

    /**
     * Responsible for create the UserData object from request
     *
     * @return Data
     */

    /**
     * @param  array{id: int, name: string, email: string} $data
     * @return Data
     */
    public static function fromArray(array $data): Data
    {
        return new self(
            id: $data['id'],
            name: $data['name'],
            email: $data['email'],
        );
    }
}
