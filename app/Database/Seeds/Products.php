<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
// use \Bezhanov\Faker\Provider;
use CodeIgniter\I18n\Time;

class Products extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'user_id' => '2',
                'category_id' => static::faker()->numberBetween(1, 4),
                'name' => $faker->productName,
                'description' => static::faker()->text,
                'price' => static::faker()->numberBetween(9999, 499000),
                'stock' => static::faker()->numberBetween(10, 100),
                'created_at' => new Time('now'),
                'updated_at' => new Time('now')
            ];
            $this->db->table('product')->insert($data);
        }
    }
}
