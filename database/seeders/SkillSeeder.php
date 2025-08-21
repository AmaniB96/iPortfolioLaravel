<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insert([
            [
                'skill' => 'Attaque tranchante',
                'pourcentage' => 85,
            ],
            [
                'skill' => 'Esquive',
                'pourcentage' => 70,
            ],
            [
                'skill' => 'Aiguisage rapide',
                'pourcentage' => 75,
            ],
            [
                'skill' => 'Combo critique',
                'pourcentage' => 93,
            ],
            [
                'skill' => 'Regeneration',
                'pourcentage' => 60,
            ],
            [
                'skill' => 'Tirs de Mitraillette',
                'pourcentage' => 85,
            ],
            [
                'skill' => 'Coacher',
                'pourcentage' => 100,
            ]
            ]);
    }
}
