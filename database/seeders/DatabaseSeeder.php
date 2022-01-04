<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SocialSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\Project_TechSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ProjectSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(Project_TechSeeder::class);
    }
}
