<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses',function(Blueprint $table)
        {
        $table->id();
        $table->string('adress');
        $table->integer('no');
        $table->string('satilik_mi');
        $table->integer('oda_sayisi');
        $table->integer('banyo_sayisi');
        $table->string('aciklama');
                    $table->timestamps();

        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
