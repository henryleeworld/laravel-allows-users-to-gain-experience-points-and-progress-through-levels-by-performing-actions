<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use LevelUp\Experience\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Level::add(
            ['level' => 1, 'next_level_experience' => null],
            ['level' => 2, 'next_level_experience' => 100],
            ['level' => 3, 'next_level_experience' => 250],
            ['level' => 4, 'next_level_experience' => 450],
            ['level' => 5, 'next_level_experience' => 700],
        );
    }
}
