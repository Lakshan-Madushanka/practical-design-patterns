<?php

declare(strict_types=1);

namespace App\Http\Controllers\Patterns\Behavioral;

use App\Http\Controllers\Controller;
use App\Patterns\Behavioral\Strategy\Validator\Validator;
use Exception;

class StrategyPatternController extends Controller
{
    /**
     * @throws Exception
     */
    public function validator(): void
    {
        $payload = [
            [
                'value' => [],
                'name' => 'field1',
                'rules' => ['required'],
            ],
            [
                'value' => 'test',
                'name' => 'field2',
                'rules' => ['required'],
            ],
            [
                'value' => 'email',
                'name' => 'field3',
                'rules' => ['required', 'email'],
            ],
            [
                'value' => '',
                'name' => 'field4',
                'rules' => ['required', 'email'],
            ],
        ];

        $validator = new Validator($payload);
        $errors = $validator->validate();

        dump($errors);
    }
}
