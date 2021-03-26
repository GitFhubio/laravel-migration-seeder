<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropSeveralColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn(['trophies','foundation_date','fans','ridicolousness']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->unsignedSmallInteger('trophies');
            $table->date('foundation_date');
            $table->unsignedMediumInteger('fans');
            $table->float('ridicolousness',3,1);
        });
    }
}
