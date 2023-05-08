<?php

declare(strict_types=1);

namespace App\Patterns\Creational\Factory\DataTransferObjects;

interface Data
{
    /**
     * @param  array<string, mixed>  $data
     * @return $this
     */
    public static function fromArray(array $data): self;
}
