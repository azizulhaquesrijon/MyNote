<?php
namespace Module\Product\database\seeds;
use Illuminate\Database\Seeder;
use Module\Product\Models\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getBrand() ?? [] as $getBrand)
        {
            Brand::firstOrCreate([
                'id'                            => $getBrand['id'],
                'name'                          => $getBrand['name'],
                'slug'                          => $getBrand['slug'],
            ], [
                'product_type_id'               => $getBrand['product_type_id'],
                'created_by'                    => 1,
            ]);
        }
    }

    private function getBrand()
    {
        return [
            [
                'id'                       => '1',
                'product_type_id'          => '1',
                'name'                     => 'Yellow',
                'slug'                     => 'yellow',
            ],
            [
                'id'                       => '2',
                'product_type_id'          => '1',
                'name'                     => 'Cats Eye',
                'slug'                     => 'cats-eye',
            ],
            [
                'id'                       => '3',
                'product_type_id'          => '1',
                'name'                     => 'Twelve',
                'slug'                     => 'twelve',
            ],
        ];
    }
}
