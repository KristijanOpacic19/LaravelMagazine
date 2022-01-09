<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('location')->unique();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('domain')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('location')->unique();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('domain')->unique();
        });
    }
}
