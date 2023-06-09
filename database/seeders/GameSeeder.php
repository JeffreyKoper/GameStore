<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'titel'             => "GTA 5: Premium Edition",
                'console'           => "Playstation 4",
                'prijs'             => "60.00",
                'image'             => "storage/Images/Gta_5.jpg"
            ],
            [
                'titel'             => "Five Nights at Freddy's: Security Breach",
                'console'           => "Playstaion 4",
                'prijs'             => "15.00",
                'image'             => "storage/Images/Security.jpg"
            ],
            [
                'titel'             => "The Legend of Zelda: Tears of the Kingdom",
                'console'           => "Nintendo Switch",
                'prijs'             => "70.00",
                'image'             => "storage/Images/Zelda_TotK.jpg"
            ],
            [
                'titel'             => "Mario Kart 8 Deluxe",
                'console'           => "Nintendo Switch",
                'prijs'             => "50.00",
                'image'             => "storage/Images/Mario_Kart.jpg"
            ],
            [
                'titel'             => "Spider-Man: Miles Morales",
                'console'           => "Playstation 5",
                'prijs'             => "35.00",
                'image'             => "storage/Images/Spider_man.jpg"
            ],
            [
                'titel'             => "Elden Ring",
                'console'           => "Xbox Series X, Xbox one",
                'prijs'             => "100.00",
                'image'             => "storage/Images/Elden.jpg"
            ],
        ];
        DB::table('games')->insert($games);
    }
}
