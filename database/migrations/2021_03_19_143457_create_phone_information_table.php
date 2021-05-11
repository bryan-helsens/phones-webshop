<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_information', function (Blueprint $table) {
            $table->id();

            // Product info
            $table->string("productType");
            $table->string("besturingssysteem");
            $table->string("processor");
            $table->float("processorsnelheid");
            $table->integer("geheugencapaciteit");
            $table->boolean("extern_geheugenslot");
            $table->string("type_extern_geheugen");
            $table->integer("werkgeheugen");
            $table->string("SIM_kaart");
            $table->boolean("dual_SIM");


            // Scherm
            $table->float("beeldschermgrootte");
            $table->float("resolutie_breedte");
            $table->float("resolutie_hoogte");

            // Camera
            $table->string("achtercamera");
            $table->integer("achtercamera_pixels");
            $table->string("voorcamera");
            $table->integer("voorcamera_pixels");
            $table->boolean("beeldstabilisator");
            $table->float("videoresolutie");
            $table->boolean("video_HD");

            // Functies
            $table->boolean("vingerafdruksensor");
            $table->boolean("spraakbesturing");
            $table->boolean("waterbestendig");
            $table->boolean("schokbestendig");
            $table->boolean("zaklamp");


            // Aansluiting
            $table->boolean("wifi");
            $table->string("netwerksnelheid");
            $table->boolean("GPS");
            $table->boolean("bluetooth");
            $table->float("bluetooth_versie");
            $table->boolean("NFC");
            $table->string("aansluitingen");


            // Behuizing
            $table->string("model");
            $table->float("breedte");
            $table->float("hoogte");
            $table->float("diepte");
            $table->float("gewicht");


            // Energievoorziening
            $table->integer("batterijcapaciteit");
            $table->boolean("vervangbare_batterij");
            $table->boolean("draadloos_opladen");

            // Algemene eigenschappen
            $table->string("verpakkingsinhoud");
            $table->integer("garantie");

            $table->unsignedBigInteger('products_id');



            $table->index('products_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phone_information');
    }
}
