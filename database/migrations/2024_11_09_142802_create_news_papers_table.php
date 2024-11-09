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
        Schema::create('news_papers', function (Blueprint $table) {
            $table->id();
            $table->string('np_title');
            $table->string('np_author');
            $table->string('np_genre');
            $table->text('np_description');
            $table->date('np_publish_date');
            $table->integer('np_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_papers');
    }
};
