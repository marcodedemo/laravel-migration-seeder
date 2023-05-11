<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('Azienda', 50);
            $table->string('Stazione_partenza');
            $table->string('Stazione_arrivo');
            $table->time('Orario_partenza');
            $table->time('Orario_arrivo');
            $table->string('Codice_treno', 10);
            $table->tinyInteger('Numero_carrozze');
            $table->boolean('In_orario')->nullable();
            $table->boolean('Cancellato');

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
        Schema::dropIfExists('trains');
    }
};
