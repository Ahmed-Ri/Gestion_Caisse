<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SousCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $SousCategorie = ['vêtements Femme','vêtements Homme', 'Chaussures Femme','Chaussures Homme','vêtements Adulte','vêtements Enfant'];
        foreach (range(1, 10) as $index) {
            $nomSousCategorie = $SousCategorie[array_rand($SousCategorie)];
            DB::table('sous_categories')->insert([
                'nomSousCategorie' => $nomSousCategorie,
                'slug' => $faker->slug,
                'idCategorie' => $faker->numberBetween(1, 10), // Assuming 10 categories
            ]);
            // $categorieId = DB::table('categories')->first()->id;
            // 'categorie_id' => $categorieId,
        }
    }
}
