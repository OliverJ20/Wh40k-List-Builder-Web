<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $hqUnits = [
            [
                "name" => "Lord of contagion",
                "points" => "120",
                "type" => "HQ",
                "size" => 1
            ],
            [
                "name" => "Daemon Prince of Nurgle",
                "points" => "156",
                "type" => "HQ",
                "size" => 1
            ],
            [
                "name" => "Chaos Lord",
                "points" => "74",
                "type" => "HQ",
                "size" => 1
            ],
        ];

        $troopUnits = [
            [
                "name" => "Plague Marines",
                "points" => "80",
                "type" => "Troop",
                "size" => 5
            ],
            [
                "name" => "Poxwalkers",
                "points" => "50",
                "type" => "Troop",
                "size" => 10
            ],
            [
                "name" => "Chaos Cultists",
                "points" => "40",
                "type" => "troop",
                "size" => 10
            ],
        ];

        $eliteUnits = [
            [
                "name" => "Blightlord Terminators",
                "points" => "172",
                "type" => "Elite",
                "size" => 5
            ],
            [
                "name" => "Foul Blightspawn",
                "points" => "77",
                "type" => "Elite",
                "size" => 1
            ],
            [
                "name" => "Deathshroad Terminators",
                "points" => "126",
                "type" => "Elite",
                "size" => 3
            ],
        ];

        $fastUnits = [
            [
                "name" => "Foetid Bloat-drone",
                "points" => "138",
                "type" => "Fast",
                "size" => 1
            ],
            [
                "name" => "Chaos Spawn",
                "points" => "20",
                "type" => "Fast",
                "size" => 1
            ],
            [
                "name" => "Myphitic Blight-haulers",
                "points" => "102",
                "type" => "Fast",
                "size" => 1
            ],
        ];

        $heavyUnits = [
            [
                "name" => "Plagueburst Crawler",
                "points" => "140",
                "type" => "Heavy",
                "size" => 1
            ],
            [
                "name" => "Defiler",
                "points" => "158",
                "type" => "Heavy",
                "size" => 1
            ],
            [
                "name" => "Chaos Land Raider",
                "points" => "277",
                "type" => "Heavy",
                "size" => 1
            ],
        ];

        $flyerUnits = [
            [
                "name" => "Chaos Hell Blade",
                "points" => "130",
                "type" => "Flyer",
                "size" => 1
            ],
            [
                "name" => "Chaos Hell Talon",
                "points" => "240",
                "type" => "Flyer",
                "size" => 1
            ],
            [
                "name" => "Chaos Xiphon Interceptor",
                "points" => "240",
                "type" => "Flyer",
                "size" => 1
            ],
        ];

        $transportUnits = [
            [
                "name" => "Chaos Rhino",
                "points" => "67",
                "type" => "Transport",
                "size" => 1
            ],
            [
                "name" => "Terrax Pattern Termite Assault Drill",
                "points" => "134",
                "type" => "Transport",
                "size" => 1
            ],
        ];

        DB::table('army_lists')->insert(
            [
            'id' => 1,
            'name' => 'Death Guard',
            'shorthand' => 'DeathGuard',
            'factionType' => 'Chaos',
            ]
        );

        DB::table('army_lists')->insert(
            [
                'id' => 2,
                'name' => 'Blood Angels',
                'shorthand' => 'BloodAngels',
                'factionType' => 'Imperium',
            ]
        );

        DB::table('army_lists')->insert(
            [
                'id' => 3,
                'name' => 'Thousand Sons',
                'shorthand' => 'ThousandSons',
                'factionType' => 'Chaos',
            ]
        );

        DB::table('army_lists')->insert(
            [
                'id' => 4,
                'name' => 'Orks',
                'shorthand' => 'Orks',
                'factionType' => 'Xenos',
            ]
        );

        DB::table('army_lists')->insert(
            [
                'id' => 5,
                'name' => 'Eldar',
                'shorthand' => 'Eldar',
                'factionType' => 'Xenos',
            ]
        );


        DB::table('army_individuals')->insert([
            'id' => 8,
            'army_id' => 7,
            'army_name' => 'Death Guard',
            'army_hq_units' => json_encode($hqUnits),
            'army_troops_units' => json_encode($troopUnits),
            'army_elites_units' => json_encode($eliteUnits),
            'army_fast_units' => json_encode($fastUnits),
            'army_heavy_units' => json_encode($heavyUnits),
            'army_flyer_units' => json_encode($flyerUnits),
            'army_transport_units' => json_encode($transportUnits),
        ]);
    }
}
