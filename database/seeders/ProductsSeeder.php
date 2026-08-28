<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;
use App\Models\Category;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $categories = Category::pluck('id', 'name');

        $categoriesNames = [
            'Coffe',
            'Non Coffe',
            'Snack'
        ];

        for($i=0; $i < 50; $i++){
            $categoriesName =$faker->randomElement($categoriesNames);
            product::create([
                'category_id' => $categories[$categoriesName],
                'name' => $faker->words('3', true),
                'price' => $faker->numberBetween(10000, 50000),
                'description' => $faker->sentence(),
            ]);
        }
    }
}
