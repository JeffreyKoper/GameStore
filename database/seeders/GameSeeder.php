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
            [
                'titel'             => "The Last of Us Part II",
                'console'           => "PlayStation 4",
                'prijs'             => "69.99",
                'image'             => "storage/Images/Last_of_Us_Part_II.jpg",
                'beoordeling'       => 5,
                'uitgave_datum'     => ("2020-06-10"),
            ],
            [
                'titel' => "The Witcher 3: Wild Hunt",
                'console' => "PlayStation 4",
                'prijs' => "29,99",
                'image' => "storage/Images/the_witcher_3.jpg",
                'beoordeling' => 4,
                'uitgave_datum' => ("2015-05-19")
            ],

            [
                'titel' => "Red Dead Redemption 2",
                'console' => "Xbox One",
                'prijs' => "59,99",
                'image' => "storage/Images/red_dead_redemption_2.jpg",
                'beoordeling' => 5,
                'uitgave_datum' => ("2018-10-26")
            ],
            [
                'titel' => "The Legend of Zelda: Breath of the Wild",
                'console' => "Nintendo Switch",
                'prijs' => "59,99",
                'image' => "storage/Images/breath_of_the_wild.jpg",
                'beoordeling' => 5,
                'uitgave_datum' => ("2017-03-03"),
            ],
            [
                'titel' => "God of War",
                'console' => "PlayStation 4",
                'prijs' => "39,99",
                'image' => "storage/Images/god_of_war.jpg",
                'beoordeling' => 5,
                'uitgave_datum' => ("2018-04-20")
            ],
            [
                'titel' => "Assassin's Creed Valhalla",
                'console' => "PlayStation 5",
                'prijs' => "69,99",
                'image' => "storage/Images/assassins_creed_valhalla.jpg",
                'beoordeling' => 4,
                'uitgave_datum' => ("2020-11-10")
            ],
            [
                'titel' => "Call of Duty: Black Ops Cold War",
                'console' => "Xbox Series X",
                'prijs' => "69,99",
                'image' => "storage/Images/black_ops_cold_war.jpg",
                'beoordeling' => 4,
                'uitgave_datum' => ("2020-11-13")
            ],
            [
                'titel' => "FIFA 22",
                'console' => "PlayStation 5",
                'prijs' => "69,99",
                'image' => "storage/Images/fifa_22.jpg",
                'beoordeling' => 4,
                'uitgave_datum' => ("2021-10-01")
            ],
            [
                'titel' => "Cyberpunk 2077",
                'console' => "Xbox series X, S",
                'prijs' => "59,99",
                'image' => "storage/Images/cyberpunk_2077.jpg",
                'beoordeling' => 3,
                'uitgave_datum' => ("2020-12-10")
            ],
            [
                'titel' => "Animal Crossing: New Horizons",
                'console' => "Nintendo Switch",
                'prijs' => "49,99",
                'image' => "storage/Images/animal_crossing_new_horizons.jpg",
                'beoordeling' => 5,
                'uitgave_datum' => ("2020-03-20")
            ],
            [
                'titel' => "Hades",
                'console' => "Nintendo Switch",
                'prijs' => "24,99",
                'image' => "storage/Images/hades.jpg",
                'beoordeling' => 5,
                'uitgave_datum' => ("2020-09-17")
            ],
            [
                'titel' => "Monster Hunter Rise",
                'console' => "Nintendo Switch",
                'prijs' => "59,99",
                'image' => "storage/Images/monster_hunter_rise.jpg",
                'beoordeling' => 4,
                'uitgave_datum' => ("2021-03-26")
            ],
            [
                'titel' => "Ghost of Tsushima",
                'console' => "PlayStation 4",
                'prijs' => "59,99",
                'image' => "storage/Images/ghost_of_tsushima.jpg",
                'beoordeling' => 5,
                'uitgave_datum' => ("2020-07-17")
            ],
            [
                'titel' => "Resident Evil 3",
                'console' => "PlayStation 4",
                'prijs' => "59,99",
                'image' => "storage/Images/resident_evil_3.jpg",
                'beoordeling' => 4,
                'uitgave_datum' => ("2020-04-03")
            ],
            [
                'titel' => "Super Smash Bros. Ultimate",
                'console' => "Nintendo Switch",
                'prijs' => "59,99",
                'image' => "storage/Images/super_smash_bros_ultimate.jpg",
                'beoordeling' => 5,
                'uitgave_datum' => ("2018-12-07")
            ],
            [
                'titel' => "Final Fantasy VII Remake",
                'console' => "PlayStation 4",
                'prijs' => "59,99",
                'image' => "storage/Images/final_fantasy_vii_remake.jpg",
                'beoordeling' => 5,
                'uitgave_datum' => ("2020-04-10")
            ],
            [
                'titel' => "Hollow Knight",
                'console' => "Nintendo Switch",
                'prijs' => "14,99",
                'image' => "storage/Images/hollow_knight.jpg",
                'beoordeling' => 3,
                'uitgave_datum' => ("2017-02-24")
            ]
        
        ];
        DB::table('games')->insert($games);
    }
}
