<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhoneInformationSeeder extends Seeder
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

        DB::table('phone_information')->insert([
            [
                'productType' => 'Smartphone',
                "besturingssysteem" => 'Android 10',
                "processor" => 'Octa',
                "processorsnelheid" => 2.30,
                "geheugencapaciteit" => 128,
                "extern_geheugenslot" => true,
                "type_extern_geheugen" => 'Micro SD',
                "werkgeheugen" => 4,
                "SIM_kaart" => 'nanoSIM',
                "dual_SIM" => true,

                "beeldschermgrootte" => 16.5,
                "resolutie_breedte" => 1080,
                "resolutie_hoogte" => 2400,

                "achtercamera" => 'Quad Cam',
                "achtercamera_pixels" => 48,
                "voorcamera" => 'Single Cam',
                "voorcamera_pixels" => 32,
                "beeldstabilisator" => true,
                "videoresolutie" => 1080,
                "video_HD" => true,


                "vingerafdruksensor" => true,
                "spraakbesturing" => true,
                "waterbestendig" => false,
                "schokbestendig" => false,
                "zaklamp" => true,

                "wifi" => true,
                "netwerksnelheid" => '4G',
                "GPS" => true,
                "bluetooth" => true,
                "bluetooth_versie" => 5.0,
                "NFC" => true,
                "aansluitingen" => 'USB-C',

                "model" => 'Galaxy A51',
                "breedte" => 73.6,
                "hoogte" => 158.5,
                "diepte" => 7.9,
                "gewicht" => 172,

                "batterijcapaciteit" => 4000,
                "vervangbare_batterij" => false,
                "draadloos_opladen" => false,

                "verpakkingsinhoud" => 'Smartphone / Oortjes / USB-kabel / Netadapter / Handleiding',
                "garantie" => 2,


                "products_id" => 1,

                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'productType' => 'Smartphone',
                "besturingssysteem" => 'Android 10',
                "processor" => 'Octa',
                "processorsnelheid" => 1.60,
                "geheugencapaciteit" => 32,
                "extern_geheugenslot" => true,
                "type_extern_geheugen" => 'Micro SD',
                "werkgeheugen" => 3,
                "SIM_kaart" => 'nanoSIM',
                "dual_SIM" => true,

                "beeldschermgrootte" => 15.8,
                "resolutie_breedte" => 720,
                "resolutie_hoogte" => 1520,

                "achtercamera" => 'Quad Cam',
                "achtercamera_pixels" => 5,
                "voorcamera" => 'Single Cam',
                "voorcamera_pixels" => 13,
                "beeldstabilisator" => false,
                "videoresolutie" => 1080,
                "video_HD" => true,


                "vingerafdruksensor" => true,
                "spraakbesturing" => true,
                "waterbestendig" => false,
                "schokbestendig" => false,
                "zaklamp" => true,

                "wifi" => true,
                "netwerksnelheid" => '4G',
                "GPS" => true,
                "bluetooth" => true,
                "bluetooth_versie" => 4.2,
                "NFC" => false,
                "aansluitingen" => 'Micro-USB',

                "model" => 'Alcatel 1SE (2020)',
                "breedte" => 90,
                "hoogte" => 63,
                "diepte" => 168,
                "gewicht" => 350,

                "batterijcapaciteit" => 4000,
                "vervangbare_batterij" => false,
                "draadloos_opladen" => false,

                "verpakkingsinhoud" => 'Adapter | Oplaadkabel | Simkaartpin | Smartphone | Handleiding ',
                "garantie" => 2,


                "products_id" => 2,

                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'productType' => 'Smartphone',
                "besturingssysteem" => 'iOS 13',
                "processor" => 'A13 Bionic-chip + Neural Engine 3 Gen',
                "processorsnelheid" => 2.65,
                "geheugencapaciteit" => 128,
                "extern_geheugenslot" => false,
                "type_extern_geheugen" => '/',
                "werkgeheugen" => 3,
                "SIM_kaart" => 'nanoSIM',
                "dual_SIM" => false,

                "beeldschermgrootte" => 11.9,
                "resolutie_breedte" => 750,
                "resolutie_hoogte" => 1334,

                "achtercamera" => 'Single Cam',
                "achtercamera_pixels" => 12,
                "voorcamera" => 'Single Cam',
                "voorcamera_pixels" => 7,
                "beeldstabilisator" => false,
                "videoresolutie" => 2160,
                "video_HD" => true,


                "vingerafdruksensor" => true,
                "spraakbesturing" => true,
                "waterbestendig" => false,
                "schokbestendig" => false,
                "zaklamp" => true,

                "wifi" => true,
                "netwerksnelheid" => '4G',
                "GPS" => true,
                "bluetooth" => true,
                "bluetooth_versie" => 5.0,
                "NFC" => true,
                "aansluitingen" => 'Apple Lightning',

                "model" => 'Apple iPhone SE (2020)',
                "breedte" => 67.3,
                "hoogte" => 138.4,
                "diepte" => 7.3,
                "gewicht" => 148,

                "batterijcapaciteit" => 1821,
                "vervangbare_batterij" => false,
                "draadloos_opladen" => true,

                "verpakkingsinhoud" => 'iPhone SE | Lightning naar USB‑kabel | Handleiding',
                "garantie" => 2,


                "products_id" => 3,

                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'productType' => 'Smartphone',
                "besturingssysteem" => 'Android 10',
                "processor" => 'Octa Core',
                "processorsnelheid" => 2.20,
                "geheugencapaciteit" => 128,
                "extern_geheugenslot" => true,
                "type_extern_geheugen" => 'Micro SD',
                "werkgeheugen" => 6,
                "SIM_kaart" => 'nanoSIM',
                "dual_SIM" => true,

                "beeldschermgrootte" => 17,
                "resolutie_breedte" => 1080,
                "resolutie_hoogte" => 2400,

                "achtercamera" => 'Quad Cam',
                "achtercamera_pixels" => 64,
                "voorcamera" => 'Single Cam',
                "voorcamera_pixels" => 32,
                "beeldstabilisator" => true,
                "videoresolutie" => 2160,
                "video_HD" => true,


                "vingerafdruksensor" => true,
                "spraakbesturing" => true,
                "waterbestendig" => false,
                "schokbestendig" => false,
                "zaklamp" => true,

                "wifi" => true,
                "netwerksnelheid" => '4G',
                "GPS" => true,
                "bluetooth" => true,
                "bluetooth_versie" => 5.0,
                "NFC" => true,
                "aansluitingen" => 'USB-C',

                "model" => 'Galaxy A71',
                "breedte" => 76,
                "hoogte" => 163.6,
                "diepte" => 7.7,
                "gewicht" => 179,

                "batterijcapaciteit" => 4500,
                "vervangbare_batterij" => false,
                "draadloos_opladen" => false,

                "verpakkingsinhoud" => 'Smartphone / Lader / Handleiding',
                "garantie" => 2,


                "products_id" => 4,

                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'productType' => 'Smartphone',
                "besturingssysteem" => 'Android 10',
                "processor" => 'Octa Core',
                "processorsnelheid" => 2.20,
                "geheugencapaciteit" => 64,
                "extern_geheugenslot" => true,
                "type_extern_geheugen" => 'Micro SD',
                "werkgeheugen" => 4,
                "SIM_kaart" => 'nanoSIM',
                "dual_SIM" => true,

                "beeldschermgrootte" => 16.56,
                "resolutie_breedte" => 720,
                "resolutie_hoogte" => 1600,

                "achtercamera" => 'Quad Cam',
                "achtercamera_pixels" => 13,
                "voorcamera" => 'Single Cam',
                "voorcamera_pixels" => 8,
                "beeldstabilisator" => false,
                "videoresolutie" => 1080,
                "video_HD" => true,


                "vingerafdruksensor" => true,
                "spraakbesturing" => true,
                "waterbestendig" => true,
                "schokbestendig" => false,
                "zaklamp" => true,

                "wifi" => true,
                "netwerksnelheid" => '4G',
                "GPS" => true,
                "bluetooth" => true,
                "bluetooth_versie" => 5.0,
                "NFC" => false,
                "aansluitingen" => 'USB-C',

                "model" => 'OnePlus Nord N100',
                "breedte" => 75.1,
                "hoogte" => 14964.9,
                "diepte" => 8,
                "gewicht" => 188,

                "batterijcapaciteit" => 5000,
                "vervangbare_batterij" => false,
                "draadloos_opladen" => false,

                "verpakkingsinhoud" => 'Smartphone / Lader / Handleiding',
                "garantie" => 2,


                "products_id" => 5,

                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
        ]);
    }
}
