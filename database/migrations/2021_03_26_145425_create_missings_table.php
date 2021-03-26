<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missings', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->date('birth_date');
            $table->unsignedTinyInteger('years');
            $table->float('floatdiprova',5,3);
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
        Schema::dropIfExists('missings');
    }
}
