<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Color_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();

        DB::table('color_products')->insert([
            [
                "products_id" => 1,
                "color_id" => 2,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 1,
                "color_id" => 3,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 1,
                "color_id" => 1,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 2,
                "color_id" => 9,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 2,
                "color_id" => 6,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 3,
                "color_id" => 7,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 3,
                "color_id" => 3,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 3,
                "color_id" => 1,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 4,
                "color_id" => 2,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 4,
                "color_id" => 1,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 4,
                "color_id" => 4,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 5,
                "color_id" => 6,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
        ]);
    }
}
