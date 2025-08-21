<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([
            [
                'street' => 'Place de la Minoterie',
                'number' => 10,
                'city' => 'Bruxelles',
                'zip' => 1080,
                'phone' => +1777777,
                'email' => 'info@molengeek.com'
            ]
            ]);
    }
}
