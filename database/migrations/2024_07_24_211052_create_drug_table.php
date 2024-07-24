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
        Schema::create('drug', function (Blueprint $table) {
            $table->id();
            $table->string('drug_id')->unique();
            $table->string('drug_name');
            $table->string('morning_dosage')->nullable();
            $table->time('morning_time')->nullable();;
            $table->string('afternoon_dosage')->nullable();;
            $table->time('afternoon_time')->nullable();;
            $table->string('evening_dosage')->nullable();;
            $table->time('evening_time')->nullable();;
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
        Schema::dropIfExists('drug');
    }
};
