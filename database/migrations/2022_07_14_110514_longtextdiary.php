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
        Schema::table('greendiary', function (Blueprint $table) {
            $table->longText('imgDescEN')->change();
            $table->longText('imgDescID')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('greendiary', function (Blueprint $table) {
            $table->string('imgDescEN')->change();
            $table->string('imgDescEN')->change();
        });
    }
};
