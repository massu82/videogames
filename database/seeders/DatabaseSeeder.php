<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Game::factory(5)->create();

        User::factory()->create([
            'name' => 'Andres',
            'email' => 'andres@m-studio.com.mx',
            'password' => bcrypt('delDuero1'),
        ]);
    }
}
