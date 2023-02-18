<?php

namespace Module\Product\database\seeds;

use Illuminate\Database\Seeder;
// use Module\Product\database\seeds\ProductTypeTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        
            BrandTableSeeder::class,
       
            // ProductVariationTableSeeder::class,
            // AttributeProductVariationTableSeeder::class,
            // ProductTableSeeder::class,

        ]);
    }
}
