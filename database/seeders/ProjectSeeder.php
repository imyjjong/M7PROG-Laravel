<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('movies')->insert([
            'title'         => 'Mijn project titel',
            'intro'         => 'Anim non lorem sit est.',
            'image'         => 'g',
            'year'          => 2016,
            'description'   => 'Enim labore llit. Sint pariatur esse anim. Esse anim officia mollit laboris aliqua, et esse.',
        ]);
    }
}
