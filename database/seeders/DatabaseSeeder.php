<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Project;
use App\Models\Skill;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Skill::factory(10)->create();

        Project::factory(10)->create();

        Content::create([
            'page' => 'home',
            'position' => 'header',
            'content' => 'Welcome to the Home Page'
        ]);
        Content::create([
            'page' => 'home',
            'position' => 'main',
            'content' => 'On this webside, you can read about my skills and projects. If you are interested in my work, feel free to contact me!'
        ]);
        Content::create([
            'page' => 'about',
            'position' => 'main',
            'content' => 'Here is a list of my skills and projects which I have worked on. For more details, please visit the respective pages.'
        ]);
        Content::create([
            'page' => 'contact',
            'position' => 'main',
            'content' => 'If you are interested in my work, feel free to contact me via email or through my social media channels. I look forward to hearing from you!'
        ]);
    }
}
