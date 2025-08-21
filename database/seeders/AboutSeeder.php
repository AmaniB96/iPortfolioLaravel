<?php

namespace Database\Seeders;

use App\Models\about;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('about')->insert([
        //     [
        //         'subtitle' => ''
        //     ]
        //     ]);
        about::insert([

            [
                'subtitle' => 'Donec at sodales risus. Praesent sodales vitae purus porttitor luctus. Donec sit amet mi quam. Sed eu consectetur elit, in tempor quam. Duis est arcu, interdum non ligula ac, viverra gravida tortor. Nulla a nulla condimentum, suscipit enim a, semper augue. Nullam euismod molestie tellus. Sed tempor pulvinar eros, sed ornare mi ornare id. Fusce finibus magna sit amet nisi porta, tincidunt egestas nunc pharetra. Sed ut mauris non tortor tempus hendrerit.',
                'birthdate' => Carbon::parse('1983-09-29'),
                'website' => 'www.example.com',
                'phone' => '+123 456 789',
                'city' => 'Bruxelles, BEL',
                'age' => 39,
                'degree' => 'master',
                'email' => 'email@example.com',
                'freelance' => 'available now',
                'src' => '',
                'subtext' => 'Duis odio tortor, elementum vel justo et, condimentum eleifend sapien. Nunc at lectus pellentesque, ullamcorper nibh sit amet, faucibus risus. Nulla eu sodales risus.'
            ]
        ]);
    }
}
