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
                'image'             => "storage/Images/Gta_5.jpg",
                'beoordeling'       => 5,
                'uitgave_datum'     => ('2013-09-17')
            ],
            [
                'titel'             => "Five Nights at Freddy's: Security Breach",
                'console'           => "Playstation 4",
                'prijs'             => "15.00",
                'image'             => "storage/Images/Security.jpg",
                'beoordeling'       => 2,
                'uitgave_datum'     => ('2022-03-15')
            ],
            [
                'titel'             => "The Legend of Zelda: Tears of the Kingdom",
                'console'           => "Nintendo Switch",
                'prijs'             => "70.00",
                'image'             => "storage/Images/Zelda_TotK.jpg",
                'beoordeling'       => 5,
                'uitgave_datum'     => ('2023-05-12')
            ],
            [
                'titel'             => "Mario Kart 8 Deluxe",
                'console'           => "Nintendo Switch",
                'prijs'             => "50.00",
                'image'             => "storage/Images/Mario_Kart.jpg",
                'beoordeling'       => 4,
                'uitgave_datum'     => ('2014-05-29')
            ],
            [
                'titel'             => "Spider-Man: Miles Morales",
                'console'           => "Playstation 5",
                'prijs'             => "35.00",
                'image'             => "storage/Images/Spider_man.jpg",
                'beoordeling'       => 4,
                'uitgave_datum'     => ('2020-11-12')
            ],
            [
                'titel'             => "Elden Ring",
                'console'           => "Xbox Series X, Xbox one",
                'prijs'             => "100.00",
                'image'             => "storage/Images/Elden.jpg",
                'beoordeling'       => 5,
                'uitgave_datum'     => ('2022-02-25')
            ],
            [
                'titel'             => "Resident Evil 4",
                'console'           => "Playstation 5",
                'prijs'             => "47.99",
                'image'             => "storage/Images/Resident.jpg",
                'beoordeling'       => 5,
                'uitgave_datum'     => ('2023-03-24')
            ],
        ];
        DB::table('games')->insert($games);
    }
}
