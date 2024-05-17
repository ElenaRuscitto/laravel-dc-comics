<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\ComicsController;
use Illuminate\Database\Seeder;
use Database\Seeders\ComicsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     $this->call(ComicsTableSeeder::class);
    }
}
