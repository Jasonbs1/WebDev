<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLecturerIdToReservationsTable extends Migration
{
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->unsignedBigInteger('lecturer_id')->nullable();  // Add lecturer_id column

            // Add foreign key constraint
            $table->foreign('lecturer_id')->references('id')->on('lecturers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropForeign(['lecturer_id']);  // Drop foreign key constraint
            $table->dropColumn('lecturer_id');    // Drop lecturer_id column
        });
    }
}
