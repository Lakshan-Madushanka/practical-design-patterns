<?php

declare(strict_types=1);

use App\Http\Controllers\Patterns\Behavioral\StrategyPatternController;
use App\Http\Controllers\Patterns\Creational\FactoryPatternController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => view('welcome'));

Route::get('behavioral/strategy/validator', [StrategyPatternController::class, 'validator']);

Route::get(
    'behavioral/creational/data-transfer-objects',
    [FactoryPatternController::class, 'dataTransferObjects']
);
