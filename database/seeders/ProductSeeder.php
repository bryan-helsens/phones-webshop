<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
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

        DB::table('products')->insert([
            [
                'product_id' => uniqid("PR."),
                'name' => 'Samsung Galaxy A51',
                'brand' => 'Samsung',
                'description' => "Het Infinity-O Display van de A51 is het summum van visuele symmetrie. Nu kun je ononderbroken gamen, kijken, surfen en multitasken op een FHD+-breedbeeldscherm van 6,5 inch, en dat allemaal dankzij de Super AMOLED-technologie. Met een minimale rand en optimale benutting van de schermgrootte beleef je een ongekende smartphone-ervaring.",
                'image' => '/images/Smartphone/Samsung/Samsung_Galaxy_A51.jpg',
                'price' => 297.00,
                'stock' => 10,
                'rate' => 2,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'product_id' => uniqid("PR."),
                'name' => 'Alcatel 1SE',
                'brand' => 'Alcatel',
                'description' => "De Alcatel 1SE maakt de beste smartphone ervaring toegankelijk voor iedereen. Dankzij zijn grote 6,22 inch HD+ scherm, drievoudige camera, 32GB geheugen en een octa-core processor.",
                'image' => '/images/Smartphone/Alcatel/Alcatel_1SE.jpg',
                'price' => 90.00,
                'stock' => 20,
                'rate' => 4,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'product_id' => uniqid("PR."),
                'name' => 'Apple iPhone SE',
                'brand' => 'Apple',
                'description' => "De nieuwe iPhone SE, een budgetvriendelijke iPhone. Alhoewel de iPhone lijkt op een iPhone 8 is er aan de binnenkant veel werk verricht. Zo beschikt de iPhone over de nieuwste A13 Bionic chip en zijn er enkele aanpassingen gedaan aan de camera. ",
                'image' => '/images/Smartphone/Apple/Apple_iPhone_SE.jpg',
                'price' => 451.00,
                'stock' => 10,
                'rate' => 3.5,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'product_id' => uniqid("PR."),
                'name' => 'Samsung Galaxy A71',
                'brand' => 'Samsung',
                'description' => "De Samsung Galaxy A71 is de trotse opvolger van de populaire A70. Het nieuwe infinity-O display design van Samsung zorgt ervoor dat je meer Samsung Galaxy A71 overhoudt. Het toestel is eenvoudig te ontgrendelen door middel van de on-screen vingerafdrukscanner en heeft een verbeterende front camera van 32 megapixels. Verder heeft de Samsung Galaxy A71 4 hoge resolutie camera's op de achterkant voor verschillende doeleinden. Zo schiet je altijd en overal het mooiste beeldmateriaal.",
                'image' => '/images/Smartphone/Samsung/Samsung_Galaxy_A71.jpg',
                'price' => 297.00,
                'stock' => 10,
                'rate' => 2.5,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'product_id' => uniqid("PR."),
                'name' => 'OnePlus Nord N100',
                'brand' => 'OnePlus',
                'description' => "Zoeken naar een stopcontact terwijl je telefoon op 1% staat is nooit leuk. Daarom hebben we als voeding voor de N100 een grote 5.000 mAh batterij en een 18W snelle oplader meegeleverd zodat dat je altijd stroom hebt.",
                'image' => '/images/Smartphone/OnePlus/OnePlus_Nord_N100.jpg',
                'price' => 163.95,
                'stock' => 2,
                'rate' => 5,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ]
        ]);
    }
}
