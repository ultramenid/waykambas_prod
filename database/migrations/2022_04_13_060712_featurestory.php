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
        Schema::create('featurestory', function (Blueprint $table) {
            $table->id();
            $table->string('titleID');
            $table->string('titleEN');
            $table->string('img');
            $table->string('imgDescID');
            $table->string('imgDescEN');
            $table->integer('isActive');
            $table->string('slug');
            $table->timestamp('publishdate')->nullable();
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
        Schema::dropIfExists('featurestory');
    }
};
