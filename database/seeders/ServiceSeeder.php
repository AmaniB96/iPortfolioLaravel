<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'icon' => 'fa-solid fa-broom',
                'title' => 'Nettoyage de Monstre',
                'text' => 'Nulla tempor, purus a lacinia tempor, nunc neque vehicula lectus, ut congue purus elit sit amet nisi. Vivamus lobortis ultrices nisi, ac tincidunt odio commodo non. Sed vel lectus quis quam posuere posuere id at arcu'
            ],
            [
                'icon' => 'fa-solid fa-cut',
                'title' => 'Depeçage de Monstre',
                'text' => 'Nulla tempor, purus a lacinia tempor, nunc neque vehicula lectus, ut congue purus elit sit amet nisi. Vivamus lobortis ultrices nisi, ac tincidunt odio commodo non. Sed vel lectus quis quam posuere posuere id at arcu'
            ],
            [
                'icon' => 'fa-solid fa-dragon',
                'title' => 'Anihilation de Dragon anciens',
                'text' => 'Nulla tempor, purus a lacinia tempor, nunc neque vehicula lectus, ut congue purus elit sit amet nisi. Vivamus lobortis ultrices nisi, ac tincidunt odio commodo non. Sed vel lectus quis quam posuere posuere id at arcu'
            ],
            [
                'icon' => 'fa-solid fa-feather',
                'title' => 'Regulation de Wyverns',
                'text' => 'Nulla tempor, purus a lacinia tempor, nunc neque vehicula lectus, ut congue purus elit sit amet nisi. Vivamus lobortis ultrices nisi, ac tincidunt odio commodo non. Sed vel lectus quis quam posuere posuere id at arcu'
            ],
            [
                'icon' => 'fa-solid fa-house',
                'title' => 'Installation de base',
                'text' => 'Nulla tempor, purus a lacinia tempor, nunc neque vehicula lectus, ut congue purus elit sit amet nisi. Vivamus lobortis ultrices nisi, ac tincidunt odio commodo non. Sed vel lectus quis quam posuere posuere id at arcu'
            ],
            [
                'icon' => 'fa-solid fa-map',
                'title' => 'Expansion du territoire',
                'text' => 'Nulla tempor, purus a lacinia tempor, nunc neque vehicula lectus, ut congue purus elit sit amet nisi. Vivamus lobortis ultrices nisi, ac tincidunt odio commodo non. Sed vel lectus quis quam posuere posuere id at arcu'
            ]
            ]);
    }
}
