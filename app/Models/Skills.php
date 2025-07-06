<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Skills{
    public static function all(): array{
        return [
            ['id' => 1, 'name' => 'PHP', 'length' => '3 years', "projects" => 'Project A, Project B'],
            ['id' => 2, 'name' => 'Laravel', 'length' => '2 years', "projects" => 'Project C, Project D'],
            ['id' => 3, 'name' => 'Vue.js', 'length' => '1 year', "projects" => 'Project E, Project F'],
            ['id' => 4, 'name' => 'Tailwind CSS', 'length' => '1 year', "projects" => 'Project G, Project H'],
            ['id' => 5, 'name' => 'JavaScript', 'length' => '4 years', "projects" => 'Project I, Project J'],
            ['id' => 6, 'name' => 'HTML/CSS', 'length' => '5 years', 'projects' => 'Project K, Project L'],

        ];
    }

    public static function find($id): array
    {

        if(is_numeric($id)){
            $skill =  Arr::first(static::all(), fn($skill) => $skill['id'] == $id);
        } else{
            $skill = Arr::first(static::all(), fn($skill) => strtolower($skill['name']) == strtolower($id));
        }


        if(!$skill) {
            abort(404, 'Skill not found');
        }

        return $skill;

    }

}
