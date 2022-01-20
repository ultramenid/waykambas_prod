<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Greendiary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('greendiary', function (Blueprint $table) {
            $table->id();
            $table->string('titleEN');
            $table->string('titleID');
            $table->string('slugID');
            $table->string('slugEN');
            $table->string('imgDescEN');
            $table->string('imgDescID');
            $table->string('img');
            $table->timestamp('publishdate')->nullable();
            $table->text('diaryEN');
            $table->text('diaryID');
            $table->integer('isActive');
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
        Schema::dropIfExists('greendiary');

    }
}
