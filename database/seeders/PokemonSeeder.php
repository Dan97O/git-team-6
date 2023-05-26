<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++){
            $pokemon = new Pokemon();
            $pokemon->name = $faker->words(1, true);
            $pokemon->image = $faker->words(3, true);
            $pokemon->primary_type = $faker->words(1, true);
            $pokemon->secondary_type = $faker->words(1, true);
            $pokemon->order = $faker->numberBetween(1, 150);
            $pokemon->height = $faker->words(1, true);
            $pokemon->weight = $faker->words(1, true);
            $pokemon->species = $faker->randomElement(['normal', 'fire', 'water', 'grass', 'electric', 'ice','poison', 'psico', 'flying', 'dragon']);
            $pokemon->caught = $faker->randomElement([1, 0]);
            $pokemon->gender = $faker->randomElement(['M', 'F', 'U']);
            $pokemon->save();

        }
    }
}
