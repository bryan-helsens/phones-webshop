<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ImageSeeder extends Seeder
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

        DB::table('images')->insert([
            [
                "products_id" => 1,
                "image" => "/Samsung_Galaxy_A51/Samsung_Galaxy_A51_Back.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 1,
                "image" => "/Samsung_Galaxy_A51/Samsung_Galaxy_A51_Back2.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 1,
                "image" => "/Samsung_Galaxy_A51/Samsung_Galaxy_A51_Front.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 1,
                "image" => "/Samsung_Galaxy_A51/Samsung_Galaxy_A51_Left.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 1,
                "image" => "/Samsung_Galaxy_A51/Samsung_Galaxy_A51_Right.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 2,
                "image" => "/Alcatel_1SE/Alcatel_1SE_Back.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 2,
                "image" => "/Alcatel_1SE/Alcatel_1SE_Front.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 2,
                "image" => "/Alcatel_1SE/Alcatel_1SE_Right.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 2,
                "image" => "/Alcatel_1SE/Alcatel_1SE_Side.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 3,
                "image" => "/Apple_iPhone_SE/Apple_iPhone_SE_Back.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 3,
                "image" => "/Apple_iPhone_SE/Apple_iPhone_SE_Front.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 3,
                "image" => "/Apple_iPhone_SE/Apple_iPhone_SE_Sides.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 3,
                "image" => "/Apple_iPhone_SE/Apple_iPhone_SE_Colors.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],

            [
                "products_id" => 4,
                "image" => "/Samsung_Galaxy_A71/Samsung_Galaxy_A71_Back.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 4,
                "image" => "/Samsung_Galaxy_A71/Samsung_Galaxy_A71_Front.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 4,
                "image" => "/Samsung_Galaxy_A71/Samsung_Galaxy_A71_Front_Back.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 4,
                "image" => "/Samsung_Galaxy_A71/Samsung_Galaxy_A71_Left.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 4,
                "image" => "/Samsung_Galaxy_A71/Samsung_Galaxy_A71_Right.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 5,
                "image" => "/OnePlus_Nord_N100/OnePlus_Nord_N100_Front.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 5,
                "image" => "/OnePlus_Nord_N100/OnePlus_Nord_N100_Sides.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                "products_id" => 5,
                "image" => "/OnePlus_Nord_N100/OnePlus_Nord_N100_Top_Bottom.jpg",
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
        ]);
    }
}
