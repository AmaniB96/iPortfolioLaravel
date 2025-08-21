<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Testimonial::insert([
            [
                'comment' => 'Duis varius dui non ullamcorper luctus. Aliquam vitae elit sit amet nisl lacinia egestas id at magna. Vestibulum id magna pharetra, faucibus dui et, bibendum odio. Vestibulum semper, nulla ut aliquam egestas, tellus mi bibendum odio, nec mollis augue justo a tellus. ',
                'img' => '/storage/portfolio-assets/testimonials-1.jpg',
                'name' => 'Brandon Walch',
                'position' => 'CEO',
            ],
            [
                'comment' => 'Duis varius dui non ullamcorper luctus. Aliquam vitae elit sit amet nisl lacinia egestas id at magna. Vestibulum id magna pharetra, faucibus dui et, bibendum odio. Vestibulum semper, nulla ut aliquam egestas, tellus mi bibendum odio, nec mollis augue justo a tellus. ',
                'img' => '/storage/portfolio-assets/testimonials-2.jpg',
                'name' => 'Parker Lewis',
                'position' => 'CTO',
            ],
            [
                'comment' => 'Duis varius dui non ullamcorper luctus. Aliquam vitae elit sit amet nisl lacinia egestas id at magna. Vestibulum id magna pharetra, faucibus dui et, bibendum odio. Vestibulum semper, nulla ut aliquam egestas, tellus mi bibendum odio, nec mollis augue justo a tellus. ',
                'img' => '/storage/portfolio-assets/testimonials-3.jpg',
                'name' => 'Saul Goodman',
                'position' => 'COO',
            ],
            ]);
    }
}
