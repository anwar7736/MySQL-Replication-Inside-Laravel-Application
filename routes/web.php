<?php

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;
use Tests\TestCase;

Route::get('/', function () {
    dd(User::all()->toArray()); //For data read
    dd(User::create([
        'name' => 'Test User',
        'email' => 'testuser@gmail.com',
        'password' => bcrypt('password]')
    ])); // For data write operation
    // return view('welcome');
});
