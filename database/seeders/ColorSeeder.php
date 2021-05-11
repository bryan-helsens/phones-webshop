<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ColorSeeder extends Seeder
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

        DB::table('colors')->insert([
            [
                "color" => "Black",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "color" => "Blue",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "color" => "White",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "color" => "Silver",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "color" => "Gold",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "color" => "Grey",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "color" => "Red",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "color" => "Purple",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "color" => "Green",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
        ]);
    }
}
