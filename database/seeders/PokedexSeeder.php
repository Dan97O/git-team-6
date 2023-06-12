<?php

namespace Database\Seeders;

use App\Models\Pokedex;
use App\Utilities\Helpers;
use Illuminate\Database\Seeder;

class PokedexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemons = Helpers::getCsvData(__DIR__ . "/Pokemon-description-image.csv");
        foreach ($pokemons as $pokemon => $row) {
            if ($pokemon != 0) {
                $pokemon = new Pokedex();
                $pokemon->name = $row[1];
                $pokemon->type_1 = $row[2];
                $pokemon->type_2 = $row[3];
                $pokemon->hp = $row[4];
                $pokemon->attack = $row[5];
                $pokemon->defense = $row[6];
                $pokemon->speed = $row[7];
                $pokemon->special = $row[8];
                $pokemon->gif = $row[9];
                $pokemon->png = $row[10];
                $pokemon->description = $row[11];
                $pokemon->save();
            }
        }
    }
}
