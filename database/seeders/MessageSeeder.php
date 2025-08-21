<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::insert([
            [
                'nom' => 'Jean-Charles',
                'email' => 'jean-charles@ok.com',
                'sujet' => 'Loyer impayé',
                'message' => 'Faudrait penser a payer votre loyer. Bonne journée',
            ]
            ]);

        Message::factory()->count(5)->create();
    }
}
