<?php

declare(strict_types=1);

namespace App\Http\Controllers\Patterns\Creational;

use App\Http\Controllers\Controller;
use App\Patterns\Creational\Factory\DataTransferObjects\UserData;

class FactoryPatternController extends Controller
{
    public function dataTransferObjects(): void
    {
        $data = [
            'id' => 1,
            'name' => 'dave',
            'email' => 'dave@gmail.com',
        ];

        $userData = UserData::fromArray($data);

        dump($userData);
    }
}
