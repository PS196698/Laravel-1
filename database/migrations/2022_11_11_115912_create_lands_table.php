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
        Schema::create('landen', function (Blueprint $table) {
            $table->id();
            $table->string('Naam', 45) -> nullable(false);
            $table->string('Landcode', 2) -> nullable(false);
            $table->string('MuntEenheid', 45) -> nullable(true);
            $table->string('Regeringsvorm', 45) -> nullable(true);
            $table->integer('inwonersaantal', 45) -> nullable(true);
            $table->string('staatshoofd', 45) -> nullable(true);
            $table->integer('oppervlakte', 45) -> nullable(true);
            $table->integer('budget', 45) -> nullable(true); 
        });
    
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
};