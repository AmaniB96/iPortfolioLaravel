<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::insert([
            [
                'img' => '/storage/app/public/portfolio-assets/app-1.jpg',
                'filter' => 'All',
            ],
            [
                'img' => '/storage/app/public/portfolio-assets/app-2.jpg',
                'filter' => 'All',
            ],
            [
                'img' => '/storage/app/public/portfolio-assets/books-3.jpg.jpg',
                'filter' => 'All',
            ],
            [
                'img' => '/storage/app/public/portfolio-assets/books-2.jpg.jpg',
                'filter' => 'All',
            ],
            [
                'img' => '/storage/app/public/portfolio-assets/books-1.jpg.jpg',
                'filter' => 'All',
            ],

            ]);
    }
}
