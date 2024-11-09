<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('c_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('cd_title');
            $table->string('cd_author');
            $table->string('cd_genre');
            $table->text('cd_description');
            $table->date('cd_publish_date');
            $table->integer('cd_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_d_s');
    }
};
