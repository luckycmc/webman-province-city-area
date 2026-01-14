<?php

namespace Database\Seeders;

use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use app\model\Users;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use support\Db;

class DatabaseSeeder extends Seeder
{
    public function __construct()
    {
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            return 'Database\\Factories\\' . class_basename($modelName) . 'Factory';
        });
        Factory::guessModelNamesUsing(function (Factory $factory) {
            return 'app\\model\\' . str_replace('Factory', '', class_basename($factory));
        });
    }

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
         * [
            'name' => 'admin',
            'email' => Str::random(10).'@qq.com',
            'password' => ('<PASSWORD>')
        ]
         */
        Users::factory(10)->create();
    }
}