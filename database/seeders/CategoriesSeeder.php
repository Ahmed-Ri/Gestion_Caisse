<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $categorie = ['vêtements', 'Chaussures',];
        foreach (range(1, 10) as $index) {
            $nomCategorie = $categorie[array_rand($categorie)];
            DB::table('categories')->insert([
                'nomCategorie' => $nomCategorie,
                'slug' => $faker->slug,
            ]);
        }
    }
}
