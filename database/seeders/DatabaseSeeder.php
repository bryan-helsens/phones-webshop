<?php

namespace Database\Seeders;

use App\Models\Product;
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
        // \App\Models\User::factory(10)->create();
        //Product::factory(10)->create();

        $this->call(ProductSeeder::class);
        $this->call(PhoneInformationSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(Color_ProductSeeder::class);
        $this->call(ImageSeeder::class);
    }
}
