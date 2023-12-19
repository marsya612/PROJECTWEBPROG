<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaejangGOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maejang_g_o_s', function (Blueprint $table) {
            $table->id();
            $table->string('nameProduct');
            $table->date('Releasedate');
            $table->string('Title');
            $table->string('Contents');
            $table->string('Manufacturer');
            $table->string('country');
            $table->string('period');
            $table->string('howtoOffer');
            $table->string('minimumSystemSpec');
            $table->string('quality');            
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
        Schema::dropIfExists('maejang_g_o_s');
    }
}
